<?php
  session_start();
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <meta content="" name="description" />
    <meta content="" name="keywords" />

    <title>Sign In</title>

    <?php require_once "includes/frontend/styles.inc.php";?>

  </head>

  <body>
    
    <!-- ======= Header ======= -->
    <?php require_once "includes/frontend/header.inc.php"; ?>

    <!-- ======= Hero Section ======= -->
    <section id="hero" class="hero d-flex align-items-center">
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

              <form action="includes/authentication/signIn.inc.php" method="post">
                <!-- Email -->
                <label for="email">Email:</label><br>
                <input type="text" id="email" name="email"><br>
                <!-- Password -->
                <label for="password">Password</label><br>
                <input type="password" name="password"><br><br>
                <!-- Button -->
                <input type="submit" name="submit" value="Sign In">
              </form>
              <p>New to Rocketstart? <a href="register.php">Register Now!</a></p>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- End Hero -->

    <!-- ======= Footer ======= -->
    <?php require_once "includes/frontend/footer.inc.php";?>

    <!-- ======= Javascript ======= -->
    <?php require_once "includes/frontend/scripts.inc.php";?>
    
  </body>
</html>
