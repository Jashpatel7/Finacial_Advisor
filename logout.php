<?php
session_start();
session_destroy();
echo "<script>alert('Log Out Successfully')</script>";
header("refresh:0 url='login.php'");
?>