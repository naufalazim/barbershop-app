<?php
include "../include/connection.php";


$sql = "SELECT * FROM booking";
$result = $mysqli->query($sql);
$queryResult = mysqli_num_rows($result);

if(isset($_POST['search'])) {
    $search = mysqli_real_escape_string($mysqli, $_POST['query']);
    $sql = "SELECT * FROM booking WHERE name LIKE '%$search%' OR email LIKE '%$search%'";
    $result = $mysqli->query($sql);
    $queryResult = mysqli_num_rows($result);

    if($queryResult > 0) {
        while($row = mysqli_fetch_assoc($result)){
                echo "
                <h4>".$row['name']."</h4>";
                echo "<script>alert('Approved!');<script>";
        }
    }else {
        echo "No result";
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body>
<div class="container" id="an">
    <table class="table table-hover">
      <h2 class="text-white text-center bg-dark">Approval Customer</h2>


        <thead class="thead-dark">
            <tr>
                <th>Name</th>
                <th>email</th>
                <th>phone</th>
                <th>status</th>
            </tr>
        </thead>
        <?php
        while ($row = $result -> fetch_assoc()):    ?>  
        <tr>
            <td class="table-info"><?php echo $row['name'];  ?></td>
            <td class="table-info"><?php echo $row['email']; ?></td>
            <td class="table-info"><?php echo $row['phone']; ?></td>
            <td class="table-success"><?php echo $row['status']; ?></td>
  
        </tr>
        <?php  endwhile;  ?>    
      
    </table>
    </div>

      <!-- jQuery CDN -->
  <script src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
  <!-- Bootstrap Js CDN -->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <!-- jQuery Custom Scroller CDN -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.concat.min.js"></script>

</body>
</html>