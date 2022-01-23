<?php
include("./include/connection.php");
session_start();
error_reporting(0);

//click the button sign up:
if(isset($_POST['newsave'])) {
    $name = $_POST['newnama'];
    $pass = $_POST['newpass'];

    $sql="INSERT INTO customer (username, password) VALUES ('$name', '$pass')";
    $result = $mysqli->query($sql);

    if($result){
        echo "<script>alert('Berjaya daftar');</script>";
    }
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
     <?php include "index.css" ?> 
    </style>
    <title>Barbershop</title>
   
</head>
<body>

<!-- header app  -->
    <?php include './header/head.php' ?>
 

<!-- REGISTRATION FORM  -->
<div class="container">
    <div class="box">
        <h6>Are you new customer?</h6>
        <h4>Create account.</h4>


        <!-- FORM  -->
        <form action="" method="POST">
            <label><p>New Username:</p></label>
            <input type="text" name="newnama">
            <label><p>New Password:</p></label>
            <input type="password" name="newpass">

            <input type="submit" name="newsave" value="Sign Up">
        </form>
    </div>
</div>



    




</body>
</html>