<!DOCTYPE HTML>
<!-- HTML5标准 -->
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
<script type="text/javascript">
	function checkRegister()
	{
		var regExp=/(^\d{8}$)/;
		//var regExp2=/(^\d$)/;
		var chinese =/^[\u0391-\uFFE5]+$/;
		var regid = /(^\d{15}$)|(^\d{18}$)|(^\d{17}(\d|X|x)$)/; 
		
		
		if(!regExp .test (document.login_f.s_ID.value))
		{
			alert ("输入的必须全是数字!学号设为8位!");
			document.login_f.s_ID.focus();
			return false ;
		}
		if (document.login_f.Name.value=='')
	   {
	   		alert('必须输入姓名');
			document.login_f.Name.focus();
			return false
	   }
		// if(!chinese.test (document.login_f.Name.value))
		// {
			// alert('姓名必须为中文');
			// document.login_f.Name.focus();
			// return false
		// }
		
		if(!regid.test(document.login_f.IDcard.value))
		{ 
			alert( "身份证信息输入错误请重新输入（输入为15位或者18位，18位时最后一位可以是数字也可以是X）!"); 
			document.login_f.IDcard.focus();
			return false;
		} 
		
		
	  /* if(document.login_f.s_ID.value=='')
		{
		   		alert('必须输入学号');
				document.login_f.s_ID.focus();
				return false
		} */
	  
	  /* if (document.login_f.IDcard.value=='')
	   {
	   		alert('必须输入身份证号码');
			document.login_f.IDcard.focus();
			return false
	   } */
	   
	   if (document.login_f.Major.value=='')
	   {
	   		alert('必须输入专业');
			document.login_f.Major.focus();
			return false
	   }
	   
	   if(document.login_f.sex.value.length==0)
	   {
		  alert("请选择性别!");
		  return false;
		}
	}
</script>
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
    <td class="css_col11"><strong><font color=#50691B>一旦确定不可更改</font></strong></td>
  </tr>
</table>
<form name="login_f" method="post" action="addInform.php"  onSubmit="return checkRegister();">
	<div class = "login" align="center">
		<p align = "center" >学籍注册</p>
		<li><p>学号：&nbsp;&nbsp;&nbsp;&nbsp;
		<input name = "s_ID" type = "text" id = "s_ID" ></p></li>
		<li><p>学生姓名：
		<input name = "Name" type = "text" id = "Name"></p></li>
		<li><p>身份证：&nbsp;&nbsp;
		<input name = "IDcard" type = "text" id = "IDcard"></p></li>
		<li><p>专业：&nbsp;&nbsp;&nbsp;&nbsp;
		<input name = "Major" type = "text" id = "Major"></p></li>
		<li>
			<p>性别：&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			<!-- <input name = "sex" type = "text" id = "sex"></p></li> -->
			<input type="radio" name="sex" value="男"/>男&nbsp;&nbsp;&nbsp;&nbsp;
	    	<input type="radio" name="sex" value="女"/>女&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</br>
	    </li>
		<li><p>确定注册：&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		<input name = "submit" type = "submit" value = "确定" >&nbsp;&nbsp;&nbsp;&nbsp;
		<input class="Renew" value="重写" type="reset" />&nbsp;&nbsp;</p></li>
	</form>
	</div>
 	<?php
	$action = isset($_GET["action"])?$_GET["action"]:"";
	if($action == "over")
	{
		echo "完成注册！";
	}
	?> 
</body>
</html>