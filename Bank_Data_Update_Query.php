<?php
	include 'connect.php';
	if(isset($_POST['submit']))
	{
        mysqli_query($conn, "UPDATE `bank_details` SET
        `client_code`='".$_POST['ccode']."',
        `client_name`='".$_POST['cname']."',
        `bank_name`='".$_POST['bname']."',
        `branch_add`='".$_POST['brname']."',
        `account_no`='".$_POST['acc']."',
        `ifsc_code`='".$_POST['ifsc']."',
        `scheme_name`='".$_POST['scheme']."'
         WHERE `c_id`=".$_REQUEST['id']);
		 header("location:Bank_Data_Index.php");
	}
	else
	{ 
        header("location:Client_Data_Index.php");}
?>