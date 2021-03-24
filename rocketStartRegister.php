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
        <li><a href="rocketStartSignUp.html">Sign Up <i class="fa fa-user" aria-hidden="true"></i></a></li>
        <li><a href="rocketStartSearch.html">Search <i class="fa fa-search" aria-hidden="true"></i>
</a></li>
        
      </ul>
  
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</div>
</nav>

<div class="col-4" style="border: 1px solid black; width: 220px; height: 270px;">

				<?php 
					if(isset($_GET["error"])) {
						if($_GET["error"] == "emptyinput") {
							echo "<p>Please complete all fields.</p>";
						}
						else if($_GET["error"] == "invalidemail") {
							echo "<p>Please enter a valid email.</p>";
						}
						else if($_GET["error"] == "passwordsnotmatching") {
							echo "<p>Please ensure passwords match.</p>";
						}
						else if($_GET["error"] == "emailalreadyexists") {
							echo "<p>That email is already in use.</p>";
						}
						else if($_GET["error"] == "weakpassword") {
							echo "<p>Password must contain one of each of: <ul><li>uppercase</li><li>lowercase</li><li>number character</li></ul></p>";
						}
						else if($_GET["error"] == "stmtfailed") {
							echo "<p>Something went wrong, please try again!</p>";
						}
						else if($_GET["error"] == "none") {
							echo "<p>Congratulations, and welcome to Rocketstart!</p>";
						}
					} 
				?>

				<form action="includes/register.inc.php" method="post">
          <!-- Email -->
					<label for="email">Email:</label><br>
					<input type="text" id="email" name="email" required><br>
          <!-- Password -->
					<label for="password1">Password</label><br>
					<input type="password" name="password1" required><br>
          <!-- Reenter Password -->
					<label for="password2">Re-enter Password</label><br>
					<input type="password" name="password2" required><br><br>
          <!-- Button -->
					<input type="submit" value="Register" name="submit">
				</form>
        <p>Already a user? <a href="signIn.php">Sign In</a></p>
			</div>






<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<body>

</body>
</html>