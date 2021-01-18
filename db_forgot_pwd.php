<?php
session_start();
include("connect.php");
if($_POST['submit'])
{
    $email = $_POST['email'];
    $ans1 = $_POST['bplace'];
    $ans2 = $_POST['school'];
    $query = "SELECT * FROM `client_login` WHERE `client_email`='$email' AND `birth_place`='$ans1' AND `first_school`='$ans2'";
    $data=mysqli_query($conn,$query);
    $row=mysqli_num_rows($data);
    if($row==1)
        {
            header("location:reset_password.php?email=".$email."&bplace=".$ans1."&school=".$ans2);
        }
        else
        {
            header("location:forgot-password.php");
        }


}

?>