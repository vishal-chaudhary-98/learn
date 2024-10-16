<?php

$host = "database";
$usr = "lamp";
$pswd = "lamp";
$db = "lamp";

$conn = mysqli_connect($host,  $usr, $pswd,$db);

// if ($conn) {
//     echo '<script>alert("Database connected!");</script>'; exit();
// } else {
//     echo '<script>alert("Database connection failed: ' . mysqli_connect_error() . '");</script>'; exit();
// }