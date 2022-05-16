<?php
$yy = date("Y");
$m1 = 1; $m2 = 2; $m3 = 3; $m4 = 4; $m5 = 5; $m6 = 6; $m7 = 7; $m8 = 8; $m9 = 9; $m10 = 10; $m11 = 11; $m12 = 12;

// Jan Income
 $result1 = mysqli_query($conn, "SELECT sum(amount) FROM tither WHERE church = '$church' && month='$m1' && year='$yy'") or die(mysqli_error());
	           while ($rows1 = mysqli_fetch_array($result1)) {
				   $tithe = $rows1['sum(amount)'];
			        
	                 }	
					
 $result1 = mysqli_query($conn, "SELECT sum(amount) FROM income WHERE church = '$church' && month='$m1' && year='$yy'") or die(mysqli_error());
			   while ($rows1 = mysqli_fetch_array($result1)) {
				 $other = $rows1['sum(amount)'];
			       
	                 }
 $jan_inc = $tithe + $other;
 
 // Feb Income
 
 $result2 = mysqli_query($conn, "SELECT sum(amount) FROM tither WHERE church = '$church' && month='$m2' && year='$yy'") or die(mysqli_error());
	           while ($rows1 = mysqli_fetch_array($result2)) {
				   $tithe = $rows1['sum(amount)'];
			        
	                 }	
					
 $result2 = mysqli_query($conn, "SELECT sum(amount) FROM income WHERE church = '$church' && month='$m2' && year='$yy'") or die(mysqli_error());
			   while ($rows1 = mysqli_fetch_array($result2)) {
				 $other = $rows1['sum(amount)'];
			       
	                 }
 $feb_inc = $tithe + $other;
					
 // Mar Income
 
 $result3 = mysqli_query($conn, "SELECT sum(amount) FROM tither WHERE church = '$church' && month='$m3' && year='$yy'") or die(mysqli_error());
	           while ($rows1 = mysqli_fetch_array($result3)) {
				   $tithe = $rows1['sum(amount)'];
			        
	                 }	
					
 $result3 = mysqli_query($conn, "SELECT sum(amount) FROM income WHERE church = '$church' && month='$m3' && year='$yy'") or die(mysqli_error());
			   while ($rows1 = mysqli_fetch_array($result3)) {
				 $other = $rows1['sum(amount)'];
			       
	                 }
 $mar_inc = $tithe + $other;
 
 // Apr Income
 
 $result4 = mysqli_query($conn, "SELECT sum(amount) FROM tither WHERE church = '$church' && month='$m4' && year='$yy'") or die(mysqli_error());
	           while ($rows1 = mysqli_fetch_array($result4)) {
				   $tithe = $rows1['sum(amount)'];
			        
	                 }	
					
 $result4 = mysqli_query($conn, "SELECT sum(amount) FROM income WHERE church = '$church' && month='$m4' && year='$yy'") or die(mysqli_error());
			   while ($rows1 = mysqli_fetch_array($result4)) {
				 $other = $rows1['sum(amount)'];
			       
	                 }
 $apr_inc = $tithe + $other;
 
 // May Income
 
 $result5 = mysqli_query($conn, "SELECT sum(amount) FROM tither WHERE church = '$church' && month='$m5' && year='$yy'") or die(mysqli_error());
	           while ($rows1 = mysqli_fetch_array($result5)) {
				   $tithe = $rows1['sum(amount)'];
			        
	                 }	
  $result5 = mysqli_query($conn, "SELECT sum(amount) FROM income WHERE church = '$church' && month='$m5' && year='$yy'") or die(mysqli_error());
			   while ($rows1 = mysqli_fetch_array($result5)) {
				 $other = $rows1['sum(amount)'];
			       
	                 }
 $may_inc = $tithe + $other;
 
 // June Income

$result6 = mysqli_query($conn, "SELECT sum(amount) FROM tither WHERE church = '$church' && month='$m6' && year='$yy'") or die(mysqli_error());
	           while ($rows1 = mysqli_fetch_array($result6)) {
				   $tithe = $rows1['sum(amount)'];
			        
	                 }	
 $result6 = mysqli_query($conn, "SELECT sum(amount) FROM income WHERE church = '$church' && month='$m6' && year='$yy'") or die(mysqli_error());
			   while ($rows1 = mysqli_fetch_array($result6)) {
				 $other = $rows1['sum(amount)'];
			       
	                 }
 $jun_inc = $tithe + $other;
 
 // July Income
 
 $result7 = mysqli_query($conn, "SELECT sum(amount) FROM tither WHERE church = '$church' && month='$m7' && year='$yy'") or die(mysqli_error());
	           while ($rows1 = mysqli_fetch_array($result7)) {
				   $tithe = $rows1['sum(amount)'];
			        
	                 }	
  $result7 = mysqli_query($conn, "SELECT sum(amount) FROM income WHERE church = '$church' && month='$m7' && year='$yy'") or die(mysqli_error());
			   while ($rows1 = mysqli_fetch_array($result7)) {
				 $other = $rows1['sum(amount)'];
			       
	                 }
 $jul_inc = $tithe + $other;
 
 // August Income
 
 $result8 = mysqli_query($conn, "SELECT sum(amount) FROM tither WHERE church = '$church' && month='$m8' && year='$yy'") or die(mysqli_error());
	           while ($rows1 = mysqli_fetch_array($result8)) {
				   $tithe = $rows1['sum(amount)'];
			        
	                 }	
  $result8 = mysqli_query($conn, "SELECT sum(amount) FROM income WHERE church = '$church' && month='$m8' && year='$yy'") or die(mysqli_error());
			   while ($rows1 = mysqli_fetch_array($result8)) {
				 $other = $rows1['sum(amount)'];
			       
	                 }
 $aug_inc = $tithe + $other;
 
 // September Income 
 
 $result9 = mysqli_query($conn, "SELECT sum(amount) FROM tither WHERE church = '$church' && month='$m9' && year='$yy'") or die(mysqli_error());
	           while ($rows1 = mysqli_fetch_array($result9)) {
				   $tithe = $rows1['sum(amount)'];
			        
	                 }	
  $result9 = mysqli_query($conn, "SELECT sum(amount) FROM income WHERE church = '$church' && month='$m9' && year='$yy'") or die(mysqli_error());
			   while ($rows1 = mysqli_fetch_array($result9)) {
				 $other = $rows1['sum(amount)'];
			       
	                 }
 $sep_inc = $tithe + $other;
 
 // October Income
 
 $result10 = mysqli_query($conn, "SELECT sum(amount) FROM tither WHERE church = '$church' && month='$m10' && year='$yy'") or die(mysqli_error());
	           while ($rows1 = mysqli_fetch_array($result10)) {
				   $tithe = $rows1['sum(amount)'];
			        
	                 }	
  $result10 = mysqli_query($conn, "SELECT sum(amount) FROM income WHERE church = '$church' && month='$m10' && year='$yy'") or die(mysqli_error());
			   while ($rows1 = mysqli_fetch_array($result10)) {
				 $other = $rows1['sum(amount)'];
			       
	                 }
 $oct_inc = $tithe + $other;
 
 // November Income
 
 $result11 = mysqli_query($conn, "SELECT sum(amount) FROM tither WHERE church = '$church' && month='$m11' && year='$yy'") or die(mysqli_error());
	           while ($rows1 = mysqli_fetch_array($result11)) {
				   $tithe = $rows1['sum(amount)'];
			        
	                 }	
  $result11 = mysqli_query($conn, "SELECT sum(amount) FROM income WHERE church = '$church' && month='$m11' && year='$yy'") or die(mysqli_error());
			   while ($rows1 = mysqli_fetch_array($result11)) {
				 $other = $rows1['sum(amount)'];
			       
	                 }
 $nov_inc = $tithe + $other;
 
 // December Income
 
 $result12 = mysqli_query($conn, "SELECT sum(amount) FROM tither WHERE church = '$church' && month='$m12' && year='$yy'") or die(mysqli_error());
	           while ($rows1 = mysqli_fetch_array($result12)) {
				   $tithe = $rows1['sum(amount)'];
			        
	                 }	
 $result12 = mysqli_query($conn, "SELECT sum(amount) FROM income WHERE church = '$church' && month='$m12' && year='$yy'") or die(mysqli_error());
			   while ($rows1 = mysqli_fetch_array($result12)) {
				 $other = $rows1['sum(amount)'];
			       
	                 }
 $dec_inc = $tithe + $other;
 ?>
 
 <?php 
 
 // Expenses
 
 // January Expense
 
  $expense1 = mysqli_query($conn, "SELECT sum(amount) FROM expense WHERE church = '$church' && month='$m1' && year='$yy'") or die(mysqli_error());
	           while ($rows1 = mysqli_fetch_array($expense1)) {
				   $jan_exp = $rows1['sum(amount)'];
			        
	                 }
 
 // February Expense
 
  $expense2 = mysqli_query($conn, "SELECT sum(amount) FROM expense WHERE church = '$church' && month='$m2' && year='$yy'") or die(mysqli_error());
	           while ($rows1 = mysqli_fetch_array($expense2)) {
				   $feb_exp = $rows1['sum(amount)'];
			        
	                 }
					 
 // March Expense
 
 $expense3 = mysqli_query($conn, "SELECT sum(amount) FROM expense WHERE church = '$church' && month='$m3' && year='$yy'") or die(mysqli_error());
	           while ($rows1 = mysqli_fetch_array($expense3)) {
				   $mar_exp = $rows1['sum(amount)'];
			        
	                 }
					 
 // April Expense
 
 $expense4 = mysqli_query($conn, "SELECT sum(amount) FROM expense WHERE church = '$church' && month='$m4' && year='$yy'") or die(mysqli_error());
	           while ($rows1 = mysqli_fetch_array($expense4)) {
				   $apr_exp = $rows1['sum(amount)'];
			        
	                 }
					 
 // May Expense
 
 $expense5 = mysqli_query($conn, "SELECT sum(amount) FROM expense WHERE church = '$church' && month='$m5' && year='$yy'") or die(mysqli_error());
	           while ($rows1 = mysqli_fetch_array($expense5)) {
				   $may_exp = $rows1['sum(amount)'];
			        
	                 }
					 
// June Expense

 $expense6 = mysqli_query($conn, "SELECT sum(amount) FROM expense WHERE church = '$church' && month='$m6' && year='$yy'") or die(mysqli_error());
	           while ($rows1 = mysqli_fetch_array($expense6)) {
				   $jun_exp = $rows1['sum(amount)'];
			        
	                 }
					 
 // July Expense
 
 $expense7 = mysqli_query($conn, "SELECT sum(amount) FROM expense WHERE church = '$church' && month='$m7' && year='$yy'") or die(mysqli_error());
	           while ($rows1 = mysqli_fetch_array($expense7)) {
				   $jul_exp = $rows1['sum(amount)'];
			        
	                 }
					 
 // August Expense
 
 $expense8 = mysqli_query($conn, "SELECT sum(amount) FROM expense WHERE church = '$church' && month='$m8' && year='$yy'") or die(mysqli_error());
	           while ($rows1 = mysqli_fetch_array($expense8)) {
				   $aug_exp = $rows1['sum(amount)'];
			        
	                 }
					 
 // September Expense
 
 $expense9 = mysqli_query($conn, "SELECT sum(amount) FROM expense WHERE church = '$church' && month='$m9' && year='$yy'") or die(mysqli_error());
	           while ($rows1 = mysqli_fetch_array($expense9)) {
				   $sep_exp = $rows1['sum(amount)'];
			        
	                 }
					 
 // October Expense

 $expense10 = mysqli_query($conn, "SELECT sum(amount) FROM expense WHERE church = '$church' && month='$m10' && year='$yy'") or die(mysqli_error());
	           while ($rows1 = mysqli_fetch_array($expense10)) {
				   $oct_exp = $rows1['sum(amount)'];
			        
	                 }
					 
 // November Expense
 
 $expense11 = mysqli_query($conn, "SELECT sum(amount) FROM expense WHERE church = '$church' && month='$m11' && year='$yy'") or die(mysqli_error());
	           while ($rows1 = mysqli_fetch_array($expense11)) {
				   $nov_exp = $rows1['sum(amount)'];
			        
	                 }
					
// December Expense

$expense12 = mysqli_query($conn, "SELECT sum(amount) FROM expense WHERE church = '$church' && month='$m12' && year='$yy'") or die(mysqli_error());
	           while ($rows1 = mysqli_fetch_array($expense12)) {
				   $dec_exp = $rows1['sum(amount)'];
			        
	                 }
 ?>