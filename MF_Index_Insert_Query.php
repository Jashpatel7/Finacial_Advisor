<?php
	$con = mysqli_connect("localhost", "root", "", "mini_project");
	if(isset($_POST['submit']))
	{
        mysqli_query($con, "INSERT INTO `mutual_fund`(`client_code`,`client_name`,`scheme_name`,`invested_amount`,`date_of_invest`,`status`) VALUES('".$_POST['mccode']."', '".$_POST['mcname']."', '".$_POST['msname']."','".$_POST['iamt']."','".$_POST['doi']."','".$_POST['status']."')") or die(mysqli_error($con));
	   header("location:MF_Index.php");
    }
	else
	{
		header("location:Bank_Data_Index.php");
	}
?>