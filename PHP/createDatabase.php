<!DOCTYPE html>
<html>
<head>
<script>
    function alertConnectionError() {
        alert("There is an error when connecting to database!");
        window.location.replace("../login.html");
    }
</script>
</head>

<body>

<?php
	$servername = "localhost";
	$username = "root";
	$password = "";

	$conn = new mysqli($servername, $username, $password);
	if ($conn->connect_error) {
		echo '<script type="text/javascript">',
		'alertConnectionError();',
		'</script>';
	}
	$sql = "CREATE DATABASE website";

	if ($conn->query($sql) === TRUE) {
  
	}
?>

</body>
</html>