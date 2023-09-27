<?php
include '../config/database.php';
$vid_id=$_GET['updatevid_id'];
$sql="Select * from `broadcast` where vid_id=$vid_id";
$result=mysqli_query($conn, $sql);
$row=mysqli_fetch_assoc($result);

$sport=$row['sport'];
$fixture=$row['fixture'];
$date=$row['date'];
$hrs=$row['hrs'];
$vid_url=$row['vid_url'];

if (isset($_POST['submit'])) {
    $sport = $_POST['sport'];
    $fixture = $_POST['fixture'];
    $date = $_POST['date'];
    $hrs = $_POST['hrs'];
    $vid_url = $_POST['vid_url'];

    $sql ="update `broadcast` set vid_id=$vid_id,sport='$sport',fixture='$fixture',date='$date',hrs='$hrs',vid_url='$vid_url'
    where vid_id=$vid_id";

    $result = mysqli_query($conn, $sql);
    if ($result) {
        // Data inserted successfully
        header('Location: ../pagesOp/broaddash.php');
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
                <h5 class="card-title">Update Athlete Information</h5>
                <form method="post">
                    <div class="form-group">
                        <label>Sport</label>
                        <input type="text" class="form-control" placeholder="Enter Sport" name="sport" autocomplete="off" value=<?php echo $sport;?>>
                    </div>
                    <div class="form-group">
                        <label>Fixture</label>
                        <input type="text" class="form-control" placeholder="Enter Fixture" name="fixture" autocomplete="off" value=<?php echo $fixture;?>>
                    </div>
                    <div class="form-group">
                        <label>APP Date</label>
                        <input type="date" class="form-control" placeholder="Enter Date" name="date" autocomplete="off" value=<?php echo $date;?>>
                    </div>
                    <div class="form-group">
                        <label>APP Time</label>
                        <input type="time" class="form-control" placeholder="New Time" name="hrs" autocomplete="off" value=<?php echo $hrs;?>>
                    </div>
                    <div class="form-group">
                        <label>Video_URL</label>
                        <input type="text" class="form-control" placeholder="paste here" name="vid_url" autocomplete="off" value=<?php echo $vid_url;?>>
                    </div>
                    
                    <button type="submit" class="btn btn-primary" name="submit">Update</button>
                </form>
            </div>
        </div>
    </div>

    <!-- Bootstrap scripts ... -->
</body>

</html>
