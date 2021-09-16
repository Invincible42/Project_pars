<?php
?>

<div class="flex flex-col justify-center text-center my-4">
    <span class="text-2xl">Playlist name</span>
    <span class="text-base">Creators name</span>
    <span class="text-base">Date of creation</span>
</div>

<?php for($i = 0; $i < 30; $i++) { ?>
    <div class="">
        <div class="flex flex-row justify-between hover:bg-gray-700 xl:mx-96 mx-2 rounded my-1">
            <div class="flex flex-row">
                <div class="self-center m-2">
                    <span class="material-icons text-3xl">play_circle_filled</span>
                </div>
                <div class="flex flex-col">
                    <span>Song name</span>
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
    </div>
<?php } ?>

