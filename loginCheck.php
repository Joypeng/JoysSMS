﻿<?php 

	$user = $_POST['userName'];
	$pass = $_POST['passWord'];
	
	$Enter = $_POST['Login_undo'];
	// 管理员登录的校验
	if($user == "Mange"&& $pass == "root"){
	setcookie("userName",$user,time()+1200);
	header('location:adminPage.php?user=' . $user);
	}
	else
		header('location:Login.php?login=relog');
	// 学生登录免校验	
	if($Enter)
	header('location:StuPage.php');
		
	