

<section>
    <script src="./view/js/ajax.js"></script>
    <div class="flex my-10 justify-center">
        <form id="addSong" class="max-w-screen-sm bg-white border shadow-2xl border-opacity-20 border-black rounded py-10 xl:px-20 px-5 mx-5 text-parsOrange">
            <div class="mb-4">
                <span class="text-3xl">Add your own songs</span>
            </div>
            <div class="my-4">
                <span>Song Title</span>
                <input type="text" name="username" id="" class="w-full bg-gray-600 border-parsOrange border-2 rounded p-1 focus:outline-none">
            </div>
            <div class="my-4">
                <span>Artist Name</span>
                <input type="password" name="password" id="" class="w-full bg-gray-600 border-parsOrange border-2  rounded p-1 focus:outline-none">
            </div>
            <div class="my-4">
                <span>Select playlist</span>
                <select class="w-full focus:outline-none bg-gray-600 border-parsOrange border-2  p-1 rounded">
                    <option>Playlist #1</option>
                </select>
            </div>
            <div class="flex justify-center">
                <label
                class=" w-48 flex flex-col items-center rounded-md  tracking-wide uppercase border-2 border-parsOrange  cursor-pointer bg-gray-600 hover:bg-gray-800 hover:border-parsDarkOrange hover:text-parsDarkOrange text-parsOrange ease-linear transition-all duration-150">
                    <span class="material-icons text-4xl">cloud_upload</span>
                    <span class="text-base leading-normal">Select an mp3 file</span>
                    <input type='file' class="hidden" />
                </label>
            </div>
            <div class="my-4 flex justify-center">
                <button onclick="submitForm('addSong', 'index.php?action=create', 'index.php?route=home')" class="p-2 bg-gray-600 hover:bg-gray-800 hover:text-parsDarkOrange rounded">Add Song</button>
            </div>
        </form>
    </div>
</section>
   