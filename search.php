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

    <title></title>

    <?php require_once "includes/frontend/styles.inc.php";?>

  </head>

  <body>
    
    <!-- ======= Header ======= -->
    <?php require_once "includes/frontend/header.inc.php"; ?>

    <!-- ======= Hero Section ======= -->
    <section id="hero" class="hero d-flex align-items-center">
      <div class="container">
        <form action="/hms/accommodations" method="GET"> 
          <div class="row">
            <div class="col-xs-6 col-md-4">
              <div class="input-group">
                <input type="text" class="form-control" placeholder="Search" id="txtSearch" onkeyup="searchResults(this.value)"/>
                <div class="input-group-btn">
                  <button class="btn btn-primary" type="submit">
                    <span class="glyphicon glyphicon-search"></span>
                  </button>
                </div>
              </div>
            </div>
            <div id="results" style="height:100px;width:200px;background-color:#fff;color:#000;margin:20px; "></div>
          </div>
        </form>
        <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <script type="text/javascript">
          function searchResults(val)
          { //alert(val);
              $.ajax({
                  type: 'POST',
                  url: 'ajax.php',
                  dataType:'JSON',
                  data: { value: val },
                  success: function (response) {
                    $('#results').html(response);
                  }
                });
          }
        </script>
      </div>
    </section>
    <!-- End Hero -->

    <!-- ======= Footer ======= -->
    <?php require_once "includes/frontend/footer.inc.php";?>

    <!-- ======= Javascript ======= -->
    <?php require_once "includes/frontend/scripts.inc.php";?>
    
  </body>
</html>
