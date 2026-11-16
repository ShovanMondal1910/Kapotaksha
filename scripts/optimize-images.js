const { execSync } = require('child_process');
const path = require('path');

const scriptPath = path.join(__dirname, 'optimize-images.ps1');

try {
    console.log('Running image optimization via PowerShell...');
    execSync(`powershell -ExecutionPolicy Bypass -File "${scriptPath}"`, { stdio: 'inherit' });
} catch (err) {
    console.error('Failed to run image optimization:', err.message);
    process.exit(1);
}
