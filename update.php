<?php
	if(isset($_POST['search2'])){
		$search2 = $_POST['search2'];	
		header("location:stu_Update.php?search2=".$search2."&action=ipdate");
	}
	else{
		include('404.html');
	}
?>