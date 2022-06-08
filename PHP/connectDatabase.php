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
  //Error
}

$sql = "SELECT username, password FROM User";

$result = $conn->query($sql);

if ($result->num_rows > 0) {
	while ($row = $result->fetch_assoc()) {
		$Dusername = $row["username"];
		$Dpassword = $row["password"];
		if ($_SERVER["REQUEST_METHOD"] == "POST") {
			if ($_POST["username"] == $Dusername && $_POST["password"] == $Dpassword) {
				echo '<h1>You have login</h1>';
				echo '<script>alert("You have login")</script>';
			} else {
				echo '<h1>Wrong username or password</h1>';
				echo '<a href="../login.html">Return to login page</a>';
			}
			
		}
	}
} else {
	echo '<h1>Something went wrong</h1>';
	echo '<a href="../login.html">Return to login page</a>';
	echo '<script>alert("Something went wrong")</script>';
}

$conn->close();

?>

</body>
</html>


