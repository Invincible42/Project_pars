<div class="flex-grow">
        <div class="flex lg:mx-5 my-10">
            <h2 class="m-auto text-parsOrange text-2xl lg:text-4xl">Add your own songs!</h2>
        </div>
        <div class="flex lg:mx-5 my-10">
            <div class="m-auto">
                    <label for="song_name" class="text-parsOrange">Song Title</label>
                    <input type="text" name="song_name" id="" class=" bg-gray-700 border-parsOrange p-1 border-2 rounded mx-auto   focus: text-parsOrange">
            </div> 
        </div>
        <div class="flex lg:mx-5 my-10">
            <div class="m-auto">
                <label for="song_name" class="text-parsOrange">Name of Artist</label>
                <input type="text" name="song_name" id=""class=" bg-gray-700 border-parsOrange p-1 border-2 rounded mx-auto  focus: text-parsOrange">
            </div> 
        </div>
        <div class="flex lg:mx-5 my-10">
            <div class="m-auto">
                <label for="song_name" class="text-parsOrange">Album name</label>
                <input type="text" name="song_name" id="" class=" bg-gray-700 border-parsOrange p-1 border-2 rounded mx-auto focus: text-parsOrange">
            </div>   
        </div>
        <div class="flex mx-5 my-10">
            <div class="m-auto">
                <label
                class=" w-48 flex flex-col items-center rounded-md  tracking-wide uppercase border-2  cursor-pointer bg-gray-700 hover:bg-gray-700 hover:text-parsDarkOrange text-parsOrange ease-linear transition-all duration-150">
                    <span class="material-icons text-4xl">cloud_upload</span>
                    <span class="text-base leading-normal">Select an mp3 file</span>
                    <input type='file' class="hidden" />
                </label>
            </div>
            
        </div>
    </div>

<section>
    <script src="./view/js/ajax.js"></script>
    <div class="flex my-10 justify-center">
        <form id="registration" class="max-w-screen-sm bg-white border shadow-2xl border-opacity-20 border-black rounded py-10 xl:px-20 px-5 mx-5 text-parsOrange">
            <div class="mb-4">
                <span class="text-3xl">Register</span>
            </div>
            <div class="my-4">
                <span>Username</span>
                <input type="text" name="username" id="" class="w-full rounded p-1 focus:outline-none">
            </div>
            <div class="my-4">
                <span>Password</span>
                <input type="password" name="password" id="" class="w-full rounded p-1 focus:outline-none">
            </div>
            <div class="my-4">
                <span>Re-enter password</span>
                <input type="password" name="password" id="" class="w-full rounded p-1 focus:outline-none">
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
   