<?php
include "./view/header.php";
?>
<section class="flex-grow">
    <div>
        <div class="flex flex-col justify-center items-center mx-7 my-6">
            <div>
                <h2 class="text-gray-50 text-4xl font-bold">Mijn Bibliotheek</h2>
            </div>
           
          
           
        </div>
        <?php foreach ($result as $playlist): ?>
            <a href="">
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
            </a>
        <?php endforeach; ?>

       
    </div>
</section>
<?php
include "./view/footer.php";
?>