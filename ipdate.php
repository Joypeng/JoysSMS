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
	//��ӽ����ݿ����
	$sql = "insert into reg (stuid,nname,sex,idcard,subject) values ('".$s_ID."','".$Name."','".$sex."','".$IDcard."','".$Major."');";
	$res = $sqlDB->execute_dml($sql);
	//����д����ʱ�������ɾ��
	if($res==0) {
		echo "ʧ��";
	}else if($res == 1 ){
		echo "�ɹ�";
	}else if($res == 2) {
		echo "û��Ӱ��";
	}

	header("location:stu_Update.php?action=lookx&i=2&s_ID=".$s_ID);
	}else{
		include('404.html');
	}
?>