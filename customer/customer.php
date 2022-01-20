
<?php
include "../include/connection.php";
session_start();
error_reporting(0);

if(isset($_POST['submit'])) {
    $name = $_POST['nama'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $time = $_POST['time'];
    $date = $_POST['date'];
   

    $sql = "INSERT INTO booking (name, email, phone, time, date) VALUES ('$name', '$email', '$phone', '$time', '$date')";
    $result = $mysqli->query($sql);

}

if(!$result) {
    echo "<script>Not successfull!</script>";
}else {
    echo "<script> successfull!</script>";
}



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
            <li><a href="#main">Dashboard</a></li>
            <li><a href="#">Message</a></li>
        </ul>
    </div>
</div>


    <!-- MAIN Dashboard  -->
<div class="main" id="main">
    <h2 class="name-dashboard">Dashboard</h2>

    <form action="" method="POST">
    <div class="form-box">

    <h3 class="box-title">Reservation</h3>
    <input type="text" name="nama" class="form-input" placeholder="Your Name" value="" required><br>

    <input type="email" name="email" class="form-input"  placeholder="Your Email" value="" required><br>

    <input type="tel" name="phone" class="form-input"  placeholder="Your Number Phone" value="" required><br>

    <input type="date" name="date" class="form-input"  value="" required><br>

    <input type="time" name="time" class="form-input"  value="" required><br>

    <br><input name="submit" class="submit" id="submit" type="submit" value="Submit">
    
    </div>
    </form>


    <footer>
        <p>© 2022 Naufal Azim.</p>
    </footer>
    
</div>

    
</body>
</html>

