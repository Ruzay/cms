<?php
$dbhost = 'localhost:3306';
         $dbuser = 'capitalmakerts_root';
         $dbpass = 'create_password';
		 $database = 'capitalmakerts_platinum';
         $conn = mysqli_connect($dbhost, $dbuser, $dbpass,$database);
   
         if(! $conn ){
            die('Could not connect: ' . mysqli_error());
}

include_once 'konnect/connect.php';
$message=" ";
if(isset($_POST['btn_log'])){
$username=$_POST['username'];
$password=$_POST['password'];
$position=$_POST['position'];
$church=$_POST['church'];
switch($position){
case 'Admin':

$sql = "SELECT * FROM sys_users WHERE username='$username' AND password='$password' AND position='$position'";
$result= mysqli_query($conn,$sql);
$row = mysqli_fetch_assoc($result);
if($row>0){
session_start();
$_SESSION['user_id']=$row[0];
$_SESSION['username']=$row[1];
//$_SESSION['church']=$row[1];
header("location:http://".$_SERVER['HTTP_HOST'].dirname($_SERVER['PHP_SELF'])."/menu.php");
}else{
$message="<font color=red>Invalid login Try Again</font>";
}
break;
case 'Secretary':

$sql = "SELECT * FROM sys_users WHERE username='$username' AND password='$password' AND position='$position'";
$result = mysqli_query($conn,$sql);
$row = mysqli_fetch_assoc($result);
if($row>0){
session_start();
$_SESSION['user_id']=$row['user_id'];
$_SESSION['username']=$row[2];
$_SESSION['position']=$row[3];
$_SESSION['password']=$row[4];
$_SESSION['church']=$row[5];

header("location:http://".$_SERVER['HTTP_HOST'].dirname($_SERVER['PHP_SELF'])."/registrar.php");
}else{
$message="<font color=red>Invalid login Try Again</font>";
}
break;
case 'Treasurer':

$sql = "SELECT * FROM sys_users WHERE username='$username' AND password='$password' AND position='$position'";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);
if($row>0){
session_start();
$_SESSION['user_id']=$row['user_id'];
//$_SESSION['user_id']=$row[0];
$_SESSION['username']=$row[2];
$_SESSION['position']=$row[3];
$_SESSION['password']=$row[4];
$_SESSION['church']=$row[5];

header("location:money.php");
}else{
$message="<font color=red>Invalid login Try Again</font>";
}
break;
case 'Manager':

$sql = "SELECT * FROM sys_users WHERE username='$username' AND password='$password' AND position='$position'";
$result = $mysqli_query($conn,$sql);
$row = mysqli_fetch_assoc($result);
if($row>0){
session_start();
$_SESSION['manager_id']=$row[0];
$_SESSION['first_name']=$row[1];
$_SESSION['last_name']=$row[2];
$_SESSION['staff_id']=$row[3];
$_SESSION['username']=$row[4];
header("location:http://".$_SERVER['HTTP_HOST'].dirname($_SERVER['PHP_SELF'])."/manager.php");
}else{
$message="<font color=red>Invalid login Try Again</font>";
}
break;
}}
echo <<<LOGIN
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>CMS|LTE 1 | Log in</title>
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
  <!-- iCheck -->
  <link rel="stylesheet" href="plugins/iCheck/square/blue.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
</head>
<body class="hold-transition login-page">
<div class="login-box">
  <div class="login-logo">
    <a href="#"><b>CMS LOGIN</b></a>
  </div>
  <!-- /.login-logo -->
  <div class="login-box-body">
    <p class="login-box-msg">Log in to start your session</p>
$message
    <form method="post"  action="index.php"  >
      <div class="form-group has-feedback">
        <input type="text" name="username" class="form-control" placeholder="Username">
        <span class="glyphicon glyphicon-user form-control-feedback"></span>
      </div>
	  <div class="form-group has-feedback">
        <input type="password" name="password" class="form-control" placeholder="Password">
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
      </div>
	   <div class="form-group has-feedback">
        <input type="text" name="church" class="form-control" placeholder="Church Code">
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
      </div>
      
	 
	   <div class="form-group">
                <label>Login as</label>
                <select class="form-control" style="width: 100%;" name="position">
                  <option>Secretary</option>
				  <option>Pastor</option>
                  <option>Chairman</option>
                  <option>Sunday School T</option>
                  <option>Treasurer</option>
				  <option>Admin</option>
				 
               </select>
       </div>
			  
	<div class="row">
        <!-- /.col -->
        <div class="col-xs-4">
          <button type="submit" name="btn_log" class="btn btn-primary btn-block btn-flat">Sign In</button>
        </div>
        <!-- /.col -->
		
      </div>
	
    </form>
 
  </div>
   
  <!-- /.login-box-body -->
</div>
<!-- /.login-box -->

<!-- jQuery 2.2.3 -->
<script src="plugins/jQuery/jquery-2.2.3.min.js"></script>
<!-- Bootstrap 3.3.6 -->
<script src="bootstrap/js/bootstrap.min.js"></script>
<!-- iCheck -->
<script src="plugins/iCheck/icheck.min.js"></script>
<script>
 $(function () {
    $('input').iCheck({
      checkboxClass: 'icheckbox_square-blue',
      radioClass: 'iradio_square-blue',
      increaseArea: '20%' // optional
    });
  }); 
</script>
</body>
</html>
LOGIN;
?>