<?
		mysql_connect('localhost', 'root', 'root');
	mysql_select_db("dicon");
	$id=$_POST['id'];
	$pw=$_POST['pw'];
	$pw=md5($pw);
	$id=mysql_real_escape_string($id);	
	

	$que="SELECT * FROM user WHERE id='".$id."'";
	@$res=mysql_fetch_array(mysql_query($que));
	if($res){
		echo "<script> alert('Already Registered..'); location.href=\"./index.php\"; </script>";
		exit;
		}
	
	$query="INSERT INTO user values('".$id."','".$pw."')";
	$re=mysql_query($query);

	$que="SELECT * FROM user WHERE id='".$id."'";
	@$res_r=mysql_fetch_array(mysql_query($que));
	
	if($res_r)
	{
		echo "<script> alert('Register Success!'); location.href=\"./index.php\"; </script>";
	}
	else{
		echo "<script> alert('Fail..'); </script>";
		echo $query;
	//	echo "<script> location.href=\"./index.php\"</script>";
	}
		
?>