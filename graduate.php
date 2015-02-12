<!DOCTYPE HTML>
<!-- 使用HTML5规范，省略多余部分 -->
<html>
<head>
<link href="file/Style.Css" rel="stylesheet" type="text/css" />
</head>
<body>
<?php
	$action = isset($_GET["action"])?$_GET["action"]:"";
	if($action==""){
	require_once('outputDB.php');

	show_tab_gra('reg');
	}else if($action=='delete'){
		echo "<h3>完成</h3>";
	}
	
	?>
</body>
</html>