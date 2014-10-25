<!DOCTYPE HTML>
<!-- 使用HTML5规范，省略多余部分 -->
<html>
<head>
<link href="file/Style.Css" rel="stylesheet" type="text/css" />
<style>
	body{ text-align:center;}
	.login{
		background-image:url(file/bg_div_4.jpg);
		background-size:100% 100%;
		margin:0 auto;width:100%; 
		height:300px;
		border:1px solid 
	}
</style>
</head>
<body>
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
    <td class="css_col11"><strong><font color=#50691B>身信息及学号一旦录入不可修改！</font></strong></td>
  </tr>
</table>
<form name="login_f" method="post" action=""  onSubmit="return checklogin();">
	<div class = "login" align="center"  >
		<li><p align = "center" >学生学籍注册</li></p>
		<li><p>学生姓名：
		<input name = "Name" type = "text" id = "name"></p></li>
		<li><p>身份证：&nbsp;&nbsp;
		<input name = "IDcard" type = "text" id = "IDcard"></p></li>
		<li><p>学号：&nbsp;&nbsp;&nbsp;&nbsp;
		<input name = "s_ID" type = "text" id = "s_ID"></p></li>
		<li><p>性别：&nbsp;&nbsp;&nbsp;&nbsp;
		<input name = "sex" type = "text" id = "sex"></p></li>
		<li><p>专业：&nbsp;&nbsp;&nbsp;&nbsp;
		<input name = "Major" type = "text" id = "Major"></p></li>
		<li><p>确定注册：&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		<input name = "submit" type = "submit" value = "注册" >&nbsp;&nbsp;&nbsp;&nbsp;
		<input class="Renew" value="重 写" type="reset" />&nbsp;&nbsp;</p></li>
	</form>
	</div>
</body>
</html>