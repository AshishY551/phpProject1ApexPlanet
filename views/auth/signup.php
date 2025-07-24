<?php
//  ✅ Full signup page 
// views/auth/signup.php

include_once __DIR__ . '/../../templates/header.php'; // optional
?>

<!-- 🌌 SIGNUP PAGE UI -->
<section class="min-h-screen flex items-center justify-center bg-gradient-to-r from-indigo-500 via-purple-500 to-pink-500 p-6">
    <div class="w-full max-w-lg bg-white dark:bg-gray-900 rounded-2xl shadow-2xl p-8 space-y-6 animate__animated animate__fadeInDown">

        <h2 class="text-3xl font-bold text-center text-gray-800 dark:text-white">🚀 Create Your Account</h2>
        <p class="text-center text-gray-600 dark:text-gray-400">Join our community and unlock exclusive features!</p>




        <!-- 🧾 Signup Form -->
        <form id="signupForm" class="space-y-5" method="POST" action="#">
            <div>
                <label class="block text-sm font-medium text-gray-700 dark:text-gray-300">👤 Full Name</label>
                <input type="text" name="fullname" class="w-full px-4 py-2 rounded-lg bg-gray-100 dark:bg-gray-800 text-gray-800 dark:text-white focus:ring-2 ring-indigo-500" placeholder="John Doe" required>
            </div>

            <div>
                <label class="block text-sm font-medium text-gray-700 dark:text-gray-300">📧 Email</label>
                <input type="email" name="email" class="w-full px-4 py-2 rounded-lg bg-gray-100 dark:bg-gray-800 text-gray-800 dark:text-white focus:ring-2 ring-indigo-500" placeholder="you@example.com" required>
            </div>

            <div>
                <label class="block text-sm font-medium text-gray-700 dark:text-gray-300">🔐 Password</label>
                <input type="password" name="password" class="w-full px-4 py-2 rounded-lg bg-gray-100 dark:bg-gray-800 text-gray-800 dark:text-white focus:ring-2 ring-indigo-500" placeholder="••••••••" required>
            </div>

            <div>
                <label class="block text-sm font-medium text-gray-700 dark:text-gray-300">🔒 Confirm Password</label>
                <input type="password" name="confirm_password" class="w-full px-4 py-2 rounded-lg bg-gray-100 dark:bg-gray-800 text-gray-800 dark:text-white focus:ring-2 ring-indigo-500" placeholder="••••••••" required>
            </div>

            <!-- 🌍 Future-ready (phone / terms / social etc) -->
            <div class="flex items-center">
                <input type="checkbox" id="terms" class="h-4 w-4 text-indigo-600" required>
                <label for="terms" class="ml-2 block text-sm text-gray-600 dark:text-gray-400">
                    I agree to the <a href="#" class="underline hover:text-indigo-500">Terms & Privacy</a>
                </label>
            </div>

            <button type="submit" class="w-full bg-indigo-600 text-white py-3 rounded-lg font-semibold hover:bg-indigo-700 transition duration-300 shadow-lg">
                ✅ Sign Up
            </button>

            <p class="text-sm text-center text-gray-500 dark:text-gray-400">
                Already have an account? <a href="/views/auth/login.php" class="text-indigo-600 hover:underline">Login here</a>
            </p>
        </form>


        <!-- 🌍 OAuth Providers -->
        <div class="flex items-center my-4">
            <hr class="flex-grow border-gray-300 dark:border-gray-600">
            <span class="px-4 text-sm text-gray-500 dark:text-gray-400">or</span>
            <hr class="flex-grow border-gray-300 dark:border-gray-600">
        </div>
        <div class="flex justify-center gap-4">
            <button class="bg-white dark:bg-gray-700 border border-gray-300 dark:border-gray-600 p-3 rounded-lg shadow hover:shadow-md transition">
                <img src="/public/assets/images/oauth/google.svg" alt="Google" class="h-5 w-5">
            </button>
            <button class="bg-white dark:bg-gray-700 border border-gray-300 dark:border-gray-600 p-3 rounded-lg shadow hover:shadow-md transition">
                <img src="/public/assets/images/oauth/facebook.svg" alt="Facebook" class="h-5 w-5">
            </button>
            <button class="bg-white dark:bg-gray-700 border border-gray-300 dark:border-gray-600 p-3 rounded-lg shadow hover:shadow-md transition">
                <img src="/public/assets/images/oauth/github.svg" alt="GitHub" class="h-5 w-5">
            </button>
            <button class="bg-white dark:bg-gray-700 border border-gray-300 dark:border-gray-600 p-3 rounded-lg shadow hover:shadow-md transition">
                <img src="/public/assets/images/oauth/passkey.svg" alt="Passkey" class="h-5 w-5">
            </button>
        </div>



    </div>
</section>

<?php
include_once __DIR__ . '/../../templates/footer.php'; // optional
?>