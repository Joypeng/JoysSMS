<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="zh-cn">
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8" />
	<title>登录页面</title>
	<meta name="keywords" content="关键字列表" />
	<meta name="description" content="网页描述" />
	<link rel="stylesheet" type="text/css" href="" />
	<style type="text/css">
		form {
			margin:0 auto;
			text-align:center;
		}

		label {
			color:red;
		}
	</style>
	<script type="text/javascript"></script>
</head>
<body>
	<?php 
		if($_GET){
			$loginState = $_GET['login'];
		}else{
			$loginState = null;
		}
	?>

	<form action="loginCheck.php" method="post">
		用户名<input type="text" name="user" />
		密码<input type="password" name="pass" />
		<input type="submit" value="提交" />
		<?php if($loginState == "relog"){?>
		<label>登录失败，请重新登录</label>
		<?php }?>
	</form>

</body>
</html>