<?php
	//include("connection.php");
	include("konnect/connect.php");						
	
if(isset($_POST['upload'])){
 
  $user=$_POST['user'];
  $name = $_FILES['image']['name'];
  $target_dir = "photos/";
  $target_file = $target_dir . basename($_FILES["image"]["name"]);
  
  $location="photos/" . $_FILES["image"]["name"];

  // Select file type
  $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

  // Valid file extensions
  $extensions_arr = array("jpg","jpeg","png","gif","docx");

  // Check extension
  if( in_array($imageFileType,$extensions_arr) ){
 
     // Insert record
     
     $query = "UPDATE sys_users SET image = '$location' WHERE user_id ='$user'";
     mysqli_query($conn, $query);
  
     // Upload file
     move_uploaded_file($_FILES['image']['tmp_name'],$target_dir.$name);

  }
 header('location:profile.php');
}
?>
 
?>

?>