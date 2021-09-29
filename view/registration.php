<?php
include "./view/header.php";
?>
<section class="flex-grow">

    <div class="flex my-10 justify-center">
        <form onsubmit="return checkPasswords(event)" class="max-w-screen-sm bg-white border shadow-2xl border-opacity-20 border-black rounded py-10 xl:px-20 px-5 mx-5 text-parsOrange" method="POST" action="index.php?route=registration&action=create">
            <div class="mb-4">
                <span class="text-3xl">Register</span>
            </div>
            <div class="my-4">
                <span>Username</span>
                <input type="text" name="username" class="w-full bg-gray-600 border-parsOrange border-2 rounded p-1 focus:outline-none" pattern="[A-Za-z0-9]+" required>
            </div>
            <div class="my-4">
                <span>Password</span>
                <input type="password" name="password" class="w-full bg-gray-600 border-parsOrange border-2 rounded p-1 focus:outline-none" id="password" required>
            </div>
            <div class="my-4">
                <span>Re-enter password</span>
                <input type="password" name="re_enter_password" id="passwordValidate" class="w-full bg-gray-600 border-parsOrange border-2  rounded p-1 focus:outline-none" required> 
                <input type="button" class="p-2 bg-gray-600 rounded material-icons my-3" id="visibility" value="visibility_off"  onclick="passwordVisibility()">
            </div>
            <div>
                <p id="passwordAlert"></p>
            </div>
            <div class="my-6">
                <input type="submit"  class="p-2 bg-gray-600 rounded" value="Register">
            </div>
           
            <div class="my-4 text-sm">
                <span>You already have an account? <a href="index.php?route=login" class="text-parsRed underline">Login</a></span>
            </div>
        </form>
    </div>
    <script src="./view/js/passwordCheck.js"></script>
</section>

<?php
include "./view/footer.php";
?>