<?php
include "./view/header.php";
?>
<section class="flex-grow">
    <script src="./view/js/ajax.js"></script>
    <div class="flex my-10 justify-center">
        <form id="createPlaylist" method="POST" action="index.php?route=create-playlist&action=create" class="max-w-screen-sm bg-white border shadow-2xl border-opacity-20 border-black rounded py-10 xl:px-20 px-5 mx-5 text-parsOrange">
            <div class="mb-4">
                <span class="text-3xl">Create your playlist</span>
            </div>
            <div class="my-4">
                <span>Playlist Title</span>
                <input type="text" name="playlistTitle" id="" class="w-full bg-gray-600 border-parsOrange border-2 rounded p-1 focus:outline-none">
            </div>
            <div class="my-4">
                <span>Playlist Color</span>
                <select type="text" name="playlistColor" class="w-full bg-gray-600 border-parsOrange border-2  rounded p-1 focus:outline-none">
                    <option value="bg-playlistBlue">Blue</option>
                    <option value="bg-playlistAqua">Aqua</option>
                    <option value="bg-playlistOrange">Orange</option>
                    <option value="bg-playlistPink">Pink</option>
                    <option value="bg-playlistYellow">Yellow</option>
                </select>
            </div>
            <div class="my-4 flex justify-center">
                <input type="submit"  class="p-2 bg-gray-600 rounded" value="Submit">
                <!-- <button onclick="submitForm('createPlaylist', 'index.php?action=create', 'index.php?route=home')" class="p-2 bg-gray-600 hover:bg-gray-800 hover:text-parsDarkOrange rounded">Make playlist</button> -->
            </div>
        </form>
    </div>
</section>
<?php
include "./view/footer.php";
?>  