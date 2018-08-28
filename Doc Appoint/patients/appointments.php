



<?php
  session_start();
  if(!isset($_SESSION['login'])){ 
    echo "
    	<SCRIPT type='text/javascript'>
	        window.location.replace('../');
	        alert('Login First');
	    </SCRIPT>
	    ";
  }
?>

<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
  <title>My Appointments | Doc Appoint</title>
  <style>
  	table, tr, th, td {
  		margin-left:0%;
  	    text-align: center;
  	}
  </style>
  <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css ">

  <script defer src="https://use.fontawesome.com/releases/v5.0.6/js/all.js"></script>


  <link href="https://fonts.googleapis.com/css?family=Exo+2:400,700" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="index.css">
</head>
<body style="font-family: 'Exo 2', sans-serif; background: url(https://images.unsplash.com/photo-1520698857293-5d763dde010f?ixlib=rb-0.3.5&ixid=eyJhcHBfaWQiOjEyMDd9&s=c464f3f65008e79825f146e8b98fc6be&auto=format&fit=crop&w=334&q=80);background-size: cover;
  background-position: center; color:black;">

<!-- navbar -->
<nav class="navbar navbar-default">
  <div class="container"> <!-- to add spacing on both sides -->
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="index.php">Doc Appoint</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li ><a href="index.php">Home</a></li> 
        <li ><a href="book.php">Book Appointment</a></li>
        <li class="active"><a href="appointments.php">My Appointments</a></li>
        <li><a href="prescriptions.php">My prescription</a></li>

      </ul>
      
      <ul class="nav navbar-nav navbar-right">
        <li><a href="../actions/backend_logout.php"><i class="fas fa-user"></i> Logout</a></li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
<div style="text-align: center;" class="container">
	<div id="jumboabout"  class="page-header">
		<h1><i class="fas fa-clipboard"></i> My Appointments</h1>
	</div>
	<div >
		<div >
			
		    <table class="table table-hover"  border="2px">
				<tr class="success" >
			
					<th>Appointment ID</th><th>With Doctor</th><th>Date</th><th>Time</th><th></th>
				</tr>
				<?php
					include("../actions/_db-mysql.php");
					$pid = $_SESSION['pid'];
					$aquery = "SELECT * FROM appointments_tbl WHERE `p_id` = $pid";
					$asql = mysqli_query($conn, $aquery);
					$i=1;
					while($row = mysqli_fetch_array($asql)){
					  $did = $row['d_id'];
				?>
					<tr>
						<td> <?php echo $row['a_id']; ?>  </td>
						<?php 
					  $dquery = "SELECT * FROM doctors_tbl WHERE `d_id` = $did";
					  $dsql = mysqli_query($conn, $dquery);
					  $did = mysqli_fetch_array($dsql);
						 ?>
					    <td> <?php echo 'Dr. ' . $did['fname'] .' '. $did['lname'] ?>  </td>
					    <td> <?php echo  $row['date'] ?>  </td>
					    <td> <?php echo  $did['time'] ?>  </td>
					    <?php echo"<td><a href='updateappointment.php?aid=".$row['a_id']."'> Update</a> | <a href='../actions/backend_deleteappointment.php?aid=".$row['a_id']."'> Delete</a></td>";?>
					</tr>
				<?php	  
					}
				?>           

        	</table>
        	
</div>
	</div>
</div>
         <script src="https://code.jquery.com/jquery-2.1.4.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>       		
</body>
</html>