<?php
    session_start(); 
    include_once('konnect/connect.php');
    
	if (!isset($_SESSION['user_id']) ||(trim ($_SESSION['user_id']) == '')) {
	echo "<script type='text/javascript'> document.location = 'index.php'; </script>";
    exit();
	}
	
	$id = $_SESSION['user_id'];
    
	$sq=mysqli_query($conn,"select * from `sys_users` where user_id='".$_SESSION['user_id']."'");
	$srow=mysqli_fetch_array($sq);
		
	$user=$srow['username'];
	$church=$srow['church'];

    
?>