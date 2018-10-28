<?php
session_start();
unset($_SESSION['logged_in1']);
header("location:http://localhost/Bookshop/Admin/adminlogin.php");
    
?>