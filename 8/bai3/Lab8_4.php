<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title></title>
  <style>
    table {
      width: 500px;
      border-collapse: collapse;
      text-align: center;
    }

    table td, table th {
      border: 1px solid #000;
      padding: 12px;
    }

    table tr th {
      background-color: #ddd;
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

    $sql = "SELECT * FROM sinhvien WHERE username = '{$_SESSION['username']}'";
    $result = $connector->query($sql);
    $student = $result->fetch_assoc();

    $sql = "SELECT * FROM ketqua JOIN monhoc ON ketqua.MaMH = monhoc.MaMH WHERE MaSV = '{$student['MaSV']}'";
    $result = $connector->query($sql);
  ?>

  <h4>
    Kết quả học tập của <?= $_SESSION["tensv"] ?>
  </h4>

  <table>
    <tbody>
      <tr>
        <th>Mã môn học</th>
        <th>Tên môn học</th>
        <th>Điểm</th>
      </tr>

      <?php
      while ($row = $result->fetch_assoc()) {
      ?>

      <tr>
        <td><?= $row['MaMH'] ?></td>
        <td><?= $row['TenMH'] ?></td>
        <td><?= $row['Diem'] ?></td>
      </tr>

      <?php
      }
      ?>
    </tbody>
  </table>
  <h4>Lê Sĩ Bích - 20155125</h4>
</body>
</html>
