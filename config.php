<?php
  // Connect to the database
  $host = "localhost";
  $user = "karim";
  $password = "Karim@123";
  $dbname = "karim2";

  $conn = mysqli_connect($host, $user, $password, $dbname);

  // Check connection
  if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
  }
?>
  