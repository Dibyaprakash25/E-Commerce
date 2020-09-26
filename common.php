<?php
$con = mysqli_connect("localhost:3308", "root", "", "store") or die(mysqli_error($con));
if(!isset($_SESSION['id'])){
        session_start();
    }   
?>

