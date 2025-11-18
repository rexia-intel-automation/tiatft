// /assets/js/form-handler.js

document.addEventListener('DOMContentLoaded', () => {
  const form = document.getElementById('founder-form');
  const submitBtn = document.getElementById('submit-btn');
  const statusEl = document.getElementById('form-status');

  if (!form || !submitBtn) return;

  form.addEventListener('submit', () => {
    submitBtn.disabled = true;
    submitBtn.textContent = 'Sending...';
    if (statusEl) {
      statusEl.textContent = '';
    }
  });
});
