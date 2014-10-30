<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="zh-cn">
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8" />
	<title>新网页标题</title>
	<meta name="keywords" content="关键字列表" />
	<meta name="description" content="网页描述" />
	<link rel="stylesheet" type="text/css" href="" />
	<style type="text/css"></style>
	<script type="text/javascript"></script>
</head>
<body>
	<?php session_start(); ?>
	<?php
		$user = $_GET['user'];
		$empno = isset($_GET['empno'])?$_GET['empno']:"";
		$idcard = isset($_GET['idcard'])?$_GET['idcard']:"";

	?>
	<h1>欢迎<?php echo $user; ?>来到本页面!!</h1>
	<div class="c1">
	<?php 
	if($user == "employee") {
		?>
	 <div class="c2">
	  <h1><a href="enter.php?action=add&user=employee">点击填写或更改您的信息</a></h1>
	  <h1><a href="enter.php?action=look&user=employee&empno=<?php echo isset($empno)?$empno:"";?>&idcard=<?php echo isset($idcard)?$idcard:"";?>">查看信息</a></h1>
	  <?php
			$action = isset($_GET['action'])?$_GET['action']:'home';
		if($action == 'home'){ 
			?>
	     <span>啦啦啦啦，没有数据</span>
	  <?php 
			}else if($action == 'add') {
	  ?>
		 <form action="add.php" method="post">
		  员工号:<input type="text" size="10" name="empno"/></br>
	      姓名:<input type="text" name="nname"/></br>
	      <input type="radio" name="sex" value="男"/>男
	      <input type="radio" name="sex" value="女"/>女</br>
	      身份证:<input type="text" name="idcard" size="18"/></br>
		  <input type="submit" value="提交" />
		 </form>
	  <?php 
		  }else if($action=='look') {
			if(!(isset($_SESSION['look']) && count($_SESSION['look'])>0)){
					echo '没有信息';
					return -1;
					}
	  ?>
	   <table>
		<?php if($empno!=""){ ?>
		<caption>员工信息</caption>
		<?php
			foreach($_SESSION['look'][$empno] as $k2=>$k3) {
		?>
		<tr>
		    <td>
			<?php 
					echo "$k2 $k3";
			?>
			<td>
		</tr>
		<?php 
				}
			}
		?>
		<tr>
			<td id="msg"><?php echo isset($_GET['msg'])?$_GET['msg']:'';  ?></td>
		</tr>
		<?php if($empno!="") {?>
		<h1><a href="enter.php?user=employee&action=update&empno=<?php echo $empno; ?>&idcard=<?php echo $idcard; ?>">更改</h1>
		<?php } else {?>
		<h1>没有修改信息</h1>
	<?php 
		}
			} else if($action='update') {
	?>
		<form action="updatee.php" method="post">
		 <label>修改的员工号为<?php  echo $empno; ?></label>
		 <input type="hidden" name="empno" value="<?php echo $empno; ?>">
		 <input type="hidden" name="idcard" value="<?php echo $idcard; ?>">
		 姓名:<input type="text" name="nname"/></br>
	     <input type="radio" name="sex" value="男"/>男
	     <input type="radio" name="sex" value="女"/>女</br>
		 <input type="submit" value="提交" />
		</form>
	<?php }?>
	 </div>
	<?php 
		} else if($user == "manager") {
	?>
	 <div class="c3">
		<?php $action=isset($_GET['action'])?$_GET['action']:"";?>
		<h1><a href="enter.php?user=manager&action=lookall">查看全部信息</a></h1>
		<h1><a href="enter.php?user=manager&action=log">历史记录</a></h1>
		<div>
		<?php if($action=='delete')
				echo "删除成功";
			else if($action == 'lookall') {
			if(isset($_SESSION['look'])){
			foreach($_SESSION['look'] as $k1) { 
			?>
		<tr>
		<?php	foreach($k1 as $k2=>$k3) { ?>
		<td><?php if($k2=='empno') {echo "员工号" ;} else if($k2=='idcard'){echo "身份证";}else if($k2=='sex'){echo "性别";}else if($k2=='nname'){echo "姓名";}; ?></td>
		<td><?php if($k2=='empno') $empno=$k3;  echo ":$k3"; ?></td>
		<?php  } ?>
		<?php //print_r($_SESSION);//echo $_SESSION['look'][$empno]['empno'];?>
		<span><a href="delete.php?user=manager&action=delete&empno=<?php echo $empno; ?>">删除</a></span>
		</tr><br/>
		<?php
				}
		} else {
		?>
		<h1>没有信息</h1>
		<?php } }else if($action == 'log') { 
			if(isset($_SESSION['histry'])){
			foreach($_SESSION['histry'] as $h1) { ?>
		<tr>
		<?php foreach($h1 as $h2=>$h3) { ?>
		<td><?php if($h2=='empno') {echo "员工号" ;} else if($h2=='idcard'){echo "身份证";}else if($h2=='sex'){echo "性别";}else if($h2=='nname'){echo "姓名";}; ?></td>
		<td><?php   echo ":$h3"; ?></td>
		<?php  } ?>
		</tr><br/>
		<?php }}else echo "没有信息";}?>
		</div>
	 </div>
	<?php 
			} else{
		 header('location:index.html');
	 }
	 ?>
	</div>
</body>
</html>