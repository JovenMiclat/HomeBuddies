<?php
    $currentPage = basename($_SERVER['PHP_SELF']);
    echo $currentPage;
    if($currentPage == 'dummy.php'){
        echo 'active';
    }
    session_start();
    echo $_SESSION['res_id'] . $_SESSION['res_admin'];
?>