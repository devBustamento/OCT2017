<?php
 //All PHP Code will go here.
  $currentPage = basename($_SERVER['PHP_SELF'],".php");
  $headerText = '';

  if ($currentPage === 'index'){
    $heroId = "hero";
  } elseif ($currentPage === 'alumni') {
    $heroId = "alumniHero";
    $headerText = "<h1>"."ALUMNI"."</h1>";
  } elseif ($currentPage === 'events') {
    $heroId = "eventsHero";
    $headerText = "<h1>"."UPCOMING EVENTS"."</h1>";
  } elseif ($currentPage === 'fs-github') {
    $heroId = "fs-githubHero";
    $headerText = "<h1>"."FULLSTACK GITHUB"."</h1>";
  } else {
    $heroId = "contactHero";
    $headerText = "<h1>"."CONTACT US"."</h1>";
  }
?>


<!DOCTYPE html>
<html class="no-js" lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Full Stack BHM</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
        
    <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
    <link rel="apple-touch-icon" href="apple-touch-icon.png">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/4.2.0/normalize.min.css">
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js"></script>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">

    <!-- Font Link -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400|Teko:600" rel="stylesheet">    

    <!-- Stylesheet -->
    <link rel="stylesheet" href="css/style.css">

    <!-- Fontawesome Icons -->
    <link rel="stylesheet" href="css/font-awesome.min.css">
  
  </head>

  <body>   

  <!--   Scrolling Navbar   -->
    <div class="container-fluid">
      <nav class="row" id="scrollNav">
        <div class="col-6 col-md-4 d-inline logo">
          <img src="img/bhmLogo.png" alt="Full-Stack Logo">
        </div>
        <div class="col-md-8 d-none d-md-block text-right fullMenu">
          <ul>
            <li class="<?php echo ("$currentPage" == 'index') ? 'active':''; ?>"><a href="index.php">Home</a></li>
            <li class="<?php echo ("$currentPage" == 'alumni') ? 'active':''; ?>"><a href="alumni.php">Alumni</a></li>
            <li class="<?php echo ("$currentPage" == 'events') ? 'active':''; ?>"><a href="events.php">Events</a></li>
            <li class="<?php echo ("$currentPage" == 'fs-github') ? 'active':''; ?>"><a href="fs-github.php">FS-GitHub</a></li>
            <li class="<?php echo ("$currentPage" == 'contact') ? 'active':''; ?>"><a href="contact.php">Contact Us</a></li>
          </ul>
        </div>

        <div class="col-6 d-inline d-md-none mobile-menu text-right">
          <button type="button" id="menu-btn"><i class="fa fa-bars" aria-hidden="true"></i></button>
        </div>
        <div class="col-12 d-md-none menu-hidden" id="dropMenu">
          <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="alumni.php">Alumni</a></li>
            <li><a href="events.php">Events</a></li>
            <li><a href="fs-github.php">FS-GitHub</a></li>
            <li><a href="contact.php">Contact Us</a></li>
          </ul>
        </div>

      </nav>
    </div>

<!--     Hero Area     -->
    <div id="<?php echo $heroId ?>" class="container-fluid">
      <header>
        <nav class="d-none d-sm-block col-md-12 text-right" id="navBar">
            <li class="<?php echo ("$currentPage" == 'index') ? 'active':''; ?>"><a href="index.php">Home</a></li>
            <li class="<?php echo ("$currentPage" == 'alumni') ? 'active':''; ?>"><a href="alumni.php">Alumni</a></li>
            <li class="<?php echo ("$currentPage" == 'events') ? 'active':''; ?>"><a href="events.php">Events</a></li>
            <li class="<?php echo ("$currentPage" == 'fs-github') ? 'active':''; ?>"><a href="fs-github.php">FS-GitHub</a></li>
            <li class="<?php echo ("$currentPage" == 'contact') ? 'active':''; ?>"><a href="contact.php">Contact Us</a></li>
        </nav>
      </header>

      <div class="col-12 text-center logoHero">
        <img class="img-fluid" src="img/assets/bhmLogo.png">
        <h2>The New <span>CAREER CHANGING</span> Opportunity </h2>
         <?php echo $headerText ?>
      </div>

      <div class="overlay"></div>

    </div>
  