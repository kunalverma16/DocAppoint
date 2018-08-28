 <!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Contact Us | Doc Appoint</title>
  <style>
 .contain {
  display: grid;
  grid-template-columns: 1fr 3fr;

}
</style>
  <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css ">

  <script defer src="https://use.fontawesome.com/releases/v5.0.6/js/all.js"></script>


  <link href="https://fonts.googleapis.com/css?family=Exo+2:400,700" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="index.css">
</head>
<body style="background: url(https://images.unsplash.com/photo-1520698857293-5d763dde010f?ixlib=rb-0.3.5&ixid=eyJhcHBfaWQiOjEyMDd9&s=c464f3f65008e79825f146e8b98fc6be&auto=format&fit=crop&w=334&q=80);background-size: cover;
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
        <li><a href="about.php">About Us</a></li>
        <li class="active"><a href="contact.php">Contact</a></li>
        <li ><a href="articles.php" title="">Articles</a></li>
      </ul>
      
      <ul class="nav navbar-nav navbar-right">
        <li><a href="doclogin.php"><i class="fas fa-stethoscope"> </i> Doctor</a></li>
        <li><a href="login.php">Login <i class="fas fa-user"></i></a></li>
        <li><a href="registration.php">Sign Up <i class="fas fa-user-plus"></i></a></li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>


	<!-- simple heading used as article gallery for major project -->
	<div class="container">
	<div id="jumboabout" style="text-align: center;" class="jumbotron">
		<h1><i class="fas fa-address-card"></i> Contact</h1>
		<p>Feel free to contact us any time</p>
    <hr>
	</div>


			<div class="contain">	
				
					<label>You can contact us via:</label><br><br>
					
					<label>Email: kunalverma262@gmail.com</label><br><br>
          <label>Or send us your feedbacks</label><br>
				
			</div>	
        <div class="contain">
        <form method="POST" action="actions/backend_sendmsg.php">
          <input type="text" name="fname" placeholder="Full Name" required> <br><br>
              <input type="email" name="email" placeholder="Email"  required> <br><br>
              <input type="text" name="subject" placeholder="Subject" required> <br><br>
              <textarea name="message" placeholder="Message"></textarea> <br><br>
              <button class="btn btn-primary" type="submit" name="submit" value="send">Send</button>
        </form>
      </div>  
</div>
	
<br>
<br>
<div >
<section style= " background-color:black ; height: 120px">
<br><br>
<p style =" text-align:center; color:white">&copy Kunal </p>
</section>
</div>


<script src="https://code.jquery.com/jquery-2.1.4.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
</body>
</html>

