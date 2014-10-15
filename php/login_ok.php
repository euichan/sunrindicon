<?
	@session_start();
	mysql_connect('localhost', 'root', 'root');
	mysql_select_db("user_db");
	
	$id=$_POST['id'];
	$pw=$_POST['pw'];
	$id=mysql_real_escape_string($id);
	$pw=md5($pw);
	
	$query="SELECT * FROM user WHERE id='".$id."' && pw='".$pw."'";

	$res=mysql_fetch_array(mysql_query($query));
	
	if($res){
		echo "<script> alert('Login Ok'); </script>";
		$_SESSION['id']=$_POST['id'];
		echo "<script> location.href=\"index.php\"</script>";
	}
	else {
		echo "<script> alert('Login Failed..'); </script>";
		echo "<script> location.href=\"index.php\"</script>";
	}

?>