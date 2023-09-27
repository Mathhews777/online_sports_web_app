<?php
include '../config/database.php';
if (isset($_POST['submit'])) {
    $sport = $_POST['sport'];
    $venue = $_POST['venue'];
    $app_time = $_POST['app_time'];
    $fixture = $_POST['fixture'];
    $sce_date = $_POST['sce_date'];
    
    $sql = "INSERT INTO `schedule` (sport, venue, app_time, fixture, sce_date)
            VALUES ('$sport', '$venue', '$app_time', '$fixture', '$sce_date')";

    $result = mysqli_query($conn, $sql);
    if ($result) {
        // Data inserted successfully
        header('Location: ../pagesOp/schedash.php');
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
            background-image: url('../images/admin5.jpg'); /* Replace with your image path */
            background-size: cover;
        }
        
        .card {
            background: rgba(255, 255, 255, 0.8);
        }
    </style>

    <title>Add Staff</title>
</head>

<body>
    <div class="container my-5">
        <div class="card bg-light">
            <div class="card-body">
                <h5 class="card-title">Add Schedule</h5>
                <form method="post">
                    <div class="form-group">
                        <label>Sport</label>
                        <input type="text" class="form-control" placeholder="Enter Sport" name="sport" autocomplete="off">
                    </div>
                    <div class="form-group">
                        <label>Venue / Place of Host</label>
                        <input type="text" class="form-control" placeholder="Enter Venue" name="venue" autocomplete="off">
                    </div>
                    <div class="form-group">
                        <label>Time To Start Event</label>
                        <input type="time" class="form-control" placeholder="Enter Time" name="app_time" autocomplete="off">
                    </div>
                    <div class="form-group">
                        <label>Fixture</label>
                        <input type="text" class="form-control" placeholder="Enter Fixture" name="fixture" autocomplete="off">
                    </div>
                    <div class="form-group">
                        <label>Date</label>
                        <input type="date" class="form-control" placeholder="Enter Date" name="sce_date" autocomplete="off">
                    </div>
                    
                    
                    </div>
                    <button type="submit" class="btn btn-primary" name="submit">Submit</button>
                </form>
            </div>
        </div>
    </div>

    <!-- Bootstrap scripts ... -->
</body>

</html>
