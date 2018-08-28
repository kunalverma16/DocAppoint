<?php 
	session_start();
	include("../actions/_db-mysql.php");
	$aid = $_SESSION['a_id'];
	$query ="DELETE FROM `appointments_tbl` WHERE `a_id` = '$aid'";
	$result = mysqli_query($conn,$query);
	
	echo "<SCRIPT type='text/javascript'>
        alert('Appointment Deleted');
        window.location.replace('../admin/viewappointments.php');
    	</SCRIPT>";	

 ?>



