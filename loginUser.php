<?php 
session_start();
if (isset($_SESSION["user"])) {
    header("Location: loginUser.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login User</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <style>
        body {
            background-image: url('./userimages/user1log.jpg');
            background-size: cover;
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-position: center;
        }

        .container {
            margin-top: 100px;
            background-color: rgba(255, 255, 255, 0.8);
            padding: 20px;
            border-radius: 10px;
        }

        .form-title {
            text-align: center;
            font-size: 24px;
            margin-bottom: 20px;
        }
    </style>

</head>
<body>

    <div class="container">
        <div class="form-title">LOGIN USER</div>
        <?php
        if (isset($_POST["login"])) {
            $email = $_POST["email"];
            $password = $_POST["password"];
            require_once "./config/database.php";
            $sql = "SELECT * FROM users WHERE email = '$email'";
            $result = mysqli_query($conn, $sql);
            $user = mysqli_fetch_array($result, MYSQLI_ASSOC);
            if ($user) {
                if (password_verify($password, $user["password"])) {
                    session_start();
                    $_SESSION["user"] = "yes";
                    header("Location: userdash.php");
                    die();
                }else {
                    echo "<div class='alert alert-danger'>Password does not match</div>"; 
                }
                
            }else {
                echo "<div class='alert alert-danger'>Email does not exists</div>";
            }

        }


        ?>
        <form action="loginUser.php" method="post">
            <div class="form-group">
                <input type="email" placeholder="Enter Email:" name="email" class="form-control">
            </div>
            <div class="form-group">
                <input type="password" placeholder="Enter Password:" name="password" class="form-control">
            </div>
            <div class="form-btn text-center"> <!-- Centered buttons -->
                <input type="submit" value="Login" name="login" class="btn btn-primary">
                <a href="index.php" class="btn btn-secondary">Home</a> <!-- Added Home button -->
            </div>
        </form>
        <div><p>Not Registered yet <a href="registration.php">Register Here</a></p></div>   
    </div>
    
</body>
</html>