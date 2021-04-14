<?php
  session_start();
  require_once "includes/userProfile/profileFunctions.php";
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <meta content="" name="description" />
    <meta content="" name="keywords" />

    <title></title>

    <?php require_once "includes/frontend/styles.inc.php";?>

  </head>

  <body>
    
    <!-- ======= Header ======= -->
    <?php require_once "includes/frontend/header.inc.php"; ?>

    <!-- ======= Hero Section ======= -->
    <section id="hero" class="hero d-flex align-items-center">
      <div class="container">
        <!-- Temporary content section -->
        <div class="row tempRow">
          <!-- Temporary main content section to contain all profile information -->
          <div class="col-9">
            <div class="row">
              <div class="col">
                <h3>Profile Picture</h3>
                <?php getProfilePicture(); ?>
              </div>
              <div class="col">
                <h3>Summary Information</h3>
                <?php getProfileName(); ?>
              </div>
            </div>
            <div class="row">
              <div class="col">
                <h3>Summary</h3>
                <?php getProfileSummary(); ?>
              </div>
            </div>
            <div class="row">
              <div class="col">
                <h3>Experience</h3>
                <?php getExperience(); ?>
              </div>
            </div>
            <div class="row">
              <div class="col">
                <h3>Qualifications</h3>
                <?php getQualifications(); ?>
              </div>
            </div>
            <div class="row">
              <div class="col">
                <h3>Skills</h3>
                <?php getSkills(); ?>
              </div>
            </div>
          </div>
          <!-- Temporary right column section for suggested vacancies, connections, and company follows -->
          <div class="col-3">
            <div class="row">
              <div class="col">
                <h3>Suggested Vacancies</h3>
                <?php getSuggestedVacancies(); ?>
              </div>
            </div>
            <div class="row">
              <div class="col">
                <h3>Companies You Follow</h3>
                <?php getCompaniesFollowed(); ?>
              </div>
            </div>
            <div class="row">
              <div class="col">
                <h3>Connections</h3>
                <?php getConnections(); ?>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- ======= Footer ======= -->
    <?php require_once "includes/frontend/footer.inc.php";?>

    <!-- ======= Javascript ======= -->
    <?php require_once "includes/frontend/scripts.inc.php";?>
    
  </body>
</html>
