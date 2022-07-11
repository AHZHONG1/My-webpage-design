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
include 'createDatabase.php';

$dbname = "website";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
	echo '<script type="text/javascript">',
		'alertConnectionError();',
		'</script>';
}
?>

</body>
</html>


