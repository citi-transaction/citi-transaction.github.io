<?php

$servername = "localhost";
$username = "id14887238_thisgamesossad1";
$password = "worldISspinning!123";
$dbname = "id14887238_thisgamesossad";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }
  
  echo "Connected successfully.";


$managername = $_POST["manName"];
$requestorname = $_POST["reqName"];
$source_account = $_POST["srcAcc"];
$destination_account = $_POST["desAcc"];
$transaction_purpose = $_POST["transPurpose"];
$transaction_status = $_POST["transStat"];
$transaction_amount = $_POST["transAmt"];

echo $managername;

$conn->close();

?>