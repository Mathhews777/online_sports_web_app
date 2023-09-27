<?php
include '../config/database.php';
$staff_id=$_GET['updatestaff_id'];
$sql="Select * from `staff` where staff_id=$staff_id";
$result=mysqli_query($conn, $sql);
$row=mysqli_fetch_assoc($result);

$full_names=$row['full_names'];
$ID_No=$row['ID_No'];
$W_position=$row['W_position'];

if (isset($_POST['submit'])) {
    $full_names = $_POST['full_names'];
    $ID_No = $_POST['ID_No'];
    $W_position = $_POST['W_position'];
   

    $sql ="update `staff` set staff_id=$staff_id,full_names='$full_names',ID_No='$ID_No',W_position='$W_position'
    where staff_id=$staff_id";

    $result = mysqli_query($conn, $sql);
    if ($result) {
        // Data inserted successfully
        header('Location: ../pagesOp/staffdash.php');
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
                <h5 class="card-title">Update Staff Information</h5>
                <form method="post">
                    <div class="form-group">
                        <label>Full Names</label>
                        <input type="text" class="form-control" placeholder="Enter Fullnames" name="full_names" autocomplete="off" value=<?php echo $full_names;?>>
                    </div>
                    <div class="form-group">
                        <label>ID Number</label>
                        <input type="text" class="form-control" placeholder="Enter ID" name="ID_No" autocomplete="off" value=<?php echo $ID_No;?>>
                    </div>
                    <div class="form-group">
                        <label>Work Position</label>
                        <input type="text" class="form-control" placeholder="Enter New Position" name="W_position" autocomplete="off" value=<?php echo $W_position;?>>
                    </div>
                    
                    <button type="submit" class="btn btn-primary" name="submit">Update</button>
                </form>
            </div>
        </div>
    </div>

    <!-- Bootstrap scripts ... -->
</body>

</html>
