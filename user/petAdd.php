<?php
    include('../dbcon.php');
  include('includes/sessionUser.php');
    if (isset($_POST['petAdd'])) {
        $pet_id = $_POST['pet_id'];
        $pet_name = $_POST['pet_name'];
        $pet_specie = $_POST['pet_specie'];
        $pet_breed = $_POST['pet_breed'];
        $pet_gender = $_POST['pet_gender'];
        if (!$conn) {
            die('Could not connect to the database.');
        }
        else {
            $loggedinRes = $_SESSION['res_id'];
            $query = "INSERT INTO pets_approval(ap_pet_id, res_id, ap_pet_name, ap_pet_specie, ap_pet_breed, ap_pet_gender)
            VALUES('$pet_id','$loggedinRes', '$pet_name', '$pet_specie', '$pet_breed', '$pet_gender')";
            $result = mysqli_query($conn, $query);
            if(!$result){
                die("Error: " . mysqli_error($conn));
            }
            else {
                // $_SESSION['message'] = 'Item Added Successfully!';
                // $_SESSION['message_type'] = 'success';
                header("Location: http://homebuddies.epizy.com/user/userpets.php"); 
            }
        }
    }
?>