<?php
include "./controller/router.php";
include "./controller/UserController.php";
include "./view/header.php";
$content = new router();
?>
<main class="flex-grow">
<?php $content->handleRequest(); ?>
</main>
<?php
$userLogic = new UserController();
$userLogic->handleRequest();
?>

<?php
include "./view/footer.php";
?>