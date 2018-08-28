<?php 
	
	session_start();
	include("_db-mysql.php");
	if(isset($_POST['login'])){
		
		$email = $_POST['email'];
		$id = $_POST['id'];
		echo '<script>alert($email)</script>';
		echo '<script>alert($id)</script>';
		$query = "SELECT * FROM `doctors_tbl` WHERE email='$email' and d_id='$id'"; 
		$result = mysqli_query($conn, $query); 
		$num = mysqli_num_rows($result);
		$row = mysqli_fetch_array($result); 
			
			if($num==1){
				$_SESSION['login'] ="login"; 
				$_SESSION['did'] = $row['d_id']; 
				echo "<SCRIPT type='text/javascript'>
		        window.location.replace('../doctors/');
		        alert('Login Success doctor');
		    	</SCRIPT>";
			}else{
				echo "<SCRIPT type='text/javascript'>
				        window.location.replace('../doclogin.php');
				        alert('Email or id invalid');
			    	</SCRIPT>";
			}
		
	}
 ?>