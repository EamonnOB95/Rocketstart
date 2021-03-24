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
        <p>New to Rocketstart? <a href="index.php">Register Now!</a></p>
			</div>
			<div class="col-4"></div>
		</div>
	</div>

</body>


</html>