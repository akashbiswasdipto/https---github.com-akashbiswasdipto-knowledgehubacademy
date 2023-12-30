<?php
$servername='localhost';
$db='khubacademy';
$username='root';
$password='';

$conn = mysqli_connect($servername, $username, $password,$db);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
?>