<?php
// Used for logging in as resident/admin
include('dbcon.php');
session_start();

// used for resident login
if (isset($_POST['dbLoginRes'])) {

    // instantiate required variables
    $res_id = $_POST['res_id'];
    $res_pword = $_POST['res_pword'];
    $res_admin = 1;
    $success = 0;

    $query = "SELECT res_id, res_pword, res_admin FROM residents";
    $result = mysqli_query($conn, $query);
    if (!$conn) {
        die('Could not connect to the database.');
    }
    else {
        while ($row = mysqli_fetch_assoc($result)) {
            if ($res_id == $row['res_id'] && $res_pword == $row['res_pword']) {
                $success = 1;
                if ($row['res_admin'] == 0) {
                    $_SESSION['res_id'] = $res_id;
                    $_SESSION['res_admin'] = $row['res_admin'];
                    $res_admin = 0;
                    header("Location: /user/userannouncements.php");
                }
            }
        }
        if (!$success) {
            $_SESSION['message'] = 'Incorrect ID/Password entered!';
            $_SESSION['message_type'] = 'danger';
            header("Location: /login.php");
        }

        else if ($res_admin) {
            $_SESSION['message'] = 'Admin must login with Admin Login!';
            $_SESSION['message_type'] = 'danger';
            header("Location: /login.php");
        }
    }
}


// used for admin login
if (isset($_POST['dbLoginAdmin'])) {

    // instantiate required variables
    $res_id = $_POST['ad_id'];
    $res_pword = $_POST['ad_pword'];
    $res_admin = 0;
    $success = 0;

    $query = "SELECT res_id, res_pword, res_admin FROM residents";
    $result = mysqli_query($conn, $query);
    if (!$conn) {
        die('Could not connect to the database.');
    }
    else {
        while ($row = mysqli_fetch_assoc($result)) {
            if ($res_id == $row['res_id'] && $res_pword == $row['res_pword']) {
                $success = 1;
                if ($row['res_admin'] == 1) {
                    $_SESSION['res_id'] = $res_id;
                    $_SESSION['res_admin'] = $row['res_admin'];
                    $res_admin = 1;
                    header("Location: /admin/adminannouncements.php");
                }
            }
        }

        if (!$success) {
            $_SESSION['message'] = 'Incorrect ID/Password entered!';
            $_SESSION['message_type'] = 'danger';
            header("Location: /login.php");
        }

        else if (!$res_admin) {
            $_SESSION['message'] = 'You don\'t have admin privileges!';
            $_SESSION['message_type'] = 'danger';
            header("Location: /login.php");
        }
    }
}
?>