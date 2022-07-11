<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>
<title>Welcome Page</title>
<link rel="stylesheet" type="text/css" href="../CSS/style.css" />
<script>
    function alertLogin() {
        alert("Please login first");
        window.location.replace("../login.html");
    }
</script>
</head>
    
<body>
<?php
if (!(isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true)) {
     echo '<script type="text/javascript">',
     'alertLogin();',
     '</script>';
    
} else {
   echo "Welcome to the member's area, " . htmlspecialchars($_SESSION['username']) . "!";
}
?>

<div class="header">
  <div id="menu_icon" onclick="openMenu()">
    <hr id="icon_upper" />
    <hr id="icon_middle" />
    <hr id="icon_lower" />
  </div>
  <div id="Title">
    <h1><a href="index.html">AHZHONG</a></h1>
  </div>
  <div id="Login_icon">
    <p><a href="./logout.php">Logout</a></p>
    <!-- ToDo add the link -->
   </div>
</div>


<h1>Hi</h1>

</body>
</html>
