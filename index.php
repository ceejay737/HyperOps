<?php 
session_start();

	include("connection.php");
	include("functions.php");

	$user_data = check_login($con);

?>

<!-- <!DOCTYPE html>
<html>
<head>
	<title>My website</title>
</head>
<body>

	<a href="logout.php">Logout</a>
	<h1>This is the index page</h1>

	<br>
	Hello, <?php echo $user_data['user_name']; ?>
</body>
</html> -->

<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
 
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/hyperloop.css">
    
    <link href='https://fonts.googleapis.com/css?family=Oxygen:400,300,700' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css2?family=Lora:ital@1&family=Oxygen:wght@300&display=swap' rel='stylesheet' type='text/css'>
  </head>
  <body>
    <header>
    <nav id="header-nav" class="navbar navbar-default">
    <div class="container">
    <div class="navbar-header">
    <a href="hyperloop.html" class="pull-left visible-md visible-lg visible-sm visible-xs">
    <div id="logo-img" alt="Logo image"></div>
  </a>
  <div class="navbar-brand">
    <a href="hyperloop.html"></a>
    </div>
    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#collapsable-nav" aria-expanded="false">
      <span class="sr-only">Toggle navigation</span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>

    </button>
  </div>
  <div id="collapsable-nav" class="collapse navbar-collapse">
    <ul id="nav-list" class="nav navbar-nav navbar-right">

      <li class="visible-xs active">
        <a href="hyperloop.html">
          <span class="glyphicon glyphicon-home"></span>Home
        </a>
      </li>

        <li>
            <a href="hyperloopHelp.html">
          <span class="glyphicon glyphicon-menu-down" id="Help"></span>
          <br class="hidden-xs">Help</a>
        </li>
      
  <li>
   <!-- <a href="http://localhost/login/signup.php">-->
      <!-- <a href="login.php"> -->
	  <a href="logout.php">
  <span id="signIn" class="glyphicon glyphicon-user"></span>
    <br class="hidden-xs">Logout
    </a>
</li>
  
</ul><!--#nav-list-->
</div><!--.collapse .navbar-collaps-->
</div>
  </nav>
</header>

<div id="main-content" class="container">
  <div class="jumbotron">
  
  <div class="container1">
    <div class="travel">
      <a href="#from">
          <span class="glyphicon glyphicon-globe"></span>
          From
        <div>
          <input class="db" type="text" data-message="enter source city">
          <label class="db" style="left:15%"></label>
      </div>
      </a>
      <a href="#To">
          <span class="glyphicon glyphicon-globe"></span>
          To
        <div>
          <input class="db" type="text" data-message="enter Destination city">
          <label class="db" style="left:15%"></label>
      </div>
      </a>
      <a href="#Date">
          <span class="glyphicon glyphicon-calendar"></span>
        <div>
          <form>
          <input class="db" type="datetime-local" data-message="enter date">
          <label class="db" style="left:15%"></label>
        </form>
      </div>
    </a>
   
    
      <br>
      <span id="search-button">
      <a href="hyperloopCategories.html">
      <button id="search" class="glyphicon glyphicon-search">Search
      </button>
    </a>
    </span>
      <!-- <span id="search" >Search</span> -->
        <!-- <br class="hidden-xs">Search -->
    </div>
  </div>
</div>
<div id="home-tiles" class="row">
  <div class="col-md-4 col-sm-6 col-xs-12">
   <a href="hyperloopCategories.php"><div id="menu-tile"><span>
  Check schedule</span></div></a> 
</div>
   <div class="col-md-4 col-sm-6 col-xs-12">
  <a href="loginbooking.php"><div id="specials-tile"><span>
  Your Bookings</span></div></a>
</div>
  <div class="col-md-4 col-sm-12 col-xs-12">
  <a href="https://goo.gl/maps/jY9CUa3LL56qyZRY6" target="_blank">
    <div id="map-tile">
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3306.5057666307207!2d-118.23032278478553!3d34.030895180611786!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x80c2c8a00a0ba665%3A0x88ae06c17c31618e!2sVirgin%20Hyperloop!5e0!3m2!1sen!2sin!4v1637324149640!5m2!1sen!2sin" width="1005" height="250" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
    <span>Stations  near  you</span>
  </div>
  </a>
</div>
</div><!--End of #home-tiles-->
</div><!--End of #main-content-->
<footer class="panel-footer">
  <div class="container">
    <div class="row">
    <section id="hours" class="col-sm-4">
    <span>Hours:</span><br>
    6 am to 11pm<br>
    <span>Enquiries: </span><br>
    <a href="https://virginhyperloop.com/">info@virginhyperloop.com</a>
    
    <hr class="visible-xs">
  </section>
  <section id="address" class="col-sm-4">
    <span>Address:</span><br>
    Bandra Kurla Complex
    Bandra East, Mumbai, <br>
    Maharashtra
    
   
   
   <hr class="visible-xs">
 </section>
 <section id="testimonials" class="col-sm-4">
  <p>???Working on hyperloop ??? let alone being one of the first to ride it ??? is truly a dream come true" - Tanay Mnajrekar</p>
  <p>"I???ve always been so inspired by the entrepreneurial spirit of the Indian people. I???m so excited that they???ve embraced the hyperloop concept and share our vision of creating new and sustainable transportation for the region- Richard Branson"</p>
</section>
</div>
<div class="text-center">&copy; TEAM ID: HO-221545</div>
  </div>
</footer>
 </section>

<!-- jQuery (Bootstrap JS plugins depend on it) -->
  <script src="js/jquery-3.6.0.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/script.js"></script>
</body>
</html>