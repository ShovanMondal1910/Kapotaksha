const fs = require('fs');
const path = require('path');

const rootDir = path.resolve(__dirname, '..');
let errorCount = 0;
let totalChecked = 0;

function getAllHtmlFiles(dir, fileList = []) {
  const files = fs.readdirSync(dir);
  for (const file of files) {
    const fullPath = path.join(dir, file);
    if (['node_modules', '.git', 'dist'].includes(file)) continue;
    const stat = fs.statSync(fullPath);
    if (stat.isDirectory()) {
      getAllHtmlFiles(fullPath, fileList);
    } else if (file.endsWith('.html')) {
      fileList.push(fullPath);
    }
  }
  return fileList;
}

const htmlFiles = getAllHtmlFiles(rootDir);
console.log(`\x1b[36m🔍 Scanning ${htmlFiles.length} HTML files for link integrity...\x1b[0m\n`);

const linkRegex = /(?:href|src)=["']([^"']+)["']/g;

for (const filePath of htmlFiles) {
  let content = fs.readFileSync(filePath, 'utf8');
  const relFilePath = path.relative(rootDir, filePath);
  const dir = path.dirname(filePath);

  // Strip script blocks and HTML comments so JS template literals aren't flagged
  content = content.replace(/<script\b[^>]*>([\s\S]*?)<\/script>/gi, '');
  content = content.replace(/<!--[\s\S]*?-->/g, '');

  let match;


  while ((match = linkRegex.exec(content)) !== null) {
    let rawUrl = match[1].trim();

    // Skip external links, data URLs, tel, mailto, empty, or pure hash
    if (
      !rawUrl ||
      rawUrl === '#' ||
      rawUrl.startsWith('http://') ||
      rawUrl.startsWith('https://') ||
      rawUrl.startsWith('mailto:') ||
      rawUrl.startsWith('tel:') ||
      rawUrl.startsWith('data:') ||
      rawUrl.startsWith('javascript:')
    ) {
      continue;
    }

    totalChecked++;

    // Strip anchor and query parameters
    const [cleanUrl] = rawUrl.split('#')[0].split('?');
    if (!cleanUrl) continue;

    // Resolve target path
    let targetPath;
    if (cleanUrl.startsWith('/')) {
      targetPath = path.join(rootDir, cleanUrl.slice(1));
    } else {
      targetPath = path.resolve(dir, cleanUrl);
    }

    if (!fs.existsSync(targetPath)) {
      console.log(`\x1b[31m❌ Broken Reference\x1b[0m in \x1b[33m${relFilePath}\x1b[0m:`);
      console.log(`   Points to: \x1b[37m${rawUrl}\x1b[0m`);
      console.log(`   Resolved:  \x1b[90m${path.relative(rootDir, targetPath)}\x1b[0m\n`);
      errorCount++;
    }
  }
}

console.log('───────────────────────────────────────────────────────');
if (errorCount === 0) {
  console.log(`\x1b[32m✔ All clear! ${totalChecked} references verified with 0 broken links.\x1b[0m`);
  process.exit(0);
} else {
  console.log(`\x1b[31m✖ Found ${errorCount} broken references out of ${totalChecked} links checked.\x1b[0m`);
  process.exit(1);
}
