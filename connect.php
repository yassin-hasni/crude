<?php
$name = "localhost";
$username = "root";
$password = "";

// Create connection
$conn = new mysqli($name, $username, $password,'crud');

// Check connection
if (!$conn) {
 
   die(mysqli_error($conn));
}
?>