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

    <title>Search Results</title>

    <?php require_once "includes/frontend/styles.inc.php";?>

  </head>

  <body>
    
    <!-- ======= Header ======= -->
    <?php require_once "includes/frontend/header.inc.php"; ?>

    <!-- ======= Hero Section ======= -->
    <section id="hero" class="hero d-flex align-items-center">
      <div class="container">
        <?php

          require_once "getSearchResults.inc.php";

          echo "<h3>People</h3>";


          echo "<h3>Companies</h3>";

          echo "<h3>Jobs</h3>";
        ?>
      </div>
    </section>
    <!-- End Hero -->

    <!-- ======= Footer ======= -->
    <?php require_once "includes/frontend/footer.inc.php";?>

    <!-- ======= Javascript ======= -->
    <?php require_once "includes/frontend/scripts.inc.php";?>
    
  </body>
</html>
