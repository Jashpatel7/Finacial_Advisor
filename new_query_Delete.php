<?php
	$conn=mysqli_connect("localhost", "root", "", "mini_project");
    if(!$conn){
        die('Could not Connect My Sql:' .mysql_error());
    }
	$id=$_REQUEST['id'];
    mysqli_query($conn, "DELETE FROM `new_client` WHERE `id`=".$id);
    header("location:new_query.php");   
?>