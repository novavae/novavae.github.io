<?php

$servername = "localhost";
$username = "id15822012_myairline";
$password = "cocaCOLA@13";
$dbname = "id15822012_airline2";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if(mysqli_connect_errno()) {
	echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
?>