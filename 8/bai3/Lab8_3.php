<?php ob_start(); ?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <title>Untitled Document</title>
</head>
<body>
  <?php
  session_start();
  //huy cac bien session
  unset($_SESSION["mssv"]); unset($_SESSION["tensv"]);
  ?>
  <script language="javascript">
  window.open("Lab8.php","_self");
</script>
<h4>Lê Sĩ Bích - 20155125</h4>
</body>
</html>
<?php ob_flush(); ?>
