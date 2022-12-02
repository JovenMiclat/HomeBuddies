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
      header('Location: http://homebuddies.epizy.com/admin/admincars.php');
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
      if($_SERVER['HTTP_REFERER'] == "http://homebuddies.epizy.com/admin/admincarsapproval.php"){
        header('Location: http://homebuddies.epizy.com/admin/admincarsapproval.php');  
      }else{
      // $_SESSION['message'] = 'Removed Successfully';
      // $_SESSION['message_type'] = 'danger';
      header('Location: http://homebuddies.epizy.com/admin/admincars.php');
    }
  }
  }
?>