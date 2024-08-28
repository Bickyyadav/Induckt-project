document.addEventListener('DOMContentLoaded', function() {
    const form = document.getElementById('loginForm');
    const errorMessage = document.getElementById('error-message');

    form.addEventListener('submit', function(event) {
        const username = document.getElementById('username').value.trim();
        const password = document.getElementById('password').value.trim();

        if (!username || !password) {
            event.preventDefault();
            errorMessage.textContent = 'Both username and password are required!';
            errorMessage.style.display = 'block';
        } else {
            errorMessage.style.display = 'none';
        }
    });
});
