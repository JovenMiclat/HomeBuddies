<?php

$host = "sql310.epizy.com";
$dbUsername = "epiz_29043610";
$dbPassword = "jm1YYyBgGjiU4";
$dbName = "epiz_29043610_test";
$conn = new mysqli($host, $dbUsername, $dbPassword, $dbName);
   
    if(isset($_POST['Updatebtn'])){
        
        $id = $_POST['res_id'];
        $email = $_POST['email'];
        $cnum =  $_POST['cnum'];
        $pword = $_POST['pword'];

        $query = "UPDATE residents SET res_email = '$email', res_cnum = '$cnum', res_pword = '$pword' WHERE res_id = '$id'";
        $result = mysqli_query($conn, $query);
            if(!$result){
                    printf( "Error: " .mysqli_error($conn));
                    // $_SESSION['message_type'] = 'danger';
                    echo $id;
                    echo $email;
                    echo $cnum;
                    echo$pword; 
                  }
            else {
                    // $_SESSION['message'] = 'Update Success!';
                    // $_SESSION['message_type'] = 'success';
                    header("Location: http://homebuddies.epizy.com/admin/adminprofilepage.php"); 
                    }
            
    }
?>