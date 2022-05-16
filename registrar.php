<?php
include("session.php");


if(isset($_REQUEST['del']))
	{
$delid=intval($_GET['del']);
$del = $_GET['del'];
$qry="DELETE FROM registration WHERE reg_id ='$del'";
$result=mysqli_query($conn, $qry);

$msg="1 record deleted successfully";
}

?>
<?php
                $tm = date("m");
				$mn=$tm;
				function month_name($mn){
				switch($mn){
				case 1: echo "January";
								break;
				case 2: echo "February";
								break;	
				case 3: echo "March";
								break;
				case 4: echo "April";
								break;
				case 5: echo "May";
								break;
				case 6: echo "June";
								break;
				case 7: echo "July";
								break;
				case 8: echo "August";
								break;
				case 9: echo "September";
								break;
				case 10: echo "October";
								break;
				case 11: echo "November";
								break;
				case 12: echo "December";
								break;          
				}
				}
				
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>CMS | Dashboard</title>
  
  <link rel="shortcut icon" href="img/logo.jpg" />
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.6 -->
  <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
  <!-- jvectormap -->
  <link rel="stylesheet" href="plugins/jvectormap/jquery-jvectormap-1.2.2.css">
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
    <a href="#" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>A</b>LT</span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>CMS</b>LTE</span>
    </a>

    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>
      <!-- Navbar Right Menu -->
      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <!-- Messages: style can be found in dropdown.less-->
        
          <!-- Notifications: style can be found in dropdown.less -->
    
          <!-- Tasks: style can be found in dropdown.less -->
          <li class="dropdown tasks-menu">
        
          <!-- User Account: style can be found in dropdown.less -->
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
			 <?php
	  
	   $sql_sel=mysqli_query($conn, "SELECT * FROM sys_users WHERE user_id = '$id'");
	   while($row=mysqli_fetch_array($sql_sel)){
	   
	  ?>
                <img src=" <?php echo $row['image']; ?>" class="user-image" alt="User Image">
            <?php } ?>
              
              <span class="hidden-xs">Profile</span>
            </a>
            <ul class="dropdown-menu">
              <!-- User image -->
              <li class="user-header">
			   <?php
	   $sql = "SELECT * FROM sys_users WHERE user_id = '$id'";
	   $sql_sel=mysqli_query($conn, $sql);
	   while($row=mysqli_fetch_array($sql_sel)){
	   
	  ?>
                <img src=" <?php echo $row['image']; ?>" class="img-circle" alt="User Image">
            <?php } ?>
                <p>
                   <?php
	  
	   $sql = "SELECT * FROM sys_users WHERE user_id = '$id'";
	   $sql_sel=mysqli_query($conn, $sql);
	   while($row=mysqli_fetch_array($sql_sel)){
	   
	   echo $row['name'];
	  }
	  ?>
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
              <!-- Menu Body -->
              
              <!-- Menu Footer-->
              <li class="user-footer">
                <div class="pull-left">
                  <a href="profile.php" class="btn btn-default btn-flat">Profile</a>
                </div>
                <div class="pull-right">
                  <a href="logout.php" class="btn btn-default btn-flat">Sign out</a>
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
		  <p>
		   
		    <p class="header"><?php echo $row['position']; ?></p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
	   <?php } ?>
         
      <!-- search form -->
      <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="q" class="form-control" placeholder="search">
              <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
        </div>
      </form>
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu">
        <li class="active" class="header"> <a href="registrar.php">MAIN NAVIGATION</a></li>
        <li class="active treeview">
          <a href="#">
            <i class="fa fa-dashboard"></i> <span>Registration</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="secretary/registration.php"><i class="fa fa-circle-o"></i> Register</a></li>
            <li ><a href="secretary/view_members.php"><i class="fa fa-circle-o"></i>View</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-files-o"></i>
            <span>Assigning</span>
            <span class="pull-right-container">
              <span class="label label-primary pull-right bg-green">3</span>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="secretary/assign.php"><i class="fa fa-circle-o"></i>Assign</a></li>
            <li><a href="secretary/view_assign.php"><i class="fa fa-circle-o"></i> View</a></li>
            <li><a href="secretary/role.php"><i class="fa fa-circle-o"></i> Add Role</a></li>
         </ul>
        </li>
        <li>
          <a href="#">
            <i class="fa fa-th"></i> <span>Committee</span>
            <span class="pull-right-container">
              <small class="label pull-right bg-blue">Roles</small>
            </span>
          </a>
		   <ul class="treeview-menu">
            <li><a href="secretary/assign_com.php"><i class="fa fa-circle-o"></i>Assign to committee</a></li>
            <li><a href="secretary/view_commitee.php"><i class="fa fa-circle-o"></i> View</a></li>
           </ul>
		</li>
		   <li>
          <a href="#">
            <i class="fa fa-th"></i> <span>Minutes</span>
            <span class="pull-right-container">
              <small class="label pull-right bg-red">new</small>
            </span>
          </a>
		   <ul class="treeview-menu">
            <li><a href="secretary/secretary.php"><i class="fa fa-circle-o"></i>New minutes</a></li>
            <li><a href="secretary/minutes.php"><i class="fa fa-circle-o"></i> Read</a></li>
           </ul>
		</li>
             <li>
          <a href="#">
            <i class="fa fa-th"></i> <span>Year Plan</span>
            <span class="pull-right-container">
              <small class="label pull-right bg-yellow">Add</small>
            </span>
          </a>
		   <ul class="treeview-menu">
            <li><a href="secretary/year.php"><i class="fa fa-circle-o"></i>Add Event</a></li>
            <li><a href="secretary/view_plan.php"><i class="fa fa-circle-o"></i>View</a></li>
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
      <?php
	  
	   $sql_sel=mysqli_query($conn, "SELECT * FROM sys_users WHERE user_id = '$id'");
	   while($row=mysqli_fetch_array($sql_sel)){
	   
	   echo $row['church_name'];
	  }
	  ?>
        <small></small>
      </h1>
      <ol class="breadcrumb">
       
        <li class="active">Dashboard</li>
      </ol>
	  
    </section>

    <!-- Main content -->
    <section class="content">
	
        <!-- Small boxes (Stat box) -->
      <div class="row">
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-aqua">
            <div class="inner">
              <h3>
			  <?php 
			            
						$sql=mysqli_query($conn, "SELECT * FROM registration WHERE church ='$church' ")or die(mysql_error());
						$count_t = mysqli_num_rows($sql);{
						?>
						<?php echo $count_t ?>
						<?php } ?>
			  </h3>

              <p>Members</p>
            </div>
            <div class="icon">
              <i class="fa fa-shopping-cart"></i>
            </div>
            <a href="secretary/registration.php" class="small-box-footer">
              Add new member <i class="fa fa-arrow-circle-right"></i>
            </a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-green">
            <div class="inner">
              <h3>
                   <?php 
			            
						$sql=mysqli_query($conn, "SELECT * FROM assign WHERE church ='$church' ")or die(mysql_error());
						$count_t = mysqli_num_rows($sql);{
						?>
						<?php echo $count_t ?>
						<?php } ?>
              </h3>

              <p>Assign Members role </p>
            </div>
            <div class="icon">
              <i class="ion ion-stats-bars"></i>
            </div>
            <a href="secretary/assign.php" class="small-box-footer">
              Assign Roles<i class="fa fa-arrow-circle-right"></i>
            </a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-yellow">
            <div class="inner">
              <h3>
                   <?php 
			            
						$sql=mysqli_query($conn, "SELECT * FROM com_member WHERE church ='$church' ")or die(mysql_error());
						$count_t = mysqli_num_rows($sql);{
						?>
						<?php echo $count_t ?>
						<?php } ?>
              </h3>

              <p>Committees</p>
            </div>
            <div class="icon">
              <i class="ion ion-person-add"></i>
            </div>
            <a href="secretary/assign_com.php" class="small-box-footer">
              add new<i class="fa fa-arrow-circle-right"></i>
            </a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-red">
            <div class="inner">
              <h3>
                   <?php 
			            
						$sql=mysqli_query($conn, "SELECT * FROM minutes WHERE church ='$church' ")or die(mysql_error());
						$count_t = mysqli_num_rows($sql);{
						?>
						<?php echo $count_t ?>
						<?php } ?>
              </h3>

              <p>Add Minutes</p>
            </div>
            <div class="icon">
              <i class="ion ion-pie-graph"></i>
            </div>
            <a href="secretary/secretary.php" class="small-box-footer">
               new minutes <i class="fa fa-arrow-circle-right"></i>
            </a>
			
          </div>
        </div>

         <!-- ./col -->
		</div>
		
 
        
      <!-- Main row -->
      
      
      <div class="row">
            <div class="col-md-4">
          <!-- Widget: user widget style 1 -->
          <div class="box box-widget widget-user">
            <!-- Add the bg color to the header using any of the bg-* classes -->
            <div class="widget-user-header bg-black" style="background: url('img/reg.jpg') center center;">
              <h3 class="widget-user-username">Registration</h3>
            </div>
           
              <div class="box-footer no-padding">
             <ul class="nav nav-stacked">
                <li><a href="secretary/registration.php">Registration menu<span class="pull-right badge bg-blue">R</span></a></li>
                <li><a href="secretary/view_members.php">View Member<span class="pull-right badge bg-aqua">A</span></a></li>
                <li><a href="secretary/registration.php">Add Member <span class="pull-right badge bg-green">A</span></a></li>
              </ul>
            </div>
          </div>
          <!-- /.widget-user -->
        </div>
      <div class="col-md-4">
          <!-- Widget: user widget style 1 -->
          <div class="box box-widget widget-user">
            <!-- Add the bg color to the header using any of the bg-* classes -->
            <div class="widget-user-header bg-black" style="background: url('img/offer.jpg') center center;">
              <h3 class="widget-user-username">Assigning</h3>
            </div>
           
              <div class="box-footer no-padding">
              <ul class="nav nav-stacked">
			    <li><a href="secretary/assign.php">Asssigning Member<span class="pull-right badge bg-aqua">F</span> </a></li>
               <li><a href="secretary/view_assign.php">View<span class="pull-right badge bg-yellow">V</span></a></li>
               <li><a href="secretary/role.php">Add Role<span class="pull-right badge bg-green">P</span></a></li>
              </ul>
            </div>
          </div>
          <!-- /.widget-user -->
        </div>
        <!-- ./col -->
          <div class="col-md-4">
          <!-- Widget: user widget style 1 -->
          <div class="box box-widget widget-user">
            <!-- Add the bg color to the header using any of the bg-* classes -->
            <div class="widget-user-header bg-black" style="background: url('img/min.jpg') center center;">
              <h3 class="widget-user-username">Secretary</h3>
            </div>
           
              <div class="box-footer no-padding">
                <ul class="nav nav-stacked">
                <li><a href="secretary/secretary.php">New Minutes<span class="pull-right badge bg-blue">M</span></a></li>
                <li><a href="secretary/minutes.php">View<span class="pull-right badge bg-aqua">D</span></a></li>
                <li><a href="secretary/year.php">Year Plan<span class="pull-right badge bg-red">C</span></a></li>
              </ul>
            </div>
          </div>
          <!-- /.widget-user -->
        </div>
		</div>

        <div class="row">
                <div class="col-md-8">
                <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">Latest Birthday Dates</h3>

              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
                <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
              </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <div class="table-responsive">
                <table class="table no-margin">
                  <thead>
                  <tr>
                    <th>Member ID</th>
                    <th>Name</th>
					<th>Date</th>
                    <th>Month</th>
                    <th>DOB</th>
                  </tr>
                  </thead>
                  <tbody>
				   <?php
	  $tm = date("m");
	   $sql_sel=mysqli_query($conn, "SELECT * FROM registration WHERE church = '$church'&& month = '$tm'");
	   
	   if($sql_sel!=true){
	     echo "No available members birthdays this money";
	   }
	   else {
	   while($row=mysqli_fetch_array($sql_sel)){
	   
	  ?>
                  <tr>
                    <td><a href=""><?php  echo $row['reg_id'];?> </a></td>
                    <td><?php  echo $row['name']; ?> <?php  echo $row['surname']; ?></td>
					<td><?php echo $row['phone']; ?></td>
                    <td><span class="label label-success"><?php echo month_name($row['month']); ?></span></td>
                    <td>
					
                      <div class="sparkbar" data-color="#00a65a" data-height="20"><?php  echo $row['birth_date']; ?></div>
                    </td>
                  </tr>
                 
           <?php } }?>      
                 
                  </tbody>
                </table>
              </div>
              <!-- /.table-responsive -->
            </div>
            <!-- /.box-body -->
           
          </div>
                  <!-- ./chart-responsive -->
                </div>
                <!-- /.col -->
                <div class="col-md-4">
				  <div class="box box-default">
				 <div class="box-header with-border">
              <h3 class="box-title">Church Statistics</h3>

              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
                <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
              </div>
            </div>
			<?php 
			$sql=mysqli_query($conn, "SELECT * FROM registration WHERE church ='$church' ")or die(mysql_error());
			$members = mysqli_num_rows($sql);{
			?>
						
			<div class="box-footer no-padding">
              <ul class="nav nav-pills nav-stacked">
                <li><a href="#">Males
                  <span class="pull-right text-red"><i class=""></i> 
				  <?php 
			$sql=mysqli_query($conn, "SELECT * FROM registration WHERE church ='$church' && gender ='male' ")or die(mysql_error());
			$males = mysqli_num_rows($sql);
			
			if($members== 0 || $males== 0){
		    echo 0;
			}
			else {
			$frac = $males/$members;
			$pec = $frac * 100;
			echo (round($pec));
			}
			?>%
				  </span></a></li>
                <li><a href="#">Females <span class="pull-right text-green"><i class=""></i> 
				<?php 
			$sql=mysqli_query($conn, "SELECT * FROM registration WHERE church ='$church' && gender ='female' ")or die(mysql_error());
			$females = mysqli_num_rows($sql);
			
			if($members== 0 || $females== 0){
		    echo 0;
			}
			else{
			  	$frac = $females/$members;
			$pec = $frac * 100;
			echo (round($pec));
			}
			?>%</span></a>
                </li>
                <li><a href="#">Married
                  <span class="pull-right text-yellow"><i class=""></i> 
				  <?php 
			$sql=mysqli_query($conn, "SELECT * FROM registration WHERE church ='$church' && maritual ='Married' ")or die(mysql_error());
			$mar = mysqli_num_rows($sql);
			if($members== 0 || $mar== 0){
		   echo 0;
			
			}else{
			    
			 $frac = $mar/$members;
			$pec = $frac * 100;
			echo (round($pec));
			}
			?>%</span></a></li>
				  <li><a href="#">Youth
                  <span class="pull-right text-yellow"><i class=""></i> 
				   <?php 
			$sql=mysqli_query($conn, "SELECT * FROM registration WHERE church ='$church' && maritual ='Single' ")or die(mysql_error());
			$youth = mysqli_num_rows($sql);
			if($members== 0 || $youth== 0){
		    echo 0;
			}else{
			    
			$frac = $youth/$members;
			$pec = $frac * 100;
			echo (round($pec));
			
			}
			?>%
				  </span></a></li>
              </ul>
            </div>  
			<?php } ?>
                 </div>
              </div>
              <!--/.box -->
         
                </div>
                <!-- /.col -->
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
    <strong>Copyright &copy; 2019 <a href="#">Techrise Technologies</a>.</strong> All rights
    reserved.
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Create the tabs -->
    <ul class="nav nav-tabs nav-justified control-sidebar-tabs">
      <li><a href="#control-sidebar-home-tab" data-toggle="tab"><i class="fa fa-home"></i></a></li>
      <li><a href="#control-sidebar-settings-tab" data-toggle="tab"><i class="fa fa-gears"></i></a></li>
    </ul>
    <!-- Tab panes -->
    <div class="tab-content">
      <!-- Home tab content -->
      <div class="tab-pane" id="control-sidebar-home-tab">
        <h3 class="control-sidebar-heading"></h3>
        <ul class="control-sidebar-menu">
          <li>
            <a href="javascript:void(0)">
              <i class="menu-icon fa fa-birthday-cake bg-red"></i>

              <div class="menu-info">
                <h4 class="control-sidebar-subheading"></h4>

                <p></p>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <i class="menu-icon fa fa-user bg-yellow"></i>

              <div class="menu-info">
                <h4 class="control-sidebar-subheading"></h4>

                <p></p>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <i class="menu-icon fa fa-envelope-o bg-light-blue"></i>

              <div class="menu-info">
                <h4 class="control-sidebar-subheading"></h4>

                <p></p>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <i class="menu-icon fa fa-file-code-o bg-green"></i>

              <div class="menu-info">
                <h4 class="control-sidebar-subheading"></h4>

                <p></p>
              </div>
            </a>
          </li>
        </ul>
        <!-- /.control-sidebar-menu -->

        <h3 class="control-sidebar-heading"></h3>
        <ul class="control-sidebar-menu">
          <li>
            <a href="javascript:void(0)">
              <h4 class="control-sidebar-subheading">
               
                <span class="label label-danger pull-right"></span>
              </h4>

              <div class="progress progress-xxs">
                <div class="progress-bar progress-bar-danger" style="width: 70%"></div>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <h4 class="control-sidebar-subheading">
           
                <span class="label label-success pull-right"></span>
              </h4>

              <div class="progress progress-xxs">
                <div class="progress-bar progress-bar-success" style="width: 95%"></div>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <h4 class="control-sidebar-subheading">
                Laravel Integration
                <span class="label label-warning pull-right">50%</span>
              </h4>

              <div class="progress progress-xxs">
                <div class="progress-bar progress-bar-warning" style="width: 50%"></div>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <h4 class="control-sidebar-subheading">
                Back End Framework
                <span class="label label-primary pull-right">68%</span>
              </h4>

              <div class="progress progress-xxs">
                <div class="progress-bar progress-bar-primary" style="width: 68%"></div>
              </div>
            </a>
          </li>
        </ul>
        <!-- /.control-sidebar-menu -->

      </div>
      <!-- /.tab-pane -->

      <!-- Settings tab content -->
      <div class="tab-pane" id="control-sidebar-settings-tab">
        <form method="post">
          <h3 class="control-sidebar-heading">General Settings</h3>

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Report panel usage
              <input type="checkbox" class="pull-right" checked>
            </label>

            <p>
              Some information about this general settings option
            </p>
          </div>
          <!-- /.form-group -->

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Allow mail redirect
              <input type="checkbox" class="pull-right" checked>
            </label>

            <p>
              Other sets of options are available
            </p>
          </div>
          <!-- /.form-group -->

          <div class="form-group">
            <labeose author name in posts
              <input type="checkbox" class="pull-right" checked>
            </label>

            <p>
              Allow the user to show his name in blog posts
            </p>
          </div>
          <!-- /.form-group -->

          <h3 class="control-sidebar-heading">Chat Settings</h3>

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Show me as online
              <input type="checkbox" class="pull-right" checked>
            </label>
          </div>
          <!-- /.form-group -->

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Turn off notifications
              <input type="checkbox" class="pull-right">
            </label>
          </div>
          <!-- /.form-group -->

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Delete chat history
              <a href="javascript:void(0)" class="text-red pull-right"><i class="fa fa-trash-o"></i></a>
            </label>
          </div>
          <!-- /.form-group -->
        </form>
      </div>
      <!-- /.tab-pane -->
    </div>
  </aside>
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
<!-- Sparkline -->
<script src="plugins/sparkline/jquery.sparkline.min.js"></script>
<!-- jvectormap -->
<script src="plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
<script src="plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
<!-- SlimScroll 1.3.0 -->
<script src="plugins/slimScroll/jquery.slimscroll.min.js"></script>
<!-- ChartJS 1.0.1 -->
<script src="plugins/chartjs/Chart.min.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="dist/js/pages/dashboard2.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>

</body>
</html>
