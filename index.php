<?php
include "./controller/router.php";
include "./controller/UserController.php";
include "./view/header.php";
$content = new router();

$content->handleRequest();

$userLogic = new UserController();
$userLogic->handleRequest();
?>

<?php
include "./view/footer.php";
?>