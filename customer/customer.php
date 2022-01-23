
<?php
include "../include/connection.php";
session_start();
error_reporting(0);

// if(isset($_SESSION['customer'])) {
//     header("location: ./customer.php");
// }

if(isset($_POST['submit'])) {
    $name = $_POST['nama'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $time = $_POST['time'];
    $date = $_POST['date'];
   

    $sql = "INSERT INTO booking (name, email, phone, time, date) VALUES ('$name', '$email', '$phone', '$time', '$date')";
    $result = $mysqli->query($sql);

    if($result){
      echo "<script>alert('Berjaya reservation!');</script>";
  }

}


//PART MESSAGE ANNOUCEMENT:
$sql = "SELECT * FROM inf";
$result = $mysqli->query($sql);

//Part click button action:
if(isset($_GET['delete'])) {
  $id = $_GET['delete'];
  $mysqli->query("DELETE FROM inf WHERE id=$id");

  //message alert:
  $_SESSION['message'] = "Record has been deleted";
  $_SESSION['msg_type'] = "danger";

  header("location: customer.php");
}

?>

<!-- HTML FILE  -->
<!DOCTYPE html>
<html lang="en">
<head>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<style>
    <?php include "customer.css" ?>
</style>
<body>  

<div class="wrapper">
    <!-- Sidebar Holder -->
    <nav id="sidebar">
      <div class="sidebar-header">
        <h3>Tuah.</h3>
        </h3>
      </div>

      <ul class="list-unstyled components">
        <p class="user">Customer</p>

        <li>
          <a href="#main">Dashboard</a>
        </li>
        <li>
          <a href="#an">Annoucement</a>
        </li>
        <li>
          <a href="../logout.php">Logout</a>
        </li>


      </ul>


    </nav>

    <!-- Page Content Holder -->
    <div id="content">

      <nav class="navbar navbar-default">
        <div class="container-fluid">

          <div class="navbar-header">
            <button type="button" id="sidebarCollapse" class="btn btn-info navbar-btn">
                                <i class="glyphicon glyphicon-align-left"></i>
                                <span>Sidebar</span>
                            </button>
          </div>

          <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav navbar-right">
              <li><a href="#">Page</a></li>
            </ul>
          </div>
        </div>
      </nav>

        <!-- Body  -->

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

    <div class="container" id="an">
    <table class="table table-dark">
      <h2 class="text-white pt-3">Message by Admin</h2>
        <thead>
            <tr>
                <th>Name</th>
                <th>message</th>
                <th>Date</th>
                <th>Delete</th>
            </tr>
        </thead>
        <?php
        while ($row = $result -> fetch_assoc()):    ?>  
        <tr>
        <td><?php echo $row['name'];  ?></td>
            <td><?php echo $row['message']; ?></td>
            <td><?php echo $row['cr_date']; ?></td>
            <td>
                <a href="customer.php?delete=<?php echo $row['id']; ?>"
                    class="btn btn-danger">Delete</a>
            </td>
        </tr>
        <?php  endwhile;  ?>    
      
    </table>
    </div>

    <footer>
        <p>© 2022 Naufal Azim.</p>
    </footer>
    
</div>

    </div>
  </div>


  <!-- jQuery CDN -->
  <script src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
  <!-- Bootstrap Js CDN -->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <!-- jQuery Custom Scroller CDN -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.concat.min.js"></script>

  <script type="text/javascript">
    $(document).ready(function() {


      $('#sidebarCollapse').on('click', function() {
        $('#sidebar, #content').toggleClass('active');
        $('.collapse.in').toggleClass('in');
        $('a[aria-expanded=true]').attr('aria-expanded', 'false');
      });
    });
  </script>


  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>

