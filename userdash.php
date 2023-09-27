<?php 
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
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">
    <link rel="stylesheet" href="./css/userdash.css">
    <link rel="stylesheet" href="./css/usersearch.css">
    <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Open+Sans:300,400,800&amp;display=swap'>
    <link rel='stylesheet' href='css/headerUser.css'>
    <script src="js/homenave.js"></script>
    
    <title>User Homepage</title>
  
</head>

<body>

<header class="header-area">
  <!-- site-navbar start -->
  <div class="navbar-area">
    <div class="container">
      <nav class="site-navbar">
        <!-- site logo -->
        <a href="userdash.php" class="site-logo">YOKYO FUN OLYMPICS</a>

        <!-- site menu/nav -->
        <ul>
          <li><a href="userdash.php">home</a></li>
          <li><a href="./userimages/broadcasts.php">broadcasts</a></li>
          <li><a href="./userimages/livestream.php">livestream</a></li>
          <li><a href="./userimages/scheduleview.php">schedules</a></li>
          <li><a href="./userimages/resultsview.php">viewresults</a></li>
          <li><a href="./userimages/about.php">about</a></li>
          <li><a href="./index.php">logout</a></li>
        </ul>

        <!-- nav-toggler for mobile version only -->
        <button class="nav-toggler">
          <span></span>
        </button>
      </nav>
    </div>
  </div><!-- navbar-area end -->

  <div class="image-container">
        <div class="search-box">
            <i class="bx bx-search"></i>
            <input type="text" placeholder="Search a sport">
        </div>

        <div class="images">
            <div class="image-box" data-name="football">
                <img src="https://assets.bwbx.io/images/users/iqjWHBFdfxIU/i4.3VXUnOZQ4/v1/-1x-1.jpg" alt="">
                <h6>Football</h6>
            </div>
            <div class="image-box" data-name="swimming">
                <img src="https://live-production.wcms.abc-cdn.net.au/ed072a8f1160142d73f376b07963eda6?impolicy=wcms_crop_resize&cropH=2813&cropW=5000&xPos=0&yPos=200&width=862&height=485" alt="">
                <h6>Swimming</h6>
            </div>
            <div class="image-box" data-name="gymnastics">
                <img src="https://www.si.com/.image/t_share/MTgyNjgxMTk2NzU5NjIzMDc1/germany-gymnastics.jpg" alt="">
                <h6>gymnastics</h6>
            </div>
            <div class="image-box" data-name="karate">
                <img src="https://www.si.com/.image/ar_1:1%2Cc_fill%2Ccs_srgb%2Cfl_progressive%2Cq_auto:good%2Cw_1200/MTgyOTU1NDQ2MjU5MjMwMDQ4/karate-olympics-lead.jpg" alt="">
                <h6>karate</h6>
            </div>
            <div class="image-box" data-name="Running">
                <img src="https://guardian.ng/wp-content/uploads/2021/08/Enoch-Adegoke-aaa-897x598.jpg" alt="">
                <h6>Running</h6>
            </div>
            <div class="image-box" data-name="highjump">
                <img src="https://media.newyorker.com/photos/59097967019dfc3494ea32d1/master/w_2560%2Cc_limit/Thomas-ClearingTheBar-ThePhilosophyOfTheHighJump.jpg" alt="">
                <h6>High Jump</h6>
            </div>
            <div class="image-box" data-name="cycling">
                <img src="https://cdn.britannica.com/94/190894-131-5E162809/cyclists-Pack-light-leg-Tour-Down-Under-20th-January-2008.jpg" alt="">
                <h6>Cycling</h6>
            </div>
            <div class="image-box" data-name="surfing">
                <img src="https://i.insider.com/61044f3f39e63d001884b4a4?width=1136&format=jpeg" alt="">
                <h6>Surfing</h6>
            </div>
            <div class="image-box" data-name="volleyball">
                <img src="https://www.nippon.com/en/ncommon/contents/news/935394/935394.jpg" alt="">
                <h6>Volleyball</h6>
            </div>
            <div class="image-box" data-name="golf">
                <img src="https://www.nzherald.co.nz/resizer/SSqz243H7IPAGBzd8YbbYZ1aG00=/576x324/smart/filters:quality(70)/cloudfront-ap-southeast-2.images.arcpublishing.com/nzme/PHSATEZJFJB6ZPC3NLAND3AVU4.JPG" alt="">
                <h6>Golf</h6>
            </div>
        </div>
    </div>

<footer class="footer">
    <p>Developed by Thato Mooketsi</p>
</footer>
</header>
 
</body>
</html>