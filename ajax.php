<?php

$serverName = "sql313.epizy.com";
$dbUserName = "epiz_28101070";
$dbPassword = "VeP9NLs5QR";
$dbName = "epiz_28101070_RocketStartDB";
$conn = mysqli_connect($serverName, $dbUserName, $dbPassword, $dbName);

$keyword = $_POST['value'];
$query = "(SELECT ProfileName FROM studentprofiles WHERE ProfileName LIKE '%" .
  $keyword . "%') 
           UNION
           (SELECT CompanyName FROM companyprofiles WHERE CompanyName LIKE '%" .
  $keyword . "%')";
$execute = $connection->query($query);
$res = array();
while ($result = $execute->fetch_assoc()) {
  $res[] = $result['ProfileName'] . '<br>';
}
echo json_encode($res);
