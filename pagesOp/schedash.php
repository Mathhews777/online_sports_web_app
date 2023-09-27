<?php
include '../config/database.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Open+Sans:300,400,800&amp;display=swap'>
   <!-- Bootstrap CSS -->
   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <link rel='stylesheet' href='../css/headerAdmin.css'>
  <script src="../js/homenave.js"></script>
  <title>Admin Dash</title>
</head>

<body>
<body style="background-image: url('../images/userabout.jpg'); background-size: cover;">
  <header class="header-area">
    <!-- site-navbar start -->
    <div class="navbar-area">
      <div class="container">
        <nav class="site-navbar">
          <!-- site logo -->
          <a href="#home" class="site-logo">Fun Olympics Yokyo</a>

          <!-- site menu/nav -->
          <ul>
            <li><a href="../admindash.php">Customers</a></li>
            <li><a href="staffdash.php">Staff</a></li>
            <li><a href="schedash.php">Schedules</a></li>
            <li><a href="resdash.php">Results</a></li>
            <li><a href="athletdash.php">Athletes</a></li>
            <li><a href="broaddash.php">Broadcats</a></li>
            <li><a href="../index.php">logout</a></li>
          </ul>

          <!-- nav-toggler for mobile version only -->
          <button class="nav-toggler">
            <span></span>
          </button>
        </nav>
      </div>
    </div><!-- navbar-area end -->
    </div>
  </header>
  <!-- button add code -->
<div class="container">
  <button class="btn btn-primary my-100"><a href="../controller/addsche.php"
  class="text-light">ADD SCHEDULE</a>
  </button>
</div>
<!-- below is table to display users -->
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
        <td>
        <button class="btn btn-primary"><a href="../adminView/updatesche.php?updatesche_id='.$sche_id.'" class="text-light">Update</a></button>
        <button class="btn btn-danger"><a href="../adminView/deletesche.php?deletesche_id='.$sche_id.'" class="text-light">Delete</a></button>        
        </td>
      </tr>';
      }
  }
  
  ?>

  </tbody>
</table>

</body>

</html>