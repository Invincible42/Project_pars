<?php
include "../controller/router.php";
include "./header.php";
$content = new router();

$content->handleRequest();
?>

<?php
include "./footer.php";
?>