<?php 
session_start();
session_destroy();
?>
<!DOCTYPE html>
<html>
<head>
  <title>FunOlympics Games 2023</title>
  <style>
    body {
      display: flex;
      flex-direction: column;
      align-items: center;
      justify-content: center;
      height: 100vh;
      margin: 0;
      background-image: url("images/image1.jpg");
      background-repeat: no-repeat;
      background-size: cover;
      background-position: center;
    }

    .circle-button {
      display: inline-block;
      width: 150px;
      height: 150px;
      border-radius: 50%;
      background-color: #4CAF50;
      text-align: center;
      line-height: 150px;
      color: white;
      font-size: 20px;
      text-decoration: none;
      margin: 10px;
      transition: background-color 0.3s;
    }

    .circle-button:hover {
      background-color: #45a049;
    }

    .title {
      font-size: 60px;
      font-weight: bold;
      margin-top: 10px;
      font-style: Andale Mono, monospace;
      color: darkcyan;
    }

    .container {
      display: flex;
      flex-direction: column;
      align-items: center;
      justify-content: center;
    }
  </style>
</head>
<body>
  <div class="container">
    <h1 class="title">FunOlympics Games 2023</h1>
    <a class="circle-button" href="adminlog.php">Admin</a>
    <a class="circle-button" href="loginUser.php">User</a>
    <a class="circle-button" href="loginUser.php">Athlete</a>
  </div>
</body>
</html>
