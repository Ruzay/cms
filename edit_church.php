<?php
session_start();
require("../konnect/connect.php");

$msg="";

	
//--------------edit data-----------------	
if(isset($_POST['btn_sub'])){
    $surname=$_POST['surnametxt'];
	$name=$_POST['nametxt'];
	$postal_add=$_POST['postaltxt'];
	//$res_add=$_POST['residentialtxt'];
	$street=$_POST['streetxt'];
	$church_no=$_POST['housetxt'];
	$email=$_POST['emailtxt'];
	$phone=$_POST['phonetxt'];
	
	$church=$_POST['pretxt'];
	
	$reg_date=$_POST['datetxt'];
	
	$place=$_POST['placetxt'];
	
    $phy_add=$_POST['paddtxt'];
	
	
$id=intval($_GET['id']);

$qry="UPDATE admin SET surname = '$surname', name = '$name', church_no = '$church_no', church_name = '$church', place = '$place', post_add = '$postal_add', phy_add = '$phy_add', street= '$street', phone = '$phone', reg_date = '$reg_date', email= '$email' WHERE admin_id = '$id'";
$result=mysqli_query($conn, $qry);

$msg="User updated successfully";

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
  <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
  <!-- fullCalendar 2.2.5-->
  <link rel="stylesheet" href="../plugins/fullcalendar/fullcalendar.min.css">
  <link rel="stylesheet" href="../plugins/fullcalendar/fullcalendar.print.css" media="print">
  <!-- Theme style -->
  <link rel="stylesheet" href="../dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="../dist/css/skins/_all-skins.min.css">

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
          <img src="dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
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
     EDIT CHURCH ADMIN PANEL
      </h1> <small> CMS Version 1.0</small>
      <ol class="breadcrumb">
         <li><a href="menu.php"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="users.php">add users</a></li>
		<li><a href="role/assign.php">Assign member</a></li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">

      <div class="row">
        <div class="col-md-3">
	<?php 
	
$id=intval($_GET['id']);

$result = mysqli_query($conn, "SELECT * FROM admin WHERE admin_id = '$id'");

//$count = mysql_num_rows($result);
		

while($row = mysqli_fetch_array($result)){			
$admin = $row['admin_id'];
}
?>

         <div class="box box-primary">
            <div class="box-body box-profile">
              <a href="view_church.php" class="btn btn-primary btn-block"><b>View Church</b></a></b>
			 
			  <a href="set_passAD.php?id=<?php echo $admin;?>" class="btn btn-primary btn-block margin-bottom" ><b>Set Password</b></a>
         </div>
            <!-- /.box-body -->
          </div>
        </div>
   
   <div class="col-md-9">
          <div class="nav-tabs-custom">
            <ul class="nav nav-tabs">
		
              <li class="active"><a href="#activity" data-toggle="tab">Registration</a></li>
			</ul>
							<?php 
				$id=intval($_GET['id']);

				$result = mysqli_query($conn, "SELECT * FROM admin WHERE admin_id = '$id'");

				//$count = mysql_num_rows($result);
						

				while($row = mysqli_fetch_array($result)){			

				?>
            <div class="tab-content">
			<div class="active tab-pane" id="activity">
              <form class="form-horizontal" method="post">
			  
                  <div class="form-group">
                    <label class="col-sm-2 control-label">Admin Last name</label>

                    <div class="col-sm-10">
					 <input type="hidden" name="receive" value="<?php echo $id  ?>">
                      <input type="text" name="surnametxt" class="form-control" value="<?php echo htmlentities($row['surname']);?>" required>
                    </div>
                  </div>
                  
                  <div class="form-group">
                    <label  class="col-sm-2 control-label">Admin first name</label>

                    <div class="col-sm-10">
                      <input type="text" name="nametxt" class="form-control"  value="<?php echo htmlentities($row['name']);?>" required>
                    </div>
                  </div>
				  
				  <div class="form-group">
                    <label  class="col-sm-2 control-label"> Church Name </label>

                    <div class="col-sm-10">
                      <input type="text" class="form-control" name="pretxt"  value="<?php echo htmlentities($row['church_name']);?>" required>
                    </div>
                  </div>
			      
				  
				  <div class="form-group">
                    <label class="col-sm-2 control-label">Church No</label>

                    <div class="col-sm-10">
                      <input type="text" name="housetxt" class="form-control"  value="<?php echo htmlentities($row['church_no']);?>" required>
                    </div>
                  </div>
				 
				  <div class="form-group">
                    <label   class="col-sm-2 control-label">Postal Address</label>

                    <div class="col-sm-10">
                      <input type="text" name="postaltxt" class="form-control"  value="<?php echo htmlentities($row['post_add']);?>" required>
                    </div>
                  </div>
				  <div class="form-group">
                    <label   class="col-sm-2 control-label">Physical Address</label>

                    <div class="col-sm-10">
                      <input type="text" name="paddtxt" class="form-control"  value="<?php echo htmlentities($row['phy_add']);?>" required>
                    </div>
                  </div>
				  
				  <div class="form-group">
                    <label  class="col-sm-2 control-label">Residential</label>

                    <div class="col-sm-10">
                      <input type="text" name="placetxt" class="form-control"  value="<?php echo htmlentities($row['place']);?>" required>
                    </div>
                  </div>
				  
				  <div class="form-group">
                    <label  class="col-sm-2 control-label">Street</label>

                    <div class="col-sm-10">
                      <input type="text" name="streetxt" class="form-control"  value="<?php echo htmlentities($row['street']);?>" required>
                    </div>
                  </div>
			 
				  <div class="form-group">
                    <label for="inputSkills" class="col-sm-2 control-label">Email</label>

                    <div class="col-sm-10">
                      <input type="text" name="emailtxt" class="form-control"  value="<?php echo htmlentities($row['email']);?>" required>
                    </div>
                  </div>
				  
				  <div class="form-group">
                <label  class="col-sm-2 control-label">phone/cell</label>
                  <div class="col-sm-10">
                  <input type="text" name="phonetxt" class="form-control" value="<?php echo htmlentities($row['phone']);?>" required >
                </div>
              </div>
			 
				
				   <div class="form-group">
                       <label  class="col-sm-2 control-label">Registration Date</label>
				  <div class="col-sm-10">
                  <input type="text" name="datetxt" class="form-control" value="<?php echo htmlentities($row['reg_date']);?>" required >
                </div>
              </div>
				      
                   <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
                      <button type="submit" name="btn_sub" class="btn btn-primary">Submit</button>
                    </div>
                  </div>	
				  
                   </div>
				
				
				   
				    <?php } ?>
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
