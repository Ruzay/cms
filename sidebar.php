<section class="sidebar">
      <!-- Sidebar user panel -->
     <?php
	  
	   $sql="SELECT * FROM sys_users WHERE user_id = '$id'";
	   $result = mysqli_query($conn, $sql);
	   while($row=mysqli_fetch_array($result)){
	   
	  ?>
	  
      <div class="user-panel">
        <div class="pull-left image">
		
                <img src="//capitalmakerts.com/<?php echo $row['image']; ?>" class="img-circle" alt="User Image">
           
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
        <a href="../registrar.php"><li class="header">MAIN NAVIGATION</li></a>
        <li class="active treeview">
          <a href="#">
            <i class="fa fa-dashboard"></i> <span>Registration</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="money/regAsset.php"><i class="fa fa-circle-o"></i> Register Assets</a></li>
            <li><a href="money/view_assets.php"><i class="fa fa-circle-o"></i>View Assets</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-files-o"></i>
            <span>Income</span>
            <span class="pull-right-container">
              <span class="label label-primary pull-right bg-green">3</span>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="money/add_income.php"><i class="fa fa-circle-o"></i>Add Income</a></li>
            <li><a href="money/view_income.php"><i class="fa fa-circle-o"></i> View</a></li>
            <li><a href="money/view_tithes.php"><i class="fa fa-circle-o"></i> Add Tithe</a></li>
         </ul>
        </li>
        <li>
          <a href="#">
            <i class="fa fa-th"></i> <span>Expenditures</span>
           
          </a>
		   <ul class="treeview-menu">
            <li><a href="money/add_exp.php"><i class="fa fa-circle-o"></i>Add expenditure</a></li>
            <li><a href="money/view_exp"><i class="fa fa-circle-o"></i> View expenditure</a></li>
           </ul>
		</li>
		   <li>
          <a href="#">
            <i class="fa fa-th"></i> <span>View Statements</span>
           
          </a>
		   <ul class="treeview-menu">
            <li><a href="money/statement.php"><i class="fa fa-circle-o"></i>Check Statement</a></li>
            <li><a href="minutes.php"><i class="fa fa-circle-o"></i> Read</a></li>
           </ul>
		</li>
             <li>
          <a href="#">
            <i class="fa fa-th"></i> <span>Year Budget Plan</span>
            <span class="pull-right-container">
              <small class="label pull-right bg-yellow">Add</small>
            </span>
          </a>
		   <ul class="treeview-menu">
            <li><a href="money/budget.php"><i class="fa fa-circle-o"></i>Add Budget</a></li>
            <li><a href="money/view_budget.php"><i class="fa fa-circle-o"></i>View Budget</a></li>
           </ul>
		</li>
        <li class="header">Kingdom Technology</li>
        <li><a href="#"><i class="fa fa-circle-o text-red"></i> <span>about</span></a></li>
       <li><a href="#"><i class="fa fa-circle-o text-aqua"></i> <span>Details</span></a></li>
      </ul>
    </section>
    <!-- /.sidebar -->