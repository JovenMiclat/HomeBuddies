<?php
    include('../dbcon.php');
    include('includes/sessionUser.php');
    if (isset($_POST['addRes'])) {
        $res_id_add = $_POST['res_id_add'];
        $res_registered = 0;
        $res_admin = 0;
        if (!$conn) {
            die('Could not connect to the database.');
        }
        else {
            if ($_POST['admincheck'] == 'admin'){
                $res_admin = 1;
                $res_id_add = substr($res_id_add, 0,7) . "1";
            }
            $query = "INSERT INTO residents(res_id, res_registered, res_admin) VALUES('$res_id_add', '$res_registered', '$res_admin')";
            $result = mysqli_query($conn, $query);
            if(!$result){
                die("Error: " . mysqli_error($conn));
            }
            else {
                // $_SESSION['message'] = 'Item Added Successfully!';
                // $_SESSION['message_type'] = 'success';
                header("Location: http://homebuddies.epizy.com/admin/admindirectory.php"); 
            }
        }
    }
?>