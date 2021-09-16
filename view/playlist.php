<?php
?>

<div class="flex flex-col justify-center text-center my-4">
    <span class="text-2xl">Playlist name</span>
    <span class="text-base">Creators name</span>
    <span class="text-base">Date of creation</span>
</div>

<?php for($i = 0; $i < 15; $i++) { ?>
<div class="flex flex-row justify-between border-t border-b border-black border-collapse">
    <div class="flex flex-row">
        <div class="self-center m-2">
            <span class="material-icons">play_circle_filled</span>
        </div>
        <div class="flex flex-col">
            <span>Song name</span>
            <span>Artist name</span>
        </div>
    </div>
    <div class="self-center m-2 justify-self-end">
        <span class="material-icons">star_outline</span>
        <span class="material-icons">star_outline</span>
        <span class="material-icons">star_outline</span>
        <span class="material-icons">star_outline</span>
        <span class="material-icons">star_outline</span>
    </div>
</div>
<?php } ?>

