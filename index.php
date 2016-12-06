<?php 
include('connection.php');
session_start();
 ?>
<html>
	<head>
		<title>blogIt</title>
		<link rel="stylesheet" href="css/bootstrap.css"/>
		<script src="js/jquery_library.js"></script>
<script src="js/bootstrap.min.js"></script>
	</head>
	<body>
			<nav class="navbar navbar-default navbar-fixed-top" style="background:#000">
  <div class="container">
  
  <ul class="nav navbar-nav navbar-left">
    <li><a href="index.php"><strong>blogIt</strong></a></li>
      
	  
	  <li><a href="index.php?option=about"><span class="glyphicon glyphicon-user"></span>About</a></li>
   
   
	
	<li><a href="index.php?option=contact"><span class="glyphicon glyphicon-phone"></span>Contact</a></li>
	
	</ul>


<ul class="nav navbar-nav navbar-right">
      <li><a href="index.php?option=sign_up"><span class="glyphicon glyphicon-user"></span>Sign Up</a></li>
      <li><a href="index.php?option=login"><span class="glyphicon glyphicon-log-in"></span>Login</a></li>
    </ul>



</div>
</nav>	

<div class="container-fluid">
	<!-- slider -->
<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox">
    <div class="item active">
      <img src="images/Desert.jpg" alt="...">
      <div class="carousel-caption">
      </div>
    </div>
    <div class="item">
      <img src="images/Jellyfish.jpg" alt="...">
      <div class="carousel-caption">
      </div>
    </div>
	
	 <div class="item">
      <img src="images/Penguins.jpg" alt="...">
      <div class="carousel-caption">
      </div>
    </div>
    &emsp;
  </div>

  <!-- Controls -->
  <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
<!-- slider end-->
</div>


<div class="container">
	<div class="row">
	<!-- container -->
		<div class="col-sm-8">
		<?php 
		@$opt=$_GET['option'];
		
		if($opt!="")
		{
			if($opt=="about")
			{
			include('about.php');
			}
			
			else if($opt=="contact")
			{
			include('contact.php');
			}
			
			else if($opt=="sign_up")
			{
			include('registration.php');
			}
			
			else if($opt=="login")
			{
			include('login.php');
			}
		}
		else
		{
		echo "<h1>Join Our Community!</h1><br><h2>Cherish Your Views!!</h2><br><h3>Share Your Experience!!!</h3>";
		}
		?>
		
		
		
		
		</div>
	<!-- container -->
		
		<div class="col-sm-4">
			<div class="panel panel-default">
  <div class="panel-heading">Welcome ^_^</div>
  <div class="panel-body">
    Signup and start interacting!
  </div>
</div>
		
		</div>
	</div>

</div>



<br/>
<br/>
<br/>
<br/>

<!-- footer-->
<nav class="navbar navbar-default navbar-bottom" style="background:black">
<div class="container">
  <ul class="nav navbar-nav navbar-left">
    <li><a href="">Developed by Saraansh(15103022), Rupam(15103019), Akshay(15103006), Tamanna(15103027). Have a nice time visiting or site!</a></li>
  </ul>
</div>
</nav>

	</body>
</html>