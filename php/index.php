<? @session_start(); ?>
<html>
	<head> <title>login & register</title> </head>
	<body>
	<? 	
	

	if (isset($_SESSION['id'])){
		echo "<script>";
		echo "alert('HELLO ".$_SESSION['id']."');";
		echo "</script>";
		echo "Already Login <br>";
		echo '<form action="./logout.php" method="post">  <input type="hidden" name="logout" value="0"><input type="submit" value="LOG OUT"> </form>';
	}
	
	else {
	echo '<form action="./login_ok.php" method = "post">';
	echo '	<div id="form"><input type = "text" name = "id"> ';
	echo '	<input type="submit" value="Login"> </div>';
	echo '	<div id="form"><input type = "password" name = "pw"> ';
	echo '		<input type="button" value="Register" onclick ="form.action=\'register_ok.php\'; form.submit()">';
	echo '	</div>';
	echo '</form>';
	}
	

		
	?>
	</body>
	</html>