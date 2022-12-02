<?php
    include('../dbcon.php');
  include('includes/sessionAdmin.php');
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
                header("Location: http://homebuddies.epizy.com/admin/adminpets.php"); 
            }
        }
    }

    if (isset($_GET['ap_pet_id'])) {
        $pet_id = $_GET['ap_pet_id'];
        $select = "SELECT * FROM pets_approval WHERE ap_pet_id='{$pet_id}'";
        $res = mysqli_query($conn, $select);
        $row = mysqli_fetch_assoc($res);

        $resid = $row['res_id'];
        $pet_specie = $row['ap_pet_specie'];
        $pet_breed = $row['ap_pet_breed'];
        $pet_name = $row['ap_pet_name'];
        $pet_gender = $row['ap_pet_gender'];
        if (!$conn) {
            die('Could not connect to the database.');
        }
        else {
            $query = "INSERT INTO pets(pet_id, res_id, pet_specie, pet_breed, pet_name, pet_gender)
            VALUES('$pet_id', '$resid', '$pet_specie', '$pet_breed', '$pet_name', '$pet_gender')";
            $delete = "DELETE FROM pets_approval WHERE ap_pet_id = '$pet_id'";
            $result = mysqli_query($conn, $query);
            $result1 = mysqli_query($conn, $delete);
            if(!$result){
                die("Error: " . mysqli_error($conn));
            }
            else {
                if(!$result1){
                    die("Error2: " . mysqli_error($conn));
                }else{
                // $_SESSION['message'] = 'Item Added Successfully!';
                // $_SESSION['message_type'] = 'success';
                header("Location: http://homebuddies.epizy.com/admin/adminpetsapproval.php"); 
                }
            }
        }
    }
?>