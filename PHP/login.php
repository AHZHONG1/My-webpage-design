<?php
session_start();
?>

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

$sql = "SELECT username, password FROM User";

$result = $conn->query($sql);
$match = FALSE;

if ($result->num_rows > 0) {
	while ($row = $result->fetch_assoc()) {
		$Dusername = $row["username"];
		$Dpassword = $row["password"];
		if ($_SERVER["REQUEST_METHOD"] == "POST") {
			if ($_POST["username"] == $Dusername && $_POST["password"] == $Dpassword) {
				$match = TRUE;
				$_SESSION['loggedin'] = true;
				$_SESSION['username'] = $Dusername;
				echo '<h1>You have login</h1>';
				echo '<script>alert("You have login")</script>';
				header('Location: ' .'loginIndex.php');
				break;
			} else {
				continue;
				
			}
			
		}
	}
	if ($match == FALSE) {
		echo '<h1>Wrong username or password</h1>';
		echo '<a href="../login.html">Return to login page</a>';
		$_SESSION['loggedin'] = false;
	}

} else {
	echo '<h1>Something went wrong</h1>';
	echo '<h1>No user account has been created</h1>';
	echo '<h1>Please create an account first</h1>';
	echo '<a href="../login.html">Return to login page</a>';
	echo '<script>alert("Something went wrong")</script>';
	$_SESSION['loggedin'] = false;
}

$conn->close();
?>

</body>
</html>
