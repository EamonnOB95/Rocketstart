<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="app.css">
    <link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,400;1,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">
    <link rel="stylesheet" type="text/css" href="rocketstart.css">

    <title>RocketStart Sign Up</title>
</head>

<nav class="navbar navbar-default">
  <div class="container">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="rocketStart.html">RocketStart<i class="fa fa-rocket" aria-hidden="true"></i></a>
    </div>


    <div id = "colorWhite"> 
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

        <ul class="nav navbar-nav navbar-right">
        <li><a href="rocketStartSignUp.php">Sign Up <i class="fa fa-user" aria-hidden="true"></i></a></li>
        <li><a href="rocketStartSignIn.php">Sign In <i class="fa fa-user" aria-hidden="true"></i></a></li>
        <li><a href="rocketStartSearch.html">Search <i class="fa fa-search" aria-hidden="true"></i>
</a></li>
        
      </ul>
  
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</div>
</nav>


<div class="container">
<div class="row>">
<div class="col-lg-12">
<div id="content">
				<?php 
					if(isset($_GET["error"])) {
						if($_GET["error"] == "emptyinput") {
							echo "<p>Please complete all fields.</p>";
						}
						else if($_GET["error"] == "userdoesntexist") {
							echo "<p>User not found.</p>";
						}
						else if($_GET["error"] == "invalidpassword") {
							echo "<p>Incorrect password</p>";
						}
						else if($_GET["error"] == "stmtfailed") {
							echo "<p>Something went wrong, please try again!</p>";
						}
					} 
				?>

				<form action="includes/signIn.inc.php" method="post">
          <!-- Email -->
					<label for="email">Email:</label><br>
					<input type="text" id="email" name="email"><br>
          <!-- Password -->
					<label for="pWord1">Password</label><br>
					<input type="password" name="password"><br><br>
          <!-- Button -->
					<input type="submit" name="submit" value="Sign In">
				</form>
        <p>New to Rocketstart? <a href="rocketStartSignUp.php">Register Now!</a></p>
			</div>
		</div>
	</div>
</div>