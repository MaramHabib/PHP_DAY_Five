<?php
// Initialize the session
session_start();

setcookie(session_name(), '', -100);

setcookie ("PHPSESSID", $_COOKIE['PHPSESSID'], time() - 864000, '/');

setcookie('PHPSESSID', '', -3600);
 
// Unset all of the session variables
$_SESSION = array();

// Unset seesion id
unset($_SESSION["id"]);

// Unset seesion name
unset($_SESSION["name"]);
 
// Destroy the session.
session_destroy();
 
// Redirect to login page
header("location: mylogin.php");
exit;
?>