<?php
  include('../dbcon.php');
  if(isset($_GET['pet_id'])) {
    $pet_id = $_GET['pet_id'];
    $query = "DELETE FROM pets WHERE pet_id = '$pet_id'";
    $result = mysqli_query($conn, $query);
    if(!$result) {
      die("Query Failed.");
    }
    else{
      // $_SESSION['message'] = 'Removed Successfully';
      // $_SESSION['message_type'] = 'danger';
      header('Location: http://homebuddies.epizy.com/user/userpets.php');
    }
  }
  if(isset($_GET['ap_pet_id'])) {
    $pet_id = $_GET['ap_pet_id'];
    $query = "DELETE FROM pets_approval WHERE ap_pet_id = '$pet_id'";
    $result = mysqli_query($conn, $query);
    if(!$result) {
      die("Query Failed.");
    }
    else{
      // $_SESSION['message'] = 'Removed Successfully';
      // $_SESSION['message_type'] = 'danger';
      header('Location: http://homebuddies.epizy.com/user/userpets.php');
    }
  }
?>