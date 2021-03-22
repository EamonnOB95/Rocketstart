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
				<form action="register.php" method="post">
          <!-- Email -->
					<label for="email">Email:</label><br>
					<input type="text" id="email" name="email"><br>
          <!-- Password -->
					<label for="pWord1">Password</label><br>
					<input type="password" id="pWord1" name="pWord1"><br><br>
          <!-- Button -->
					<input type="submit" name="btnSignIn" value="Sign In">
				</form>
        <p>New to Rocketstart? <a href="index.php">Register Now!</a></p>
			</div>
			<div class="col-4"></div>
		</div>
	</div>

</body>


</html>