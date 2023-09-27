<?php
include './config/database.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Open+Sans:300,400,800&amp;display=swap'>
   <!-- Bootstrap CSS -->
   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <link rel='stylesheet' href='css/headerAdmin.css'>
  <script src="js/homenave.js"></script>
  <title>Admin Dash</title>

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
<body style="background-image: url('./images/admin5.jpg'); background-size: cover;">

  <header class="header-area">
    <!-- site-navbar start -->
    <div class="navbar-area">
      <div class="container">
        <nav class="site-navbar">
          <!-- site logo -->
          <a href="#home" class="site-logo">Fun Olympics Yokyo</a>

          <!-- site menu/nav -->
          <ul>
            <li><a href="admindash.php">Customers</a></li>
            <li><a href="./pagesOp/staffdash.php">Staff</a></li>
            <li><a href="./pagesOp/schedash.php">Schedules</a></li>
            <li><a href="./pagesOp/resdash.php">Results</a></li>
            <li><a href="./pagesOp/athletdash.php">Athletes</a></li>
            <li><a href="./pagesOp/broaddash.php">Broadcats</a></li>
            <li><a href="index.php">logout</a></li>
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
  <button class="btn btn-primary my-100"><a href="./controller/crudusers.php"
  class="text-light">ADD USER</a>
  </button>
</div>
<!-- below is table to display users -->
<div class="container my-4">
    <div class="row justify-content-center">
      <div class="col-lg-10">
        <!-- below is table to display users -->
        <table class="table table-dark">
          <thead>
            <tr>
              <th scope="col">id_No</th>
              <th scope="col">Fullnames</th>
              <th scope="col">Email</th>
              <th scope="col">Password</th>
              <th scope="col">Contact_No</th>
              <th scope="col">Fav-Sport</th>
              <th scope="col">Operations</th>
            </tr>
          </thead>
          <tbody>
  <?php
  
  $sql="Select * from `users`";
  $result=mysqli_query($conn,$sql);
  if($result){
      while($row=mysqli_fetch_assoc($result)){
        $id=$row['id'];
        $full_name=$row['full_name'];
        $email=$row['email'];
        $password=$row['password'];
        $contact_no=$row['contact_no'];
        $fav_sport=$row['fav_sport'];
        echo ' <tr>
        <th scope="row">'.$id.'</th>
        <td>'.$full_name.'</td>
        <td>'.$email.'</td>
        <td>'.$password.'</td>
        <td>'.$contact_no.'</td>
        <td>'.$fav_sport.'</td>
        <td>
        <button class="btn btn-primary"><a href="../adminView/updateuser.php?updateid='.$id.'" class="text-light">Update</a></button>
        <button class="btn btn-danger"><a href="../adminView/deleteuser.php?deleteid='.$id.'" class="text-light">Delete</a></button>        
        </td>
      </tr>';
      }
  }
  
  ?>

  </tbody>
</table>
<footer class="footer">
    <div class="container">
      <p class="text-center">Developed by Matthew</p>
    </div>
  </footer>


</body>


</html>