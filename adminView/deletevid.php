<?php
include '../config/database.php';
if (isset($_GET['deletevid_id'])) {
    $vid_id=$_GET['deletevid_id'];

    $sql="delete from `broadcast` where vid_id=$vid_id";
    $result=mysqli_query($conn, $sql);
    if ($result) {
        header('location: ../pagesOp/broaddash.php');
    }else {
        die("something went wrong");
    }
}

?>