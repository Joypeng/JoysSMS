<?php 
	session_start();
	
	$user = $_POST['userName'];
	$pass = $_POST['passWord'];
	$_SESSION['user'] = $user;
	/*$Enter = $_POST['Login_undo'];
	管理员登录的校验*/
	$flag = false;
	if($user == "Admin"&& $pass == "root")
	{
		setcookie("userName",$user,time()+1200);
		setcookie("userName",$pass,time()+1200);
		$flag = true;
		header('location:adminPage.php?user=' . $user);
	}
	else
		header('location:Login.php?login=relog');
	/*
	// 学生登录免校验	
	if($Enter)
	header('location:StuPage.php');
	*/
		
	
