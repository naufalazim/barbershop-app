<?php
session_start();

// include("./adminlogin.php");

unset($_SESSION['admin']);
session_destroy();
header("location:./adminlogin.php");

?>