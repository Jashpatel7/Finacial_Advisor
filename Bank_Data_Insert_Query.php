<?php
	$con = mysqli_connect("localhost", "root", "", "mini_project");
	if(isset($_POST['submit']))
	{
	   mysqli_query($con, "INSERT INTO `bank_details`(`client_code`,`client_name`,`bank_name`,`branch_add`,`account_no`,`ifsc_code`,`scheme_name`) VALUES('".$_POST['ccode']."', '".$_POST['cname']."', '".$_POST['bname']."','".$_POST['brname']."','".$_POST['acc']."','".$_POST['ifsc']."','".$_POST['scheme']."')") or die(mysqli_error($con));
	   header("location:Bank_Data_Index.php");}
	else
	{
		header("location:Bank_Data_Index.php");
	}
?>