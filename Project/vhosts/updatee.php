<?php
	session_start();

	var_dump($_POST);
	
	$empno = $_POST['empno'];
	$nname = $_POST['nname'];
	$sex = $_POST['sex'];
	$idcard = $_POST['idcard'];

	$_SESSION['look'][$empno]['empno']=$empno;
	$_SESSION['look'][$empno]['nname']=$nname;
	$_SESSION['look'][$empno]['sex']=$sex;
	$_SESSION['look'][$empno]['idcard']=$idcard;
	
	header("location:enter.php?action=look&msg=更新&user=employee&empno=" . $empno . "&idcard=" . $idcard);
?>