<html>
<head>
<meta http-equiv="Content-Type" content="text/html;charset=UTF-8" />
<title></title>
<?php 
	
	//设置报警级别
	error_reporting(E_ALL ^ E_DEPRECATED);
//*************************************************输出表中全部信息**************************************************
	function show_tab_info($table_name){

		$conn = mysql_connect("localhost","root","");
		if(!$conn){
			die(mysql_error());
		}

		mysql_select_db("student",$conn);
		mysql_query("set names utf8");
		$sql="select * from $table_name";
		$res = mysql_query($sql,$conn);

		//多少行$rows，多少列$colums
		$rows = mysql_affected_rows($conn);
		$colums = mysql_num_fields($res);

		if($rows!=0){
		echo "<table border='1'>";
		echo "<tr>";
		
		//表头
		for($i=0;$i<$colums;$i++){
			$field_name = mysql_field_name($res,$i);
			if($field_name=='stuid')
				echo "<th>学号</th>";
			if($field_name=='nname')
				echo "<th>姓名</th>";
			if($field_name=='sex')
				echo "<th>性别</th>";
			if($field_name=='idcard')
				echo "<th>身份证</th>";
			if($field_name=='subject')
				echo "<th>专业</th>";
		}
		echo "</tr>";
		//表中数据
			while($row=mysql_fetch_row($res)){
			echo "<tr>";
			
			for($i=0;$i<$colums;$i++){

				echo "<td>$row[$i]</td>";

			}
			}
			echo "<table>";
			mysql_free_result($res);
		}else
			echo "<h1>没有信息</h1>";
	}
	
	
	//毕业操作
	//*************************************************输出表中全部信息**************************************************
	function show_tab_gra($table_name){

		$conn = mysql_connect("localhost","root","");
		if(!$conn){
			die(mysql_error());
		}

		mysql_select_db("student",$conn);
		mysql_query("set names utf8");
		$sql="select * from $table_name";
		$res = mysql_query($sql,$conn);

		//多少行$rows，多少列$colums
		$rows = mysql_affected_rows($conn);
		$colums = mysql_num_fields($res);

		if($rows!=0){
		echo "<table border='1'>";
		echo "<tr>";
		
		//表头
		for($i=0;$i<$colums;$i++){
			$field_name = mysql_field_name($res,$i);
			if($field_name=='stuid')
				echo "<th>学号</th>";
			if($field_name=='nname')
				echo "<th>姓名</th>";
			if($field_name=='sex')
				echo "<th>性别</th>";
			if($field_name=='idcard')
				echo "<th>身份证</th>";
			if($field_name=='subject')
				echo "<th>专业</th>";
		}
		echo "</tr>";
		//表中数据
			while($row=mysql_fetch_row($res)){
			echo "<tr>";
			
			for($i=0;$i<$colums;$i++){

				echo "<td>$row[$i]</td>";

			}
			if($table_name=='reg')
				echo "<td><a href='delete.php?s_ID=$row[0]'>删除</a></td>";

			echo "</tr>";
			}
			echo "<table>";
			mysql_free_result($res);
		}else
			echo "<h1>没有信息</h1>";
	}

	
	
	
	
	//查询，刚刚添加的数据 如果i=1则为输入信息返回，i=2为查询
	function show_tab_one($table_name,$s_ID,$i){

		$conn = mysql_connect("localhost","root","");
		if(!$conn){
			die(mysql_error());
		}

		mysql_select_db("student",$conn);
		mysql_query("set names utf8");
		if($i==1)
		$sql="select * from $table_name where(stuid='$s_ID')";
		if($i==2)
		$sql="select * from $table_name where(stuid='$s_ID' or nname='$s_ID' or sex='$s_ID' or idcard='$s_ID' or subject='$s_ID')";
		$res = mysql_query($sql,$conn);

		//多少行$rows，多少列$colums
		$rows = mysql_affected_rows($conn);
		$colums = mysql_num_fields($res);

		if($rows!=0){
		echo "<table border='1'>";
		echo "<tr>";
		
		//表头
		for($i=0;$i<$colums;$i++){
			$field_name = mysql_field_name($res,$i);
			if($field_name=='stuid')
				echo "<th>学号</th>";
			if($field_name=='nname')
				echo "<th>名字</th>";
			if($field_name=='sex')
				echo "<th>性别</th>";
			if($field_name=='idcard')
				echo "<th>身份证</th>";
			if($field_name=='subject')
				echo "<th>专业</th>";
		}
		echo "</tr>";
		//表中数据
			while($row=mysql_fetch_row($res)){
			echo "<tr>";
			
			for($i=0;$i<$colums;$i++){

				echo "<td>$row[$i]</td>";

			}

			echo "</tr>";
			}
			echo "<table>";
			mysql_free_result($res);
		}else{
			echo "<h1>没有信息</h1>";
			return 1;
		}
	}

?>
</head>
<body>
</body>
</html>