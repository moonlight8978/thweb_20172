<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <title>:: Quan ly ban hang ::</title>
</head>
<body>
  <h3>Xoa mau tin</h3>
  <?php
  $txtID = $_POST["txtID"];
  $affectrow=0;
  $link = mysqli_connect ("localhost", "root", "", "qlbanhang") or die("Khong ket noi duoc MySQL Database");
  mysqli_set_charset($link,"utf8");
  $sql="DELETE FROM sanpham WHERE id_sp = '$txtID'";
  $result = mysqli_query($link, $sql);

  if($result)
    $affectrow = mysqli_affected_rows($link);
  mysqli_close($link);
  ?>
  So mau tin xoa<?= $affectrow?>
  <h4>Lê Sĩ Bích - 20155125</h4>
</body>
</html>
