<!DOCTYPE HTML>
<!-- 使用HTML5规范 -->
<html>
<head>
<title>left</title>
<link href="file/main.css" rel="stylesheet" type="text/css" />
<script language="JavaScript" type="text/javascript" src="file/main.js"></script>
</head>

<body>
<div id="content">
  <div id="left">
    <div class="left_title"><a onclick="pucker_show('submenu_',1,'dis','block')" style="CURSOR:pointer;"> 学生注册</a></div>
    <ul id="submenu_1" class="dis">
      <li class="left_link" onClick="DoLocation(this)"><a href="stu_reg.php" target="mainFrame"> 按学号注册</a></li>
    </ul>
    <div class="left_title"><a onclick="pucker_show('submenu_',2,'dis','block')" style="CURSOR:pointer;"> 学生检索</a></div>
    <ul id="submenu_2" class="dis">
      <li class="left_link" onClick="DoLocation(this)"><a href="traversal.php" target="mainFrame"> 列出所有学生</a></li>
	  <li class="left_link" onClick="DoLocation(this)"><a href="stu_Query.php" target="mainFrame"> 关键字查询</a></li>
    </ul>
    <div class="left_title"><a onclick="pucker_show('submenu_',3,'dis','block')" style="CURSOR:pointer;"> 信息修改</a></div>
    <ul id="submenu_3" class="dis">
      <li class="left_link" onClick="DoLocation(this)"><a href="" target="mainFrame"> 学生个人信息修改</a></li>
    </ul>
    <div class="left_title"><a onclick="pucker_show('submenu_',4,'dis','block')" style="CURSOR:pointer;"> 学生毕业</a></div>
    <ul id="submenu_4" class="dis">
      <li class="left_link" onClick="DoLocation(this)"><a href=""  target="mainFrame"> 毕业操作</a></li>
    </ul>
    <div class="left_title"><a onclick="pucker_show('submenu_',5,'dis','block')" style="CURSOR:pointer;"> 历史查询</a></div>
    <ul id="submenu_5" class="dis">
	<li class="left_link" onClick="DoLocation(this)"><a href=""  target="mainFrame"> 离校学生查询</a></li>
    </ul>
  </div>
</div>
</body>
</html>
