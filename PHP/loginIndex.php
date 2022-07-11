<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>
<title>Welcome Page</title>
<link rel="stylesheet" type="text/css" href="../CSS/style.css" />
<script type="text/javascript" src="../JavaScript/script.js"></script>
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
}
?>

<div class="loginIndex_header">
  <div id="account_icon" onclick="openMenu('userPhotoOnClick')">
    <img id="userPhoto" src="../images/DefaultUserPhoto.png" width="40" height="40">
  </div>

  <!--<div id="menu_icon" onclick="openMenu()">
    <hr id="icon_upper" />
    <hr id="icon_middle" />
    <hr id="icon_lower" />
  </div>
  <div id="Title">
    <h1><a href="./loginIndex.php">AHZHONG</a></h1>
  </div>-->
  <div id="Logout_icon">
    <p><a href="./logout.php">Logout</a></p>
    <!-- ToDo add the link -->
   </div>
</div>

<div class="userPhotoOnClick">
  <ul>
     <li><a href="index.html">Main</a></li>
     <li><a href="game.html">Gaming</a></li>
     <li><a href="learn.html">Learning</a></li>
     <li><a href="about_us.html">About us</a></li>
     <li><a href="gallery.html">Gallery</a></li>
     <li><a href="login.html">Create an account</a></li>
   </ul>
</div>

<?php
    echo "Welcome to the member's area, " . htmlspecialchars($_SESSION['username']) . "!";
?>

<h1>Hi</h1>

</body>
</html>
