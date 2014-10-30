<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="zh-cn">
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8" />
	<title>网页标题</title>
	<meta name="keywords" content="关键字列表" />
	<meta name="description" content="网页描述" />
	<link rel="stylesheet" type="text/css" href="" />
	<style type="text/css">
		* {
			text-align:center;
			margin:0 auto;	
			font-size:36px;

			border: 1px solid red;
		}

		#msg {
			color:red;
		}

	</style>
	<script type="text/javascript"></script>
</head>

<body>
	<div>
		<?php session_start(); ?>
		<!--  Menu Started -->
		<ul>
			<li>Opion</li>
			<li><a href="test1.php?action=list">list</a></li>
			<li><a href="test1.php?action=add">add</a></li>
			<li><a href="test1.php?action=log">history</a></li>
		</ul>
		<br /><br /><br />
		
		<?php 
			$action = isset($_GET['action'])?$_GET['action']:'home'; 
			
			//  Home Started 
			if($action == 'home'){
				echo 'Welcome to, shopping centre!';

			/**
			**list Started, here to show the list that shopped 
			**/
			} else if($action == 'list'){ 
				if(!(isset($_SESSION['shoplist']) && count($_SESSION['shoplist'])>0)){
					echo 'No items selected!';
					return -1;
				}
		?>
				<table>
					<caption>Shopping List</caption>
					<?php foreach($_SESSION['shoplist'] as $key=>$value){?>
					<tr>
						<td><?php echo $key;?><td>
						<td><?php echo $value;?><td>
						<td><a href="test1.php?action=edit&item=<?php echo $key;?>&value=<?php echo $value;?>">edit</a><td>
						<td><a href="test1.php?action=delete&item=<?php echo $key;?>&value=<?php echo $value;?>">delete</a><td>
					</tr>
					<?php } ?>
					<tr>
						<td colspan="8" id="msg"><?php echo isset($_GET['msg'])?$_GET['msg']:''; ?></td>
					</tr>
				</table>
		<?php 

			/**
			**add Started, here to add the item and its numbers to the cart 
			**/
			} else if($action == 'add'){
		?>
				<form action="insert.php" method="post">
					Item<input type="text" name="item"/>
					Amount<input type="text" name="num"/>
					<input type="submit" />
				</form>
		<?php 
			/**
			**log Started, here to show the logged history of items that removed from the cart
			**/
			} else if($action == 'log'){
				if(!(isset($_SESSION['log']) && count($_SESSION['log'])>0)){
					echo 'No log info available!';
					return -1;
				}
		?>
				<table>
					<caption>Log Info</caption>
					<?php foreach($_SESSION['log'] as $key=>$value){?>
					<tr>
						<td><?php echo $key;?><td>
						<td><?php echo $value;?><td>
					</tr>
					<?php } ?>
				</table>
		<?php 

			/**
			**edit Started, here to change the item's number
			**/
			} else if($action == 'edit'){
		?>
				<form action="update.php" method="post">
					<label><?php echo $_GET['item']; ?></label>
					<input type="hidden" name="item" value="<?php echo $_GET['item']; ?>" />
					<input type="text" name="num" value="<?php echo $_GET['value']; ?>"/>	
					<input type="submit" />
				</form>
		<?php
			/**
			**delete Started, here to delete the item and its numbers from the cart, as well as loging the info to 
			**the $_SESSION['log']
			**/
			} else if($action == 'delete'){
		?>
			<form action="remove.php" method="post">
					<label>Are you sure to remove the <?php echo $_GET['item']; ?> from shopping cart?</label>
					<input type="hidden" name="item" value="<?php echo $_GET['item']; ?>" />
					<input type="hidden" name="num" value="<?php echo $_GET['value']; ?>"/>	
					<a href="test1.php?action=list">No, Thanks!</a>
					<input type="submit" value="Yes"/>
			</form>
		<?php 
			} 
		?>
	</div>
</body>
</html>
