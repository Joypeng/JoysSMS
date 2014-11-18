<!DOCTYPE HTML>
<!-- 使用HTML5规范，省略多余部分 -->
<html>
<head>
<?php 
	session_start();
	$user = isset($_SESSION['user'])?$_SESSION['user']:'';
	$action = isset($_GET['action'])?$_GET['action']:'';
?>

<link href="file/Style.Css" rel="stylesheet" type="text/css" />
</head>
<body>
<?php if($user =='Admin'&&$action==''){ ?>
<table width="100%" border="0" cellpadding="3" cellspacing="1" class="css_table" bgcolor='#E1E1E1'>
  <tr class="css_menu">
    <td colspan="3">
      <table width="100%" border="0" cellpadding="4" cellspacing="0" class="css_main_table">
        <tr>
          <td class="css_main">注意</td>
        </tr>
      </table>
    </td>
  </tr>
  <tr>
    <td class="css_col11"><strong><font color=#50691B>一旦确定不可更改</font></strong></td>
  </tr>

<form name = "check_stu" method="post" action="check_stu.php">
<td><lable>请输入修改学生的学号:
<input name = "c_ID" type="text" >
<input name = "submit" type="submit" value="确定">
</lable></td>
</form>
</table>
<?php }else if ($action == 'change') {?>
<form name="login_f" method="post" action="update_check.php">
	<div class = "login" align="center">
	<lable>可以修改的项目：</lable>
	<input name = "c_ID" type="hidden" value = "<?php echo $_GET['c_ID'];?>">
		<li><p>学生姓名：
		<input name = "Name" type = "text" id = "Name"></p></li>
		<li><p>专业：&nbsp;&nbsp;&nbsp;&nbsp;
		<input name = "Major" type = "text" id = "Major"></p></li>
		<li>
			<p>性别：&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			<!-- <input name = "sex" type = "text" id = "sex"></p></li> -->
			<input type="radio" name="sex" value="男"/>男&nbsp;&nbsp;&nbsp;&nbsp;
	    	<input type="radio" name="sex" value="女"/>女&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</br>
	    </li>
		<li><p>确定修改：&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		<input name = "submit" type = "submit" value = "确定" >&nbsp;&nbsp;&nbsp;&nbsp;
		<input class="Renew" value="重写" type="reset" />&nbsp;&nbsp;</p></li>
	</form>
	</div>
<?php }else if ($action == 'enchange') {
	# code...
	echo "<h1>已经改变</h1>";
}?>
</body>
</html>