<!DOCTYPE HTML>
<!-- 使用HTML5规范，省略多余部分 -->
<html>
<head>
<link href="file/Style.Css" rel="stylesheet" type="text/css" />
</head>
<body>
<?php
	$action = isset($_GET["action"])?$_GET["action"]:"";
	if($action=='yep'){
?>
	<h2>更新</h2>
	<form  action="update.php" method="post">
    输入需要更改的学号：
    <input type="text" name="search2" maxlength="8" />
    <input type="submit" value="查找学号是否存在"/>
  </form>
<?php }else if($action=='ipdate'){
	echo "<h2>显示信息并提供更改</h2>";
			require_once 'outputDB.php';
			if(isset($_GET['search2']))
				$search2 = $_GET['search2'];
			$show = show_tab_one('reg',$search2,1);
			
			if($show!=1){
				//获取idcard
				require_once'SqlDB.php';
				$sqlDB = new SqlDB();
				mysql_select_db('student');
				mysql_query("set names utf8");
				
				$sql="select * from reg where (stuid='".$search2."')";
				$res = $sqlDB->execute_dql($sql);
				
				if($row = mysql_fetch_assoc($res))
					$idcard = $row['idcard'];
				mysql_free_result($res);
	?>
  <form action="ipdate.php" method="post" >
    <input type="hidden"  name="s_ID" value="<?php echo $search2; ?>"/>
    </br>
    </br>
    姓　名:
    <input type="text" name="Name" maxlength="8"/>
    </br>
    </br>
    性　别:
    <input type="radio" name="sex" value="男"/>
    男　　
    <input type="radio" name="sex" value="女"/>
    女
    <input type="hidden" name="IDcard" value="<?php echo $idcard; ?>"/>
    </br>
    </br>
    专业:
    <input type="text" name="Major" maxlength="8" />
    </br>
    </br>
    <input type="submit" value="提交" />
  </form>
<?php }}else if($action=='lookx') {
	?>
  <?php 
		$i=$_GET['i'];//获取i如果i=1为添加信息的，i=2为更改信息
		if($i==1) {
			$res = $_GET['return'];
			if($res == 0)
				echo "<h2>添加信息失败，存在原信息为下表！只能进行更改操作。</h2>";
			else if($res == 1)
				echo "<h2>添加成功，信息为下表</h2>";
		}else if($i==2){
			echo "<h2>更改成功，信息为下表</h2>";
		}
		if(isset($_GET['s_ID'])){
			$s_ID = $_GET['s_ID'];
			
			require_once'outputDB.php';

			show_tab_one('reg',$s_ID,1);
		}
}
		?>
</body>
</html>