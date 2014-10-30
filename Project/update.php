<?php
	session_start();

	var_dump($_POST);

	$item = $_POST['item'];
	$num = $_POST['num'];

	$_SESSION['shoplist'][$item] = $num;

	header('location:test1.php?action=list&msg=Updated');
