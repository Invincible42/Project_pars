<section>
    <script src="./view/js/ajax.js"></script>
    <div class="flex my-10 justify-center">
        <form id="createPlaylist" class="max-w-screen-sm bg-white border shadow-2xl border-opacity-20 border-black rounded py-10 xl:px-20 px-5 mx-5 text-parsOrange">
            <div class="mb-4">
                <span class="text-3xl">Create your playlist</span>
            </div>
            <div class="my-4">
                <span>Playlist Title</span>
                <input type="text" name="playlistTitle" id="" class="w-full bg-gray-600 border-parsOrange border-2 rounded p-1 focus:outline-none">
            </div>
            <div class="my-4">
                <span>Playlist Color</span>
                <input type="text" name="playllistColor" id="" class="w-full bg-gray-600 border-parsOrange border-2  rounded p-1 focus:outline-none">
            </div>
            <div class="my-4 flex justify-center">
                <button onclick="submitForm('makePlaylist', 'index.php?action=create', 'index.php?route=home')" class="p-2 bg-gray-600 hover:bg-gray-800 hover:text-parsDarkOrange rounded">Make playlist</button>
            </div>
        </form>
    </div>
</section>
   