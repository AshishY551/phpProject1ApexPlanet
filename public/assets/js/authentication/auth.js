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
  // for debug
  console.log("auth.js loaded ✅");

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
        // const data = await res.json();
        // showToast(data.message, data.success);
        // if (data.success) signupForm.reset();
        const text = await res.text();
        let data;

        try {
          data = JSON.parse(text);
        } catch (err) {
          console.error("❌ Server response is not valid JSON:", text);
          showToast("❌ Server error: Unexpected response.", false);
          return;
        }

        // 👇 Main toast message (from server or fallback)
        showToast(data.message || "✅ Account created!", data.success);

        // 👇 Optional success flow
        if (data.success) {
          showToast("🎉 Signup successful! Redirecting to login...", true);
          setTimeout(() => {
            window.location.href = "/views/auth/login.php";
          }, 1500); // Wait 1.5 seconds so toast is visible
        }else {
          showToast(data.message, false);
          signupForm.reset();
        }


      } catch (err) {
        showToast("❌ Network error - 🔐SIGNUP. Please try again.", false);
      }

      submitBtn.disabled = false;
      submitBtn.textContent = "🚀 Sign Up";
    });
    
    // ✅ Add this line to prevent double-binding
    signupForm.dataset.listenerAttached = "true";
  }



  // 🔐 Handle Login
  // 🔐 Handle Login
  const loginForm = document.getElementById("loginForm");
  if (loginForm) {
      // 👇  Prevents silent double-submits
    if (loginForm.dataset.listenerAttached) return;
    loginForm.dataset.listenerAttached = "true";


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
        // const data = await res.json();
        // ✅ This prevents silent fails when some comment or HTML breaks the JSON.
        const text = await res.text();
        let data;

        try {
          data = JSON.parse(text);
        } catch (err) {
          console.error("❌ Server response is not valid JSON:", text);
          showToast("❌ Server error: Unexpected response.", false);
          return;
        }


        // showToast(data.message, data.success);
        showToast(data.message || "✅ Login successful!", data.success);
        if (data.success) {
          setTimeout(() => window.location.href = "/views/dashboard.php", 1500);
        }
      } catch (err) {
        showToast("❌ Network error - 🔐LOGIN. Please try again.", false);
      }

      submitBtn.disabled = false;
      submitBtn.textContent = "🚀 Sign In";
    });
  }
});





// 🔁 Reusable Submit Handler for Modal Forms
// 🔁 Reusable Submit Handler for Modal Forms
// 🔁 Reusable Submit Handler for Modal Forms
async function handleAuthForm(formId, url, successRedirect = null, buttonText = "Submit") {
  const form = document.getElementById(formId);
  if (!form) return;

  form.addEventListener("submit", async (e) => {
    e.preventDefault();
    const submitBtn = form.querySelector("button[type='submit']");
    submitBtn.disabled = true;
    submitBtn.textContent = "⏳ Processing...";

    const formData = new FormData(form);
    try {
      const res = await fetch(url, {
        method: "POST",
        body: new URLSearchParams(formData),
      });
      const data = await res.json();
      showToast(data.message, data.success);
      if (data.success) {
        form.reset();
        if (successRedirect) {
          setTimeout(() => window.location.href = successRedirect, 1500);
        }
      }
    } catch (err) {
      showToast("❌ Network error - 🔁MODAL FORM . Please try again.", false);
    }

    submitBtn.disabled = false;
    submitBtn.textContent = buttonText;
  });
}

// ✅ Modal-based signup
handleAuthForm("signupFormModal", "/modules/users/register.php", null, "✅ Register");

// ✅ Modal-based login
handleAuthForm("loginFormModal", "/modules/users/login.php", "/views/dashboard.php", "🚀 Sign In");
