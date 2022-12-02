<?php
include('dbcon.php');
session_start();

if (isset($_POST['dbregister'])) {
    $res_id = $_POST['res_id'];
    $res_fname = $_POST['res_fname'];
    $res_lname = $_POST['res_lname'];
    $res_email = $_POST['res_email'];
    $res_cnum = '63' . $_POST['res_cnum'];
    $res_bday = $_POST['res_bday'];
    $res_gender = $_POST['res_gender'];
    $res_pword = $_POST['res_pword'];
    $query = "SELECT res_id, res_registered FROM residents";
    $result = mysqli_query($conn, $query);

    if (!$conn) {
        die('Could not connect to the database.');
    }

    else {
        while ($row = mysqli_fetch_assoc($result)) {
            if ($res_id == $row['res_id'] && $row['res_registered'] == 0) {
                $query = "UPDATE residents SET res_fname = '$res_fname', res_lname = '$res_lname', res_email = '$res_email', res_cnum = '$res_cnum', 
                        res_bday = '$res_bday', res_gender = '$res_gender', res_pword = '$res_pword', res_registered = '1' WHERE residents.res_id = '$res_id'";

                $result = mysqli_query($conn, $query);

                if (!$result) {

                    $_SESSION['message'] = "Error: " . mysqli_error($conn);

                    $_SESSION['message_type'] = 'danger';

                    header("Location: http://homebuddies.epizy.com/register.php");

                }

                else {

                    $_SESSION['message'] = 'Registered successfully!';

                    $_SESSION['message_type'] = 'success';

                    header("Location: http://homebuddies.epizy.com/register.php");

                }

            }

            else {

                $_SESSION['message'] = "Error: Either entered resident ID not in the database or is already registered.";

                $_SESSION['message_type'] = 'danger';

                header("Location: http://homebuddies.epizy.com/register.php");

            }

        }



    }

}