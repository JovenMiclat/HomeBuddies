<?php
    include('../dbcon.php');
    include('includes/sessionAdmin.php');
    if (isset($_POST['carAdd'])) {
        $car_platenum = $_POST['car_platenum'];
        $car_brand = $_POST['car_brand'];
        $car_mod = $_POST['car_mod'];
        $car_year = $_POST['car_year'];
        $car_color = $_POST['car_color'];
        if (!$conn) {
            die('Could not connect to the database.');
        }
        else {
            $loggedinRes = $_SESSION['res_id'];
            $query = "INSERT INTO car_approval(ap_car_platenum, res_id, ap_car_brand, ap_car_mod, ap_car_year, ap_car_color)
            VALUES('$car_platenum', '$loggedinRes', '$car_brand', '$car_mod', '$car_year', '$car_color')";
            $result = mysqli_query($conn, $query);
            if(!$result){
                die("Error: " . mysqli_error($conn));
            }
            else {
                // $_SESSION['message'] = 'Item Added Successfully!';
                // $_SESSION['message_type'] = 'success';
                header("Location: http://homebuddies.epizy.com/admin/admincars.php"); 
            }
        }
    }

    if (isset($_GET['ap_car_platenum'])) {
        $car_platenum = $_GET['ap_car_platenum'];
        $select = "SELECT * FROM car_approval WHERE ap_car_platenum='{$car_platenum}'";
        $res = mysqli_query($conn, $select);
        $row = mysqli_fetch_assoc($res);

        $resid = $row['res_id'];
        $car_brand = $row['ap_car_brand'];
        $car_mod = $row['ap_car_mod'];
        $car_year = $row['ap_car_year'];
        $car_color = $row['ap_car_color'];
        if (!$conn) {
            die('Could not connect to the database.');
        }
        else {
            $query = "INSERT INTO car(car_platenum, res_id, car_brand, car_mod, car_year, car_color)
            VALUES('$car_platenum', '$resid', '$car_brand', '$car_mod', '$car_year', '$car_color')";
            $delete = "DELETE FROM car_approval WHERE ap_car_platenum = '$car_platenum'";
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
                header("Location: http://homebuddies.epizy.com/admin/admincarsapproval.php"); 
                }
            }
        }
    }
?>