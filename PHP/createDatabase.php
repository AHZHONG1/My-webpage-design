<!DOCTYPE html>
<html>
<head>

</head>

<body>

<?php
	$servername = "localhost";
	$username = "root";
	$password = "";

	$conn = new mysqli($servername, $username, $password);
	if ($conn->connect_error) {
		die("Connection failed: " . $conn->Connect_error);
	}
	$sql = "CREATE DATABASE website";

	if ($conn->query($sql) === TRUE) {
  
	}
?>

</body>
</html>