<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="zh-cn">
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8" />
	<title>ҳ</title>
	<meta name="keywords" content="ؼб" />
	<meta name="description" content="ҳ" />
	<link rel="stylesheet" type="text/css" href="" />
	<style type="text/css">
		div {
			text-align:center;
			margin:0 auto;

			font-size:36px;
		}
	
	</style>
	<script type="text/javascript"></script>
</head>
<body>
	<div>
		<?php
			session_start();

			$_SESSION['student']['S001']['name'] =1;
			$_SESSION['student']['S001']['age'];
			$_SESSION['student']['S001']['sex'];

			$_SESSION['student']['S002']['name'] = ;
			$_SESSION['student']['S002']['age'] = ;
			$_SESSION['student']['S002']['sex'] = ;

			foreach($_SESSION['student'] as $key=>$value){
				echo $_SESSION['student'][$key]['name'];
				echo $_SESSION['student'][$key]['age'];
				echo $_SESSION['student'][$key]['sex'];
			}
		?>
	<div>
</body>