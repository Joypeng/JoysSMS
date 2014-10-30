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
    <div class="left_title"><a onclick="pucker_show('submenu_',1,'dis','block')" style="CURSOR:pointer;"> 成绩查询</a></div>
    <ul id="submenu_1" class="dis">
      <li class="left_link" onClick="DoLocation(this)"><a href="gradePage.php" target="main"> 学号查询</a></li>
    </ul>
    <div class="left_title"><a onclick="pucker_show('submenu_',2,'dis','block')" style="CURSOR:pointer;"> 选课查询</a></div>
    <ul id="submenu_2" class="dis">
      <li class="left_link" onClick="DoLocation(this)"><a href="" target="main"> 公选课查询</a></li>
    </ul>
    <div class="left_title"><a onclick="pucker_show('submenu_',3,'dis','block')" style="CURSOR:pointer;"> 校内公文</a></div>
    <ul id="submenu_3" class="dis">
      <li class="left_link" onClick="DoLocation(this)"><a href="" target="main"> 学院院历</a></li>
    </ul>
    <div class="left_title"><a onclick="pucker_show('submenu_',4,'dis','block')" style="CURSOR:pointer;"> 信息查询</a></div>
    <ul id="submenu_4" class="dis">
      <li class="left_link" onClick="DoLocation(this)"><a href=""  target="main"> 学生个人信息查询</a></li>
    </ul>
    <div class="left_title"><a onclick="pucker_show('submenu_',5,'dis','block')" style="CURSOR:pointer;"> Developers</a></div>
    <ul id="submenu_5" class="dis">
      <li class="left_link" onClick="DoLocation(this)"><a href="StuPage_Develop.php" target="main">Developers Mail and Git</a></li>

    </ul>
  </div>
</div>
</div>
</body>
</html>
