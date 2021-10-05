<?php
include "./controller/NavigationController.php";

$content = new NavigationController();

session_start();

var_dump($_SESSION);
?>
<?php $content->handleRequest(); ?>
<?php

?>
<div id="overlay"></div>
