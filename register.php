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

    <title>Registration</title>

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

              <form action="includes/authentication/register.inc.php" method="post">
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
