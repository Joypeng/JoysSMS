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
	$s_ID = isset($_GET['s_ID'])?$_GET['s_ID']:"";
	$action = isset($_GET['action'])?$_GET['action']:'';
	if($user =='Admin'&&$action==''){?>
<table width="100%" border="0" cellpadding="1" cellspacing="1" class="css_table" bgcolor='#E1E1E1'>
			<?php foreach($_SESSION['student'] as $k1) { ?>
			<tr>
				<?php foreach($k1 as $k2=>$k3) {?>
				<td><?php if($k2=='s_ID') {echo "学号:" ;} else if($k2=='IDcard'){echo "身份证号:";}else if($k2=='sex'){echo "性别:";}else if($k2=='Name'){echo "姓名:";}else if($k2 =='Major'){echo "专业:";}; ?></td>
				<td><?php if($k2=='s_ID') $s_ID=$k3;  echo "$k3"; ?></td>
				<?php }?>
				<td><strong><a href="gra_check.php?s_ID=<?php echo $s_ID; ?>"><font color = "#0000FF">毕业</a></strong></td>
			</tr>
			<?php } ?>
</table>
<?php } else if ($action=='delete') {?>
<h1>该学生已经毕业，可以在历史记录中查询</h1>
<?php }else if($action=='log'){?>
<h1>历史记录页</h1>
  <table>
    <?php if(isset($_SESSION['history'])){
		foreach($_SESSION['history'] as $h1) { ?>
	<tr>
      <?php foreach($h1 as $h2=>$h3) { ?>
      <td><?php if($h2=='s_ID') {echo "学号:" ;} else if($h2=='IDcard'){echo "身份证:";}else if($h2=='sex'){echo "性别:";}else if($h2=='Name'){echo "姓名:";}if($h2=='Major') {echo "专业:" ;}; ?></td>
      <td><?php  if($h2=='s_ID') $s_ID=$h3; echo "$h3"; ?></td>
      <?php  }}} ?>
  </table>
  <?php }?>
</body>
</html>