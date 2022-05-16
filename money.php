<?php
include("session.php");
?>

<!DOCTYPE html>
<html>
<head>
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

 <!-- Bootstrap -->
			<!-- <link href="images/logo.png" rel="icon" type="image"> -->
			<link href="images/logo.png" rel="icon" type="image">
			<link href="bootstrap/css/print_background.css" rel="stylesheet" media="screen">
			<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen">
			<link href="bootstrap/css/bootstrap-responsive.css" rel="stylesheet" media="screen">
			<link href="bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet" media="screen">
			<link href="bootstrap/css/font-awesome.css" rel="stylesheet" media="screen">
			<link href="bootstrap/font-awesome-4.1.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
			<link href="bootstrap/css/my_style.css" rel="stylesheet" media="screen">
			<link href="bootstrap/css/styles.css" rel="stylesheet" media="screen">	
			<link href="bootstrap/css/print_inventory.css" rel="stylesheet" media="print">						
		    <link href="bootstrap/css/bootstrap.min1.css" rel="stylesheet" media="screen">
		
        <!-- HTmL5 shim, for IE6-8 support of HTmL5 elements -->
        <!--[if lt IE 9]>
        
        <![endif]-->
		<!-- calendar css -->
		<script src="bootstrap/js/html5.js"></script>
		<link href="vendors/fullcalendar/fullcalendar.css" rel="stylesheet" media="screen">
		<script src="vendors/jquery-1.9.1.min.js"></script>
        <script src="vendors/modernizr-2.6.2-respond-1.1.0.min.js"></script>
		<!-- data table -->
		<link href="assets/DT_bootstrap.css" rel="stylesheet" media="screen">
		<!-- notification  -->
		<link href="vendors/jGrowl/jquery.jgrowl.css" rel="stylesheet" media="screen">
		<!-- wysiwug  -->
		<link rel="stylesheet" type="text/css" href="vendors/bootstrap-wysihtml5/src/bootstrap-wysihtml5.css"></link>
	
		<script src="vendors/jGrowl/jquery.jgrowl.js"></script>
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">
    
<?php include("header.php") ?>

  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
 <?php include("sidebar2.php");?>
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
     <section class="content-header">
      <h1>
        <?php
	  $sql = "SELECT * FROM sys_users WHERE user_id = '$id'";
	  $sql_sel=mysqli_query($conn, $sql);
	   while($row=mysqli_fetch_array($sql_sel)){
	   
	   echo $row['church_name'];
	  }
	  ?>
      </h1>
      <ol class="breadcrumb">
       
       <li><a href=""><i class="fa fa-dashboard"></i> Dashboard</a></li>
      </ol>
	  
    </section>

    <!-- Main content -->
	<?php include('myJS.php'); ?>
    <section class="content">
	 <div class="row">
        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box">
            <span class="info-box-icon bg-aqua"><i class="ion ion-ios-gear-outline"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Assets</span>
              <span class="info-box-number"> <?php 
			   $sql ="SELECT sum(value) FROM assets WHERE church = '$church'" or die(mysql_error());
			   $result = mysqli_query($conn, $sql);
	           while ($rows1 = mysqli_fetch_array($result)) {
			        echo "E ";
				    echo $rows1['sum(value)'];
					
	                 }
			   
			   ?></span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->
        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box">
            <span class="info-box-icon bg-red"><i class="fa fa-envelope"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Tithes</span>
              <span class="info-box-number"> <?php 
               $sql = "SELECT sum(amount) FROM tither WHERE church = '$church'" or die(mysql_error());
			   $result1 = mysqli_query($conn, $sql);
	           while ($rows1 = mysqli_fetch_array($result1)) {
			        echo "E ";
				    echo $rows1['sum(amount)'];
					
	                 }
			   
			   ?></span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->

        <!-- fix for small devices only -->
        <div class="clearfix visible-sm-block"></div>

        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box">
            <span class="info-box-icon bg-green"><i class="fa fa-dropbox"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Income</span>
              <span class="info-box-number"><?php 
			   $result1 = "SELECT sum(amount) FROM income WHERE church = '$church'" or die(mysql_error());
			   $result1 = mysqli_query($conn, $sql);
	           while ($rows1 = mysqli_fetch_array($result1)) {
			        echo "E ";
				    echo $rows1['sum(amount)'];
					
	                 }
			   
			   ?></span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->
        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box">
            <span class="info-box-icon bg-yellow"><i class="ion ion-ios-cart-outline"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Expenditures</span>
              <span class="info-box-number"><?php 
               $sql = "SELECT sum(amount) FROM expense WHERE church = '$church'" or die(mysql_error());
			   $result1 = mysqli_query($conn, $sql);
	           while ($rows1 = mysqli_fetch_array($result1)) {
			        echo "E ";
				    echo $rows1['sum(amount)'];
					
	                 }
			   
			   ?></span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
	  
        <!-- Small boxes (Stat box) -->
	
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
                <li><a href="money/regAsset.php">Add Assets<span class="pull-right badge bg-blue">A</span></a></li>
                <li><a href="money/add_exp.php">Add Expenditure<span class="pull-right badge bg-aqua">A</span></a></li>
                <li><a href="money/budget.php">Add Budget <span class="pull-right badge bg-green">A</span></a></li>
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
              <h3 class="widget-user-username">Income</h3>
            </div>
           
              <div class="box-footer no-padding">
              <ul class="nav nav-stacked">
			    <li><a href="money/add_income.php">Add Income<span class="pull-right badge bg-aqua">A</span> </a></li>
               <li><a href="money/view_tithes.php">Add Tithe<span class="pull-right badge bg-yellow">A</span></a></li>
               <li><a href="money/view_income.php">View Income<span class="pull-right badge bg-green">V</span></a></li>
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
              <h3 class="widget-user-username">Statements</h3>
            </div>
           
              <div class="box-footer no-padding">
                <ul class="nav nav-stacked">
                <li><a href="money/statement.php">Yearly Balance<span class="pull-right badge bg-blue">Y</span></a></li>
                <li><a href="money/month_bal.php">Monthly Balance<span class="pull-right badge bg-aqua">M</span></a></li>
                <li><a href="money/month_inc.php">Daily Balance<span class="pull-right badge bg-red">D</span></a></li>
              </ul>
            </div>
          </div>
          <!-- /.widget-user -->
        </div>
		</div>

  <div class="row">
        <div class="col-md-12">
          <div class="box">
            <div class="box-header with-border">
              <h3 class="box-title">Yearly Recap Report for Year  <?php  echo date("Y");?></h3>
<?php
include("calculations.php");		
 ?>
              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
                <div class="btn-group">
                  <button type="button" class="btn btn-box-tool dropdown-toggle" data-toggle="dropdown">
                    <i class="fa fa-wrench"></i></button>
                  <ul class="dropdown-menu" role="menu">
                    <li><a href="#">Action</a></li>
                    <li><a href="#">Another action</a></li>
                    <li><a href="#">Something else here</a></li>
                    <li class="divider"></li>
                    <li><a href="#">Separated link</a></li>
                  </ul>
                </div>
                <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
              </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <div class="row">
                <div class="col-md-9">
                  <p class="text-center">
                    <strong>Monthly Balances: 1 Jan, <?php  echo date("Y");?> - 31 Dec, <?php  echo date("Y");?></strong>
                  </p>

                  <div class="chart">
                    <!-- Sales Chart Canvas -->
                    <canvas id="salesChart" style="height: 180px;"></canvas>
                  </div>
                  <!-- /.chart-responsive -->
                </div>
                <!-- /.col -->
                <div class="col-md-3">
                  <p class="text-center">
                    <strong>Money Usage</strong>
                  </p>
				   <?php 
				    $yy = date("Y");
				    
			   $sql ="SELECT sum(amount) FROM expense WHERE church = '$church' && year='$yy'" or die(mysqli_error());
			   $result1=mysqli_query($conn, $sql);
	           while ($rows1 = mysqli_fetch_array($result1)) {
			       
			   $tot = $rows1['sum(amount)'];
			   
			   $percent = 0;
			  
			   ?>
			   
			   <?php 		   
			   $sql = "SELECT sum(amount) FROM expense WHERE church = '$church' && year='$yy' && class='Children'" or die(mysqli_error());
			    $result1 = mysqli_query($conn, $sql);
	            while ($rows1 = mysqli_fetch_array($result1)) {
			    $exp = $rows1['sum(amount)'];
				  if($tot == 0 || $exp == 0){ ?>
				    <div class="progress-group">
                    <span class="progress-text">Children</span>
                    <span class="progress-number"><b><?php echo(round($percent));?></b>%</span>

                    <div class="progress sm">
                      <div class="progress-bar progress-bar-aqua" style="width:<?php echo 0;  
				  }
				  else{
					$divide = $exp/$tot;
				    $percent = $divide * 100; ?>
                  <div class="progress-group">
                    <span class="progress-text">Children</span>
                    <span class="progress-number"><b><?php echo(round($percent));?></b>%</span>

                    <div class="progress sm">
                      <div class="progress-bar progress-bar-aqua" style="width: <?php 
			
					echo $percent;
					
				  }  
			   }
					  ?>%"></div>
                    </div>
                  </div>
                  <!-- /.progress-group -->
                  
				  <?php   
				   $sql ="SELECT sum(amount) FROM expense WHERE church = '$church' && year='$yy' && class='Youth'" or die(mysql_error());
				   $result1 = mysqli_query($conn, $sql);
	               while ($rows1 = mysqli_fetch_assoc($result1)) {
				   $exp = $rows1['sum(amount)'];
				 
				  if($tot == 0 || $exp == 0){ ?>
				   <div class="progress-group">
                    <span class="progress-text">Youth</span>
                    <span class="progress-number"><b><?php echo(round($percent));?></b>%</span>

                    <div class="progress sm">
                      <div class="progress-bar progress-bar-aqua" style="width:<?php echo 0;  
				  }
				  else{ ?>
				  <?php 
					$divide = $exp/$tot;
				    $percent = $divide * 100; ?>
                  <div class="progress-group">
                    <span class="progress-text">Youth</span>
                    <span class="progress-number"><b><?php echo(round($percent)); ?></b>%</span>

                    <div class="progress sm">
                      <div class="progress-bar progress-bar-red" style="width: <?php
					
					echo $percent;
					
				  }     
			   }?>%"></div>
                    </div>
                  </div>
                  <!-- /.progress-group -->
				  <?php 
					    $sql = "SELECT sum(amount) FROM expense WHERE church = '$church' && year='$yy' && class='Adults'" or die(mysqli_error());
					    $result1 = mysqli_query($conn, $sql);
	                    while ($rows1 = mysqli_fetch_array($result1)) {
				        $exp = $rows1['sum(amount)'];
				        
			if($tot == 0 || $exp == 0){ ?>
				   <div class="progress-group">
                    <span class="progress-text">Adults</span>
                    <span class="progress-number"><b><?php echo(round($percent));?></b>%</span>

                    <div class="progress sm">
                      <div class="progress-bar progress-bar-aqua" style="width:<?php echo 0;  
				  }
				  else{ ?>
				  <?php 
				  
					$divide = $exp/$tot;
				    $percent = $divide * 100;
					
			  
					  ?>
                  <div class="progress-group">
                    <span class="progress-text">Adults</span>
                    <span class="progress-number"><b><?php echo(round($percent));?></b>%</span>

                    <div class="progress sm">
                      <div class="progress-bar progress-bar-green" style="width: <?php 
					  
					echo $percent;
					
				  }     
			   }
					  ?>%"></div>
                    </div>
                  </div>
                  <!-- /.progress-group -->
				<?php 
				   $sql = "SELECT sum(amount) FROM expense WHERE church = '$church' && year='$yy' && class='Church' " or die(mysqli_error());
				   $result1 = mysqli_query($conn, $sql);
	           while ($rows1 = mysqli_fetch_array($result1)) {
				   $exp = $rows1['sum(amount)'];
			
			if($tot == 0 || $exp == 0){ ?>
				   <div class="progress-group">
                    <span class="progress-text">Church</span>
                    <span class="progress-number"><b><?php echo(round($percent));?></b>%</span>

                    <div class="progress sm">
                      <div class="progress-bar progress-bar-aqua" style="width:<?php echo 0;  
				  }
				  else{ ?>
				  <?php 	  
					$divide = $exp/$tot;
				    $percent = $divide * 100;
				?>
                  <div class="progress-group">
                    <span class="progress-text">Church</span>
                    <span class="progress-number"><b><?php echo(round($percent));?></b>%</span>

                    <div class="progress sm">
                      <div class="progress-bar progress-bar-yellow" style="width: <?php 
					 
					echo $percent;
					
	                 
			   }
	           }
			   
					  ?>%"></div>
                    </div>
                  </div>
                  <!-- /.progress-group -->
                </div>
				<?php  } ?>
                <!-- /.col -->
             // </div>
              <!-- /.row -->
            </div>
            <!-- ./box-body -->
            <div class="box-footer">
              <div class="row">
                <div class="col-sm-3 col-xs-6">
                  <div class="description-block border-right">
                    <span class="description-percentage text-green"><i class="fa fa-caret-up"></i> 17%</span>
                    <h5 class="description-header">
                    <?php
                   $sql = "SELECT sum(amount) FROM income WHERE church = '$church'&& year='$yy'" or die(mysqli_error());
                   $result1 = mysqli_query($conn, $sql);
	               while ($rows1 = mysqli_fetch_array($result1)) {
			        echo "E ";
				    echo $rows1['sum(amount)'];
					
	                 }
			   
			   ?></h5>
                    <span class="description-text">TOTAL REVENUE</span>
                  </div>
                  <!-- /.description-block -->
                </div>
                <!-- /.col -->
                <div class="col-sm-3 col-xs-6">
                  <div class="description-block border-right">
                    <span class="description-percentage text-yellow"><i class="fa fa-caret-left"></i> 0%</span>
                    <h5 class="description-header">
                    <?php 
			       $sql = "SELECT sum(amount) FROM expense WHERE church = '$church' && year='$yy'" or die(mysql_error());
			       $result1 = mysqli_query($conn, $sql);
	               while ($rows1 = mysqli_fetch_array($result1)) {
			        echo "E ";
				    echo $rows1['sum(amount)'];
					
			        
	                 }
			   
			   ?></h5>
                    <span class="description-text">TOTAL EXPENDITURE</span>
                  </div>
                  <!-- /.description-block -->
                </div>
                <!-- /.col -->
                <div class="col-sm-3 col-xs-6">
                  <div class="description-block border-right">
                    <span class="description-percentage text-green"><i class="fa fa-caret-up"></i> 20%</span>
                    <h5 class="description-header">
					<?php 
					$yy = date("Y");
					
			       $sql = "SELECT sum(amount) FROM expense WHERE church = '$church'&& year='$yy'" or die(mysqli_error());
			       $result1 = mysqli_query($conn, $sql);
	               while ($rows1 = mysqli_fetch_array($result1)) {
			       
				    $exp = $rows1['sum(amount)'];
					
			        
	                 }
					
			        $sql = "SELECT sum(amount) FROM income WHERE church = '$church'&& year='$yy'" or die(mysqli_error());
			        $result1 = mysqli_query($conn, $sql);
	                while ($rows1 = mysqli_fetch_array($result1)) {
			       
				    $inc = $rows1['sum(amount)'];
					
	                 }
					 
					$bal = $inc - $exp; 
					echo "E ";
					echo $bal;
			   
			   ?>
					 
					 
					</h5>
                    <span class="description-text">TOTAL TURNOVER</span>
                  </div>
                  <!-- /.description-block -->
                </div>
                <!-- /.col -->
                <div class="col-sm-3 col-xs-6">
                  <div class="description-block">
                    <span class="description-percentage text-red"><i class="fa fa-caret-down"></i> 18%</span>
                    <h5 class="description-header">1200</h5>
                    <span class="description-text">GOAL COMPLETIONS</span>
                  </div>
                  <!-- /.description-block -->
                </div>
              </div>
              <!-- /.row -->
            </div>
            <!-- /.box-footer -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
        
      <!-- Main row -->
      <div class="row">
     
        </div>
        <!-- /.col -->

        <div class="col-md-4">
         
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
<!-- ChartJS 1.0.1 -->
<script src="plugins/chartjs/Chart.min.js"></script>
<!-- FastClick -->
<script src="plugins/fastclick/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/app.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>
<!-- page script -->
<script>

$(function () {

  'use strict';

  /* ChartJS
   * -------
   * Here we will create a few charts using ChartJS
   */

  //-----------------------
  //- MONTHLY SALES CHART -
  //-----------------------

  // Get context with jQuery - using jQuery's .get() method.
  var salesChartCanvas = $("#salesChart").get(0).getContext("2d");
  // This will get the first returned node in the jQuery collection.
  var salesChart = new Chart(salesChartCanvas);

  var salesChartData = {
    labels: ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul","Aug","Sep","Oct","Nov","Dec"],
    datasets: [
      {
        label: "Revenue",
        fillColor: "rgb(210, 214, 222)",
        strokeColor: "rgb(210, 214, 222)",
        pointColor: "rgb(210, 214, 222)",
        pointStrokeColor: "#c1c7d1",
        pointHighlightFill: "#fff",
        pointHighlightStroke: "rgb(220,220,220)",
        data: [<?php echo $jan_inc;?>, <?php echo $feb_inc;?>, <?php echo $mar_inc; ?>, <?php echo $apr_inc; ?>, <?php echo $may_inc; ?>, <?php echo $jun_inc; ?>, <?php echo $jul_inc; ?>,<?php echo $aug_inc; ?>,<?php echo $sep_inc; ?>,<?php echo $oct_inc; ?>,<?php echo $nov_inc; ?>,<?php echo $dec_inc; ?>]
      },
      {
        label: "Expenditure",
        fillColor: "rgba(60,141,188,0.9)",
        strokeColor: "rgba(60,141,188,0.8)",
        pointColor: "#3b8bba",
        pointStrokeColor: "rgba(60,141,188,1)",
        pointHighlightFill: "#fff",
        pointHighlightStroke: "rgba(60,141,188,1)",
        data: [<?php echo $jan_exp; ?>, <?php echo $feb_exp; ?>, <?php echo $mar_exp; ?>, <?php echo $apr_exp; ?>, <?php echo $may_exp; ?>, <?php echo $jun_exp; ?>, <?php echo $jul_exp; ?>,<?php echo $aug_exp; ?>,<?php echo $sep_exp; ?>,<?php echo $oct_exp; ?>,<?php echo $nov_exp; ?>,<?php echo $dec_exp; ?>]
      }
    ]
  };

  var salesChartOptions = {
    //Boolean - If we should show the scale at all
    showScale: true,
    //Boolean - Whether grid lines are shown across the chart
    scaleShowGridLines: false,
    //String - Colour of the grid lines
    scaleGridLineColor: "rgba(0,0,0,.05)",
    //Number - Width of the grid lines
    scaleGridLineWidth: 1,
    //Boolean - Whether to show horizontal lines (except X axis)
    scaleShowHorizontalLines: true,
    //Boolean - Whether to show vertical lines (except Y axis)
    scaleShowVerticalLines: true,
    //Boolean - Whether the line is curved between points
    bezierCurve: true,
    //Number - Tension of the bezier curve between points
    bezierCurveTension: 0.3,
    //Boolean - Whether to show a dot for each point
    pointDot: false,
    //Number - Radius of each point dot in pixels
    pointDotRadius: 4,
    //Number - Pixel width of point dot stroke
    pointDotStrokeWidth: 1,
    //Number - amount extra to add to the radius to cater for hit detection outside the drawn point
    pointHitDetectionRadius: 20,
    //Boolean - Whether to show a stroke for datasets
    datasetStroke: true,
    //Number - Pixel width of dataset stroke
    datasetStrokeWidth: 2,
    //Boolean - Whether to fill the dataset with a color
    datasetFill: true,
    //String - A legend template
    legendTemplate: "<ul class=\"<%=name.toLowerCase()%>-legend\"><% for (var i=0; i<datasets.length; i++){%><li><span style=\"background-color:<%=datasets[i].lineColor%>\"></span><%=datasets[i].label%></li><%}%></ul>",
    //Boolean - whether to maintain the starting aspect ratio or not when responsive, if set to false, will take up entire container
    maintainAspectRatio: true,
    //Boolean - whether to make the chart responsive to window resizing
    responsive: true
  };

  //Create the line chart
  salesChart.Line(salesChartData, salesChartOptions);

  //---------------------------
  //- END MONTHLY SALES CHART -
  //---------------------------

  

  
});

</script>
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

<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>
</body>
</html>
