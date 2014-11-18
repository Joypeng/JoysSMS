<?php
	session_start();

	$s_ID=$_GET['s_ID'];


	$_SESSION['history'][$s_ID]['s_ID']=$s_ID;
	$_SESSION['history'][$s_ID]['Name']=$_SESSION['student'][$s_ID]['Name'];
	$_SESSION['history'][$s_ID]['IDcard']=$_SESSION['student'][$s_ID]['IDcard'];
	$_SESSION['history'][$s_ID]['sex']=$_SESSION['student'][$s_ID]['sex'];
	$_SESSION['history'][$s_ID]['Major']=$_SESSION['student'][$s_ID]['Major'];

	unset($_SESSION['student'][$s_ID]);

	header('location:graduate.php?user=Admin&action=delete');
