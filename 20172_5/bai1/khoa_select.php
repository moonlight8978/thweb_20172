<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
  <meta charset="utf-8">
  <title>::Quan ly sinh vien::</title>
</head>
<body>
  <?php
  // Tạo kết nối đến MySQL cần cung cấp 3 thông tin
  $link = mysqli_connect("localhost", "root", "", "qlsinhvien") or die("Khong ket noi duoc MySQL Database");
  mysqli_set_charset($link,"utf8");
  $totalRows = 0;
  $stSQL = "select * from KHOA";
  // Thực thi truy vấn dữ liệu từ bảng tblShips,
  // kết quả truy vấn được lưu vào mảng
  $result = mysqli_query($link, $stSQL);
  $totalRows = mysqli_num_rows($result);
  ?>
  <h3>Tong so mau tin tim thay: <?=$totalRows ?></h3>
  <table>
    <tr>
      <th><b>Mã khoa</b></th>
      <th><b>Tên khoa</b></th>
    </tr>
    <?php
    if ($totalRows>0) {
      $i=0;
      // Sử dụng vòng lặp để duyệt kết quả truy vấn
      while ($row = mysqli_fetch_assoc($result)) {
        $i+=1;
        ?>
        <tr valign="top">
          <td><?=$row["MaKH"]?></td>
          <td ><?=$row["TenKhoa"]?></td>
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
