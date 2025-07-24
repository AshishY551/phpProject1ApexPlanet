// ✅ Advanced auth.js with toast, animations, field control
// /public/assets/js/authentication/auth.js

function showToast(message, success = true) {
  const toast = document.getElementById("toast");
  if (!toast) return;

  toast.textContent = message;
  toast.classList.remove("hidden");
  toast.classList.remove("bg-red-500", "bg-green-500");
  toast.classList.add(success ? "bg-green-500" : "bg-red-500");

  setTimeout(() => {
    toast.classList.add("hidden");
  }, 4000);
}

document.addEventListener("DOMContentLoaded", () => {
  // 👁️ Toggle Password Visibility
  const togglePassword = document.getElementById("togglePassword");
  const passwordField = document.getElementById("password");

  if (togglePassword && passwordField) {
    togglePassword.addEventListener("click", () => {
      const type =
        passwordField.getAttribute("type") === "password" ? "text" : "password";
      passwordField.setAttribute("type", type);
      togglePassword.textContent = type === "password" ? "👁️" : "🙈";
    });
  }

  // 🔐 Handle Signup
  const signupForm = document.getElementById("signupForm");
  if (signupForm) {
    signupForm.addEventListener("submit", async (e) => {
      e.preventDefault();
      const submitBtn = signupForm.querySelector("button[type='submit']");
      submitBtn.disabled = true;
      submitBtn.textContent = "Registering...";

      const formData = new FormData(signupForm);
      try {
        const res = await fetch("/modules/users/register.php", {
          method: "POST",
          body: new URLSearchParams(formData),
        });
        const data = await res.json();
        showToast(data.message, data.success);
        if (data.success) signupForm.reset();
      } catch (err) {
        showToast("❌ Network error. Please try again.", false);
      }

      submitBtn.disabled = false;
      submitBtn.textContent = "🚀 Sign Up";
    });
  }

  // 🔐 Handle Login
  const loginForm = document.getElementById("loginForm");
  if (loginForm) {
    loginForm.addEventListener("submit", async (e) => {
      e.preventDefault();
      const submitBtn = loginForm.querySelector("button[type='submit']");
      submitBtn.disabled = true;
      submitBtn.textContent = "Signing in...";

      const formData = new FormData(loginForm);
      try {
        const res = await fetch("/modules/users/login.php", {
          method: "POST",
          body: new URLSearchParams(formData),
        });
        const data = await res.json();
        showToast(data.message, data.success);
        if (data.success) {
          setTimeout(() => window.location.href = "/views/dashboard.php", 1500);
        }
      } catch (err) {
        showToast("❌ Network error. Please try again.", false);
      }

      submitBtn.disabled = false;
      submitBtn.textContent = "🚀 Sign In";
    });
  }
});
