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
    <script src="../js/homenave.js"></script>
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

        .video-container {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 70vh;
            /* Adjust the height as needed */
        }

        .video-title {
            font-size: 24px;
            font-weight: bold;
            color: white;
            margin-bottom: 20px;
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
                <div class="video-container">
                    <iframe width="860" height="615" src="https://www.youtube.com/embed/u7jNzv7hk1k" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                </div>

            </div>
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