<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign In</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            darkMode: 'class',
            theme: {
                extend: {
                    colors: {
                        primary: {
                            "50": "#f0f9ff",
                            "100": "#e0f2fe",
                            "200": "#bae6fd",
                            "300": "#7dd3fc",
                            "400": "#38bdf8",
                            "500": "#0ea5e9",
                            "600": "#0284c7",
                            "700": "#0369a1",
                            "800": "#075985",
                            "900": "#0c4a6e"
                        },
                        secondary: {
                            "50": "#fef3f2",
                            "100": "#fee2e2",
                            "200": "#fecaca",
                            "300": "#fda29a",
                            "400": "#fb7185",
                            "500": "#f43f5e",
                            "600": "#e11d48",
                            "700": "#be123c",
                            "800": "#9f1239",
                            "900": "#6c1d2c"
                        }
                    },
                    fontFamily: {
                        'body': ['Inter', 'ui-sans-serif', 'system-ui', '-apple-system', 'Segoe UI', 'Roboto', 'Helvetica Neue', 'Arial', 'Noto Sans', 'sans-serif']
                    }
                }
            }
        }
    </script>
    <style>
        .gradient-bg {
            background: linear-gradient(135deg, #0ea5e9 0%, #f43f5e 100%);
        }
        .button-shadow {
            transition: box-shadow 0.3s ease-in-out;
        }
        .button-shadow:hover {
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
        }
        .card {
            background: rgba(255, 255, 255, 0.8);
            backdrop-filter: blur(10px);
        }
    </style>
</head>
<body class="gradient-bg text-gray-900 dark:text-white">
<section class="min-h-screen flex items-center justify-center py-8">
    <div class="w-full max-w-md card shadow-lg rounded-lg p-8 border border-gray-200 dark:border-gray-700">
        <h1 class="text-4xl font-extrabold text-center text-primary-600 dark:text-white mb-6">Sign In</h1>
        <p class="text-center text-gray-600 dark:text-gray-300 mb-6">Please log in to your account to continue.</p>
        <form action="proses_login.php" method="post" class="space-y-6">
            <div>
                <label for="username" class="block text-sm font-medium text-gray-900 dark:text-white">Username</label>
                <input type="text" name="username" id="username" class="mt-1 w-full px-4 py-3 border border-gray-300 rounded-lg shadow-sm focus:ring-primary-500 focus:border-primary-500 dark:bg-gray-700 dark:text-white dark:border-gray-600" placeholder="Enter your username" required>
            </div>
            <div>
                <label for="password" class="block text-sm font-medium text-gray-900 dark:text-white">Password</label>
                <input type="password" name="password" id="password" class="mt-1 w-full px-4 py-3 border border-gray-300 rounded-lg shadow-sm focus:ring-primary-500 focus:border-primary-500 dark:bg-gray-700 dark:text-white dark:border-gray-600" placeholder="••••••••" required>
            </div>
            <div class="flex items-center justify-between">
                <div class="flex items-center">
                    <input id="remember" type="checkbox" class="w-4 h-4 border border-gray-300 rounded bg-gray-50 focus:ring-3 focus:ring-primary-300 dark:bg-gray-700 dark:border-gray-600 dark:focus:ring-primary-600">
                    <label for="remember" class="ml-2 text-sm text-gray-600 dark:text-gray-300">Remember me</label>
                </div>
                <a href="#" class="text-sm font-medium text-primary-600 hover:underline dark:text-primary-400">Forgot password?</a>
            </div>
            <button type="submit" name="login" class="w-full bg-primary-600 hover:bg-primary-700 text-white py-2.5 rounded-lg button-shadow focus:ring-4 focus:ring-primary-300 dark:focus:ring-primary-600">Sign In</button>
            <p class="text-sm text-center text-gray-500 dark:text-gray-400">
                Don’t have an account yet? <a href="register.php" class="font-medium text-primary-600 hover:underline dark:text-primary-400">Sign up</a>
            </p>
        </form>
    </div>
</section>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>
</html>
