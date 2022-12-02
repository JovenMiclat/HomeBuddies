<?php
    session_start();
    session_destroy();
    header("Location: http://homebuddies.epizy.com/login.php"); 
?>