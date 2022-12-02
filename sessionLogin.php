<?php

session_start();

//Redirects the logged in user to page WITH admin privileges
if (isset($_SESSION['res_id']) && $_SESSION['res_admin'] == 1) {
	header("Location: /admin/adminannouncements.php");
}

//Redirects the logged in user to page WITHOUT admin privileges
else if (isset($_SESSION['res_id']) && $_SESSION['res_admin'] == 0) {
	header("Location: /user/userannouncements.php");
}

?>