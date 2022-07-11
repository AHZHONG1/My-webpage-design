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
if ($_POST["password"] == $_POST["passwordAgain"]) {

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
