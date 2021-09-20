<section>
    <script src="./view/js/ajax.js"></script>
    <div class="flex my-10 justify-center">
        <form id="registration" class="max-w-screen-sm bg-white border shadow-2xl border-opacity-20 border-black rounded py-10 xl:px-20 px-5 mx-5 text-parsOrange">
            <div class="mb-4">
                <span class="text-3xl">Register</span>
            </div>
            <div class="my-4">
                <span>Username</span>
                <input type="text" name="username" id="" class="w-full bg-gray-600 border-parsOrange border-2  rounded p-1 focus:outline-none">
            </div>
            <div class="my-4">
                <span>Password</span>
                <input type="password" name="password" id="" class="w-full bg-gray-600 border-parsOrange border-2  rounded p-1 focus:outline-none">
            </div>
            <div class="my-4">
                <span>Re-enter password</span>
                <input type="password" name="password" id="" class="w-full bg-gray-600 border-parsOrange border-2  rounded p-1 focus:outline-none">
            </div>
            <div class="my-8">
                <button onclick="submitForm('registration', 'index.php?action=create', 'index.php?route=login')" class="p-2 bg-gray-600 rounded">Register</button>
            </div>
            <div class="my-4 text-sm">
                <span>You already have an account? <a href="index.php?route=login" class="text-parsRed">Login</a></span>
            </div>
        </form>
    </div>
</section>