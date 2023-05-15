<?php
$servername = "std-mysql";
$username = "std_2094_1";
$password = "12345678";
$dbname = "std_2094_1";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
  echo die("Connection failed: " . $conn->connect_error);
}
?>