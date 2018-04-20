<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <title>::Quan ly can bo::</title>
  <body>
    <?php
    // Tạo kết nối đến MySQL cần cung cấp 3 thông tin
    $link = mysqli_connect ("localhost", "root", "") or 	die("Khong ket noi duoc MySQL Database");
    mysqli_set_charset($link, 'utf8');
    // Lựa chọn CSDL muốn sử dụng
    mysqli_select_db($link, "qlcanbo");
    $totalRows = 0;
    $stSQL ="select * from vien";
    // Thực thi truy vấn dữ liệu từ bảng tblShips,
    // kết quả truy vấn được lưu vào mảng
    $result = mysqli_query($link, $stSQL);
    $totalRows = mysqli_num_rows($result);
    ?>
    <h3>Tong so mau tin tim thay: <?= $totalRows ?></h3>
    <table>
      <tr>
        <th><b>Mã vien</b></th>
        <th><b>Tên vien</b></th>
      </tr>
      <?php
      if($totalRows>0){
        $i=0;
        // Sử dụng vòng lặp để duyệt kết quả truy vấn
        while ($row = mysqli_fetch_array ($result))
        {
          $i+=1;
          ?>
          <tr valign="top">
            <td><?=$row["Mavien"]?></td>
            <td ><?=$row["Tenvien"]?></td>
          </tr>
          <?php
        }
      }else{
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
