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

$dbname = "website";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
	die("Connection failed: " . $conn->conect_error);
}

$sql = "CREATE TABLE User(
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
username VARCHAR(30) NOT NULL,
password VARCHAR(30) NOT NULL,
email VARCHAR(50)
)";

if ($conn->query($sql) === FALSE) {
  echo "Error creating table: " . $conn->error;
}
if ($_POST["password"] == $_POST["passwordAgain"]) {
	$sql = "INSERT INTO User (username, password) VALUES ('" . $_POST["username"] . "', '" . $_POST["password"] . "')";

	if ($conn->query($sql) === TRUE) {
		echo '<script>alert("Account created")</script>';
	}
} else {
	echo '<script>alert("Something went wrong")</script>';
}

$conn->close();




?>