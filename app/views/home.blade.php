<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="../../assets/ico/favicon.ico">

    <title>iHealthPal | {{{ $name }}}</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/jumbotron.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy this line! -->
    <!--[if lt IE 9]><script src="js/ie8-responsive-file-warning.js"></script><![endif]-->

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>
  
    <div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="">Account Settings</a>
          <a class="navbar-brand" href="about.html">About</a>
          <a class="navbar-brand" href="contact.html">Contact</a>
          <a class="navbar-brand" href="contact.html">Help</a>         
        </div>
        <div class="navbar-collapse collapse">
          <form action="/logout" class="navbar-form navbar-right" role="form" method="get">
            <button type="submit" class="btn btn-danger">
              Logout &nbsp;<span class="glyphicon glyphicon-log-out"></span>
            </button>
          </form>
        </div><!--/.navbar-collapse -->
      </div>
    </div>
    <div class="jumbotron">
      <div class="container">
        <img src="img/logo.png" alt="logo" height="100">
        <p>Welcome, {{{ $name }}}!</p>
      </div>
    </div>
    <div class="container">
      <div class="row">
        <div class="col-md-3">
          <h3>Diary</h3>
          <input type="image" name="diary" value="diary" src="img/food_diary.png" width="70" style="margin-bottom:15px"; />
       </div>
        <div class="col-md-3">
          <h3>Goals</h3>
          <input type="image" name="goals" value="goals" src="img/goals_icon.png" width="70" style="margin-bottom:15px"; />
       </div>
        <div class="col-md-3">
          <h3>Personal stats</h3>
          <input type="image" name="stats" value="stats" src="img/personal_stats.png" width="70" style="margin-bottom:15px"; />
        </div>
       <div class="col-md-3">
          <h3>Progress</h3>
            <input type="image" name="progress" value="progress" src="img/line_chart_icon.png" width="90" style="margin-bottom:15px"; />
        </div>

      </div>   
      </div> 
      <div class="row">
        <div class="col-md-3">
          <h3>BMI Calculator</h3>
            <input type="image" name="BMI" value="BMI" src="img/BMI_icon.png" width="90" style="margin-bottom:15px"; />
        </div>
      </div> 
      
      <footer>
        <p>&copy; iHealthPal 2014</p>
      </footer>
    </div> <!-- /container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>