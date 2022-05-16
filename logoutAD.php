<?php 

session_start();

session_unset();
header("location: loginAD.php");
session_destroy();

?>
