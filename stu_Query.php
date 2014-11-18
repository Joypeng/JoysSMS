<!DOCTYPE HTML>
<!-- 使用HTML5规范，省略多余部分 -->
<html>
<head>
<link href="file/Style.Css" rel="stylesheet" type="text/css" />
</head>
<body>
<?php 
	session_start();
	$user = isset($_SESSION['user'])?$_SESSION['user']:'';
	$action = isset($_GET['action'])?$_GET['action']:'none';
?>
<?php if($action == 'none'&&$user =='Admin'){ ?>
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
	<form name="login_f" method="POST" action="search.php">
	<li>输入：
	<input name = "search" type = "text" >
	<input type = "submit"  name = "q_submit" value = "查询"></li>
	</form>
	</td>
  </tr>
</table>


<?php }else if($action == 'q_error'){ ?>
<h2>没有查询到数据</h2>

<?php }else if($action =='search'){?>
<table>
	<?php foreach($_SESSION['search'] as $s=>$se) { ?>
	<tr>
		<?php	foreach($_SESSION['student'][$se] as $k2=>$val) { ?>
		<td><?php if($k2=='s_ID') {echo "学号:" ;} else if($k2=='IDcard'){echo "身份证号:";}else if($k2=='sex'){echo "性别:";}else if($k2=='Name'){echo "姓名:";}else if($k2 =='Major'){echo "专业:";};?> </td>
		<td><?php echo "$val";?></td>
		<?php }?>
	</tr>
	<?php }?>
</table>
<?php }?>
</body>
</html>