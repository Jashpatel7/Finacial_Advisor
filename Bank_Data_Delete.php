<?php
	$conn=mysqli_connect("localhost", "root", "", "mini_project");
    if(!$conn){
        die('Could not Connect My Sql:' .mysql_error());
    }
	$id=$_REQUEST['id'];
    mysqli_query($conn, "DELETE FROM `bank_details` WHERE `c_id`=".$id);
		header("location:Bank_Data_Index.php");
?>