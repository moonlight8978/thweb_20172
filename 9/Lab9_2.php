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
    $db = 'qlbanhang1';

    $connector = new mysqli($host, $username, $password, $db);
    $connector->set_charset("utf8");

    if (!empty($_POST)) {
      $fields = ['tennv', 'dienthoai', 'diachi'];
      $sets = array_map(function($field) {
        return "$field = '{$_POST[$field]}'";
      }, $fields);
      $sets = join($sets, ',');
      $sql = "UPDATE nhanvien SET $sets WHERE id_nv='{$_SESSION['id_nv']}'";
      $connector->query($sql);
    }

    $sql = "SELECT * FROM nhanvien WHERE id_nv='{$_SESSION['id_nv']}'";
    $result = $connector->query($sql);
    $staff = $result->fetch_assoc();
  ?>
  <div class="container">
    <h3>CẬP NHẬT THÔNG TIN SINH VIÊN</h3>

    <form action="Lab9_2.php" method="post">
      <table>
        <thead>
          <tr>
            <th>Tên</th>
            <th>Điện thoại</th>
            <th>Địa chỉ</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>
              <input type="text" name="tennv" value="<?= $staff['tennv'] ?>">
            </td>
            <td>
              <input type="text" name="dienthoai" value="<?= $staff['dienthoai'] ?>">
            </td>
            <td>
              <input type="text" name="diachi" value="<?= $staff['diachi'] ?>">
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
