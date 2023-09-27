<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Form</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div class="container">
    <?php
if (isset($_POST["submit"])) {
    $fullName = $_POST["fullname"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    $passwordRepeat = $_POST["repeat_password"];
    $contactNo = $_POST["contact_no"];
    $favSport = $_POST["fav_sport"];

    $passwordHash = password_hash($password, PASSWORD_DEFAULT);

    $errors = array();

    //code below for form errors
    if (empty($fullName) || empty($email) || empty($password) || empty($passwordRepeat) || empty($contactNo) || empty($favSport)) {
        array_push($errors, "All fields are required");
    }
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        array_push($errors, "Email is not valid");
    }
    if (strlen($password) < 8) {
        array_push($errors, "Password must be at least 8 characters long");
    }
    if ($password !== $passwordRepeat) {
        array_push($errors, "Password does not match");
    }

    //code below for checking in the database for duplicate account
    require_once "./config/database.php";
    $sql = "SELECT * FROM users WHERE email = ?";
    $stmt = mysqli_stmt_init($conn);
    if (mysqli_stmt_prepare($stmt, $sql)) {
        mysqli_stmt_bind_param($stmt, "s", $email);
        mysqli_stmt_execute($stmt);
        mysqli_stmt_store_result($stmt);
        $rowCount = mysqli_stmt_num_rows($stmt);

        if ($rowCount > 0) {
            array_push($errors, "Email already exists.");
        }

        mysqli_stmt_close($stmt);
    } else {
        die("Something went wrong");
    }

    if (count($errors) > 0) {
        foreach ($errors as $error) {
            echo "<div class='alert alert-danger'>$error</div>";
        }
    } else {

        //code below for inserting data into the database
        $sql = "INSERT INTO users (full_name, email, password, contact_no, registered_at, fav_sport) VALUES (?, ?, ?, ?, NOW(), ?)";
        $stmt = mysqli_stmt_init($conn);
        if (mysqli_stmt_prepare($stmt, $sql)) {
            mysqli_stmt_bind_param($stmt, "sssss", $fullName, $email, $passwordHash, $contactNo, $favSport);
            mysqli_stmt_execute($stmt);
            echo "<div class='alert alert-success'>User Registration Successful!</div>";
        } else {
            die("Something went wrong");
        }

        mysqli_stmt_close($stmt);
    }
}
?>

        <form action="registration.php" method="post">
            <div class="form-group">
                <input type="text" class="form-control" name="fullname" placeholder="Full name:">
            </div>
            <div class="form-group">
                <input type="email" class="form-control" name="email" placeholder="Email:">
            </div>
            <div class="form-group">
                <input type="password" class="form-control" name="password" placeholder="Password:">
            </div>
            <div class="form-group">
                <input type="password" class="form-control" name="repeat_password" placeholder="Repeat Password:">
            </div>
            <div class="form-group">
                <input type="contact_no" class="form-control" name="contact_no" placeholder="PhoneNumber:">
            </div>
            <div class="form-group">
                <input type="fav_sport" class="form-control" name="fav_sport" placeholder="FavoriteSport:">
            </div>
            <div class="form-group">
                <input type="submit" class="btn btn-primary" value="Register" name="submit">
            </div>
        </form> 
        <div><p>ALREADY REGISTERED <a href="loginUser.php">login Here</a></p></div>   
    </div>
    
</body>
</html>