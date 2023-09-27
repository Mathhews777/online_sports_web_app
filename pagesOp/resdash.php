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
<body style="background-image: url('../images/userlive.jpg'); background-size: cover;">
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
  <button class="btn btn-primary my-100"><a href="../controller/addresults.php"
  class="text-light">ADD RESULT</a>
  </button>
</div>
<!-- below is table to display users -->
<table class="table table-dark">
  <thead>
    <tr>
      <th scope="col">Result_id</th>
      <th scope="col">Venue</th>
      <th scope="col">Date Released</th>
      <th scope="col">Fixture</th>
      <th scope="col">Result</th>
    </tr>
  </thead>
  <tbody>
  <?php
  
  $sql="Select * from `winners`";
  $result=mysqli_query($conn,$sql);
  if($result){
      while($row=mysqli_fetch_assoc($result)){
        $res_id=$row['res_id'];
        $venue=$row['venue'];
        $release_date=$row['release_date'];
        $fixture=$row['fixture'];
        $victors=$row['victors'];
        echo ' <tr>
        <th scope="row">'.$res_id.'</th>
        <td>'.$venue.'</td>
        <td>'.$release_date.'</td>
        <td>'.$fixture.'</td>
        <td>'.$victors.'</td>
        <td>
        <button class="btn btn-primary"><a href="../adminView/updatewin.php?updatewin_id='.$res_id.'" class="text-light">Update</a></button>
        <button class="btn btn-danger"><a href="../adminView/deleteout.php?deleteout_id='.$res_id.'" class="text-light">Delete</a></button>        
        </td>
      </tr>';
      }
  }
  
  ?>

  </tbody>
</table>

</body>

</html>