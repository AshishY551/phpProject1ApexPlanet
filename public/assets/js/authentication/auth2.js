// ✅ Handles both signup & login UI logic
// /public/assets/js/authentication/auth.js

document.addEventListener('DOMContentLoaded', () => {
  // Handle Signup form
  const signupForm = document.getElementById('signupForm');
  if (signupForm) {
    signupForm.addEventListener('submit', async (e) => {
      e.preventDefault();
      const formData = new FormData(signupForm);
      const submitBtn = signupForm.querySelector('button[type="submit"]');
      submitBtn.disabled = true;
      submitBtn.textContent = "Registering...";

      try {
        const res = await fetch('/modules/users/register.php', {
          method: 'POST',
          body: formData
        });
        const data = await res.json();

        if (data.success) {
          alert(data.message);
          signupForm.reset();
        } else {
          alert(data.message || "❌ Registration failed.");
        }
      } catch (err) {
        console.error(err);
        alert("❌ Network error.");
      } finally {
        submitBtn.disabled = false;
        submitBtn.textContent = "🚀 Sign Up";
      }
    });
  }

  // Handle Login form
  const loginForm = document.getElementById('loginForm');
  if (loginForm) {
    loginForm.addEventListener('submit', async (e) => {
      e.preventDefault();
      const formData = new FormData(loginForm);
      const submitBtn = loginForm.querySelector('button[type="submit"]');
      submitBtn.disabled = true;
      submitBtn.textContent = "Signing in...";

      try {
        const res = await fetch('/modules/users/login.php', {
          method: 'POST',
          body: formData
        });
        const data = await res.json();

        if (data.success) {
          alert(data.message);
          window.location.href = "/views/dashboard.php";
        } else {
          alert(data.message || "❌ Login failed.");
        }
      } catch (err) {
        console.error(err);
        alert("❌ Network error.");
      } finally {
        submitBtn.disabled = false;
        submitBtn.textContent = "🚀 Sign In";
      }
    });
  }
});
