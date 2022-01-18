<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Customer</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <style>
     <?php include "customer.css" ?> 
    </style> 
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

    <h5 class="name">Customer</h5>
   
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

</div>


    
</body>
</html>

