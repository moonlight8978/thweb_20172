<?php ob_start(); ?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<?php
session_start();
?>
<html>
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <title>Untitled Document</title>
</head>
<body>
  <table width="800" border="0" align="center" cellpadding="0" cellspacing="0">
    <tr>
      <td width="800" height="37"  align="center" valign="middle" bgcolor="#FFFFCC" style="font-size:18px; color:#FF0000 ">

        <?php
        if(isset($_SESSION["tensv"]))
        {
          echo "Xin chào: ".$_SESSION["tensv"];
          echo "<br>";
          echo "<a href='Lab8_3.php'>Đăng xuất</a>";
        }
        else	{
          echo "Bạn đã đăng xuất";
          echo "<br>";
          echo "<a href='Lab8.php'>Đăng nhập</a>";
        }
        ?>
      </td>
    </tr>
    <tr>
      <td height="49" valign="top"><form name="form1" method="post" action="">
        <a href="#"><div id="ht" name="b"></div></a>
        <div align="center">
          <input type="button" name="Button" value="Xem thông tin cá nhân" onClick="javascript:window.open('Lab8_2.php','_self')">
          <input type="button" name="Button" value="Xem bảng điểm" onClick="javascript:window.open('Lab8_4.php','_self')">
          <input type="button" name="Button" value="Đăng xuất" onClick="javascript:window.open('Lab8_3.php','_self')">
        </div>
      </form></td>
    </tr>
    <tr>
      <td height="346">&nbsp;</td>
    </tr>
  </table>
  <h4>Lê Sĩ Bích - 20155125</h4>
</body>
</html>
<?php ob_flush(); ?>
