<?php
include "class.php";
if($obj->loggedin()!="")
{
	$obj->url("home.php");
}
?>




<!DOCTYPE HTML>
<html lang="en-US">
<head>
    <meta charset="UTF-8">
    <title>Login and Registration</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <center>
        <h1>Login and Registration System PHP</h1>
    </center>
    <div id="login_container">
        <br>
        <center>
        <form method="post" action="login_submit.php">
            <h2>Login Form</h2>
			<?php
			if(isset($_GET['err']))
			{
			echo "<p>Your email or password is imcorrect</p>";
			}
			
			?>
            <br>
            <input type="email" name="e" placeholder="Enter Your Email" required/><br><br>
            <input type="password" name="p" placeholder="Enter Your Password" required/><br><br>
            <input type="submit" name="login" value="Submit"/><br><br>
        </form>
        </center>
    </div>
    <div id="register_container">
        <br>
        <br>
        <center>
        <form method="post" enctype="multipart/form-data" action="regis_submit.php">
            <h2>Registration Form</h2>
            <?php if(isset($_GET['msg'])) {
                echo "<p>Your registration is successful</p>";
            } ?>
            <br>
            <input type="text" name="n" placeholder="Enter Your Name" required/><br><br>
            <input type="email" name="e" placeholder="Enter Your Email" required/><br><br>
            <input type="number" name="nm" placeholder="Enter Your Mobile Number" required/><br><br>
            <input type="password" name="p" placeholder="Enter Your Password" required/><br><br>
            Upload your image: <input type="file" name="img" required/><br><br>
            <input type="submit" name="submit" value="Submit"/>
        </form>
        </center>
        <br>
        <br>
    </div>
</body>
</html>
