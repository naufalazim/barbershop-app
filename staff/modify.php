<?php
include "../include/connection.php";
error_reporting(0);

$id="";
if(isset($_POST['update'])) {
//   $id= $_POST['id'];
  $id= $_GET['id'];
  $name= $_POST['name'];
  $email= $_POST['email'];
  $phone= $_POST['phone'];
  $time= $_POST['time'];
  $date= $_POST['date'];

  $sql= " UPDATE `booking` SET `name`='$_POST[name]',`email`='$_POST[email]',`phone`='$_POST[phone]',`time`='$_POST[time]',`date`='$_POST[date]' WHERE id='$_POST[id]'";
  $result = $mysqli->query($sql);

  if($result){
    echo "<script>alert('Data updated!');</script>";
  }

}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title>Update Form</title>
</head>
<body>

  <div class="container" style="margin-top: 60px;">
  <h3>Update</h3>

  <form action="" method="POST">
  <input type="text" name="id" placeholder="id" value="<?php echo $id;    ?>"><br>

  <div class="form-group">
    <label>Name:</label>
    <input type="text" name="name" class="form-control" placeholder="Your Name" value="">
  </div>

  <div class="form-group">
    <label>Email:</label>
    <input type="email" name="email" class="form-control" placeholder="Your Email" value="" >
  </div>

  <div class="form-group">
    <label>Phone:</label>
    <input type="phone" name="phone" class="form-control" placeholder="Your Phone" value="">
  </div>

  <div class="form-group">
    <label>Date:</label>
    <input type="date" name="date" class="form-control" placeholder="Your Date" value="">
  </div>

  <div class="form-group">
    <label>Time:</label>
    <input type="time" name="time" class="form-control" placeholder="Your Time" value="">
  </div>

  <button type="submit" name="update" class="btn btn-success">Submit</button>
  <h2 class="text-center"><a href="staff.php">Back</h2>
  </form>

  </div>



  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>