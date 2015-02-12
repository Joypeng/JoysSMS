<!DOCTYPE HTML>
<!-- 使用HTML5规范，省略多余部分 -->
<html>
<head>
<link href="file/Style.Css" rel="stylesheet" type="text/css" />
</head>
<body>
<?php
$action = isset($_GET["action"])?$_GET["action"]:"";
	if($action =='log') { 
		echo "<h1>历史信息</h1>";
		if(isset($_GET['i']))
			echo "<h3>删除成功</h3>";
		require_once('outputDB.php');

		show_tab_info('history');
	}?>
</body>
</html>