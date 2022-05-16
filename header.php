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
           
             <?php
	  
	   $sql="SELECT * FROM sys_users WHERE user_id = '$id'";
	   $result = mysqli_query($conn, $sql);
	   while($row=mysqli_fetch_array($result)){
	   
	  ?>
	  
         
          <!-- User Account: style can be found in dropdown.less -->
            <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <img src="//capitalmakerts.com/<?php echo $row['image'];  ?>" class="user-image" alt="User Image">
              <span class="hidden-xs">Profile</span>
            </a>
            <ul class="dropdown-menu">
              <!-- User image -->
              <li class="user-header">
                <img src="//capitalmakerts.com/<?php echo $row['image']; ?>" class="img-circle" alt="User Image">

                <p>
                   <?php echo $row['name']; ?>
                  <small>
				  <?php
	  
	   echo $row['church_name'];
	  
	   }
	  ?>
				  </small>
                </p>
              </li>
          
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