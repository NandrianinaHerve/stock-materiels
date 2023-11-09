<?php
session_start(); 


$_SESSION = array();


session_destroy();


header("Location:  ../frontend/test.php"); 
exit();
?>
