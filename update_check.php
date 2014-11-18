<?php
	session_start();
	$s_ID = $_POST['c_ID'];
	$Name = $_POST['Name'];
	$Major = $_POST['Major'];
	$sex = $_POST['sex'];

	$_SESSION['student'][$s_ID]['s_ID'] = $s_ID;
	$_SESSION['student'][$s_ID]['Name'] = $Name;
	$_SESSION['student'][$s_ID]['Major'] = $Major;
	$_SESSION['student'][$s_ID]['sex'] = $sex;

	header("location:stu_Update.php?action=enchange");