<?php
session_start();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
     <?php include "admin.css" ?> 
    </style> 
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>ADMIN</title>
</head>
<body>
<!-- HEADER  -->
<div>
    <?php include "../header/head.php"    ?>
</div>


<div class="row">

    <!-- SIDEBAR Dashboard -->
<div class="side">
    <div class="profile-image">
        <img class="profile" src="../img/profile1.jpeg">
    </div>

    <h5 class="name">Admin</h5>
   
    <div class="nav">
        <ul>
            <li><a href="#">Dashboard</a></li>
            <li><a href="#">Message</a></li>
        </ul>
    </div>
</div>


    <!-- MAIN Dashboard  -->
<div class="main">
    <h2 class="name-dashboard">Dashboard</h2>
    <h5>Title description, Dec 7, 2017</h5>
    <div class="image" style="height:200px;">Image</div>
    <p>Some text..</p>
    <p>Sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.</p>
    <br>
    <h2>TITLE HEADING</h2>
    <h5>Title description, Sep 2, 2017</h5>
    <div class="image" style="height:200px;">Image</div>
    <p>Some text..</p>
    <p>Sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.</p>
</div>






</body>
</html>