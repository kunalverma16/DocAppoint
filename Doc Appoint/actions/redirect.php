<?php 
	include("_db-mysql.php");
	function redirect(){
		$def_email = "admin@gmail.com";
		$email = $_SESSION['email'];
		if ($def_email == $email) {
		 	header('Location: ../admin/');
		 } else{
		 	header('Location: ../patients/');
		 	
		 }
	}

	session_start();
	 if(isset($_SESSION['login'])){
		redirect();
	}
?>
