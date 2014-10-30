<!DOCTYPE HTML>
<!-- 使用HTML5规范 -->
<html>
<head>
	<title>Login Page</title>
<style>
	body{ text-align:center;padding-top:50px;background-image:url(file/bg_8.jpg);}
	.login{
		padding-top: 10px;
		background-image:url(file/bg_div_4.jpg);
		margin:0 auto;width:400px; 
		height:150px;
		border:1px solid 
	}
</style>
<script type="text/javascript">
	function checklogin()
	{
	  if(document.login_f.username.value=='')
		{
			alert('请输入帐户');
			document.login_f.username.focus();
			return false
		}
	  if (document.login_f.password.value=='')
	   {
	   		alert('请输入密码');
			document.login_f.password.focus();
			return false
	   }
	}
</script>
</head>
<body >
	<?php 
		if($_GET){
			$loginState = $_GET['login'];
		}else{
			$loginState = null;
		}
	?>

	<h1 >Welcome to JOYS Student Management System</h1>
	<h1>欢迎进入JOYS学生管理系统</h1>

	<hr/>
	

	<div class = "login" align="center"  >
		<form name="login_f" method="post" action="loginCheck.php"  onSubmit="return checklogin();">
			<li><p>ManageID：
			<input name = "userName" type = "text" id = "username"></p></li>
			<li><p>PassWord：
			<input name = "passWord" type = "password" id = "password"></p></li>
			<li><p>管理员登录：&nbsp;&nbsp;&nbsp;
			<input name = "submit" type = "submit" value = "登录" >&nbsp;&nbsp;
			<input class="Renew" value="重 写" type="reset" />&nbsp;&nbsp;</p></li>
		</form>
		<!--
		<form name="login_e" method="post" action="loginCheck.php">
			<li><p>免登陆查询（仅限学生）：
			<input type = "submit" name = "Login_undo" value = "进入" >&nbsp;&nbsp;</p></li>
		</form>	
		-->
		<?php if($loginState == "relog"){?>
		<label>登录失败，请重新登录</label>
		<?php }?>
	</div>
	<hr/>
	<small>JOYS Student Management System 1.0<br/>Developers:JunWei Peng</small>
	
</body>
</html>