<!DOCTYPE html>
<html>
<head>
    <title>Verify Email</title>
    <link rel="stylesheet" type="text/css" href="../CSS/style.css" />
    <script type="text/javascript" src="../JavaScript/script.js"></script>
</head>

<body>
 <div class="header">
        <div id="menu_icon" onclick="openMenu()">
            <hr id="icon_upper" />
            <hr id="icon_middle" />
            <hr id="icon_lower" />
        </div>
        <div id="Title">
            <h1><a href="index.html">AHZHONG</a></h1>
        </div>
        <div id="Logout_icon">
            <p><a href="./logout.php">Logout</a></p>
            <!-- ToDo add the link -->
        </div>
    </div>

  <div id="verifyEmail_main">
    <h1 id="verify_title">Verify Title</h1>
        <form action="./PHP/login.php" method="post">
            <fieldset id="login_field">
                <legend>Login</legend>
                Username:<input type="text" name="username" required="required" /><br />
                <br />
                Password:<input type="password" name="password" required="required" />
            </fieldset>
            <input type="submit" value="Login" id="login_button" />
        </form>

        <h2 id="register_title">If you do not have an account, click the button below to create account</h2>
        <button type="button" id="createAccount_button" onclick="openwindow('createAccount.html')"><span></span>Create account</button>
  </div>

<?php
	
?>


</body>
</html>