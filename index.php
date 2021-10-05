<?php
include "./controller/NavigationController.php";

$content = new NavigationController();

session_start();

?>
<?php $content->handleRequest(); ?>
<?php

?>
<div id="overlay"></div>
