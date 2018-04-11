<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <title>:: Quan ly can bo::</title>
</head>
<body>
  <h3>Them mau tin</h3>
  <?php
    $host = 'localhost';
    $username = 'root';
    $password = '';
    $db = 'qlcanbo';

    $data = array();
    $fields = array(
      'MaCB', 'Username', 'Password', 'HoCB', 'TenCB', 'GioiTinh', 'NgaySinh',
      'NoiSinh', 'DiaChi', 'Mavien', 'Chucdanh'
    );

    foreach ($fields as $field) {
      $data[$field] = "'{$_POST[$field]}'";
    }

    $affectRows = 0;

    $connector = new mysqli($host, $username, $password, $db);
    $connector->set_charset("utf8");

    $fieldsString = join(array_keys($data), ',');
    $values = join($data, ',');

    $sql = "INSERT INTO canbo({$fieldsString}) VALUES ({$values})";

    $result = $connector->query($sql);

    if ($result)
      $affectRows = $connector->affected_rows;

    $connector->close();
  ?>
  So mau tin them vao <?= $affectRows ?>
  <br>
  SQL <?= $sql ?>
  <h4>Lê Sĩ Bích - 20155125</h4>
</body>
</html>
