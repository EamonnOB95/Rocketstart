<!DOCTYPE html>
<html><head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <!-- <link rel="stylesheet" type="text/css" href="app.css"> -->
    <link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,400;1,700&amp;display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">
    <link rel="stylesheet" type="text/css" href="rocketstart.css">

    <title>RocketStart Search</title>
</head>

<body><nav class="navbar navbar-default">
  <div class="container">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="rocketStart.html">RocketStart<i class="fa fa-rocket" aria-hidden="true"></i></a>
    </div>


    <div id="colorWhite"> 
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

        <ul class="nav navbar-nav navbar-right">
         <li><a href="rocketStartSignUp.php">Sign Up <i class="fa fa-user" aria-hidden="true"></i></a></li>
        <li><a href="rocketStartSignIn.php">Sign In <i class="fa fa-user" aria-hidden="true"></i></a></li>
        <li><a href="rocketStartSearch.html">Search <i class="fa fa-search" aria-hidden="true"></i>
</a></li>
        
      </ul>
  
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</div>
</nav>

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



</body></html>