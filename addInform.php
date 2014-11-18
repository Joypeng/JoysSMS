<?php
	session_start();
	$s_ID = $_POST['s_ID'];
	$Name = $_POST['Name'];
	$IDcard = $_POST['IDcard'];
	$Major = $_POST['Major'];
	$sex = $_POST['sex'];

	$_SESSION['student'][$s_ID]['s_ID'] = $s_ID;
	$_SESSION['student'][$s_ID]['Name'] = $Name;
	$_SESSION['student'][$s_ID]['IDcard'] = $IDcard;
	$_SESSION['student'][$s_ID]['Major'] = $Major;
	$_SESSION['student'][$s_ID]['sex'] = $sex;
	header('location:tisi.html');
	/*foreach($_SESSION['student'] as $v)
	{
		if($v == $s_ID)
		{
			header("location:stu_reg.php?action=look&msg=更新&user=employee&empno=" . $empno . "&idcard=" . $idcard);
		}
		else
			header("location:stu_reg.php?action=look&msg=增加&user=employee&empno=" . $empno . "&idcard=" . $idcard);
	}*/