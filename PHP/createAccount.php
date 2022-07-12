<!DOCTYPE html>
<html>
<head>
<script>
    function alertWrongPassword() {
        alert("The password is not the same!\nPlease type again!");
        window.location.replace("../createAccount.html");
    }

	function alertCreateAccountSuccessfully() {
		alert("Account has been created successfully!");
        window.location.replace("../login.html");
	}

	function alertSameUsername() {
		alert("This username has been used in other account\nPlease use another username!");
		window.location.replace("../createAccount.html");
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
email VARCHAR(50),
userPhoto BLOB
)";

if ($conn->query($sql) === FALSE) {
	//Error
}

$sql = "SELECT username FROM User";

$result = $conn->query($sql);

$duplicate = FALSE;

if ($result->num_rows > 0) {
	while ($row = $result->fetch_assoc()) {
		if ($row["username"] == $_POST["username"]) {
			$duplicate = TRUE;
			echo '<script type="text/javascript">',
			'alertSameUsername();',
			'</script>';
			break;
		}
	}
}

if ($_POST["password"] == $_POST["passwordAgain"] && $duplicate == FALSE) {

	$sql = "INSERT INTO User (username, password) VALUES ('" . $_POST["username"] . "', '" . $_POST["password"] . "')";

	if ($conn->query($sql) === TRUE) {
		echo '<script type="text/javascript">',
		'alertCreateAccountSuccessfully();',
		'</script>';
	}
} else {
	echo '<script type="text/javascript">',
		'alertWrongPassword();',
		'</script>';
}

$conn->close();
?>

</body>
</html>
