// Dark Theme Toggle
document.addEventListener('DOMContentLoaded', function () {
    const toggleButton = document.getElementById('theme-toggle');
    
    // Toggle dark theme on button click
    toggleButton.addEventListener('click', () => {
        document.body.classList.toggle('dark-theme');
    });
});
