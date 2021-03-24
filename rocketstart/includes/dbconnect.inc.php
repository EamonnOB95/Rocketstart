<?php

// Host, username, password, db name.
$serverName = "localhost"; 
$dbUserName = "root";
$dbPassword = "";
$dbName = "rocketstart";
$connection = mysqli_connect($serverName,$dbUserName,$dbPassword,$dbName);

// Check connection
if (!$connection) {
	die("Failed to connect to MySQL: " . mysqli_connect_error());
}
  
?>