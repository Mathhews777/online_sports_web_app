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
    <!-- Bootstrap CSS -->
   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel='stylesheet' href='../css/headerUser.css'>
    <script src="../js/homenave.js"></script>
    <script src="../js/search2.js"></script>
    <title>Broadcast page</title>

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
.table-title {
   font-size: 24px;
   font-weight: bold;
   margin-bottom: 20px;
   color: white;
}
.search-input {
  width: 100%;
  padding: 10px;
  margin-bottom: 10px;
  background-color: #f5f5f5; /* Light gray background color */
  border: none;
  border-radius: 5px;
}

/* Add spacing above the table */
.container.my-4 {
  margin-top: 20px;
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
          <li><a href="index.php">logout</a></li>
        </ul>

        <!-- nav-toggler for mobile version only -->
        <button class="nav-toggler">
          <span></span>
        </button>
      </nav>
    </div>
  </div><!-- navbar-area end -->

  <div class="intro-area">
  <div class="container">
 <!-- below is table to display users -->
<div class="container my-4">
<input type="text" id="searchInput" class="search-input" placeholder="Search by Sport">
    <div class="row justify-content-center">
      <div class="col-lg-10">
      <div class="table-title">Released Schedules</div>
  <table class="table table-dark">
  <thead>
    <tr>
      <th scope="col">sche_id</th>
      <th scope="col">Sport</th>
      <th scope="col">Venue</th>
      <th scope="col">Appointed time</th>
      <th scope="col">Fixture</th>
      <th scope="col">Date</th>
    </tr>
  </thead>
  <tbody>
  <?php
  
  $sql="Select * from `schedule`";
  $result=mysqli_query($conn,$sql);
  if($result){
      while($row=mysqli_fetch_assoc($result)){
        $sche_id=$row['sche_id'];
        $sport=$row['sport'];
        $venue=$row['venue'];
        $app_time=$row['app_time'];
        $fixture=$row['fixture'];
        $sce_date=$row['sce_date'];
        echo ' <tr>
        <th scope="row">'.$sche_id.'</th>
        <td>'.$sport.'</td>
        <td>'.$venue.'</td>
        <td>'.$app_time.'</td>
        <td>'.$fixture.'</td>
        <td>'.$sce_date.'</td>
        
      </tr>';
      }
  }
  
  ?>

  </tbody>
</table>

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