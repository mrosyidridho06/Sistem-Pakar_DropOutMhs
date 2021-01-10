<?php
include ("koneksi.php");
$user = $_POST['nama'];
$nim = $_POST['nim'];
    session_start(); 
    $_SESSION['nama'] = $user;//nyimpen session nama
    $_SESSION['nim'] = $nim; //nyimpen session umur
    header('location:question.php');

?>