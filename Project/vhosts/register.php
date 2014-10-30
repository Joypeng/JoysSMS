<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="zh-cn">
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8" />
	<title>登录页面</title>
	<meta name="keywords" content="关键字列表" />
	<meta name="description" content="网页描述" />
	<link rel="stylesheet" type="text/css" href="" />
	<style type="text/css">
	body{background-image:url(004.jpg);margin:auto auto; background-position:center;background-repeat: no-repeat;background-attachment: fixed;color:white;}
	.b0{text-align:right;margin-top:250px; margin-right:330px;}
	.b1{font-size:24px;width:220px;float:right;margin-right:300px;}
	.b2{}
	</style>
	<script type="text/javascript"></script>
</head>
<body>
	<?php 
		if($_GET){
			$re = $_GET['register'];
		}else{
			$re = null;
		}
	?>
	<h1 class="b0">用户登录界面</h1>
	<fieldset class="b1">
		<form action="affirm.php" method="post" class="b3">
			<input type="radio" name="user" value="employee" checked/>员工
			<input type="radio" name="user" value="manager"/>管理员
			</br>
			密码:<input type="password" name="pass" /></br>
			　　　  　　  　<input type="submit" value="提交" />
		</form>
		<?php if($re == "restart"){?>
		<label>登录失败，请重新登录</label>
		<?php }?>
	</fieldset>
</body>
</html>