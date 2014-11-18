<?php
	session_start();
	
	$search=$_POST['search'];
	unset($_SESSION['search']);

	/*echo '<pre>';
	var_dump($_POST['search']);
	return ;*/

	foreach ($_SESSION['student'] as $k1 => $value) {
		# code...
		if($search==$_SESSION['student'][$k1]['s_ID']||$search==$_SESSION['student'][$k1]['IDcard']||$search==$_SESSION['student'][$k1]['Name']||$search==$_SESSION['student'][$k1]['sex']||$search==$_SESSION['student'][$k1]['Major']){
			$i = 1;
			$stu = $_SESSION['student'][$k1]['s_ID'];
			$_SESSION['search'][$stu] = $stu;
		}
	}
	if(isset($i))
		header("location:stu_Query.php?user=Admin&action=search");
	else
	 	header("location:stu_Query.php?user=Admin&action=q_error");
