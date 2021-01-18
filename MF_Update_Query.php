<?php
	include 'connect.php';
	if(isset($_POST['submit']))
	{
        mysqli_query($conn, "UPDATE `mutual_fund` SET
        `scheme_name`='".$_POST['sname']."',
        `status`='".$_POST['status']."'
         WHERE `c_id`=".$_REQUEST['id']);
		 header("location:MF_Index.php");
	}
	else
	{ 
        header("location:Client_Data_Index.php");}
?>