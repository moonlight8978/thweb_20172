<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
  <meta charset="utf-8">
  <title>::Quan ly ban hang::</title>
</head>
<body>
  <?php
  $host = 'localhost';
  $username = 'root';
  $password = '';
  $db = 'qlbanhang';
  $table = 'nhanvien';

  $connector = new mysqli($host, $username, $password, $db);
  $connector->set_charset("utf8");

  $totalRows = 0;
  $sql = "SELECT * FROM $table";

  $result = $connector->query($sql);
  $totalRows = $result->num_rows;
  ?>
  <h3>Tong so mau tin tim thay: <?=$totalRows ?></h3>
  <table>
    <tr>
      <th><b>id_nv</b></th>
      <th><b>tennv</b></th>
      <th><b>dienthoai</b></th>
      <th><b>diachi</b></th>
    </tr>
    <?php
    if ($totalRows>0) {
      // Sử dụng vòng lặp để duyệt kết quả truy vấn
      while ($row = $result->fetch_assoc()) {
        ?>
        <tr valign="top">
          <td><?=$row["id_nv"]?></td>
          <td ><?=$row["tennv"]?></td>
          <td ><?=$row["dienthoai"]?></td>
          <td><?=$row["diachi"]?></td>
        </tr>
        <?php
      }
    } else {
      ?>
      <tr valign="top">
        <td >&nbsp;</td>
        <td ><b><font face="Arial" color="#FF0000">
          Khong tim thay thong tin hang hoa!</font></b></td>
        </tr>
        <?php
      }
    ?>
  </table>
  <h4>Lê Sĩ Bích - 20155125</h4>
</body>
</html>
