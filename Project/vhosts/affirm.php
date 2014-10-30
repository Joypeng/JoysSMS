<?php
	
	$user = $_POST['user'];
	$pass = $_POST['pass'];

	if(($user == "employee" && $pass == "123") ||
		($user == "manager" && $pass == "123456"))
		header('location:enter.php?user='.$user);
	else
		header('location:register.php?register=restart');
?>