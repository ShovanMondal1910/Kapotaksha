const fs = require('fs');
const path = require('path');
const { execSync } = require('child_process');

const rootDir = path.resolve(__dirname, '..');
const distDir = path.join(rootDir, 'dist');

console.log('🚀 Starting Netlify static production build...');

// 1. Clean & create dist directory
if (fs.existsSync(distDir)) {
  fs.rmSync(distDir, { recursive: true, force: true });
}
fs.mkdirSync(distDir, { recursive: true });

// 2. Helper to copy directories recursively
function copyDirSync(src, dest) {
  if (!fs.existsSync(src)) return;
  fs.mkdirSync(dest, { recursive: true });
  const entries = fs.readdirSync(src, { withFileTypes: true });

  for (const entry of entries) {
    const srcPath = path.join(src, entry.name);
    const destPath = path.join(dest, entry.name);
    if (entry.isDirectory()) {
      copyDirSync(srcPath, destPath);
    } else {
      fs.copyFileSync(srcPath, destPath);
    }
  }
}

// 3. Copy static asset directories
const assetDirs = [
  'css',
  'js',
  'libs',
  'photos',
  'about/css',
  'about/js',
  'activities-and-news/css',
  'activities-and-news/js',
  'activities-and-news/files',
  'events/css',
  'events/js',
  'Media/css',
  'Media/events/css',
  'people/css',
  'people/js'
];

assetDirs.forEach(dir => {
  const src = path.join(rootDir, dir);
  const dest = path.join(distDir, dir);
  if (fs.existsSync(src)) {
    copyDirSync(src, dest);
    console.log(`📁 Copied assets: ${dir}`);
  }
});

// Copy root static files
const staticFiles = ['sitemap.xml', '_headers', 'robots.txt'];
staticFiles.forEach(file => {
  const src = path.join(rootDir, file);
  if (fs.existsSync(src)) {
    fs.copyFileSync(src, path.join(distDir, file));
    console.log(`📄 Copied static file: ${file}`);
  }
});

// 4. Find all PHP files to compile into HTML
function findPhpFiles(dir, list = []) {
  const entries = fs.readdirSync(dir, { withFileTypes: true });
  for (const entry of entries) {
    const fullPath = path.join(dir, entry.name);
    const relPath = path.relative(rootDir, fullPath);

    if (['node_modules', '.git', 'dist', 'components', 'scripts', 'scratch'].includes(entry.name)) {
      continue;
    }

    if (entry.isDirectory()) {
      findPhpFiles(fullPath, list);
    } else if (entry.name.endsWith('.php')) {
      list.push(fullPath);
    }
  }
  return list;
}

const phpFiles = findPhpFiles(rootDir);
console.log(`\n⚙️ Compiling ${phpFiles.length} PHP pages to static HTML...`);

let compiledCount = 0;
phpFiles.forEach(phpFile => {
  const relPath = path.relative(rootDir, phpFile);
  const fileDir = path.dirname(phpFile);

  try {
    // Execute PHP to capture rendered HTML output
    const renderedHtml = execSync(`php "${phpFile}"`, {
      cwd: fileDir,
      maxBuffer: 10 * 1024 * 1024,
      encoding: 'utf8'
    });

    const targetBase = path.join(distDir, relPath.replace(/\.php$/, ''));
    const targetDir = path.dirname(targetBase);
    fs.mkdirSync(targetDir, { recursive: true });

    // Save as .html (for standard Netlify clean URLs & static hosting)
    fs.writeFileSync(`${targetBase}.html`, renderedHtml, 'utf8');

    // Also save as .php (so requests to explicit .php URLs work seamlessly)
    fs.writeFileSync(`${targetBase}.php`, renderedHtml, 'utf8');

    // Special case: 404 page for Netlify
    if (relPath === '404.php') {
      fs.writeFileSync(path.join(distDir, '404.html'), renderedHtml, 'utf8');
    }

    compiledCount++;
  } catch (err) {
    console.error(`❌ Failed to compile ${relPath}:`, err.message);
    process.exit(1);
  }
});

console.log(`✔ Successfully compiled ${compiledCount} pages into dist/\n`);

// 5. Generate Netlify _redirects file
const redirectsContent = `# Netlify Redirects & Clean URLs
/index.html   /   301
/index.php    /   301

# Custom 404
/*   /404.html   404
`;

fs.writeFileSync(path.join(distDir, '_redirects'), redirectsContent, 'utf8');
console.log('📄 Generated dist/_redirects');

console.log('\n✨ Build complete! The "dist" folder is ready for Netlify deployment.');
