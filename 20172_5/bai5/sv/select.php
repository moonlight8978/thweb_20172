<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
  <meta charset="utf-8">
  <title>::Quan ly sinh vien::</title>
</head>
<body>
  <?php
  $host = 'localhost';
  $username = 'root';
  $password = '';
  $db = 'qlsinhvien';

  $connector = new mysqli($host, $username, $password, $db);
  $connector->set_charset("utf8");

  $totalRows = 0;
  $sql = "SELECT * FROM sinhvien";

  $result = $connector->query($sql);
  $totalRows = $result->num_rows;
  ?>
  <h3>Tong so mau tin tim thay: <?=$totalRows ?></h3>
  <table>
    <tr>
      <th><b>MaSV</b></th>
      <th><b>Username</b></th>
      <th><b>Password</b></th>
      <th><b>HoSV</b></th>
      <th><b>TenSV</b></th>
      <th><b>GioiTinh</b></th>
      <th><b>NgaySinh</b></th>
      <th><b>NoiSinh</b></th>
      <th><b>DiaChi</b></th>
      <th><b>MaKH</b></th>
      <th><b>HocBong</b></th>
    </tr>
    <?php
    if ($totalRows>0) {
      // Sử dụng vòng lặp để duyệt kết quả truy vấn
      while ($row = $result->fetch_assoc()) {
        ?>
        <tr valign="top">
          <td><?=$row["MaSV"]?></td>
          <td ><?=$row["Username"]?></td>
          <td ><?=$row["Password"]?></td>
          <td ><?=$row["HoSV"]?></td>
          <td ><?=$row["TenSV"]?></td>
          <td ><?=$row["GioiTinh"]?></td>
          <td ><?=$row["NgaySinh"]?></td>
          <td ><?=$row["NoiSinh"]?></td>
          <td ><?=$row["DiaChi"]?></td>
          <td ><?=$row["MaKH"]?></td>
          <td ><?=$row["HocBong"]?></td>
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
