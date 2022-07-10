<!DOCTYPE html>
<html>
<head>

</head>

<body>

<?php

include 'connectDatabase.php';

$sql = "CREATE TABLE User(
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
username VARCHAR(30) NOT NULL,
password VARCHAR(30) NOT NULL,
email VARCHAR(50)
)";

if ($conn->query($sql) === FALSE) {
	//Error
}
if ($_POST["password"] == $_POST["passwordAgain"]) {
	$sql = "INSERT INTO User (username, password) VALUES ('" . $_POST["username"] . "', '" . $_POST["password"] . "')";

	if ($conn->query($sql) === TRUE) {
		echo '<a href="../login.html">Return to login page</a>';
		echo '<script>alert("Account created")</script>';
	}
} else {
	echo '<script>alert("Something went wrong")</script>';
	echo '<h1>The password is not the same</h1>';
	echo '<a href="../createAccount.html">Please create again</a>';
}

$conn->close();




?>

</body>

</html>