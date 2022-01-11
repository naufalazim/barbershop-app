

<!-- Connecttion to Database: -->
<?php

include('./barbershop-app/include/connection.php');

if (isset($_POST['login'])) {

    $username = $_POST['uname'];
    $password = $_POST['pass'];

    $error = array();

    if(empty($username)) {
        $error['admin'] = 'Enter username';
    }else if(empty($password)) {
        $error['admin'] = 'Enter password';
    }

    if (count($error)==0) {
        

        // Var from DB
        $query = "SELECT * FROM admin WHERE username='$username' AND password='$password'";


        $result = mysqli_query($conn, $query);


        if(mysqli_num_rows($result)==1){

            echo "<script>alert('You are login as admin')</script>";

            $_SESSION['admin'] = $username;
            $_SESSION['success'] = "You are now login!";

            header("location: admin.php"); //redirect

        }else{
            echo "<script>alert('wrong password or username')</script>";
            // // array_push($error, "wrong password or username");
            // header("location: adminlogin.php"); //redirect
        }


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
     <?php include "adminlogin.css" ?> 
    </style> 

    <!-- <script type="text/javascript"  src="validation.js"></script> -->
    
    <title>Admin Login</title>
</head>
<body>

    <!-- PART: Header -->
    <?php include './header/head.php'  ?>

    <!-- PART: Login  -->
    <div class="container">

        <div class="box">

                <h4>Admin Login</h4>

            <!-- Error handling  -->
           


            <!-- FORM  -->
            <form class="form" id="login-form" action="adminlogin.php" method="POST" onsubmit="return validate()">

                <div class="alert alert-danger">
                    <?php
                    
                    if(isset($error['admin'])) {

                        $show = $error['admin'];

                    }else {
                        $show = "";
                    }

                    echo $show;
  
                    ?>
                </div>


                <label><p>Username:</p> </label>
                <input type="text" name="uname" id="username" class="username" placeholder="Admin Username"  value=""> <br>
                
                
                <label><p>Password:</p>  </label>
                <input type="password" name="pass" id="password" class="password" placeholder="Admin Password" value="">

             
                <br><input name="login" class="submit" id="submit" type="submit" value="Login">
          

            </form>

        </div>

    </div>
    
    
</body>
</html>