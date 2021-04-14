<header id="header" class="header fixed-top">
  <div
    class="container-fluid container-xl d-flex align-items-center justify-content-between"
  >
    <a href="index.php" class="logo d-flex align-items-center">
      <img src="assets/img/Logo Purple.svg" alt="" />
    </a>

    <nav id="navbar" class="navbar">
      <ul>
        
        <li>
          <a class="nav-link scrollto" href="../search.php">Search</a>
        </li>
        <?php 
          if($_SESSION["logged_in"] == true) {
            echo '<li><a class="nav-link scrollto" href="profile.php">My Profile</a></li>';
            echo '<li><a class="getstarted scrollto" href="includes/authentication/signOut.inc.php">Sign Out</a></li>';
          } 
          else {
            echo '<li><a class="nav-link scrollto" href="register.php">Register</a></li>';
            echo '<li><a class="getstarted scrollto" href="signIn.php">Sign In</a></li>';
          }
        ?>
      </ul>
      <i class="bi bi-list mobile-nav-toggle"></i>
    </nav>
    <!-- .navbar -->
  </div>
</header>
<!-- End Header -->