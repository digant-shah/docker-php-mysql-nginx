<?php
phpinfo();

$servername = "docker-mysql";
$username = "root";
$password = "root";

// Create connection
$conn = new mysqli($servername, $username, $password,'laravel');

//Check connection
if ($conn->connect_error) {
   die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";
?>
