<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta charset="utf-8">
  <title></title>
  <style>
    body {
      margin: 12px;
    }

    .container {
      border: 1px solid #ccc;
      padding-bottom: 24px;
    }

    .container h3 {
      text-align: center;
    }

    table {
      border-collapse: collapse;
      width: 100%;
    }

    table td, table th {
      padding: 6px 12px;
      border: 1px solid #000;
    }

    table thead th {
      background-color: #ddd;
    }

    table tbody td {
      background-color: #fbf8a9;
    }

    button {
      margin-top: 12px;
    }

    input {
      width: 100%;
    }
  </style>
</head>
<body>
  <?php
    session_start();
    $host = 'localhost';
    $username = 'root';
    $password = '';
    $db = 'qlsinhvien';

    $connector = new mysqli($host, $username, $password, $db);
    $connector->set_charset("utf8");

    if (!empty($_POST)) {
      $fields = ['MaSV', 'TenSV', 'NgaySinh', 'DiaChi', 'MaKH'];
      $sets = array_map(function($field) {
        return "$field = '{$_POST[$field]}'";
      }, $fields);
      $sets = join($sets, ',');
      $sql = "UPDATE sinhvien SET $sets WHERE username='{$_SESSION['username']}'";
      $connector->query($sql);
    }

    $sql = "SELECT * FROM sinhvien WHERE username = '{$_SESSION['username']}'";
    $result = $connector->query($sql);
    $student = $result->fetch_assoc();
  ?>
  <div class="container">
    <h3>CẬP NHẬT THÔNG TIN SINH VIÊN</h3>

    <form action="Lab8_2.php" method="post">
      <table>
        <thead>
          <tr>
            <th>MSSV</th>
            <th>Tên</th>
            <th>Ngày sinh</th>
            <th>Địa chỉ</th>
            <th>Mã khoa</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>
              <input type="text" name="MaSV" value="<?= $student['MaSV'] ?>">
            </td>
            <td>
              <input type="text" name="TenSV" value="<?= $student['TenSV'] ?>">
            </td>
            <td>
              <input type="text" name="NgaySinh" value="<?= $student['NgaySinh'] ?>">
            </td>
            <td>
              <input type="text" name="DiaChi" value="<?= $student['DiaChi'] ?>">
            </td>
            <td>
              <input type="text" name="MaKH" value="<?= $student['MaKH'] ?>">
            </td>
          </tr>
        </tbody>
      </table>

      <div>
        <button type="submit" name="button">Cập nhật</button>
      </div>
    </form>
  </div>
  <h4>Lê Sĩ Bích - 20155125</h4>
</body>
</html>
