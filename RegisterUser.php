<?php
$servername = "localhost";
$username = "id14887238_thisgamesossad1";
$password = "worldISspinning!123";
$dbname = "id14887238_thisgamesossad";

// Variables submitted by user
$registerUser = $_POST["registerUser"];
$registerPass = $_POST["registerPass"];
$registerEmail = $_POST["registerEmail"];
// Use these values to query

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

echo "Connected successfully, now showing users.";


$sql = "SELECT username FROM users WHERE username = '" . $registerUser . "'"; // cannot be duplicate
// username must be unique! not repeatable.
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  // Tell user that name is already taken

  echo "Username is already taken. Please try another username.";

} else {
  echo "Creating user...";

  // Inser user / pw / email into DB
  $sql2 = "INSERT INTO users (username, password, email) VALUES ('$registerUser','$registerPass','$registerEmail')";
  
  // " . $registerUser . " ',' " . $registerPass . " '," . "' " . $registerEmail . "')" ;
  if ($conn->query($sql2) == TRUE) {
    echo "New record created successfully";
  } else {
    echo "Error: " . $sql2 . "<br>" . $conn->error;
  }


}
$conn->close();
?>

