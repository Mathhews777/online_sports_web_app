<?php
include '../config/database.php';
if (isset($_GET['deletestaff_id'])) {
    $staff_id=$_GET['deletestaff_id'];

    $sql="delete from `staff` where staff_id=$staff_id";
    $result=mysqli_query($conn, $sql);
    if ($result) {
        header('location: ../pagesOp/staffdash.php');
    }else {
        die("something went wrong");
    }
}

?>