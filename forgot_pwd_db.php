<?php
session_start();
include("connect.php");
if($_POST['submit'])
{
    $password = $_POST['pass'];
    $email= $_POST['email'];
    $ans1 = $_POST['bplace'];
    $ans2 = $_POST['school'];
    $query = "UPDATE `client_login` SET `client_pwd`='$password'  WHERE `client_email`='$email' AND `birth_place`='$ans1' AND `first_school`='$ans2'";
    $data=mysqli_query($conn,$query);
    if($data)
        {
            echo"<script>alert('Password Changed Successfully')</script>";
            header("refresh:0 url='login.php'");
        }
        else
        {
            echo"<script>alert('Unable To Change Password... Please Enter Correct Credenttials.')</script>";
            header("refresh:0 url='login.php'");
        }


}

?>