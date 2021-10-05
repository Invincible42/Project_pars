<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./view/css/style.css">
    <link rel="stylesheet" href="./view/css/icons.css">
    <script src="./view/js/overlay.js"></script>
    <title>PARS</title>
</head>
<body class="bg-gray-700 flex flex-col h-screen">
    <div class="flex justify-between bg-gray-800 border-b-4 border-parsOrange">
        <div class="ml-4">
            <a href="?route=home"><h2 class="text-4xl text-parsOrange m-auto my-2 font-speed hover:text-parsDarkOrange">PARS</h2></a>
        </div>
        <?php if(isset($_SESSION['loggedin'])):?>
        <?php if($_SESSION['loggedin'] == true):?>
        <div class="m-auto flex items-center hidden lg:block">
            <p class="font-speed text-3xl text-gray-50"> WELCOME <span class="text-parsOrange"><?php echo $_SESSION['username'];?></span></p>
        </div>
        <?php endif; endif;?>
        <div class="mr-4 flex  items-center">
            <?php if(isset($_SESSION['loggedin'])):?>
            <?php if($_SESSION['loggedin'] == true):?>
                <a href="?route=login" class="font-speed text-3xl text-parsOrange hover:text-parsDarkOrange m-auto my-2">Logout</a>
            
            <?php endif;?>
            <?php else:?>
                
                <a href="?route=login" class="font-speed text-3xl text-parsOrange hover:text-parsDarkOrange m-auto my-2">login</a>
            <?php endif;?>
        </div>
    </div>

   

<?php
?>