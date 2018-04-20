<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <title>::Quan ly can bo::</title>
</head>
<body>
  <h4>Danh sach can bo</h4>
  <?php
  // Tạo một biến đếm số thứ tự
  $x = 0;
  // Tạo kết nối đến MySQL cần cung cấp 3 thông tin
  $conn = mysqli_connect("localhost", "root", "") or die(mysqli_error());
  mysqli_set_charset($conn, 'utf8');
  // Lựa chọn CSDL muốn sử dụng
  mysqli_select_db($conn, "qlcanbo") or die(mysqli_error());
  // Tạo truy vấn dữ liệu từ bảng SinhVien,
  // kết quả truy vấn được lưu vào mảng
  $result = mysqli_query($conn, "SELECT * FROM Canbo;") or die(mysqli_error());
  // Sử dụng vòng lặp để in ra kết quả truy vấn
  while($row = mysqli_fetch_array($result))
  {
    // in ra mỗi dòng trong kết quả truy vấn
    echo $x . "&nbsp;" . $row['HoCB'] . "&nbsp;" . $row['TenCB'] . ". &nbsp;" . $row['NgaySinh'] . "<br>";
    $x++;
  }
  ?>
  <h4>Lê Sĩ Bích - 20155125</h4>
</body>
</html>
