
<?php
include('../include/connection.php');

session_start();
error_reporting(0);

if(isset($_SESSION['staff'])) {
    header("location: ./staff.php");
}


if(isset($_SESSION['username'])) {
    header("Location: staff.php");
}


if(isset($_POST['login'])) {
    $username = $_POST['username'];
    $password = $_POST['pass'];

        //Kalau username and password empty akan show error:
        if(empty($username)) {
            $error['staff'] = 'Enter username';
        }else if(empty($password)) {
            $error['staff'] = 'Enter password';
        }else {
            $error['staff'] = "Wrong username or password";
        }

        
    //query:
    $sql = "SELECT * FROM employee WHERE username='$username' AND password='$password'";
    $result = $mysqli->query($sql);

    if($result->num_rows > 0) {
        $row = mysqli_fetch_assoc($result);
        $_SESSION['staff'] = $row['username'];
        header('location: staff.php');
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
    <title>Staff Login</title>
    <style>
     <?php include "stafflogin.css" ?> 
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
    <h6>Staff</h6>
    <h4>Login.</h4>


        <!-- ERROR LOGIN SHOWN  -->
        <div class="alert">
            <?php
            if(isset($error['staff'])) {
                $show = $error['staff'];
            } else {
                $show = "";
            }
            echo $show;
            ?>
        </div>

        <!-- PART: FORM  -->
        <form class="form" name="form" method="POST" action="stafflogin.php" id="login-form">

        <label><p>Username:</p> </label>
        <input type="text" name="username" id="username" class="username" placeholder="Staff Username"  value=""> <br>

        <label><p>Password:</p>  </label>
        <input type="password" name="pass" id="password" class="password" placeholder="Staff Password" value="">

        <br><input name="login" class="submit" id="submit" type="submit" value="Login">


    </form>

    </div>
</div>


    
</body>
</html>