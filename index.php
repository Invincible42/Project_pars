<?php
include "./controller/router.php";
include "./view/header.php";
$content = new router();

$content->handleRequest();
?>

<?php
include "./view/footer.php";
?>