<?php
include("session.php");
?>

<!DOCTYPE html>
<html>
<head>
  <?php include("links1.php"); ?>
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">
    
<?php include("header1.php") ?>

  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
 <?php include("sidebar1.php");?>
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
     <
        <small> CMS version1.0</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
		 <li><a href="#"><i class="fa fa-dashboard"></i> Deceased</a></li>
		  <li><a href="#"><i class="fa fa-dashboard"></i>Committee</a></li>
        <li class="active">Dashboard</li>
      </ol>
	  
    </section>

    <!-- Main content -->
    <?php include('myJS.php'); ?>
    
    <footer class="main-footer">
    <div class="pull-right hidden-xs">
      <b>Version</b> 1.0
    </div>
    <strong>Copyright &copy; 2017 <a href="#">Techrise Technologies</a>.</strong> All rights
    reserved.
  </footer>
</div>