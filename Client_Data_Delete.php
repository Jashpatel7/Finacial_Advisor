<?php
	$conn=mysqli_connect("localhost", "root", "", "mini_project");
    if(!$conn){
        die('Could not Connect My Sql:' .mysql_error());
    }
	$id=$_REQUEST['id'];
    mysqli_query($conn, "DELETE FROM `client_info` WHERE `c_id`=".$id);
		header("location:Client_Data_Index.php");
?>