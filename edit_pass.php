<?php
session_start();
include("../konnect/connect.php");

//--------------add data-----------------	
if(isset($_POST['btn_sub'])){
    $admin="admin";
	$role=$_POST['roletxt'];
	$code=$_POST['codetxt'];
    $user=$_POST['usertxt'];
	$pass=$_POST['passtxt'];
	$name=$_POST['church_name'];
	$admin_id=$_POST['admin'];

	$id=intval($_GET['id']);

	mysql_query($conn, "INSERT INTO sys_users (admin_id, username, position, password, church, church_name) VALUES ('$admin_id', '$user', '$role', '$pass', '$code', '$name')");
				
	

	
}
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>CMS | Assign</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.6 -->
  <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="dist/css/skins/_all-skins.min.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <header class="main-header">
    <!-- Logo -->
    <a href="../menu.php" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>c</b>MS</span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>CMS</b>LTE</span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </a>

      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <!-- Messages: style can be found in dropdown.less-->
		  
		  
          <li class="dropdown messages-menu">
            
          </li>
		 
          <!-- Notifications: style can be found in dropdown.less -->
          <li class="dropdown notifications-menu">
           </li>
          <!-- Tasks: style can be found in dropdown.less -->
          <li class="dropdown tasks-menu">
           
            
			
			
          </li>
          <!-- User Account: style can be found in dropdown.less -->
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <img src="../dist/img/user2-160x160.jpg" class="user-image" alt="User Image">
              <span class="hidden-xs">Profile</span>
            </a>
            <ul class="dropdown-menu">
              <!-- User image -->
              <li class="user-header">
                <img src="../dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">

                <p>
                  member
                  <small>Member since Nov. 2012</small>
                </p>
              </li>
          
              <li class="user-footer">
               
                <div class="pull-right">
                  <a href="logoutAD.php" class="btn btn-default btn-flat">Sign out</a>
                </div>
              </li>
            </ul>
          </li>
          <!-- Control Sidebar Toggle Button -->
          <li>
            <a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>
          </li>
        </ul>
      </div>
    </nav>
  </header>
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="../dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p>CMS</p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
      <!-- search form -->
      <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="q" class="form-control" placeholder="Search...">
              <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
        </div>
      </form>
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu">
        <li class="header">MAIN NAVIGATION</li>
        <li class="active treeview">
          <a href="#">
            <i class="fa fa-dashboard"></i> <span>Registration</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="regChurch.php"><i class="fa fa-circle-o"></i> Register</a></li>
            <li class="active"><a href="view_church.php"><i class="fa fa-circle-o"></i>View</a></li>
          </ul>
        </li> 
       
       
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
       Church Management System
      </h1> <small>Version 1.0</small>
      <ol class="breadcrumb">
         <li><a href="../menu.php"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="role.php">Add role</a></li>
	       <li class="active">Assigning</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">

      <div class="row">
        <div class="col-md-3">

         <div class="box box-primary">
            <div class="box-body box-profile">
			<a href="regChurch.php" class="btn btn-primary btn-block"><b>Add Church</b></a>
			<a href="view_church.php" class="btn btn-primary btn-block"><b>View Church</b></a>
	
            
		</div>
            <!-- /.box-body -->
          </div>
        </div>
		
						
						<?php 
				$id=intval($_GET['id']);

				$result = mysqli_query($conn, "SELECT * FROM sys_users WHERE admin_id = '$id'");

				//$count = mysql_num_rows($result);
						

				while($row = mysqli_fetch_array($result)){	

				$name = $row['name'];
				$code = $row['church'];
				//$church_name = $row['church_name']
				//$username = $row['username'];
                //$pass = $row['password'];
				
				
						

				?>
    <div class="col-md-9">
          <div class="nav-tabs-custom">
            <ul class="nav nav-tabs">
		
              <li class="active"><a href="#activity" data-toggle="tab">Assigning</a></li>
			</ul>
            <div class="tab-content">
			<div class="active tab-pane" id="activity">
              <form class="form-horizontal" method="post">
                 
                    <div class="form-group">
                       <label  class="col-sm-2 control-label">NAME</label>
				  
				       <div class="col-sm-10">
                        <input type="text" name="codetxt" class="form-control"  value="<?php echo $row['name']; ?>" required>
				       </div>
                   </div>
                      <div class="form-group">
                       <label  class="col-sm-2 control-label">CHURCH CODE</label>
				  
				       <div class="col-sm-10">
                        <input type="text" name="codetxt" class="form-control"  value="<?php echo $code ?>" required>
				       </div>
                   </div>	
                      <div class="form-group">
                    <label class="col-sm-2 control-label">USERNAME</label>

                    <div class="col-sm-10">
                      <input type="text" name="usertxt" class="form-control" value="<?php echo $row['username']; ?>"  >
                    </div>
                  </div>
				   
                   <div class="form-group">
                    <label class="col-sm-2 control-label">PASSWORD</label>

                    <div class="col-sm-10">
                      <input type="text" name="passtxt" class="form-control"  value="<?php echo $row['password']; ?>">
                    </div>
                  </div>
				   <div class="form-group">
                    <label class="col-sm-2 control-label">POSITION</label>

                    <div class="col-sm-10">
                      <input type="text" name="passtxt" class="form-control"  value="<?php echo $row['position']; ?>">
                    </div>
                  </div>
				   
				  
                </form>
                <!-- /.post -->
              </div>
              <!-- /.tab-pane -->
               <!-- /.tab-pane -->
            </div>
            <!-- /.tab-content -->
          </div>
          <!-- /.nav-tabs-custom -->
        </div>
        <!-- /.col -->
		<?php } ?>
      </div>
      <!-- /.row -->

   </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <div class="pull-right hidden-xs">
      <b>Version</b> 1.0
    </div>
    <strong>Copyright &copy; 2014-2016 <a href="#">Roosevelt Matse</a>.</strong> All rights
    reserved.
  </footer>

  <!-- Control Sidebar -->
  
  <!-- /.control-sidebar -->
  <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->

<!-- jQuery 2.2.3 -->
<script src="../plugins/jQuery/jquery-2.2.3.min.js"></script>
<!-- Bootstrap 3.3.6 -->
<script src="../bootstrap/js/bootstrap.min.js"></script>
<!-- FastClick -->
<script src="../plugins/fastclick/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="../dist/js/app.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../dist/js/demo.js"></script>
</body>
</html>
