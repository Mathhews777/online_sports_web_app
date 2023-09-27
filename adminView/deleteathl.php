<?php
include '../config/database.php';
if (isset($_GET['deleteathl_id'])) {
    $ath_id=$_GET['deleteathl_id'];

    $sql="delete from `athletes` where ath_id=$ath_id";
    $result=mysqli_query($conn, $sql);
    if ($result) {
        header('location: ../pagesOp/athletdash.php');
    }else {
        die("something went wrong");
    }
}

?>