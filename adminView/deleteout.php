<?php
include '../config/database.php';
if (isset($_GET['deleteout_id'])) {
    $res_id=$_GET['deleteout_id'];

    $sql="delete from `winners` where res_id=$res_id";
    $result=mysqli_query($conn, $sql);
    if ($result) {
        header('location: ../pagesOp/resdash.php');
    }else {
        die("something went wrong");
    }
}

?>