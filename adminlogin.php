

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
 
    <style>
     <?php include "adminlogin.css" ?> 
    </style>

    <script type="text/javascript"  src="validation.js"></script>
    
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
            <form class="form" id="login-form" action="" method="POST" onsubmit="return validate()">
                <label><p>Username:</p> </label>
                <input type="text" id="username" class="username" placeholder="Admin Username"  value="" required> <br>
                
                
                <label><p>Password:</p>  </label>
                <input type="password" id="password" class="password" placeholder="Admin Password" value="" required>

             
                <br><input class="submit" id="submit" type="submit" value="Login">
          

            </form>

        </div>

    </div>
    
    
</body>
</html>