<?php
include "./view/header.php";
?>
<section class="flex-grow">
    <div class="flex my-10 justify-center">
        <form id="login" class="max-w-screen-sm bg-white border shadow-2xl border-opacity-20 border-black rounded py-10 xl:px-20 px-5 mx-5 text-parsOrange" action="index.php?route=login&action=login" method="POST">
            <div class="mb-4">
                <span class="text-3xl">Login</span>
            </div>
            <div class="my-4">
                <span>Username</span>
                <input type="text" name="username" id="" class="w-full rounded p-1 bg-gray-600 border-parsOrange border-2 focus:outline-none" required>
            </div>
            <div class="my-4">
                <span>Password</span>
                <input type="password" name="password" id="" class="w-full rounded p-1 bg-gray-600 border-parsOrange border-2 focus:outline-none" required>
            </div>
            <div class="my-8">
                <input type="submit" class="p-2 bg-gray-600 rounded" value="Login">
            </div>
            <div class="my-4 text-sm">
                <span>You don't have an account? <a href="index.php?route=registration" class="text-parsRed underline">Register</a></span>
            </div>
        </form>
    </div>
</section>
<?php
include "./view/footer.php";
?>