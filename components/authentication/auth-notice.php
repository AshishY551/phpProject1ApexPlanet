<!-- components/auth-notice.php -->
<div id="authNotice"
    class="fixed bottom-6 right-6 z-50 w-[300px] max-w-full p-4 bg-white dark:bg-gray-900 border border-gray-300 dark:border-gray-700 rounded-xl shadow-xl transition transform duration-500 ease-in-out animate-fadeIn space-y-2">

    <div class="flex justify-between items-center">
        <h3 class="text-lg font-semibold text-gray-800 dark:text-white">👋 Welcome!</h3>
        <button onclick="dismissAuthNotice()" class="text-gray-400 hover:text-red-500 text-xl">&times;</button>
    </div>

    <p class="text-sm text-gray-600 dark:text-gray-300">
        Sign up or log in to unlock all features and save your progress.
    </p>

    <div class="flex justify-between gap-2 pt-2">
        <button onclick="toggleModal('loginModal')" class="w-full px-3 py-2 bg-indigo-600 hover:bg-indigo-700 text-white text-sm rounded-md">
            🔐 Login
        </button>
        <button onclick="toggleModal('signupModal')" class="w-full px-3 py-2 bg-green-600 hover:bg-green-700 text-white text-sm rounded-md">
            ✨ Sign Up
        </button>
    </div>
</div>