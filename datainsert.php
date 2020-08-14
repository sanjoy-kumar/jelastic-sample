<?php
$servername = "node1284-env-8685478.paas.qloud.asia";
$username = "root";
$password = "EFLrlo03552";
$dbname = "jelastic";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO Users (firstname, lastname, email)
VALUES ('Shreya Das', 'Himm', 'shreya.himm.backup@gmail.com')";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
