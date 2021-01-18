<?php
session_start();
include("connect.php");
if($_POST['submit'])
{
    $code = $_POST['ccode'];
    $image1 = $_FILES['img1']['tmp_name'];
    $imagecon1 = addslashes(file_get_contents($image1));
    $image2 = $_FILES['img2']['tmp_name'];
    $imagecon2 = addslashes(file_get_contents($image2));
    $query =mysqli_query($conn,"INSERT INTO `id_proof`(`client_code`, `adhar_img`, `pan_img`) VALUES('$code','$imagecon1','$imagecon2')");
    header("refresh:0 url='index_user.php'");
}

?>