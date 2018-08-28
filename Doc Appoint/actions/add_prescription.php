<?php 
	include("_db-mysql.php");
	if(isset($_POST['submit']) && !empty($_POST['submit'])){
		$pid = $_POST['p_id'];
		$symptoms = $_POST['symptoms'];
		$disease = $_POST['disease'];
		$prescriptions = $_POST['prescriptions'];
		$checkpid="SELECT * FROM prescriptions_tbl WHERE p_id = '$pid'";
		$respid=mysqli_query($conn,$checkpid);
		$datapid = mysqli_fetch_row($respid);
		if ($datapid > 0){
			$query ="UPDATE `prescriptions_tbl` SET `p_id`='$pid',`symptoms`='$symptoms',`disease`='$disease', `prescriptions`='$prescriptions' WHERE `p_id` ='$pid'";
		
		$result = mysqli_query($conn,$query);
			echo "<SCRIPT type='text/javascript'>

			    	alert('Prescription already exists and it is updated');
			    	window.location.replace('../doctors/prescriptions.php');
				</SCRIPT>";
			}
			else{
		$query ="INSERT INTO `prescriptions_tbl`
		(`p_id`,`symptoms`,`disease`,`prescriptions`) 
		VALUES('$pid','$symptoms','$disease','$prescriptions')";
		$result = mysqli_query($conn,$query);
		echo "<SCRIPT type='text/javascript'>
		    	alert('Prescription Added.');
		    	window.location.replace('../doctors/prescriptions.php');
			</SCRIPT>";
}
	}	
 ?> 
 