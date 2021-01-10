 <?php
session_start();
unset($_SESSION['nama']);
unset($_SESSION['nim']); //matiin session username nya penulis
header('location:index.php'); //direct ke index.php
?>
