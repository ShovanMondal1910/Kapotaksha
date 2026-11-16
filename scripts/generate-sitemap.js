const fs = require('fs');
const path = require('path');
const root = path.resolve(__dirname, '..');

function getAllHtml(dir, list = []) {
  fs.readdirSync(dir).forEach(file => {
    const full = path.join(dir, file);
    if (['node_modules', '.git', 'scripts', 'templates', 'components'].includes(file)) return;
    if (fs.statSync(full).isDirectory()) {
      getAllHtml(full, list);
    } else if (file.endsWith('.html')) {
      list.push(full);
    }
  });
  return list;
}

const htmlFiles = getAllHtml(root);
const domain = 'https://yourdomain.com'; // User replaces with their real domain

let xml = `<?xml version="1.0" encoding="UTF-8"?>\n<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">\n`;

htmlFiles.forEach(file => {
  let rel = path.relative(root, file).replace(/\\/g, '/');
  let priority = '0.8';
  let changefreq = 'weekly';

  if (rel === 'index.html') {
    priority = '1.0';
    changefreq = 'daily';
    rel = '';
  } else if (rel.includes('activities-and-news') || rel.includes('events')) {
    priority = '0.9';
    changefreq = 'weekly';
  }

  const loc = rel ? `${domain}/${rel}` : domain;
  xml += `  <url>\n    <loc>${loc}</loc>\n    <changefreq>${changefreq}</changefreq>\n    <priority>${priority}</priority>\n  </url>\n`;
});

xml += `</urlset>\n`;

fs.writeFileSync(path.join(root, 'sitemap.xml'), xml, 'utf8');
console.log(`Generated sitemap.xml with ${htmlFiles.length} pages.`);
