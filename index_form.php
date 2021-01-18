<?php
	$con = mysqli_connect("localhost", "root", "", "mini_project");
	if(isset($_POST['submit']))
	{
	   mysqli_query($con, "INSERT INTO `new_client`(`name`, `email`, `phone`, `project`) VALUES('".$_POST['name']."', '".$_POST['email']."', '".$_POST['phone']."','".$_POST['project']."')") or die(mysqli_error($con));        
	   header("location:index.php");
       echo "<script>alert('Data Submitted Successfully.You Receive Mail/Call From Employee In Short Time..)')</script>";
    }
	else
	{
		header("location:Bank_Data_Index.php");
	}
?>