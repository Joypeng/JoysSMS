<html>
<head>
<meta http-equiv="Content-Type" content="text/html;charset=UTF-8" />
<title></title>
</head>
<body>
<?php
	require_once'SqlDB.php';
	if(isset($_GET['s_ID'])){

	$s_ID=$_GET['s_ID'];
	
	
	$sqlDB = new SqlDB();

	mysql_select_db('student');
	mysql_query("set names utf8");

	$sql="select * from reg where(stuid='$s_ID')";
	$res = $sqlDB->execute_dql($sql);

	if($row = mysql_fetch_assoc($res)){
		$nname = $row['nname'];
		$sex = $row['sex'];
		$idcard = $row['idcard'];
		$subject = $row['subject'];
		echo "$nname  $sex   $idcard    $subject";
		$sql = "insert into history(stuid,nname,sex,idcard,subject) values('".$s_ID."','".$nname."','".$sex."','".$idcard."','".$subject."');";
		$res = $sqlDB->execute_dml($sql);
		
		$sql="delete from reg where(stuid='$s_ID')";

		$res = $sqlDB->execute_dml($sql);
		
	}

	mysql_free_result($res);
	header('location:graduate.php?i=right&action=delete');
	}else{
		include('404.html');
	}
		
	
?>
</body>
</html>