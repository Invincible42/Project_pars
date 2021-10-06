<?php
include "./view/header.php";
?>

<section class="flex-grow" >
    <script src="./view/js/ajax.js"></script>
    <div>
        <div class="flex flex-col justify-center items-center mx-7 my-6">
            <p class="text-gray-50 text-sm lg:text-2xl">
                Welcome to <span class="font-speed text-parsOrange">PARS</span> a new music streaming platform.
            </p>
            <p  class="text-gray-50 text-sm lg:text-2xl">
                Take a look around we will be launching in the next few weeks.
            </p>
        </div>
        
    </div>
    <div >
        <form id="search" class="flex xl:mx-96 mx-5 my-4">
            <input type="hidden" name="route" value="home">
            <input type="hidden" name="action" value="search">
            <input type="text" placeholder="Search for songs or playlists...." name="search" id="" class=" focus:outline-none bg-gray-600 border-parsOrange p-1 border-2 rounded mx-auto mr-3 w-full focus:text-parsYellow">
            <button onclick="searchForm('search', 'index.php?action=search&route=home', sendToContent)"  class="rounded mx-auto"><span class="material-icons rounded-full hover:bg-gray-800 text-parsOrange hover:text-parsDarkOrange p-1.5 text-3xl">search</span></button>
        </form>
    </div>
    <?php if(isset($result)):?>
    <?php foreach ($result as $playlist): ?>
        <div class="flex flex-row justify-between bg-gradient-to-t from-gray-800 to-gray-750 rounded xl:mx-96 mx-5 my-4">
            <div class="flex flex-row overflow-hidden">
                <div class="<?php echo "bg-".$playlist['playlistColor']; ?> w-20 rounded-bl rounded-tl"><div class="flex justify-center items-center text-transparent text-5xl bg-clip-text  bg-gradient-to-tr from-gray-900 to-gray-200 h-20 w-20 ">&#x266B;</div></div>
                <div class="self-center justify-self-center mx-2">
                    <h2 class="text-gray-50 text-xl"><?php echo $playlist['playlistName']; ?></h2>
                    <p class="<?php echo "text-".$playlist['playlistColor']; ?> text-md"><?php echo $playlist['username']; ?></p>
                    <span class=" inline lg:hidden text-gray-50 text-xs"><?php echo "Created at: " .date("d-m-Y", strtotime($playlist['created_at'])) ?></span>
                </div>
            </div>
            <div class="flex flex-col justify-center items-center text-gray-50">
                <span class="mx-2 hidden lg:inline">Created at:</span>
                <span class="mx-2 hidden lg:inline"><?php echo date("d-m-Y", strtotime($playlist['created_at'])) ?></span>
            </div>
        </div>
    <?php endforeach ?>
    <?php endif;?>


</section>


<?php
include "./view/footer.php";
?>