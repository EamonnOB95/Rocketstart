<html>

<head>

	<title>Register</title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

</head>

<body>
	<div class="container">
		<div class="row">
			<div class="col-12 text-center">
				<h1>Register Now</h1>
			</div>
		</div>

		<div class="row">
			<div class="col-4"></div>
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
			<div class="col-4"></div>
		</div>
	</div>

</body>


</html>