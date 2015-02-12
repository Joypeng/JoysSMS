<?php
	session_start();
	require_once 'SqlDB.php';
	$s_ID = $_POST['s_ID'];
	$Name = $_POST['Name'];
	$IDcard = $_POST['IDcard'];
	$Major = $_POST['Major'];
	$sex = $_POST['sex'];
	
	$sqlDB = new SqlDB();
	mysql_select_db("student");
	mysql_query("set names utf8");
		//添加进数据库表中
		$sql = "insert into reg (stuid,nname,sex,idcard,subject) values ('".$s_ID."','".$Name."','".$sex."','".$IDcard."','".$Major."');";
		$res = $sqlDB->execute_dml($sql);
	
	if($res==0) {
		echo "失败";
	}else if($res == 1 ){
		echo "成功";
	}else if($res == 2) {
		echo "没有影响";
	}
	
	/* $_SESSION['student'][$s_ID]['s_ID'] = $s_ID;
	$_SESSION['student'][$s_ID]['Name'] = $Name;
	$_SESSION['student'][$s_ID]['IDcard'] = $IDcard;
	$_SESSION['student'][$s_ID]['Major'] = $Major;
	$_SESSION['student'][$s_ID]['sex'] = $sex; */
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