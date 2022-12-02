<?php
    session_start();
    $res_id = $_SESSION['res_id'];
    $query = "SELECT * FROM residents WHERE res_id = '$res_id'";
    $result = mysqli_query($conn, $query);
    while($row = mysqli_fetch_assoc($result)){
        $res_fname = $row['res_fname'];
        $res_lname = $row['res_lname'];
        $res_email = $row['res_email'];
        $res_cnum = $row['res_cnum'];
        $res_bday = $row['res_bday'];
        $res_gender = $row['res_gender'];
        $res_pword = $row['res_pword'];
    }

    if($_SESSION['res_admin'] == 1 || !isset($_SESSION['res_id'])){
        header("Location: http://homebuddies.epizy.com/login.php");
    }
?>