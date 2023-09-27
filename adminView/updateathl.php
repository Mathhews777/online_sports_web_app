<?php
include '../config/database.php';
$ath_id=$_GET['updateathl_id'];
$sql="Select * from `athletes` where ath_id=$ath_id";
$result=mysqli_query($conn, $sql);
$row=mysqli_fetch_assoc($result);

$sport=$row['sport'];
$country=$row['country'];
$full_names=$row['full_names'];
$medals=$row['medals'];

if (isset($_POST['submit'])) {
    $sport = $_POST['sport'];
    $country = $_POST['country'];
    $full_names = $_POST['full_names'];
    $medals = $_POST['medals'];
   

    $sql ="update `athletes` set ath_id=$ath_id,sport='$sport',country='$country',full_names='$full_names',medals='$medals'
    where ath_id=$ath_id";

    $result = mysqli_query($conn, $sql);
    if ($result) {
        // Data inserted successfully
        header('Location: ../pagesOp/athletdash.php');
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
                        <label>Country</label>
                        <input type="text" class="form-control" placeholder="Enter Country" name="country" autocomplete="off" value=<?php echo $country;?>>
                    </div>
                    <div class="form-group">
                        <label>Full Names</label>
                        <input type="text" class="form-control" placeholder="Enter Names" name="full_names" autocomplete="off" value=<?php echo $full_names;?>>
                    </div>
                    <div class="form-group">
                        <label>Medals Won</label>
                        <input type="text" class="form-control" placeholder="Enter Medals" name="medals" autocomplete="off" value=<?php echo $medals;?>>
                    </div>
                    
                    <button type="submit" class="btn btn-primary" name="submit">Update</button>
                </form>
            </div>
        </div>
    </div>

    <!-- Bootstrap scripts ... -->
</body>

</html>
