<?php
$servername = "localhost";
$username = "Udith";
$password = "UdithData12*";

// Create connection
$conn_to_udith = mysqli_connect($servername, $username, $password);

// Check connection
if (!$conn_to_udith) {
  die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";
?>