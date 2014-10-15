<?
	$mysqli = @new mysqli("localhost", "root", "root", "dicon");

	if (mysqli_connect_errno()) {
		die("ERROR : " . mysqli_connect_error());
	}
?>