<?php
	session_start();
	
	$s_ID = $_POST['s_ID'];
	$Name = $_POST['Name'];
	$IDcard = $_POST['IDcard'];
	$Major = $_POST['Major'];

	$_SESSION['student'][$s_ID]['s_ID'] = $s_ID;
	$_SESSION['student'][$s_ID]['Name'] = $Name;
	$_SESSION['student'][$s_ID]['IDcard'] = $IDcard;
	$_SESSION['student'][$s_ID]['Major'] = $Major;

	