<?php include "./view/header.php"; ?>
<div class="flex-grow mb-20 lg:mb-0">
    <div class="flex flex-col justify-center text-center my-4">
        <span class="text-2xl text-gray-50">Playlist name</span>
        <span class="text-base text-gray-50">Creators name</span>
        <span class="text-base text-gray-50">Date of creation</span>
    </div>
    <?php for($i = 0; $i < 30; $i++) { ?>
        <div class="text-parsOrange">
            <div class="flex flex-row justify-between hover:bg-gray-800 xl:mx-96 mx-2 rounded my-1">
                <div class="flex flex-row">
                    <div class="self-center m-2">
                        <span class="material-icons text-3xl">play_circle_filled</span>
                    </div>
                    <div class="flex flex-col">
                        <span class= "text-gray-50">Song name</span>
                        <span>Artist name</span>
                    </div>
                    <div class="self-center xl:inline-block hidden ml-4">
                        <span>Added by - Date added</span>
                    </div>
                </div>
                <div class="self-center m-2 justify-self-end">
                    <span class="material-icons text-2xl">star_outline</span>
                    <span class="material-icons text-2xl">star_outline</span>
                    <span class="material-icons text-2xl">star_outline</span>
                    <span class="material-icons text-2xl">star_outline</span>
                    <span class="material-icons text-2xl">star_outline</span>
                </div>
            </div>
            <div class="border-b border-black xl:mx-96"></div>
        </div>
    <?php } ?>
</div>

<?php
include "./view/overlay.php";
include "./view/footer.php";
?>