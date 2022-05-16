<?php
require("../konnect/connect.php");
	$msg="";
	$opr="";
	if(isset($_GET['opr']))
	$opr=$_GET['opr'];
	
if(isset($_GET['rs_id']))
	$id=$_GET['rs_id'];
	
	if($opr=="del")
{
	$del_sql=mysqli_query($conn, "DELETE FROM registration WHERE reg_id=$id");
	if($del_sql)
		$msg="1 Record Deleted... !";
	else
		$msg="Could not Delete :".mysqli_error();	
			
}

if(isset($_REQUEST['del']))
	{
$delid=intval($_GET['del']);
$del = $_GET['del'];
$qry="DELETE FROM admin WHERE admin_id ='$del'";
$result=mysqli_query($conn, $qry);

$msg="Vehicle  record deleted successfully";
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
  <!-- iCheck -->
  <link rel="stylesheet" href="../plugins/iCheck/flat/blue.css">
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
    <a href="index2.html" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>C</b>MS</span>
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
 <li class="dropdown tasks-menu">
           
            
			
			
          </li>
      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
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
          <a href="menu.php"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
      <!-- search form -->
      <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="q" class="form-control" placeholder="Church Management System">
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
        Church Management Admin Panel
      </h1> <small>Version 1.0</small>
      <ol class="breadcrumb">
        <li><a href="menu.php"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">registration</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-md-3">
          <a href="regChurch.php" class="btn btn-primary btn-block margin-bottom">Add Church</a>
          <a href="view_church.php" class="btn btn-primary btn-block margin-bottom">View Church</a>
		  
         <div class="box box-solid">
            <div class="box-header with-border">
              <h3 class="box-title">Church statics</h3>

              <div class="box-tools">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
              </div>
            </div>
            <div class="box-body no-padding">
              <ul class="nav nav-pills nav-stacked">
                <li><a href="minutes.php"><i class="fa fa-inbox"></i>Males<span class="label label-primary pull-right">12</span></a></li>
                <li><a href="conformed.php"><i class="fa fa-envelope-o"></i>Females<span class="label label-warning pull-right">65</span></a></li>
                <li><a href="#"><i class="fa fa-file-text-o"></i> Married<span class="label label-success pull-right">65</span> </a></li>
              </ul>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /. box -->
         
          <!-- /.box -->
        </div>
        <!-- /.col -->
        <div class="col-md-9">
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Members</h3>
              <form method="post">
              <div class="box-tools pull-right">
			  <div class="has-feedback">
				<input type="text" name="searchtxt"  autocomplete="on" class="form-control input-sm" placeholder="Search ">
                  <span class="glyphicon glyphicon-search form-control-feedback"></span>
                </div>
              </div>
			  </form>
              <!-- /.box-tools -->
            </div>
                <div class="box-body">
              <table id="example2" class="table table-bordered table-hover">
                <thead>
                <tr>
                  <th>No</th>
				  <th>Church Name</th>
				   <th>Church Code</th>
                  <th>Residance</th>
                  <th>Admin name</th>
              
				  <th>Cell/phone</th>
				
				  <th colspan="3">Operation</th>
                </tr>
	             </thead>
	           <tbody>
			   			 			        <?php
	$key="";
	if(isset($_POST['searchtxt']))
		$key=$_POST['searchtxt'];
	
	if($key !="")
		$sql_sel=mysqli_query($conn, "SElECT * FROM admin WHERE surname  like '%$key%' or name like '%$key%' or place like '%$key%' or phone like '%$key%' or church_no like '%$key%' or church_no like '%$key%' ");
	else
		 $sql_sel=mysqli_query($conn, "SELECT * FROM admin");
	
	 $i=0;
	 

    while($row=mysqli_fetch_array($sql_sel)){
    $i++;
  // $posted_by = $row['surname']." ".$row['name'];
    $color=($i%2==0)?"lightblue":"white";
    ?>
            <tr bgcolor="<?php echo $color?>"> 
			  <td><?php echo $i;?></td>
			  <td title="<?php echo $row['post_add']."  ,  ".$row['place'],' , ', $row['street'];?>"><?php echo $row['church_name']; ?></td>
			
			  <td><?php echo $row['church_no'];?></td>
			  <td><?php echo $row['place'];?></td>
               <td><?php echo $row['surname']." ".$row['name'];?></td>	
               <td title="<?php echo $row['email']?>"><?php echo $row['phone'];?></td>
			
			  <td><a href="edit_church.php?id=<?php echo $row['admin_id'];?>" title="Update"><img src="../img/update.png" /></a></td>
			 <td> <a href="view_church.php?del=<?php echo $row['admin_id'];?>" onclick="return confirm('Do you want to delete');" title="Delete"><img src="../img/delete.png" /></a></td>
              <td>more</td>
			
			 </tr>
              		   <?php	
    }
			   ?>
              </tfoot>
	
              </table>
            </div>
		  
		   
          </div>
          <!-- /. box -->
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
    <strong>Copyright &copy; 2017 <a href="#">Roosevelt</a>.</strong> All rights
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
<!-- Slimscroll -->
<script src="plugins/slimScroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="plugins/fastclick/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/app.min.js"></script>
<!-- iCheck -->
<script src="plugins/iCheck/icheck.min.js"></script>
<!-- Page Script -->
<script>
  $(function () {
    //Enable iCheck plugin for checkboxes
    //iCheck for checkbox and radio inputs
    $('.mailbox-messages input[type="checkbox"]').iCheck({
      checkboxClass: 'icheckbox_flat-blue',
      radioClass: 'iradio_flat-blue'
    });

    //Enable check and uncheck all functionality
    $(".checkbox-toggle").click(function () {
      var clicks = $(this).data('clicks');
      if (clicks) {
        //Uncheck all checkboxes
        $(".mailbox-messages input[type='checkbox']").iCheck("uncheck");
        $(".fa", this).removeClass("fa-check-square-o").addClass('fa-square-o');
      } else {
        //Check all checkboxes
        $(".mailbox-messages input[type='checkbox']").iCheck("check");
        $(".fa", this).removeClass("fa-square-o").addClass('fa-check-square-o');
      }
      $(this).data("clicks", !clicks);
    });

    //Handle starring for glyphicon and font awesome
    $(".mailbox-star").click(function (e) {
      e.preventDefault();
      //detect type
      var $this = $(this).find("a > i");
      var glyph = $this.hasClass("glyphicon");
      var fa = $this.hasClass("fa");

      //Switch states
      if (glyph) {
        $this.toggleClass("glyphicon-star");
        $this.toggleClass("glyphicon-star-empty");
      }

      if (fa) {
        $this.toggleClass("fa-star");
        $this.toggleClass("fa-star-o");
      }
    });
  });
</script>
<script>
  $(function () {
    $("#example1").DataTable();
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": true,
      "ordering": true,
      "info": true,
      "autoWidth": false
    });
  });
</script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>
</body>
</html>
