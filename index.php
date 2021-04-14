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

    <title>RocketStart Homepage</title>
    
    <?php require_once "includes/frontend/styles.inc.php";?>

  </head>

  <body>
    
    <!-- ======= Header ======= -->
    <?php require_once "includes/frontend/header.inc.php"; ?>

    <!-- ======= Hero Section ======= -->
    <section id="hero" class="hero d-flex align-items-center">
      <div class="container">
        <div class="row">
          <div class="col-lg-11 d-flex flex-column justify-content-right">
            <h1 data-aos="fade-up">
              ROCKET START YOUR <br />
              TECH CAREER!
            </h1>
            <h2 data-aos="fade-up" data-aos-delay="400">
              Find an internship, summer job <br />or your first graduate
              position
            </h2>
            <div data-aos="fade-up" data-aos-delay="600">
              <div class="text-center text-lg-start">
                <a
                  href="register.php"
                  class="btn-get-started scrollto d-inline-flex align-items-center justify-content-center align-self-right"
                >
                  <span>Get Started</span>
                  <i class="bi bi-arrow-right"></i>
                </a>
              </div>
            </div>
          </div>
          <div class="col-lg-7 d-flex flex-column justify-content-left">
            <div class="hero-left">
              <h2 data-aos="fade-up">
                The only job platform designed
                <span style="color: #4e4cad">by students for students </span>
                <img src="assets/img/Arrow_homepage.svg" alt="" />
              </h2>
            </div>
            <!-- <div
            class="col-lg-6 hero-img"
            data-aos="zoom-out"
            data-aos-delay="200"
          >
            <img
              src="assets/img/Purple_background.svg"
              class="img-fluid"
              alt=""
            /> -->
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
