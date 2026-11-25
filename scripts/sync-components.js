const fs = require('fs');
const path = require('path');

const rootDir = path.resolve(__dirname, '..');
const navbarFile = fs.existsSync(path.join(rootDir, 'components', 'navbar.php')) ? 'navbar.php' : 'navbar.html';
const footerFile = fs.existsSync(path.join(rootDir, 'components', 'footer.php')) ? 'footer.php' : 'footer.html';
const navbarTemplate = fs.readFileSync(path.join(rootDir, 'components', navbarFile), 'utf8');
const footerTemplate = fs.readFileSync(path.join(rootDir, 'components', footerFile), 'utf8');

function getAllHtmlFiles(dir, fileList = []) {
    const entries = fs.readdirSync(dir, { withFileTypes: true });
    for (const entry of entries) {
        const fullPath = path.join(dir, entry.name);
        if (entry.isDirectory()) {
            if (['node_modules', '.git', 'components'].includes(entry.name)) continue;
            getAllHtmlFiles(fullPath, fileList);
        } else if (entry.isFile() && entry.name.endsWith('.html')) {
            fileList.push(fullPath);
        }
    }
    return fileList;
}

const htmlFiles = getAllHtmlFiles(rootDir);
let updatedCount = 0;

htmlFiles.forEach(filePath => {
    let content = fs.readFileSync(filePath, 'utf8');
    const relativePath = path.relative(rootDir, filePath).replace(/\\/g, '/');
    const segments = relativePath.split('/');
    const depth = segments.length - 1;
    const rootPrefix = depth === 0 ? '' : '../'.repeat(depth);

    // Prepare navbar and footer for this depth
    const cleanNavbar = navbarTemplate
        .replace(/<\?php[\s\S]*?\?>/g, '')
        .replace(/<\?=\s*\$root\s*\?>/g, rootPrefix)
        .replace(/\{\{ROOT\}\}/g, rootPrefix);
    const cleanFooter = footerTemplate
        .replace(/<\?php[\s\S]*?\?>/g, '')
        .replace(/\{\{ROOT\}\}/g, rootPrefix);
    const pageNavbar = cleanNavbar;
    const pageFooter = cleanFooter;

    let modified = false;

    // Replace navbar
    const navRegex = /<nav class="navbar navbar-expand-lg navbar-dark custom-navbar">[\s\S]*?<\/nav>/;
    if (navRegex.test(content)) {
        content = content.replace(navRegex, pageNavbar.trim());
        modified = true;
    }

    // Replace footer
    const footerRegex = /<footer\b[\s\S]*?<\/footer>/;
    if (footerRegex.test(content)) {
        content = content.replace(footerRegex, pageFooter.trim());
        modified = true;
    }

    if (modified) {
        fs.writeFileSync(filePath, content, 'utf8');
        updatedCount++;
        console.log(`[SYNCED] ${relativePath} (depth: ${depth})`);
    }
});

console.log(`\nSuccessfully synchronized components across ${updatedCount} HTML files.`);
