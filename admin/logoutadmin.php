<?php
session_start();

// include("./adminlogin.php");

unset($_SESSION['admin']);
header("location:./adminlogin.php");

?>