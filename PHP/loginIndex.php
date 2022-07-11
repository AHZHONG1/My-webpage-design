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
include 'connectDatabase.php';

$username = $_SESSION['username']

?>

<div class="loginIndex_header">
  <div id="account_icon" onclick="openMenu('userPhotoOnClick')">
  <?php
  

  $sql = "SELECT userPhoto FROM User WHERE username='".$username."'";
  $result = $conn->query($sql);
  $row = $result->fetch_assoc();
    if ($row['userPhoto'] == NULL) {
        echo '<img id="userPhoto" src="../images/DefaultUserPhoto.png" width="40" height="40">';
    }
  ?>
    
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

<?php
  

  $sql = "SELECT userPhoto FROM User WHERE username='".$username."'";
  $result = $conn->query($sql);
  $row = $result->fetch_assoc();
    if ($row['userPhoto'] == NULL) {
        echo '<img id="userPhotoBig" src="../images/DefaultUserPhoto.png">';
    }
    $conn->close();
  ?>
   <p id="changePhotoButton">Change user photo</p>


  <ul id="userPhotoList">
     <li><a href="">Go to Setting</a></li>
     
   </ul>
</div>

<?php
    echo "Welcome to the member's area, " . htmlspecialchars($_SESSION['username']) . "!";
?>

<h1>Hi</h1>

</body>
</html>
