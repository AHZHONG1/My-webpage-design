<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>
<script>
    function alertWrongPassword() {
        alert("Your username or password is wrong!");
        window.location.replace("../login.html");
    }

	function alertNoUserInfo() {
		alert("Something went wrong!\nNo user account has been created\nPlease create an account first!");
        window.location.replace("../login.html");
	}

</script>
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
		$_SESSION['loggedin'] = false;
		echo '<script type="text/javascript">',
		'alertWrongPassword();',
		'</script>';
	}

} else {
	$_SESSION['loggedin'] = false;
	echo '<script type="text/javascript">',
		'alertNoUserInfo();',
		'</script>';
}

$conn->close();
?>

</body>
</html>
