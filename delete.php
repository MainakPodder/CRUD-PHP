<?php
    include 'connection.php';
    $ids = $_GET['id'];
    $deletequery = "DELETE FROM `jobregistration` WHERE id=$ids";
    $showdata = mysqli_query($conn,$deletequery);
    if ($showdata) {
        ?><script>alert('Data Deleted Successfully');</script><?php
        header('location:display.php');
    } else {
        ?><script>alert('!!!Data Not Daleted Properly!!!');</script><?php
    }
?>