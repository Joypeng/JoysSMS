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
	
	foreach($_SESSION['look'] as $v)
	{
		if($v == $empno)
		{
			header("location:enter.php?action=look&msg=更新&user=employee&empno=" . $empno . "&idcard=" . $idcard);
		}
		else
			header("location:enter.php?action=look&msg=增加&user=employee&empno=" . $empno . "&idcard=" . $idcard);
	}

?>