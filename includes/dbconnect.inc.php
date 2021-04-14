<?php

// Host, username, password, db name.
$serverName = "sql313.epizy.com"; 
$dbUserName = "epiz_28101070";
$dbPassword = "VeP9NLs5QR";
$dbName = "epiz_28101070_RocketStartDB";
$connection = mysqli_connect($serverName,$dbUserName,$dbPassword,$dbName);

// Check connection
if (!$connection) {
	die("Failed to connect to MySQL: " . mysqli_connect_error());
}
  
?>