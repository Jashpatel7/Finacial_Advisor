<?php
	include 'connect.php';
	if(isset($_POST['submit']))
	{
        mysqli_query($conn, "UPDATE `client_info` SET
        `client_name`='".$_POST['cname']."',
        `dob`='".$_POST['dob']."',
        `client_add`='".$_POST['add']."',
        `client_mob`='".$_POST['mob']."'
         WHERE `c_id`=".$_REQUEST['id']);
		 header("location:Client_Data_Index.php");
	}
	else
	{  
        header("location:Client_Data_Index.php");}
?>