// ✅ auth-notice.js
document.addEventListener("DOMContentLoaded", () => {
  if (!sessionStorage.getItem("authNoticeShown")) {
    setTimeout(() => {
      const banner = document.getElementById("authNotice");
      if (banner) banner.classList.remove("hidden");
      sessionStorage.setItem("authNoticeShown", "true");
    }, 2000);
  }
  // 🚀 Init modal signup form handler
  handleModalSignup(); // ✅
  handleModalLogin();  // ✅
});


// dismissAuthNotice()
function dismissAuthNotice() {
  const banner = document.getElementById("authNotice");
  if (banner) banner.classList.add("hidden");
}

// ✅ 1.anywhere near the top (after dismissAuthNotice() is fine):
function showToast(message, success = true) {
  const toast = document.getElementById("toast");
  if (!toast) return;

  toast.textContent = message;
  toast.classList.remove("hidden", "bg-green-500", "bg-red-500");
  toast.classList.add(success ? "bg-green-500" : "bg-red-500");

  setTimeout(() => {
    toast.classList.add("hidden");
  }, 4000);
}



// Toggle
function toggleModal(id) {
  const modal = document.getElementById(id);
  if (modal) modal.classList.toggle("hidden");
}


// ✅ 2. Below toggleModal() function:
// 🔁 Modal-based signup handler
// 🔁 Modal-based signup handler
// 🔁 Modal-based signup handler
async function handleModalSignup() {
  const form = document.getElementById("signupFormModal");
  if (!form) return;

  form.addEventListener("submit", async (e) => {
    e.preventDefault();

    const submitBtn = form.querySelector("button[type='submit']");
    submitBtn.disabled = true;
    submitBtn.textContent = "Registering...";

    const formData = new FormData(form);
    try {
      const res = await fetch("/modules/users/register.php", {
        method: "POST",
        body: new URLSearchParams(formData),
      });

      const data = await res.json();
      showToast(data.message, data.success);

      if (data.success) {
        form.reset();
        const modal = form.closest(".fixed");
        if (modal) {
          modal.classList.add("fade-out");
          setTimeout(() => {
            modal.classList.add("hidden");
            modal.classList.remove("fade-out");
          }, 400);
        }
      }
    } catch (err) {
      showToast("❌ Network error - modal signup.", false);
    }

    submitBtn.disabled = false;
    submitBtn.textContent = "✅ Register";
  });
  // ✅ Add this line to prevent double-binding in the future
  form.dataset.listenerAttached = "true";
}


// 🔁 Modal-based LOGIN handler
// 🔁 Modal-based LOGIN handler
// 🔁 Modal-based LOGIN handler
// 🔁 Modal-based login handler
async function handleModalLogin() {
  const form = document.getElementById("loginFormModal");
  if (!form || form.dataset.listenerAttached) return;

  form.addEventListener("submit", async (e) => {
    e.preventDefault();

    const submitBtn = form.querySelector("button[type='submit']");
    submitBtn.disabled = true;
    submitBtn.textContent = "Signing in...";

    const formData = new FormData(form);
    try {
      const res = await fetch("/modules/users/login.php", {
        method: "POST",
        body: new URLSearchParams(formData),
      });

      const data = await res.json();
      showToast(data.message, data.success);

      if (data.success) {
        form.reset();
        const modal = form.closest(".fixed");
        if (modal) {
          modal.classList.add("fade-out");
          setTimeout(() => {
            modal.classList.add("hidden");
            modal.classList.remove("fade-out");
          }, 400);
        }
        setTimeout(() => {
          window.location.href = "/views/dashboard.php";
        }, 1500);
      }
    } catch (err) {
      showToast("❌ Network error - modal login.", false);
    }

    submitBtn.disabled = false;
    submitBtn.textContent = "🚀 Sign In";
  });

  form.dataset.listenerAttached = "true"; // Prevent double-binding
}
