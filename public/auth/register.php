<body class="bg-[#BAFCA2] mx-auto">

    <div class="container flex justify-center items-center h-screen mx-auto relative">
        <div class="bg-purple-400 h-2/3 w-1/3 rounded-2xl border-4 border-black">
            <div class="w-full flex justify-center md:mt-0 = xl:p-0 ">
                <div class="mt-5">
                    <h1 class="text-5xl font-extrabold leading-tight tracking-tight text-gray-900 md:text-2xl ">
                        Create account
                    </h1>
                    <form class="mt-10 space-y-4 md:space-y-6" action="<?= urlpath('register')?>" method="POST">
                        <div>
                            <label for="name" class="block mb-2 text-xl font-extrabold text-gray-900 ">Name</label>
                            <input type="text" name="name" id="name" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 " placeholder="name" required="">
                        </div>
                        <div>
                            <label for="email" class="block mb-2 text-xl font-extrabold text-gray-900 d">Your email</label>
                            <input type="email" name="email" id="email" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 " placeholder="name@company.com" required="">
                        </div>
                        <div>
                            <label for="password" class="block mb-2 text-xl font-extrabold text-gray-900 ">Password</label>
                            <input type="password" name="password" id="password" placeholder="••••••••" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 " required="">
                        </div>
                        <div>
                            <label for="confirm-password" class="block mb-2 text-xl font-extrabold text-gray-900 ">Confirm password</label>
                            <input type="password" name="confirm-password" id="confirm-password" placeholder="••••••••" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 " required="">
                        </div>
                        <button type="submit" class="w-full text-white text-xl font-extrabold bg-[#F7BE38] border-t-2 border-l-2 border-b-8 border-r-8 border-black rounded-xl hover:bg-primary-700 focus:ring-4 focus:outline-none focus:ring-primary-300 px-5 py-2.5 text-center">Create an account</button>
                        <p class="text-sm font-light text-gray-900 ">
                            Already have an account? <a href="login.php" class="font-medium text-[#BAFCA2] hover:underline ">Login here</a>
                        </p>
                    </form>
                </div>
            </div>
        </div>
        <div class="bg-[#F7BE38] absolute rounded-2xl  h-2/3 w-1/3 top-[204px] left-[560px] -z-10 border-t-4 border-l-2 border-b-8 border-r-8 border-black">

        </div>
    </div>
</body>
