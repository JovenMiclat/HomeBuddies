<?php 
  include('../dbcon.php');
  if(isset($_GET['car_platenum'])) {
    $car_platenum = $_GET['car_platenum'];
    $query = "DELETE FROM car WHERE car_platenum = '$car_platenum'";
    $result = mysqli_query($conn, $query);
    if(!$result) {
      die("Query Failed.");
    }
    else{
      // $_SESSION['message'] = 'Removed Successfully';
      // $_SESSION['message_type'] = 'danger';
      header('Location: http://homebuddies.epizy.com/user/usercars.php');
    }
  }
  if(isset($_GET['ap_car_platenum'])) {
    $car_platenum = $_GET['ap_car_platenum'];
    $query = "DELETE FROM car_approval WHERE ap_car_platenum = '$car_platenum'";
    $result = mysqli_query($conn, $query);
    if(!$result) {
      die("Query Failed.");
    }
    else{
      // $_SESSION['message'] = 'Removed Successfully';
      // $_SESSION['message_type'] = 'danger';
      header('Location: http://homebuddies.epizy.com/user/usercars.php');
    }
  }
?>