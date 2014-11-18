<?php
	session_start();
	$c_ID = $_POST['c_ID'];
	if($c_ID == $_SESSION['student'][$c_ID]['s_ID'])
	{
		header("location:stu_Update.php?action=change&c_ID=".$c_ID);
	}
