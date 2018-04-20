<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <title>:: Quan ly ban hang::</title>
</head>
<body>
  <h3>Them mau tin</h3>
  <?php
  $txtid_sp = $_POST["txtid_sp"];
  $txttensanpham = $_POST["txttensanpham"];
  $txtdongia=$_POST["txtdongia"];
  $affectrow=0;
  $link = mysqli_connect ("localhost", "root", "") 			or die("Khong ket noi duoc MySQL Database");
  mysqli_select_db($link, "qlbanhang");
  mysqli_set_charset($link, 'utf-8');
  $sql="insert into sanpham(id_sp,tensp,dongia) ";
  $sql .=" values('".$txtid_sp."','".$txttensanpham."', '".$txtdongia."')";
  $result = mysqli_query($link, $sql);
  if($result)
  $affectrow = mysqli_affected_rows($link);
  mysqli_close($link);
  ?>
  So mau tin them vao <?= $affectrow ?>
  <h3>
    Lê Sĩ Bích 20155125
  </h3>
</body>
</html>
