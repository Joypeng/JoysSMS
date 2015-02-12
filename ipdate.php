<?php
	require_once 'SqlDB.php';
	
	if(isset($_POST['s_ID'])){
	$s_ID = $_POST['s_ID'];
	
	$Name = $_POST['Name'];
	$sex = $_POST['sex'];
	$IDcard = $_POST['IDcard'];
	$Major = $_POST['Major'];

	$sqlDB = new SqlDB();
	
	mysql_select_db("student");
	mysql_query("set names utf8");
	$sql = "delete from reg where(stuid='".$s_ID."')";
	$sqlDB->execute_dml($sql);
	//添加进数据库表中
	$sql = "insert into reg (stuid,nname,sex,idcard,subject) values ('".$s_ID."','".$Name."','".$sex."','".$IDcard."','".$Major."');";
	$res = $sqlDB->execute_dml($sql);
	//用于写代码时查错，可以删除
	if($res==0) {
		echo "失败";
	}else if($res == 1 ){
		echo "成功";
	}else if($res == 2) {
		echo "没有影响";
	}

	header("location:stu_Update.php?action=lookx&i=2&s_ID=".$s_ID);
	}else{
		include('404.html');
	}
?>