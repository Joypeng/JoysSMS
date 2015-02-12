<?php
if(isset($_POST['Query'])){

		$search=$_POST['Query'];//获取查询信息
	
		header("location:stu_Query.php?search=".$search."&action=search");
	}
	else
		header("HTTP/1.0 404 Not Found");
?>