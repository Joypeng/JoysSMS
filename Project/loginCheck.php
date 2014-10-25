<?php
	
	$user = $_POST['user'];
	$pass = $_POST['pass'];

	if(($user == "student" && $pass == "pass") ||
		($user == "manager" && $pass == "pass"))
		header('location:admin.php?user=' . $user);
	else
		header('location:login.php?login=relog');