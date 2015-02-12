<?php

	//数据库查询删除操作
	class SqlDB{
		private $conn;
		private $host = "localhost";
		private $u = "root"; 
		private $password = "";
		//private $db = ""//定义的数据库名
		function SqlDB(){
			$this->conn = mysql_connect($this->host,$this->u,$this->password);//链接数据库
			if(!$this->conn){
				die("链接数据库失败".mysql_error());//链接失败
			}
			//mysql_select_db()  设定与指定的连接标识符所关联的服务器上的当前激活数据库。如果没有指定连接标识符，则使用上一个打开的连接。如果没有打开的连接，本函数将无参数调用 mysql_connect()  来尝试打开一个并使用之。 每个其后的 mysql_query()  调用都会作用于活动数据库。 
			//mysql_select_db($this->db,$this->conn);
			//数据库为utf-8码
			//mysql_query("set names utf8");
		}
		//完成查询
		public function execute_dql($sql){

			$res = mysql_query($sql) or die(mysql_error());

			return $res;
		}
		//完成更新，删除，添加
		public function execute_dml($sql){
			
			$a = mysql_query($sql,$this->conn);
			if(!$a){
				return 0;//失败
			}else{
				if(mysql_affected_rows($this->conn)>0){
				return 1;//表示成功
				}else
					return 2;//表示没有影响行数
			}
		}
	}
?>