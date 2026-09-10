// Fitur Toggle Intip Password
document.addEventListener('DOMContentLoaded', function () {
  const passwordInput = document.getElementById('passwordInput');
  const togglePasswordIcon = document.getElementById('togglePasswordIcon');

  if (passwordInput && togglePasswordIcon) {
    togglePasswordIcon.addEventListener('click', function () {
      const isPassword = passwordInput.getAttribute('type') === 'password';
      passwordInput.setAttribute('type', isPassword ? 'text' : 'password');

      if (isPassword) {
        this.classList.replace('bi-eye', 'bi-eye-fill');
        this.style.color = '#0b556a';
      } else {
        this.classList.replace('bi-eye-fill', 'bi-eye');
        this.style.color = '#a8c3d8';
      }
    });
  }
});