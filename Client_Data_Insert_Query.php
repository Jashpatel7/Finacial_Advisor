<?php
	$con = mysqli_connect("localhost", "root", "", "mini_project");
	if(isset($_POST['submit']))
	{
	   mysqli_query($con, "INSERT INTO `client_info`(`client_code`,`client_name`,`dob`,`occupation`, `client_pan`,`client_aadhar`,`client_add`,`client_mob`,`client_email`) VALUES('".$_POST['ccode']."', '".$_POST['cname']."','".$_POST['dob']."', '".$_POST['occ']."','".$_POST['pan']."','".$_POST['adhar']."','".$_POST['add']."','".$_POST['mob']."','".$_POST['email']."',)") or die(mysqli_error($con));
	   header("location:Client_Data_Index.php");}
	else
	{
		header("location:Bank_Data_Index.php");
	}
?>