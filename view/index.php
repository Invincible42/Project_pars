<?php
include "../controller/controller.php";
include "./header.php";
$content = new controller();

$content->handleRequest();
?>

<?php
include "./footer.php";
?>