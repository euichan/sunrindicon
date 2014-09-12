<?php
session_start();
	echo "login success!!";
	echo $_SESSION["login_user"];
?>

<a href="main.php">go to home</a>
