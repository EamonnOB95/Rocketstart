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
			<div class="col-4" style="border: 1px solid black; width: 220px; height: 230px;">
        <?php
          $email = $_POST["email"];
          $password = $_POST["pWord1"];
          $rPassword = $_POST["pWord2"];
          if($password == $rPassword) {
            echo "Hello " . $email;
          }
          else {
            echo "Invalid Login";
          }
          
        ?>
			</div>
			<div class="col-4"></div>
		</div>
	</div>

</body>


</html>