<?php

$servername = "localhost";
$username = "id15822012_myairline";
$password = "cocaCOLA@13";
$dbname = "id15822012_airline2";


// Create connection
$con = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$con) {
    die('Could not connect: ' . mysqli_error($con));
} 
?>