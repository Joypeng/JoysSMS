<!DOCTYPE HTML>
<!-- ʹ��HTML5�淶��ʡ�Զ��ಿ�� -->
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
          <td class="css_main">ע��</td>
        </tr>
      </table>
    </td>
  </tr>
  <tr>
    <td class="css_col11"><strong><font color=#50691B>����Ϣ��ѧ��һ��¼�벻���޸ģ�</font></strong></td>
  </tr>
</table>
<form name="login_f" method="post" action=""  onSubmit="return checklogin();">
	<div class = "login" align="center"  >
		<li><p align = "center" >ѧ��ѧ��ע��</li></p>
		<li><p>ѧ��������
		<input name = "Name" type = "text" id = "name"></p></li>
		<li><p>���֤��&nbsp;&nbsp;
		<input name = "IDcard" type = "text" id = "IDcard"></p></li>
		<li><p>ѧ�ţ�&nbsp;&nbsp;&nbsp;&nbsp;
		<input name = "s_ID" type = "text" id = "s_ID"></p></li>
		<li><p>�Ա�&nbsp;&nbsp;&nbsp;&nbsp;
		<input name = "sex" type = "text" id = "sex"></p></li>
		<li><p>רҵ��&nbsp;&nbsp;&nbsp;&nbsp;
		<input name = "Major" type = "text" id = "Major"></p></li>
		<li><p>ȷ��ע�᣺&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		<input name = "submit" type = "submit" value = "ע��" >&nbsp;&nbsp;&nbsp;&nbsp;
		<input class="Renew" value="�� д" type="reset" />&nbsp;&nbsp;</p></li>
	</form>
	</div>
</body>
</html>