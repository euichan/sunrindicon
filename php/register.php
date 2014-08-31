<?php
$mysql_hostname = "localhost";//hostname
$mysql_user = "root";//mysql user id
$mysql_password = "root";//mysql user password
$mysql_database = "user_db";//mysql selected db
$id=$_POST['id'];
$pw=$_POST['pw'];
$id=mysql_real_escape_string($id);

$que="SELECT * FROM ING_Login WHERE id='".$id."'";
@$res=mysql_fetch_array(mysql_query($que));
if($res)
{
	echo "<script> alert('Already Registered..'); location.href=\"./main.php\"; </script>";
	exit;
}

$query="INSERT INTO ING_Login ('username', 'passcode') values('".$id."','".$pw."')";
$re=mysql_query($query);

$que="SELECT * FROM ING_Login WHERE id='".$id."'";
@$res_r=mysql_fetch_array(mysql_query($que));

if($res_r)
{
	echo "<script> alert('Register Success!'); location.href=\"./main.php\"; </script>";
}
else
{
	echo "<script> alert('Fail..'); </script>";
	echo $query;
	echo $que;
	echo $res;
}
?>
