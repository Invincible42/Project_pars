
<section>
    <div>
        <div class="flex xl:mx-96 mx-5 my-4">
            <input type="text" placeholder="Search for songs or playlists...." name="search" id="" class=" focus:outline-none bg-gray-600 border-parsOrange p-1 border-2 rounded mx-auto mr-3 w-full focus:text-parsYellow">
            <button class=" rounded mx-auto"> <span class="material-icons rounded-full hover:bg-gray-800 text-parsOrange hover:text-parsDarkOrange p-1.5 text-3xl">search</span></button>
        </div>
    </div>
    <?php for($i = 0; $i < 5; $i++):?>
    <div class="flex flex-row bg-gradient-to-t from-gray-800 to-gray-750 rounded xl:mx-96 mx-5 my-4">
        <div><img class="h-20 rounded-l object-cover" src="./view/img/nf.png"></img></div>
        <div class="flex flex-row w-full">
            <div class="self-center justify-self-center mx-2">
                <h2 class="text-gray-50 text-xl">My Playlist #1</h2>
                <p class="text-parsOrange">Username</p>
            </div>
        </div>
    </div>
    <?php endfor?>
  
</section>
