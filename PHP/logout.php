<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>
<title>Logout</title>
<link rel="stylesheet" type="text/css" href="../CSS/style.css" />
<script>
    function alertLogout() {
        alert("You have been logout!");
        window.location.replace("../index.html");
    }
</script>

</head>

<body>
<?php
if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {
    $_SESSION['loggedin'] = false;
    echo '<script type="text/javascript">',
    'alertLogout();',
    '</script>';
    
} else {
   
}
?>

</body>
</html>