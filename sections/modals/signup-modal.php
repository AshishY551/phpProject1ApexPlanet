<!-- ✅ Modal version -->
<!-- 📝 Signup Modal -->
<div id="signupModal" class="fixed inset-0 z-50 hidden bg-black bg-opacity-50 flex items-center justify-center">
    <div class="bg-white dark:bg-gray-900 rounded-xl shadow-lg w-full max-w-md p-6 relative animate-fadeInDown">

        <!-- ❌ Close Button -->
        <button onclick="toggleModal('signupModal')" class="absolute top-2 right-2 text-gray-500 hover:text-red-500 text-xl">&times;</button>

        <h2 class="text-xl font-bold text-center text-gray-800 dark:text-white mb-4">📝 Sign Up</h2>

        <!-- Signup Form -->
        <form id="signupFormModal" class="space-y-4" method="POST">
            <input type="text" name="username" placeholder="👤 Username"
                class="w-full px-4 py-2 rounded-lg bg-gray-100 dark:bg-gray-800 text-gray-900 dark:text-white focus:ring-2 ring-indigo-500"
                required>

            <input type="email" name="email" placeholder="📧 Email"
                class="w-full px-4 py-2 rounded-lg bg-gray-100 dark:bg-gray-800 text-gray-900 dark:text-white focus:ring-2 ring-indigo-500"
                required>

            <input type="password" name="password" placeholder="🔐 Password"
                class="w-full px-4 py-2 rounded-lg bg-gray-100 dark:bg-gray-800 text-gray-900 dark:text-white focus:ring-2 ring-indigo-500"
                required>

            <input type="password" name="confirm_password" placeholder="🔒 Confirm Password"
                class="w-full px-4 py-2 rounded-lg bg-gray-100 dark:bg-gray-800 text-gray-900 dark:text-white focus:ring-2 ring-indigo-500"
                required>

            <button type="submit"
                class="w-full bg-indigo-600 hover:bg-indigo-700 text-white py-2 rounded-lg font-semibold transition duration-300">
                ✅ Register
            </button>
        </form>

        <p class="text-sm text-center text-gray-500 dark:text-gray-400 mt-4">
            Already have an account?
            <a href="#" onclick="toggleModal('signupModal'); toggleModal('loginModal')" class="text-indigo-600 hover:underline">Login</a>
        </p>
    </div>
</div>