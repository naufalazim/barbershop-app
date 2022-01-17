<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
     <?php include "head.css" ?> 
    </style>

    <title>Header</title>
</head>
<body>
    <header>
    <nav>
    <div class="logo">
        <h2><a href="/barbershop-app//index.php">Tuah.</a></h2>
    </div>

    <ul class="nav-links">
    <?php
    if(isset($_SESSION['admin']) || isset($_SESSION['staff']) || isset($_SESSION['customer'])) {
        echo '
        <li><a href="/barbershop-app/admin/logoutadmin.php" class="nav-items">Logout</a></li> 
        
        ';
    }else {
        echo '
        
        <li><a href="/barbershop-app/customer/customerlogin.php" class="nav-items">Customer</a></li>
        <li><a href="/barbershop-app/staff/stafflogin.php" class="nav-items">Staff</a></li>
        <li><a href="/barbershop-app/admin/adminlogin.php" class="nav-items">Admin</a></li> 
        
        ';
    }
    ?>
    </ul>
    
    </nav>
    </header>
    
</body>
</html>



