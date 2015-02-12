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
?>


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
    <td class="css_col11"><strong><font color=#50691B>你可以输入姓名、学号、系等关键字</font></strong></td>
  </tr>
</table>
<table width="100%" border="0" cellpadding="3" cellspacing="1" class="css_table" bgcolor='#E1E1E1'>
  <tr class="css_menu">
    <td colspan="3">
      <table width="100%" border="0" cellpadding="4" cellspacing="0" class="css_main_table">
        <tr>
          <td class="css_main">查询</td>
        </tr>
      </table>
    </td>
  </tr>
  <tr>
    <td class="css_col11">
	<form name="login_f" method="post" action="search.php" >
	<li>输入：
	<input name = "Query" type = "text" id = "Query">
	<input type = "submit"  name = "q_submit" value = "查询"></li>
	</form>
	</td>
  </tr>
</table>
<?php }else if($action=='search'){
		
		$search = $_GET['search'];
		require_once'outputDB.php';
		show_tab_one('reg',$search,2);
		}
?>
</body>
</html>