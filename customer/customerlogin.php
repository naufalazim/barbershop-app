<?php
include('../include/connection.php');

session_start();
error_reporting(0);

if(isset($_SESSION['customer'])) {
    header("location: ./customer.php");
}

if(isset($_POST['login'])) {
    $username = $_POST['username'];
    $password = $_POST['pass'];

        //Kalau username and password empty akan show error:
        if(empty($username)) {
            $error['customer'] = 'Enter username';
        }else if(empty($password)) {
            $error['customer'] = 'Enter password';
        }else {
            $error['customer'] = "Wrong username or password";
        }

    //query:
    $sql = "SELECT * FROM customer WHERE username='$username' AND password='$password'";
    $result = $mysqli->query($sql);

    if($result->num_rows > 0) {
        $row = mysqli_fetch_assoc($result);
        $_SESSION['customer'] = $row['username'];
        header('location: customer.php');
    } else {
        echo "<script>Wrong password</script>";
    }
}



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Customer</title>
    <style>
     <?php include "customerlogin.css" ?> 
    </style> 
</head>
<body>

<!-- HEADER  -->
<?php
    include('../header/head.php');
    ?>

<!-- BODY PART  -->

<div class="container">
    <div class="box">

    <!-- PART BOX LOGIN  -->
        <h6>Customer</h6>
        <h4>Login.</h4>


        <!-- ERROR LOGIN SHOWN  -->
        <div class="alert">
            <?php
            if(isset($error['customer'])) {
                $show = $error['customer'];
            } else {
                $show = "";
            }
            echo $show;
            ?>
        </div>

        <!-- PART: FORM  -->
        <form class="form" name="form" method="POST" action="customerlogin.php" id="login-form">

        <label><p>Username:</p> </label>
        <input type="text" name="username" id="username" class="username" placeholder="Your Username"  value=""> <br>

        <label><p>Password:</p>  </label>
        <input type="password" name="pass" id="password" class="password" placeholder="Your Password" value="">

        <br><input name="login" class="submit" id="submit" type="submit" value="Login">


    </form>

    </div>
</div>

    
</body>
</html>