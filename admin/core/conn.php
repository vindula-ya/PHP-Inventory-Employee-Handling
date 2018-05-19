<?php
    $hostname = "localhost";
    $database = "inventory";
    $username = "root";
    $password = "";
    
    $conn= new mysqli($hostname, $username, $password, $database) or die(mysqli_error());

?>