<?php
	session_start();
	$_SESSION = array();
	session_destroy();
	if(!isset($_SESSION['user']))
	{
		header('location:./home.php');
	}
?>