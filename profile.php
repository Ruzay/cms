<?php
include("session.php");

$msg="";

//--------------add data-----------------	
if(isset($_POST['btn_sub'])){
    $surname=$_POST['surnametxt'];
	$name=$_POST['nametxt'];
	$postal_add=$_POST['postaltxt'];
	$res=$_POST['restxt'];
	$street=$_POST['streetxt'];
	$house=$_POST['housetxt'];
	$email=$_POST['emailtxt'];
	$phone=$_POST['phonetxt'];
    
	   $sql= "SELECT * FROM sys_users WHERE user_id = '$id'";
	   $sql_sel=mysqli_query($conn, $sql);
	   while($row=mysqli_fetch_array($sql_sel)){
	   $admin = $row['admin_id'];
	 
	
	   $qry="UPDATE admin SET surname = '$surname', name = '$name', place = '$house', post_add = '$postal_add', phy_add = '$res', street = '$street', phone = '$phone', email= '$email' WHERE admin_id = '$admin'";
	   $result=mysqli_query($conn, $qry);
		
			
if($qry==true)
    $msg="1 row updated successful";
else
	$msg="Insert Error:".mysql_error();
	}
	}
	
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>CMS | Registration</title>
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
    <a href="../../index2.html" class="logo">
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
		  <?php
	  
	   $sql = "SELECT * FROM sys_users WHERE user_id = '$id'";
	   $sql_sel=mysqli_query($conn, $sql);
	   while($row=mysqli_fetch_array($sql_sel)){
	   
	  ?>
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <img src="<?php echo $row['image'];  ?>" class="user-image" alt="User Image">
              <span class="hidden-xs">Profile</span>
            </a>
            <ul class="dropdown-menu">
              <!-- User image -->
              <li class="user-header">
                <img src="<?php echo $row['image']; ?>" class="img-circle" alt="User Image">

                <p>
                   <?php echo $row['name']; ?>
                  <small>
				  <?php
	  $sql = "SELECT * FROM sys_users WHERE user_id = '$id'";
	   $sql_sel=mysqli_query($conn, $sql);
	   while($row=mysqli_fetch_array($sql_sel)){
	   
	   echo $row['church_name'];
	  }
	  
	  ?>
				  </small>
                </p>
              </li>
			  
              <li class="user-footer">
                
                <div class="pull-right">
                  <a href="logout.php" class="btn btn-default btn-flat">Sign out</a>
                </div>
              </li>
            </ul>
          </li>
		  <?php } ?>
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
     <?php
	   $sql = "SELECT * FROM sys_users WHERE user_id = '$id'";
	   $sql_sel=mysqli_query($conn, $sql);
	   while($row=mysqli_fetch_array($sql_sel)){
	   
	  ?>
      <div class="user-panel">
        <div class="pull-left image">
		
                <img src=" <?php echo $row['image']; ?>" class="img-circle" alt="User Image">
           
        </div>
        <div class="pull-left info">
          <p><?php echo $row['name']; ?></p>
		  
		   
		    <p class="header"><?php echo $row['position']; ?></p>
		    
     <div>    <a href="#"><i class="fa fa-circle text-success"></i> Online</a></div>
          
          
       </div>
      </div>
      
	   <?php } ?>
         
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
        
          
		   
        <li class="header">Kingdom Technology</li>
        <li><a href="#"><i class="fa fa-circle-o text-red"></i> <span>about</span></a></li>
       <li><a href="#"><i class="fa fa-circle-o text-aqua"></i> <span>Details</span></a></li>
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
     <?php
	  
	   $sql = "SELECT * FROM sys_users WHERE user_id = '$id'";
	   $sql_sel=mysqli_query($conn, $sql);
	   while($row=mysqli_fetch_array($sql_sel)){
	   echo $row['name'];
	   echo " 's Profile";
	  }
	  ?>
      </h1> <small> View User Profile
	</small>
      <ol class="breadcrumb">
         <li><a href=""><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="">Dashboard</a></li>
		<li><a href="">Register member</a></li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">

      <div class="row">
        <div class="col-md-3">

         <div class="box box-primary">
            <div class="box-body box-profile">
              
          <!-- small box -->
          
		  <center>
            <div class="inner">
			 <?php
	   $sql = "SELECT * FROM sys_users WHERE user_id = '$id'";
	   $sql_sel=mysqli_query($conn, $sql);
	   while($row=mysqli_fetch_array($sql_sel)){
	   
	  ?>
               
             <img src="<?php echo $row['image'] ?>" class="img-circle" width="100" height="100">
               <?php } ?>
              <p>
			    <?php
	   $sql = "SELECT * FROM sys_users WHERE user_id = '$id'";
	   $sql_sel=mysqli_query($conn, $sql);
	   while($row=mysqli_fetch_array($sql_sel)){
	   
	   echo $row['name'];
	  }
	  ?>
			  </p>
            </div>
            <div class="icon">
              <i class="ion ion-pie-graph"></i>
            </div>
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">
             <span class="hidden-xs">  Change Profile pic </span>
            </a>
			  <ul class="dropdown-menu">
			<form action="changepp.php" method="post" enctype="multipart/form-data" role="form">
															<div class="modal-content">
																<div class="modal-header">
																	<button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
																	<center><h4>Change Profile Picture</h4></center>
																</div>
																<div class="modal-body col-sm-12">
																	<div class="form-group col-sm-8">
																		<input type="hidden" name="user" id="user" value="<?php echo $_SESSION['user_id']?>">
																		<div class="col-sm-6"><input type="file" name="image" required> </div>
																	</div>
																</div>
																<div class="modal-footer">
																	<button type="submit" id="upload" name="upload" class="btn btn-success">Change Picture</button>
																	<button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
																</div>
															</div>
														</form>
				     				
		
			  </ul>
			  </center>
          
        
		
         </div>
		 <a href="setpass.php" class="btn btn-primary btn-block"><b>Change Password</b></a>
            <!-- /.box-body -->
          </div>
        </div>
   
   <div class="col-md-9">
          <div class="nav-tabs-custom">
		  <?php echo $msg ?>
            <ul class="nav nav-tabs">
		
              <li class="active"><a href="#activity" data-toggle="tab">Change Profile</a></li>
			</ul>
            <div class="tab-content">
			<div class="active tab-pane" id="activity">
			
			
			 <?php
	   $sql = "SELECT * FROM sys_users WHERE user_id = '$id'";
	   $sql_sel=mysqli_query($conn, $sql);
	   while($row=mysqli_fetch_array($sql_sel)){
	   $admin = $row['admin_id'];
	  ?>
	   <?php
	   $sql = "SELECT * FROM admin WHERE admin_id = '$admin'";
	   $sql_sel=mysqli_query($conn, $sql);
	   while($row=mysqli_fetch_array($sql_sel)){
	
	  ?>
              <form class="form-horizontal" method="post">
			  
                  <div class="form-group">
                    <label class="col-sm-2 control-label">Last name</label>

                    <div class="col-sm-10">
					 <input type="hidden" name="receive" value="<?php echo $id  ?>">
                      <input type="text" name="surnametxt" class="form-control"  value="<?php echo $row['surname'] ?>" required>
                    </div>
                  </div>
                  
                  <div class="form-group">
                    <label  class="col-sm-2 control-label">first name</label>

                    <div class="col-sm-10">
                      <input type="text" name="nametxt" class="form-control"  value="<?php echo $row['name'] ?>" required>
                    </div>
                  </div>
				  
				   
                  <div class="form-group">
                    <label  class="col-sm-2 control-label">Place</label>

                    <div class="col-sm-10">
                      <input type="text" name="housetxt" class="form-control"  value="<?php echo $row['place'] ?>" required>
                    </div>
                  </div>
				  
				  <div class="form-group">
                    <label   class="col-sm-2 control-label">Postal Address</label>

                    <div class="col-sm-10">
                      <input type="text" name="postaltxt" class="form-control" value="<?php echo $row['post_add'] ?>" required>
                    </div>
                  </div>
				  
				  <div class="form-group">
                    <label  class="col-sm-2 control-label">Physical Address</label>

                    <div class="col-sm-10">
                      <input type="text" name="restxt" class="form-control" value="<?php echo $row['phy_add'] ?>" required>
                    </div>
                  </div>
				  <div class="form-group">
                    <label  class="col-sm-2 control-label">Street</label>

                    <div class="col-sm-10">
                      <input type="text" name="streetxt" class="form-control"  value="<?php echo $row['street'] ?>" required>
                    </div>
                  </div>
			  
				  <div class="form-group">
                    <label for="inputSkills" class="col-sm-2 control-label">Email</label>

                    <div class="col-sm-10">
                      <input type="text" name="emailtxt" class="form-control"  value="<?php echo $row['email'] ?>" required>
                    </div>
                  </div>
				  
				  <div class="form-group">
                <label  class="col-sm-2 control-label">phone/cell</label>
                  <div class="col-sm-10">
                  <input type="text" name="phonetxt" class="form-control" value="<?php echo $row['phone'] ?>" required >
                </div>
              </div>
				
				   <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
                      <button type="submit" name="btn_sub" class="btn btn-primary">SAVE</button>
                    </div>
                  </div>
                </form>
				 <?php
	  }
	   }
	   
	  ?>
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
    <strong>Copyright &copy; 2017 <a href="#">Techrise Technologies</a>.</strong> All rights
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
<script src="plugins/jQuery/jquery-2.2.3.min.js"></script>
<!-- Bootstrap 3.3.6 -->
<script src="bootstrap/js/bootstrap.min.js"></script>
<!-- FastClick -->
<script src="plugins/fastclick/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/app.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>
</body>
</html>
