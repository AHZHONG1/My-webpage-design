<!DOCTYPE html>
<html>
<head>

</head>

<body>

<?php
include 'createDatabase.php';

$dbname = "website";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
	die("Connection failed: " . $conn->conect_error);
}
?>

</body>
</html>


