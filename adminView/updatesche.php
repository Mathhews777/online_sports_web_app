<?php
include '../config/database.php';

if (isset($_GET['updatesche_id'])) {
    $sche_id = $_GET['updatesche_id'];
    $sql = "SELECT * FROM `schedule` WHERE sche_id = ?";
    $stmt = mysqli_prepare($conn, $sql);
    mysqli_stmt_bind_param($stmt, "i", $sche_id);
    mysqli_stmt_execute($stmt);
    $result = mysqli_stmt_get_result($stmt);
    $row = mysqli_fetch_assoc($result);

    $sport = $row['sport'];
    $venue = $row['venue'];
    $app_time = $row['app_time'];
    $fixture = $row['fixture'];
    $sce_date = $row['sce_date'];

    if (isset($_POST['submit'])) {
        $sport = $_POST['sport'];
        $venue = $_POST['venue'];
        $app_time = $_POST['app_time'];
        $fixture = $_POST['fixture'];
        $sce_date = $_POST['sce_date'];

        $update_sql = "UPDATE `schedule` SET sport=?, venue=?, app_time=?, fixture=?, sce_date=? WHERE sche_id=?";
        $update_stmt = mysqli_prepare($conn, $update_sql);
        mysqli_stmt_bind_param($update_stmt, "sssssi", $sport, $venue, $app_time, $fixture, $sce_date, $sche_id);
        $update_result = mysqli_stmt_execute($update_stmt);

        if ($update_result) {
            // Data updated successfully
            header('Location: ../pagesOp/schedash.php');
            exit();
        } else {
            echo "Error: " . mysqli_error($conn);
        }
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
            background-image: url('../images/admin1.jpg'); 
            background-size: cover;
        }
        
        .card {
            background: rgba(255, 255, 255, 0.8);
        }
    </style>

    <title>Crud Staff</title>
</head>

<body>
    <div class="container my-5">
        <div class="card bg-light">
            <div class="card-body">
                <h5 class="card-title">Update Schedules</h5>
                <form method="post">
                    <div class="form-group">
                        <label>Sport</label>
                        <input type="text" class="form-control" placeholder="Enter Sport" name="sport" autocomplete="off" value=<?php echo $sport;?>>
                    </div>
                    <div class="form-group">
                        <label>Venue / Place</label>
                        <input type="text" class="form-control" placeholder="Enter Venue" name="venue" autocomplete="off" value=<?php echo $venue;?>>
                    </div>
                    <div class="form-group">
                        <label>Apponited Time</label>
                        <input type="time" class="form-control" placeholder="Enter Time" name="app_time" autocomplete="off" value=<?php echo $app_time;?>>
                    </div>
                    <div class="form-group">
                        <label>Fixture</label>
                        <input type="text" class="form-control" placeholder="Enter Fixture" name="fixture" autocomplete="off" value=<?php echo $fixture;?>>
                    </div>
                    <div class="form-group">
                        <label>Date</label>
                        <input type="date" class="form-control" placeholder="Enter Date" name="sce_date" autocomplete="off" value=<?php echo $sce_date;?>>
                    </div>
                    <button type="submit" class="btn btn-primary" name="submit">Update</button>
                </form>
            </div>
        </div>
    </div>

    <!-- Bootstrap scripts ... -->
</body>

</html>
