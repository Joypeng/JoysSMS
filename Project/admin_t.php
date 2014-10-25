<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="zh-cn">
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8" />
	<title>管理页面</title>
	<meta name="keywords" content="关键字列表" />
	<meta name="description" content="网页描述" />
	<link rel="stylesheet" type="text/css" href="" />
	<style type="text/css">
		div {
			margin:0 auto;
			text-align:center;
		}

		table {
			margin:0 auto;
			font-size: 20px;
			border: 5px solid black;
		}

		td {
			border: 5px solid pink;
		}

		a {
			font-size: 24px;
			margin:50px;
		}

		#logout {
			text-decoration:none;
			font-size:16px;
		}

	</style>
	<script type="text/javascript"></script>
</head>
<body>
	<?php 
		$user = $_GET['user'];

		$userInfo =array("姓名" =>"你的名字", "学号" =>"你的学号", 
								"专业" =>"你的专业","班级" =>"你的班级");
	?>

	<div>
		<h1>欢迎您，<?php echo $user; ?>!!<a id="logout" href="login.php">登出</a></h1>

		<!--       代码开始          -->
		<?php if($user == "manager") { ?>
		<a href="show.php">查看订单</a>
		<a href="edit.php">修改订单</a>
		<a href="insert.php">添加订单</a>
		<a href="delete.php">删除订单</a>
		<?php } else if($user == "student") { ?>
		<table>
			<?php foreach($userInfo as $key=>$value){ ?>
			<tr>
				<td><?php echo $key; ?></td>
				<td><?php echo $value; ?></td>
			</tr>
			<?php }?>
		</table>
		<?php } else {
						header('location:login.php');
				   }
		?>
		<!--       代码结束         -->

		<?php $userInfo = null; ?>

	</div>
</body>
</html>
