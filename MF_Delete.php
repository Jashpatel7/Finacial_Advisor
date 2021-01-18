<?php
	$conn=mysqli_connect("localhost", "root", "", "mini_project");
    if(!$conn){
        die('Could not Connect My Sql:' .mysql_error());
    }
	$id=$_REQUEST['id'];
    mysqli_query($conn, "DELETE FROM `mutual_fund` WHERE `c_id`=".$id);
		header("location:MF_Index.php");
?>