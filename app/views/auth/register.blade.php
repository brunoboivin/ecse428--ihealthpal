<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="../../assets/ico/favicon.ico">

    <title>iHealthPal</title>

    <!-- Bootstrap core CSS -->
    <link href="/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="/css/jumbotron.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy this line! -->
    <!--[if lt IE 9]><script src="js/ie8-responsive-file-warning.js"></script><![endif]-->

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    <script>
      (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
      (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
      m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
      })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

      ga('create', 'UA-47850364-1', 'inc.gs');
      ga('send', 'pageview');
    </script>
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
          <a class="navbar-brand" href="/">iHealthPal</a>
          <a class="navbar-brand" href="/about">About</a>
          <a class="navbar-brand" href="/contact">Contact</a>
        </div>
        <div class="navbar-collapse collapse">
          <form action="/users/login" class="navbar-form navbar-right" role="form" method="post">
            <div class="form-group">
              <input name="email" type="text" placeholder="Email" class="form-control">
            </div>
            <div class="form-group">
              <input name="password" type="password" placeholder="Password" class="form-control">
            </div>
            <button type="submit" class="btn btn-success">
              <span class="glyphicon glyphicon-log-in"></span> &nbsp;Login
            </button>
          </form>
        </div><!--/.navbar-collapse -->
      </div>
    </div>

    <!-- Main jumbotron for a primary marketing message or call to action -->
    <div class="jumbotron">
      <div class="container">
        <img src="/img/logo.png" alt="logo" height="200">
	<p>Health and Fitness Tracking System.</p>

    
    <!-- Opening a form, by defalut, the Post method is assumed. -->
	{{ Form::open(array('url'=>'users/create', 'class'=>'form-signup')) }}
	   <h2 class="form-signup-heading">Please Register</h2>
	 
	   <ul>
	      @foreach($errors->all() as $error)
	         <li>{{ $error }}</li>
	      @endforeach
	   </ul>
	   		{{Form::label('firstname', 'First Name :')}}
	   		{{ Form::text('firstname', null, array('class'=>'input-block-level', 'placeholder'=>'First Name')) }}
		   </br>
		   {{Form::label('lastname', 'Last Name :')}}
		   {{ Form::text('lastname', null, array('class'=>'input-block-level', 'placeholder'=>'Last Name')) }}
		   </br>
		   {{Form::label('email', 'E-mail Address :')}}
	       {{ Form::text('email', null, array('class'=>'input-block-level', 'placeholder'=>'Email Address')) }}
		   </br>
		   {{Form::label('password', 'Password :')}}
	       {{ Form::password('password', array('class'=>'input-block-level', 'placeholder'=>'Password')) }}
		   </br>
		   {{Form::label('password_confirmation', 'Confirm Password :')}}
		   {{ Form::password('password_confirmation', array('class'=>'input-block-level', 'placeholder'=>'Confirm Password')) }}
		   </br>
		   {{Form::label('security_question', 'Security Question :')}}
		   {{ Form::select('security_question', array('1' => 'What is your mother\'s maiden name?', 
		   						'2' => 'Who is your best friend from childhood?',
		   						'3' => 'What is the name of your first pet?',
		   						'4' => 'What is the name of your spouse?',
		   						'5' => 'Who is your favourite athlete?')) }}
		   </br>
		   {{Form::label('secret_answer', 'Security Answer :')}}
		   {{ Form::text('secret_answer', null, array('class'=>'input-block-level', 'placeholder'=>'Security Answer')) }}
		   </br>		   
		   {{ Form::submit('Register', array('class'=>'btn btn-large btn-primary'))}}
	   
	{{ Form::close() }}

  

      <footer>
        <p>&copy; iHealthPal 2014</p>
      </footer>
    </div> <!-- /container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>