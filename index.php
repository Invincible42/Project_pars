<?php
include "./controller/NavigationController.php";

$content = new NavigationController();

session_start();

if(isset($_SESSION['loggedin']) && $_SESSION == true) {

}

?>
<?php $content->handleRequest(); ?>
<?php

?>
<div id="overlay"></div>
