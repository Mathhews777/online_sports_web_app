<?php
include '../config/database.php';
if (isset($_POST['submit'])) {
    $venue = $_POST['venue'];
    $release_date = $_POST['release_date'];
    $fixture = $_POST['fixture'];
    $victors = $_POST['victors'];
    

    $sql = "INSERT INTO `winners` (venue, release_date, fixture, victors)
            VALUES ('$venue', '$release_date', '$fixture', '$victors')";

    $result = mysqli_query($conn, $sql);
    if ($result) {
        // Data inserted successfully
        header('Location: ../pagesOp/resdash.php');
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

    <title>Add Result</title>
</head>

<body>
    <div class="container my-5">
        <div class="card bg-light">
            <div class="card-body">
                <h5 class="card-title">Add Result</h5>
                <form method="post">
                    <div class="form-group">
                        <label>Venue</label>
                        <input type="text" class="form-control" placeholder="Enter Venue" name="venue" autocomplete="off">
                    </div>
                    <div class="form-group">
                        <label>Release Date of Results</label>
                        <input type="date" class="form-control" placeholder="Enter Date" name="release_date" autocomplete="off">
                    </div>
                    <div class="form-group">
                        <label>Fixture of Game</label>
                        <input type="text" class="form-control" placeholder="Enter Fixture" name="fixture" autocomplete="off">
                    </div>
                    <div class="form-group">
                        <label>Victors / Wins</label>
                        <input type="text" class="form-control" placeholder="Enter Victors" name="victors" autocomplete="off">
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
