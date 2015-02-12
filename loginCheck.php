<?php 
	session_start();
	if(isset($_POST['user'])){
	$user = $_POST['user'];
	$pass = $_POST['pass'];
	$_SESSION['user'] = $user;
	/* 
	$flag = false;
	if($user == "Admin"&& $pass == "root")
	{
		setcookie("userName",$user,time()+1200);
		setcookie("userName",$pass,time()+1200);
		$flag = true;
		header('location:adminPage.php?user=' . $user);
	}
	else
		header('location:Login.php?login=relog'); */
		

	require_once'SqlDB.php';

	$sqlDB = new SqlDB();

	mysql_select_db('student');
	mysql_query("set names utf8");

	//查询数据库表中是否有这个用户名
	$sql="select * from login where (user='$user')";
	$res = $sqlDB->execute_dql($sql);
	//判断密码是否正确
	$row = mysql_fetch_assoc($res);
	if($row['password']==$pass)
		//header('location:enter.php?user='.$user);
		header('location:adminPage.php?user=' . $user);
	else
		//header('location:login.php?back=restart');
		header('location:Login.php?login=relog');
	mysql_free_result($res);
	}
	else
		include('404.html');

?>	
	
