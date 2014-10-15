<?
	session_start();
	if(isset($_SESSION['id'])){
	$_SESSION=array();
	
	if(isset($_COOKIE[session_name()] )){
		setcookie(session_name(),'',time()-3600);
		echo "1";
	}
		session_destroy();
		echo $_SESSION['id'];
		//echo session_name();
	}
	
  	echo " <script> location.href='index.php'; </script>";
	
?>