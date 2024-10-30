document.addEventListener('DOMContentLoaded', () => {
    const formTitle = document.getElementById('form-title');
    const authForm = document.getElementById('auth-form');
    const phoneInput = document.getElementById('phone');
    const emailInput = document.getElementById('email');
    const actionInput = document.getElementById('action');
    const toggleLink = document.getElementById('toggle-link');
    const submitBtn = document.getElementById('submit-btn');
    const toggleText = document.getElementById('toggle-text');
    
    let isLogin = true;

    toggleLink.addEventListener('click', (e) => {
        e.preventDefault();
        if (isLogin) {
            formTitle.textContent = 'Sign Up';
            emailInput.style.display = 'block';
            emailInput.required = true;
            actionInput.value = 'signup';
            submitBtn.textContent = 'Sign Up';
            toggleText.innerHTML = 'Already have an account? ';
            toggleLink.textContent = 'Login';
            isLogin = false;
        } else {
            formTitle.textContent = 'Login';
            emailInput.style.display = 'none';
            emailInput.required = false;
            actionInput.value = 'login';
            submitBtn.textContent = 'Login';
            toggleText.innerHTML = 'Don\'t have an account? ';
            toggleLink.textContent = 'Sign Up';
            isLogin = true;
        }
        toggleText.appendChild(toggleLink);
    });
});
