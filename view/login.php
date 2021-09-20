<section>
    <script src="./view/js/ajax.js"></script>
    <div class="flex my-10 justify-center">
        <form id="login" class="max-w-screen-sm bg-white border shadow-2xl border-opacity-20 border-black rounded py-10 xl:px-20 px-5 mx-5 text-parsOrange">
            <div class="mb-4">
                <span class="text-3xl">Login</span>
            </div>
            <div class="my-4">
                <span>Username</span>
                <input type="text" name="username" id="" class="w-full rounded p-1 focus:outline-none">
            </div>
            <div class="my-4">
                <span>Password</span>
                <input type="password" name="password" id="" class="w-full rounded p-1 focus:outline-none">
            </div>
            <div class="my-8">
                <button onclick="submitForm('login', 'index.php?action=login', 'index.php?route=home')" class="p-2 bg-gray-600 rounded">Login</button>
            </div>
            <div class="my-4 text-sm">
                <span>You don't have an account? <a href="index.php?route=login" class="text-parsRed">Register</a></span>
            </div>
        </form>
    </div>
</section>