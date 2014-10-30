<?php
	session_start();

	$empno=$_GET['empno'];


	$_SESSION['histry'][$empno]['empno']=$empno;
	$_SESSION['histry'][$empno]['nname']=$_SESSION['look'][$empno]['nname'];
	$_SESSION['histry'][$empno]['idcard']=$_SESSION['look'][$empno]['idcard'];
	$_SESSION['histry'][$empno]['sex']=$_SESSION['look'][$empno]['sex'];

	unset($_SESSION['look'][$empno]);

	header('location:enter.php?user=manager&action=delete');
?>