<?php
include '../config/database.php';
$res_id=$_GET['updatewin_id'];
$sql="Select * from `winners` where res_id=$res_id";
$result=mysqli_query($conn, $sql);
$row=mysqli_fetch_assoc($result);

$venue=$row['venue'];
$release_date=$row['release_date'];
$fixture=$row['fixture'];
$victors=$row['victors'];

if (isset($_POST['submit'])) {
    $venue = $_POST['venue'];
    $release_date = $_POST['release_date'];
    $fixture = $_POST['fixture'];
    $victors = $_POST['victors'];
   
    // Use prepared statement
    $sql = "UPDATE `winners` SET venue=?, release_date=?, fixture=?, victors=? WHERE res_id=?";
    $stmt = mysqli_prepare($conn, $sql);

    if ($stmt) {
        mysqli_stmt_bind_param($stmt, "ssssi", $venue, $release_date, $fixture, $victors, $res_id);
        $result = mysqli_stmt_execute($stmt);

        if ($result) {
            // Data updated successfully
            header('Location: ../pagesOp/resdash.php');
            exit(); // Make sure to exit after redirection
        } else {
            echo "Error: " . mysqli_error($conn);
        }

        mysqli_stmt_close($stmt);
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
            background-image: url('../images/admin1.jpg');
            background-size: cover;
        }
        
        .card {
            background: rgba(255, 255, 255, 0.8);
        }
    </style>

    <title>Update Results</title>
</head>

<body>
    <div class="container my-5">
        <div class="card bg-light">
            <div class="card-body">
                <h5 class="card-title">Update Results</h5>
                <form method="post">
                    <div class="form-group">
                        <label>Venue</label>
                        <input type="text" class="form-control" placeholder="" name="venue" autocomplete="off" value=<?php echo $venue;?>>
                    </div>
                    <div class="form-group">
                        <label>Date</label>
                        <input type="date" class="form-control" placeholder="" name="release_date" autocomplete="off" value=<?php echo $release_date;?>>
                    </div>
                    <div class="form-group">
                        <label>Result Fixture</label>
                        <input type="text" class="form-control" placeholder="" name="fixture" autocomplete="off" value=<?php echo $fixture;?>>
                    </div>
                    <div class="form-group">
                        <label>Results</label>
                        <input type="text" class="form-control" placeholder="" name="victors" autocomplete="off" value=<?php echo $victors;?>>
                    </div>
                    
                    <button type="submit" class="btn btn-primary" name="submit">Update</button>
                </form>
            </div>
        </div>
    </div>

    <!-- Bootstrap scripts ... -->
</body>

</html>
