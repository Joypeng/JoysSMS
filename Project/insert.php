<?php
	session_start();

	 var_dump($_POST);

	$item = $_POST['item'];
	$num = $_POST['num'];

	$flag = false;
	foreach($_SESSION['shoplist'] as $key=>$value){
		if($key == $item){
			$_SESSION['shoplist'][$key] += $num;
			$flag = true;
			break;
		}
	}

	if($flag){
		header('location:test1.php?action=list&msg=updated');
	}else{
		$_SESSION['shoplist'][$item] = $num;
		header('location:test1.php?action=list&msg=added');
	}


