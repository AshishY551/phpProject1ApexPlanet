<!-- ✅ Modal version -->
<!-- 🔐 Login Modal -->
<div id="loginModal" class="fixed inset-0 z-50 hidden bg-black bg-opacity-50 flex items-center justify-center">
    <div class="bg-white dark:bg-gray-900 rounded-xl shadow-lg w-full max-w-md p-6 relative animate-fadeInDown">

        <!-- ❌ Close Button -->
        <button onclick="toggleModal('loginModal')" class="absolute top-2 right-2 text-gray-500 hover:text-red-500 text-xl">&times;</button>

        <h2 class="text-xl font-bold text-center text-gray-800 dark:text-white mb-4">🔐 Login</h2>

        <!-- Login Form -->
        <form id="loginFormModal" class="space-y-4" method="POST">
            <input type="email" name="email" placeholder="📧 Email"
                class="w-full px-4 py-2 rounded-lg bg-gray-100 dark:bg-gray-800 text-gray-900 dark:text-white focus:ring-2 ring-indigo-500"
                required>

            <div class="relative">
                <input type="password" name="password" id="modalPassword" placeholder="🔐 Password"
                    class="w-full px-4 py-2 rounded-lg bg-gray-100 dark:bg-gray-800 text-gray-900 dark:text-white focus:ring-2 ring-indigo-500"
                    required>
                <span id="toggleModalPassword" class="absolute right-3 top-2 cursor-pointer text-gray-600 dark:text-gray-300">👁️</span>
            </div>

            <button type="submit"
                class="w-full bg-indigo-600 hover:bg-indigo-700 text-white py-2 rounded-lg font-semibold transition duration-300">
                🚀 Sign In
            </button>
        </form>

        <p class="text-sm text-center text-gray-500 dark:text-gray-400 mt-4">
            Don’t have an account?
            <a href="#" onclick="toggleModal('loginModal'); toggleModal('signupModal')" class="text-indigo-600 hover:underline">Sign up</a>
        </p>
    </div>
</div>