function showClass(value) {
    // Hide placeholder
    const placeholder = document.getElementById('placeholder');
    if (placeholder) {
        placeholder.style.display = value ? 'none' : 'block';
    }

    // Hide all class panels
    document.querySelectorAll('.class-panel').forEach(function(panel) {
        panel.classList.remove('active');
    });

    // Show selected class panel
    if (value) {
        const target = document.getElementById('class-' + value);
        if (target) {
            target.classList.add('active');
        }
    }
}
