<?php
session_start();
include("connect.php");
if($_POST['submit'])
{
    $email = $_POST['email'];
    $password = $_POST['pass'];
    $radio = $_POST['radio'];
    if($radio == 'client')
    {
        $query = "SELECT * FROM `client_login` WHERE `client_email`='$email' AND `client_pwd`='$password'";
        $data=mysqli_query($conn,$query);
        $row=mysqli_num_rows($data);
        if($row==1)
        {
            $info=mysqli_fetch_array($data);
            $_SESSION['id']=$info['c_id'];
            $_SESSION['code']=$info['client_code'];
            $_SESSION['name']=$info['client_name'];
            $_SESSION['email']=$info['client_email'];
            header("refresh:0 url='index_user.php'");
            echo "<script>alert('Login Successfully')</script>";
        }else{
            echo "<script>alert('Wrong Email_Id Or Password(Try Again...)')</script>";
            header("refresh:0 url='login.php'");
        }
    }
    else{
        $query = "SELECT * FROM `admin` WHERE `email`='$email' AND `pwd`='$password'";
        $data=mysqli_query($conn,$query);
        $row=mysqli_num_rows($data);
        if($row==1)
        {
            $info=mysqli_fetch_array($data);
            $_SESSION['id']=$info['id'];
            $_SESSION['name']=$info['name'];
            $_SESSION['email']=$info['email'];
            header("refresh:0 url='Client_Data_Index.php'");
            echo "<script>alert('Login Successfully')</script>";
        }else{
            echo "<script>alert('Wrong Email_Id Or Password(Try Again...)')</script>";
            header("refresh:0 url='login.php'");
        }
    }
}?>