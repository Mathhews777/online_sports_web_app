<?php 
include '../config/database.php';
session_start();
if (!isset($_SESSION["user"])) {
    header("Location: loginUser.php");
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Open+Sans:300,400,800&amp;display=swap'>
    
    <link rel='stylesheet' href='../css/headerUser.css'>
    <link rel='stylesheet' href='../css/about.css'>
    <script src="../js/homenave.js"></script>
    <title>about page</title>

    <style>
.footer {
   position: fixed;
   left: 0;
   bottom: 0;
   width: 100%;
   background-color: blue;
   color: white;
   text-align: center;
}
</style>
</head>

<body>

<header class="header-area">
  <!-- site-navbar start -->
  <div class="navbar-area">
    <div class="container">
      <nav class="site-navbar">
        <!-- site logo -->
        <a href="../userdash.php" class="site-logo">YOKYO FUN OLYMPICS</a>

        <!-- site menu/nav -->
        <ul>
          <li><a href="../userdash.php">home</a></li>
          <li><a href="broadcasts.php">broadcasts</a></li>
          <li><a href="livestream.php">livestream</a></li>
          <li><a href="scheduleview.php">schedules</a></li>
          <li><a href="resultsview.php">viewresults</a></li>
          <li><a href="about.php">about</a></li>
          <li><a href="../index.php">logout</a></li>
        </ul>

        <!-- nav-toggler for mobile version only -->
        <button class="nav-toggler">
          <span></span>
        </button>
      </nav>
    </div>
  </div><!-- navbar-area end -->

  <div class="intro-area">
    <div class="heading">
      <h1>About Us</h1>
    </div>
    <div class="container">
      <section class="about">
        <div class="about-image">
        <img src="./karate1.jpg">
        </div>
        <div class="about-content">
        <h2>Yokyo Fun Olympics Games</h2>
        <p>
        The Futuristic Tokyo Olympics isn't just about showcasing robotic athleticism. It's a platform for discussing the future of technology, ethics, and human-robot interactions. Conferences, workshops, and exhibitions will delve into the ethical implications of AI in sports, the potential for technology to enhance human capabilities, and the challenges of ensuring fair competition in a world of advancing robotics.
        </p>
        <a href="" class="read-more">Read More</a>
        </div>
      </section>

    </div>

<div class="container">

<footer class="footer">
    <div class="container">
      <p class="text-center">Developed by Thato Mooketsi</p>
    </div>

  </footer>
      
    </div>
  </div>
</header>

</body>
</html>