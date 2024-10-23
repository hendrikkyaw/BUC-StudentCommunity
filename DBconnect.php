<?php
    $server = "localhost:3308";
    $user = "root";
    $password = "";
    $database = "bucstdclub";

    $conn = mysqli_connect($server, $user, $password, $database) or die("Connection failed: " . mysqli_connect_error());
?>