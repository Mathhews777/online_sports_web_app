<?php
include '../config/database.php';
if (isset($_POST['submit'])) {
    $full_name = $_POST['full_name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $contact_no = $_POST['contact_no'];
    $fav_sport = $_POST['fav_sport'];

    $sql = "INSERT INTO `users` (full_name, email, password, contact_no, fav_sport)
            VALUES ('$full_name', '$email', '$password', '$contact_no', '$fav_sport')";

    $result = mysqli_query($conn, $sql);
    if ($result) {
        // Data inserted successfully
        header('Location: ../admindash.php');
        exit(); // Make sure to exit after redirection
    } else {
        echo "Error: " . mysqli_error($conn);
    }
}
?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <style>
        /* Adding custom style */
        body {
            background-image: url('../images/admin1.jpg'); /* Replace with your image path */
            background-size: cover;
        }
        
        .card {
            background: rgba(255, 255, 255, 0.8);
        }
    </style>

    <title>Crud Customers</title>
</head>

<body>
    <div class="container my-5">
        <div class="card bg-light">
            <div class="card-body">
                <h5 class="card-title">Add User</h5>
                <form method="post">
                    <div class="form-group">
                        <label>Full Names</label>
                        <input type="text" class="form-control" placeholder="Enter Fullnames" name="full_name" autocomplete="off">
                    </div>
                    <div class="form-group">
                        <label>Email</label>
                        <input type="email" class="form-control" placeholder="Enter Email" name="email" autocomplete="off">
                    </div>
                    <div class="form-group">
                        <label>Customer Password</label>
                        <input type="password" class="form-control" placeholder="Enter New Password" name="password" autocomplete="off">
                    </div>
                    <div class="form-group">
                        <label>Contact Number</label>
                        <input type="text" class="form-control" placeholder="Enter New Contacts" name="contact_no" autocomplete="off">
                    </div>
                    <div class="form-group">
                        <label>Favorite Sport</label>
                        <input type="text" class="form-control" placeholder="Enter New Sport" name="fav_sport">
                    </div>
                    <button type="submit" class="btn btn-primary" name="submit">Submit</button>
                </form>
            </div>
        </div>
    </div>

    <!-- Bootstrap scripts ... -->
</body>

</html>
