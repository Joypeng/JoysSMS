<!DOCTYPE HTML>
<!-- 使用HTML5规范，省略多余部分 -->
<html>
<head>
<link href="file/Style.Css" rel="stylesheet" type="text/css" />
</head>
<body>
<table width="100%" border="0" cellpadding="1" cellspacing="1" class="css_table" bgcolor='#E1E1E1'>
<?php
	session_start();
	$user = isset($_SESSION['user'])?$_SESSION['user']:'';
	if($user =='Admin'){
		if(isset($_SESSION['student'])){
			foreach($_SESSION['student'] as $k1) { 
			echo "<tr>";
		
			foreach($k1 as $k2=>$k3) {
			echo "<td>" ;
			if($k2=='s_ID') {echo "学号:" ;} else if($k2=='IDcard'){echo "身份证号:";}else if($k2=='sex'){echo "性别:";}else if($k2=='Name'){echo "姓名:";}else if($k2 =='Major'){echo "专业:";}; 
			echo "</td>";
			echo "<td>";
			if($k2=='s_ID') $s_ID=$k3;  echo "$k3"; 
			echo "</td>";
			}
		}
	}
}
?>
</table>
</body>
</html>