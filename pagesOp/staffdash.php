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
<body style="background-image: url('../images/staffmemebers.jpg'); background-size: cover;">
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
  <button class="btn btn-primary my-100"><a href="../controller/crudstaff.php"
  class="text-light">ADD STAFF</a>
  </button>
</div>
<!-- below is table to display users -->
<table class="table table-dark">
  <thead>
    <tr>
      <th scope="col">staff_id</th>
      <th scope="col">Fullnames</th>
      <th scope="col">ID NUMBER</th>
      <th scope="col">Work Position</th>
    </tr>
  </thead>
  <tbody>
  <?php
  
  $sql="Select * from `staff`";
  $result=mysqli_query($conn,$sql);
  if($result){
      while($row=mysqli_fetch_assoc($result)){
        $staff_id=$row['staff_id'];
        $full_names=$row['full_names'];
        $ID_No=$row['ID_No'];
        $W_position=$row['W_position'];
        echo ' <tr>
        <th scope="row">'.$staff_id.'</th>
        <td>'.$full_names.'</td>
        <td>'.$ID_No.'</td>
        <td>'.$W_position.'</td>
        <td>
        <button class="btn btn-primary"><a href="../adminView/updatestaff.php?updatestaff_id='.$staff_id.'" class="text-light">Update</a></button>
        <button class="btn btn-danger"><a href="../adminView/deletestaff.php?deletestaff_id='.$staff_id.'" class="text-light">Delete</a></button>        
        </td>
      </tr>';
      }
  }
  
  ?>

  </tbody>
</table>

</body>

</html>