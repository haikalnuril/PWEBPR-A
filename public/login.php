<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Urielism | Login</title>

    <link rel="stylesheet" href="css/style.css">
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.css" rel="stylesheet" />
</head>
<body class="bg-[#BAFCA2] mx-auto">

    <div class="container flex justify-center items-center h-screen mx-auto relative">
        <div class="bg-purple-400 h-1/2 w-1/3 rounded-2xl border-4 border-black">
            <div class="w-full flex justify-center md:mt-0 = xl:p-0 dark:bg-gray-800 dark:border-gray-700">
                <div class="mt-12">
                    <h1 class="text-5xl font-extrabold text-center w-80 leading-tight tracking-tight text-gray-900 md:text-2xl dark:text-white">
                        Login
                    </h1>
                    <form class="mt-10 space-y-4 md:space-y-6" action="#">
                        <div>
                            <label for="email" class="block mb-2 text-xl font-extrabold text-gray-900 dark:text-white">Your email</label>
                            <input type="email" name="email" id="email" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="name@company.com" required="">
                        </div>
                        <div>
                            <label for="password" class="block mb-2 text-xl font-extrabold text-gray-900 dark:text-white">Password</label>
                            <input type="password" name="password" id="password" placeholder="••••••••" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required="">
                        </div>

                        <button type="submit" class="w-full text-white text-xl font-extrabold bg-[#F7BE38] border-t-2 border-l-2 border-b-8 border-r-8 border-black rounded-xl hover:bg-primary-700 focus:ring-4 focus:outline-none focus:ring-primary-300 px-5 py-2.5 text-center dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800">Login</button>
                        <p class="text-sm font-light text-gray-900 dark:text-gray-400">
                            Don't have an account yet? <a href="register.php" class="font-medium text-[#BAFCA2] hover:underline dark:text-primary-500">Register here</a>
                        </p>
                    </form>
                </div>
            </div>
            <div class="bg-[#F7BE38] absolute rounded-2xl  h-1/2 w-1/3 top-[275px] left-[560px] -z-10 border-t-4 border-l-2 border-b-8 border-r-8 border-black">
    
            </div>
        </div>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>
</body>
</html>