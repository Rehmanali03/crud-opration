<?php
include "conn.php";

$id = $_GET['id'];

    $query = "delete from `users` where `id` = $id";
    $res = mysqli_query($con, $query);

    if($res){
        header('location:fatch.php');
    }
?>
