<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <title>:: Quan ly sinh vien::</title>
</head>
<body>
  <h3>Xoa mau tin</h3>
  <?php
    $host = 'localhost';
    $username = 'root';
    $password = '';
    $db = 'qlsinhvien';

    $MaMH = $_POST['MaMH'];

    $affectRows = 0;

    $connector = new mysqli($host, $username, $password, $db);
    $connector->set_charset("utf8");

    $sql = "DELETE FROM monhoc WHERE MaMH='$MaMH'";

    $result = $connector->query($sql);

    if ($result)
      $affectRows = $connector->affected_rows;

    $connector->close();
  ?>
  So mau tin da xoa <?= $affectRows ?>
  <br>
  SQL <?= $sql ?>
  <h4>Lê Sĩ Bích - 20155125</h4>
</body>
</html>
