<?php
	session_start();

	var_dump($_POST);

	$item = $_POST['item'];
	$num = $_POST['num'];

	$flag = false;
	foreach($_SESSION['log'] as $key=>$value){
		if($key == $item){
			$_SESSION['log'][$key] += $num;
			unset($_SESSION['shoplist'][$item]);
			$flag = true;
			break;
		}
	}

	if($flag){
		header('location:test1.php?action=list&msg=logUpdated');
	}else{
		$_SESSION['log'][$item] = $num;
		unset($_SESSION['shoplist'][$item]);
		header('location:test1.php?action=list&msg=logAdded');
	}
