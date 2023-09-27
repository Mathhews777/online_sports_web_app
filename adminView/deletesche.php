<?php
include '../config/database.php';
if (isset($_GET['deletesche_id'])) {
    $sche_id=$_GET['deletesche_id'];

    $sql="delete from `schedule` where sche_id=$sche_id";
    $result=mysqli_query($conn, $sql);
    if ($result) {
        header('location: ../pagesOp/schedash.php');
    }else {
        die("something went wrong");
    }
}

?>