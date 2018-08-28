
 <!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Login | Doc Appoint</title>
	<link href="https://fonts.googleapis.com/css?family=Exo+2:400,700" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css ">
	<script defer src="https://use.fontawesome.com/releases/v5.0.6/js/all.js"></script>

<script defer src="https://use.fontawesome.com/releases/v5.0.6/js/all.js"></script>



</head>
<body style="font-family: 'Exo 2', sans-serif; background: url(https://images.unsplash.com/photo-1479920252409-6e3d8e8d4866?ixlib=rb-0.3.5&ixid=eyJhcHBfaWQiOjEyMDd9&s=7335ddddbdb2e401ce4f50507524d900&auto=format&fit=crop&w=750&q=80);background-size: cover;
  background-position: center;">

<!-- navbar -->
<nav class="navbar navbar-default">
  <div class="container" > <!-- to add spacing on both sides -->
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
        <li ><a href="contact.php">Contact</a></li>
        <li ><a href="articles.php" title="">Articles</a></li>
      </ul>
      
      <ul class="nav navbar-nav navbar-right">
        <li><a href="login.php">Login <i class="fas fa-user"></i></a></li>
        <li class="active"><a href="registration.php">Sign Up <i class="fas fa-user-plus"></i></a></li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>


	<!-- simple heading used as article gallery for major project -->
	<div class="container" >
	

	<div>
				<script type="text/javascript">

				function checkForm(form){
				    if(form.username.value == "") {
				      alert("Error: Username cannot be blank!");
				      form.username.focus();
				      return false;
				    }
				    re = /^\w+$/;
				    if(!re.test(form.username.value)) {
				      alert("Error: Username must contain only letters, numbers and underscores!");
				      form.username.focus();
				      return false;
				    }
				    if(form.password.value != "" && form.password.value == form.repassword.value) {
				      if(form.password.value.length < 6) {
				        alert("Error: Password must contain at least six characters!");
				        form.password.focus();
				        return false;
				      }
				      if(form.password.value == form.username.value) {
				        alert("Error: Password must be different from Username!");
				        form.password.focus();
				        return false;
				      }
				      re = /[0-9]/;
				      if(!re.test(form.password.value)) {
				        alert("Error: password must contain at least one number (0-9)!");
				        form.password.focus();
				        return false;
				      }
				    } else {
				      alert("Error: Please check that you've entered and confirmed your password!");
				      form.password.focus();
				      return false;
				    }
				    alert("Thank You");
				    return true;
				  }

				</script>
				<h1 style="color: #2c3e50;text-align: center;font-weight: 700;
	font-size:4em;""><i class="fas fa-user-plus"></i> Sign Up</h1>
    
    <h4 style="color: #2c3e50;text-align: center">Its free and always will be.</h4>
    <br>
    <br><div class="form-group ">
				<form method="POST" action="actions/backend_register.php" id="regiter" onsubmit="return checkForm(this)">
					<label > Full Name: </label><input type="text" name="name" value="" class="form-control input" placeholder="Full Name" > <br>
					<label>Email: </label><input type="email" name="email" class="form-control input" placeholder="Email"> <br>
					<label>Password: </label><input type="password" name="password" class="form-control input" placeholder="Password"><br>
					<label>Confirm Password: </label><input type="password" name="repassword" class="form-control input" placeholder="Confirm Password"><br>
					<label>Address: </label><input type="text" name="address" class="form-control input" placeholder="Address"><br>
					<label>Date of birth: </label><input type="date" name="dob" class="form-control input" placeholder="Date of Birth"> <br>
					<label>Gender:</label>
					<!-- <select name="gender"> -->
						<label class="radio-inline">
                            <input type="radio" name="gender" value="male" required/><b>Male</b>
                        </label>
                        <label class="radio-inline" >
                            <input type="radio" name="gender" value="female" required/><b>Female</b>
                        </label>
						

					<br>
					<br><span style="color: black"><b>By clicking Create my account, you agree to our Terms and that you have read our Data Use Policy, including our Cookie Use.</b></span>
					<br>

					<button class="btn btn-lg  btn-block signup-btn btn-primary" type="submit" name="register" value="register">Create account</button>
					
					<br>
					<label>Already registered? Click <a href="login.php">HERE</a> to log in.</label>

				</form>
			</div>

			
			</div>
		</div>

<script src="https://code.jquery.com/jquery-2.1.4.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
<div >
<section style= " background-color:black ; height: 120px">
<br><br>
<p style =" text-align:center; color:white">&copy Kunal</p>
</section>
</div>
</body>
</html>

