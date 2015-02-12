<!DOCTYPE HTML>
<!-- 使用HTML5规范 -->
<head>
<title>main</title>
<link href="file/Style.Css" rel="stylesheet" type="text/css" />
</head>
<body>
  <?php session_start(); ?>
  <?php 
	$user = isset($_SESSION['user'])?$_SESSION['user']:"";
  ?>
  <?php
    if($user == "")
    {
      // header("location:Login.php");
      die("<script>
            if(typeof(parent) != 'undefined'){
                parent.window.location = 'Login.php';
            }else{
                window.location.href = 'Login.php';
            }
          </script>");
    }
  ?> 
  <table width=100% border=0 cellpadding=3 cellspacing=1 class=css_table bgcolor='#E1E1E1'>
    <tr class=css_menu>
      <td colspan=3>
        <table width=100% border=0 cellpadding=4 cellspacing=0 class=css_main_table>
          <tr>
            <td class=css_main>欢迎<?php echo "$user";?></td>
          </tr>
        </table>
      </td>
    </tr>
    <tr>
       <td class="css_col11"><strong><font color = "#0000FF">登录cookie有效时间为1200秒</a></strong></td>
    </tr>
  </table>
  </body>
  </html>
  <table width="100%" border="0" cellpadding="3" cellspacing="1" class="css_table" bgcolor='#E1E1E1'>
    <tr class="css_menu">
      <td colspan="3">
        <table width="100%" border="0" cellpadding="4" cellspacing="0" class="css_main_table">
          <tr>
            <td class="css_main">联系方式</td>
          </tr>
        </table>
      </td>
    </tr>
    <tr>
      <td class="css_col11"><strong><font color=#50691B>Blog:http://blog.csdn.net/p641290710</font></strong></td>
      <td class="css_col11"><strong><font color=#50691B>Email:pengjunweiright@163.com</font></strong></td>
    </tr>
  </table>
  <table width=100% border=0 cellpadding=3 cellspacing=1 class=css_table bgcolor='#E1E1E1'>
    <tr class=css_menu>
      <td colspan=3>
        <table width=100% border=0 cellpadding=4 cellspacing=0 class=css_main_table>
          <tr>
            <td class=css_main>Github</td>
          </tr>
        </table>
      </td>
    </tr>
    <tr>
       <td class="css_col11"><strong><a href="https://github.com/Joypeng" target="_blank"><font color=#50691B>点击进入本人Github</font></a></strong></td>
    </tr>
  </table>
</body>
</html>
