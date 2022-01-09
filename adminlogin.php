<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="adminlogin.css">
    
    <title>Admin Login</title>
</head>
<body>

    <!-- PART: Header -->
    <?php include 'head.php'  ?>

    <!-- PART: Login  -->
    <div class="container">

        <div class="box">

            <!-- <div class="title"> -->
                <h4>Admin Login</h4>
            <!-- </div> -->

            <form class="form" action="" method="POST">
                <label><p>Username:</p> </label>
                <input type="text" class="" placeholder="Admin Username"  value=""> <br>

                
                <label><p>Password:</p>  </label>
                <input type="password" class="" placeholder="Admin Password" value="">

                <!-- <div class="submit-btn"> -->
                <br><input class="btn" type="submit" value="Login">
                <!-- </div> -->

            </form>

        </div>

    </div>
    
</body>
</html>