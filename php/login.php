<?php

$mysql_hostname = "localhost";//hostname
$mysql_user = "root";//mysql user id
$mysql_password = "root";//mysql user password
$mysql_database = "user_db";//mysql selected db

$bd = mysql_connect($mysql_hostname, $mysql_user, $mysql_password) or die("db connect error");
mysql_select_db($mysql_database, $bd) or die("db connect error");

session_start();//session start
if($_SERVER["REQUEST_METHOD"] == "POST")
{

	$myusername=addslashes($_POST['username']);
	$mypassword=addslashes($_POST['password']);
	$sql="SELECT username FROM ING_Login WHERE username='$myusername' and passcode='$mypassword'";

	$result=mysql_query($sql);
	//$row=mysql_fetch_array($result);
	//$active=$row['active'];-

	$count=mysql_num_rows($result);
	// If result matched $myusername and $mypassword, table row must be 1 row
	if($count == 1)
	{

		//header("Location: main1.php");
		//header("Location: http://www.naver.com/");
		//exit;
		//
		//session_register("myusername");
		//session_start();//session start
		$_SESSION["login_user"]=$myusername;

        echo $_SESSION["login_user"];

        //echo "<script>alert(\"WOW - $myusername\");</script>";
		//header("Location: http://www.example.com/");
		echo "<script>location.href='./login_ok.php';</script>";
         //header("Location: main1.php");
		//header("Location: http://www.naver.com/");
		//exit;
	}
	else
	{
	echo "<script>alert(\"아이디나 패스워드가 잘못되었습니다.\");</script>";
	echo "<script>location.href='./main.php';</script>";
	}

}
?>