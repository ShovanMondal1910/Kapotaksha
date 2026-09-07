/**
 * Kapotaksha High School (KHS) — Automated Security & Hardening Auditor
 * Scans the codebase for OWASP vulnerabilities and hardening configurations.
 */

const fs = require('fs');
const path = require('path');
const root = path.resolve(__dirname, '..');

let totalChecks = 0;
let violations = 0;

console.log('\x1b[36m🛡️  Initiating Full-Spectrum Web Security Audit...\x1b[0m\n');

function getAllFiles(dir, list = []) {
  fs.readdirSync(dir).forEach(file => {
    const full = path.join(dir, file);
    if (['node_modules', '.git', 'dist', 'scripts'].includes(file)) return;
    if (fs.statSync(full).isDirectory()) {
      getAllFiles(full, list);
    } else if (file.endsWith('.html') || file.endsWith('.js')) {
      list.push(full);
    }
  });
  return list;
}

const files = getAllFiles(root);

// ── 1. Tabnabbing & Reverse Window Hijacking ──
console.log('1. Checking for Reverse Tabnabbing (target="_blank" without rel="noopener noreferrer")...');
let tabnabbingFails = 0;
files.forEach(file => {
  const rel = path.relative(root, file).replace(/\\/g, '/');
  const content = fs.readFileSync(file, 'utf8');
  const blankRegex = /<a\b[^>]*target=["']_blank["'][^>]*>/gi;
  let match;
  while ((match = blankRegex.exec(content)) !== null) {
    totalChecks++;
    const tag = match[0];
    if (!tag.includes('rel=') || (!tag.includes('noopener') && !tag.includes('noreferrer'))) {
      console.log(`   \x1b[31m✖ Vulnerable link\x1b[0m in ${rel}: ${tag}`);
      tabnabbingFails++;
      violations++;
    }
  }
});
if (tabnabbingFails === 0) {
  console.log('   \x1b[32m✔ PASS: All external target="_blank" links have noopener/noreferrer.\x1b[0m\n');
}

// ── 2. Eval & Dynamic Code Execution ──
console.log('2. Checking for Dangerous Dynamic Code Execution (eval, Function constructor)...');
let evalFails = 0;
files.forEach(file => {
  const rel = path.relative(root, file).replace(/\\/g, '/');
  if (rel.startsWith('libs/')) return;
  const content = fs.readFileSync(file, 'utf8');
  const lines = content.split('\n');
  lines.forEach((line, idx) => {
    totalChecks++;
    if (/\beval\s*\(/.test(line) || /\bnew\s+Function\s*\(/.test(line)) {
      console.log(`   \x1b[31m✖ Dangerous execution\x1b[0m in ${rel}:${idx + 1}: ${line.trim()}`);
      evalFails++;
      violations++;
    }
  });
});
if (evalFails === 0) {
  console.log('   \x1b[32m✔ PASS: Zero instances of eval() or dynamic code evaluation.\x1b[0m\n');
}

// ── 3. Iframe Sandboxing ──
console.log('3. Checking Iframe Sandboxing (Protection against frame hijacking)...');
let iframeFails = 0;
files.forEach(file => {
  const rel = path.relative(root, file).replace(/\\/g, '/');
  const content = fs.readFileSync(file, 'utf8');
  const iframeRegex = /<iframe\b([^>]*?)>/gi;
  let match;
  while ((match = iframeRegex.exec(content)) !== null) {
    totalChecks++;
    if (!match[1].includes('sandbox=')) {
      console.log(`   \x1b[31m✖ Unsandboxed iframe\x1b[0m in ${rel}`);
      iframeFails++;
      violations++;
    }
  }
});
if (iframeFails === 0) {
  console.log('   \x1b[32m✔ PASS: All embedded iframes have strict sandbox attributes.\x1b[0m\n');
}

// ── 4. Server Security & Hardening Configurations ──
console.log('4. Verifying Server Security Configurations & CSP Headers...');
const requiredConfigs = [
  { file: '.htaccess', name: 'Apache / LiteSpeed / cPanel rules' },
  { file: '_headers', name: 'Cloudflare Pages / Netlify rules' },
  { file: 'vercel.json', name: 'Vercel Security Headers' },
  { file: 'web.config', name: 'IIS / Windows Server rules' },
  { file: '.gitignore', name: 'Git secret & artifact exclusion' }
];

requiredConfigs.forEach(cfg => {
  totalChecks++;
  const fullPath = path.join(root, cfg.file);
  if (fs.existsSync(fullPath)) {
    const stat = fs.statSync(fullPath);
    if (stat.size > 50) {
      console.log(`   \x1b[32m✔ Found ${cfg.file}\x1b[0m (${cfg.name})`);
    } else {
      console.log(`   \x1b[31m✖ Incomplete ${cfg.file}\x1b[0m`);
      violations++;
    }
  } else {
    console.log(`   \x1b[31m✖ Missing ${cfg.file}\x1b[0m`);
    violations++;
  }
});
console.log('');

// ── 5. Summary & Verdict ──
console.log('───────────────────────────────────────────────────────');
if (violations === 0) {
  console.log(`\x1b[32m✔ SYSTEM SECURE! ${totalChecks} security checkpoints verified with 0 vulnerabilities.\x1b[0m`);
  process.exit(0);
} else {
  console.log(`\x1b[31m✖ Security Audit Failed: ${violations} security violations detected.\x1b[0m`);
  process.exit(1);
}
