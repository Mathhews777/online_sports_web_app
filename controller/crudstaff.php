<?php
include '../config/database.php';
if (isset($_POST['submit'])) {
    $full_names = $_POST['full_names'];
    $ID_No = $_POST['ID_No'];
    $W_position = $_POST['W_position'];
    

    $sql = "INSERT INTO `staff` (full_names, ID_No, W_position)
            VALUES ('$full_names', '$ID_No', '$W_position')";

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
            background-image: url('../images/admin1.jpg'); /* Replace with your image path */
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
                <h5 class="card-title">Add Staff</h5>
                <form method="post">
                    <div class="form-group">
                        <label>Full Names</label>
                        <input type="text" class="form-control" placeholder="Enter Fullnames" name="full_names" autocomplete="off">
                    </div>
                    <div class="form-group">
                        <label>National ID or Passport Number</label>
                        <input type="text" class="form-control" placeholder="Enter ID number" name="ID_No" autocomplete="off">
                    </div>
                    <div class="form-group">
                        <label>Work Position</label>
                        <input type="text" class="form-control" placeholder="Enter Work Position" name="W_position" autocomplete="off">
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
