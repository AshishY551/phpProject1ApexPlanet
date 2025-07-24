<!-- <!DOCTYPE html>
<html lang="en"> -->
<!-- ✅ Full login page -->

<?php include __DIR__ . '/../../templates/header.php'; ?>


<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Login | ApexPlanet</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="/public/assets/css/authentication/auth.css">
</head>


<!-- <body class="bg-gradient-to-br from-indigo-500 via-purple-200 to-pink-400 dark:from-gray-900 dark:via-gray-800 dark:to-gray-900 min-h-screen flex items-center justify-center px-4"> -->

<!-- <body class="relative min-h-screen flex items-center justify-center px-4 bg-gradient-to-br from-[#e0eafc] to-[#cfdef3] dark:from-gray-900 dark:to-gray-800 overflow-hidden"> -->
<!-- 🌟 Background Animation -->
<!-- <div class="absolute inset-0 w-full h-full bg-[radial-gradient(ellipse_at_top_right,_var(--tw-gradient-stops))] from-indigo-200 via-purple-200 to-pink-200 opacity-30 dark:opacity-10 animate-pulse"> -->


<section class="bg-gradient-to-br from-indigo-500 via-purple-200 to-pink-400 dark:from-gray-900 dark:via-gray-800 dark:to-gray-900 min-h-screen flex items-center justify-center px-4">
    <div class="w-full max-w-md bg-white dark:bg-gray-900 rounded-2xl shadow-lg p-8 space-y-6 animate-fadeIn">
        <div class="text-center">
            <h2 class="text-2xl font-bold text-gray-800 dark:text-white">🔐 Login to Your Account</h2>
            <p class="text-sm text-gray-500 dark:text-gray-400 mt-1">Enter your credentials to continue</p>
        </div>



        <form id="loginForm" class="space-y-4" method="POST">
            <div>
                <label for="email" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Email</label>
                <input type="email" name="email" id="email" required
                    class="mt-1 block w-full px-4 py-2 border border-gray-300 dark:border-gray-700 rounded-lg shadow-sm focus:ring-indigo-500 focus:border-indigo-500 dark:bg-gray-800 dark:text-white">
            </div>

            <div>
                <label for="password" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Password</label>
                <input type="password" name="password" id="password" required
                    class="mt-1 block w-full px-4 py-2 border border-gray-300 dark:border-gray-700 rounded-lg shadow-sm focus:ring-indigo-500 focus:border-indigo-500 dark:bg-gray-800 dark:text-white">
            </div>

            <div class="flex items-center justify-between">
                <label class="flex items-center text-sm text-gray-600 dark:text-gray-400">
                    <input type="checkbox" class="form-checkbox h-4 w-4 text-indigo-600 dark:text-indigo-400">
                    <span class="ml-2">Remember me</span>
                </label>
                <a href="#" class="text-sm text-indigo-600 hover:underline dark:text-indigo-400">Forgot password?</a>
            </div>

            <button type="submit"
                class="w-full py-2 px-4 bg-indigo-600 hover:bg-indigo-700 text-white font-semibold rounded-lg shadow-md transition duration-300">
                🚀 Sign In
            </button>
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
                <img src="/public/assets/images/oauth/microsoft.svg" alt="Microsoft" class="h-5 w-5">
            </button>
            <button class="bg-white dark:bg-gray-700 border border-gray-300 dark:border-gray-600 p-3 rounded-lg shadow hover:shadow-md transition">
                <img src="/public/assets/images/oauth/passkey.png" alt="Passkey" class="h-5 w-5">
            </button>
        </div>



        <p class="text-sm text-center text-gray-500 dark:text-gray-400">
            Don’t have an account?
            <a href="/views/auth/signup.php" class="text-indigo-600 hover:underline dark:text-indigo-400">Sign up</a>
        </p>
    </div>
</section> <!-- </div> -->
<!-- <script src="/public/assets/js/authentication/auth.js" defer></script>
</body>

</html> -->

<script src="/public/assets/js/authentication/auth.js" defer></script>
</body>
<?php include __DIR__ . '/../../templates/footer.php'; ?>