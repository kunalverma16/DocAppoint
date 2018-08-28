<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Doctor | Doc Appoint</title>
	<link href="https://fonts.googleapis.com/css?family=Exo+2:400,700" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css ">
	<script defer src="https://use.fontawesome.com/releases/v5.0.6/js/all.js"></script>

<script defer src="https://use.fontawesome.com/releases/v5.0.6/js/all.js"></script>
<style>
.footer {
   margin-top:14%;
   left: 0;
   bottom: 0;
   height:5%;
   width: 100%;
   background-color: black;
   color: white;
   text-align: center;
}


</style>
</head>
<body style="font-family: 'Exo 2', sans-serif; background-color: #d3f4c3;background-size: cover;
  background-position: center;">
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
        <li><a href="about.php">About Us</a></li>
        <li><a href="contact.php">Contact</a></li>
        <li><a href="articles.php" title="">Articles</a></li>
        
      </ul>

      <ul class="nav navbar-nav navbar-right">
      	<li class="active"><a href="doclogin.php"><i class="fas fa-stethoscope"> </i> Doctor</a></li>
        <li ><a href="login.php">Login <i class="fas fa-user"></i></a></li>
        <li><a href="registration.php">Sign Up <i class="fas fa-user-plus"></i></a></li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav><br>
				<br><br>
	<div >
		<div class="container" style="height:100%">
			<div style="max-width: 50%">
				
				<div>
				<?php 
					function redirect() {
	    				header("Location: actions/redirect.php");
					}
				 ?>

					<h1 style="color: #2c3e50;text-align: center;font-weight: 700;
	font-size:4em;""><i class="fas fa-stethoscope"></i> Doctor!</h1>
	<br>
					<form method="POST" action="actions/backend_dlogin.php">
						<input type="email" name="email" class="form-control input" placeholder="E-mail" required autofocus>
						<input type="text" name="id" class="form-control input" placeholder="Doctor Id" required autofocus>
						
						<br>
						
						<button class="btn btn-lg btn-primary btn-block signup-btn" type="submit" name="login" id="login">Login</button>
						<!-- <input type="submit" name="login" value="Log in"> -->
						<br>
						
					</form>
					<?php
						session_start();
						
					  if(isset($_SESSION['login'])){
					   redirect();
					  }
					?> 
				</div>
			</div>
		</div>
		<script src="https://code.jquery.com/jquery-2.1.4.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>

<div class="footer" >
	<br><br>
<p style =" height:10%;text-align:center; color:white">&copy Kunal</p>
<br>
</div>
</body>
</html>

<?php 
	include("database_setup.php");
 ?>