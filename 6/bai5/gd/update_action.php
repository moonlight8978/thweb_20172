<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <title>:: Quan ly can bo::</title>
</head>
<body>
  <h3>Cap nhat mau tin</h3>
  <?php
    $host = 'localhost';
    $username = 'root';
    $password = '';
    $db = 'qlcanbo';

    $data = array();
    $fields = array(
      'Maky', 'Malop', 'Sosv'
    );

    foreach ($fields as $field) {
      if (!empty($_POST[$field])) {
        $data[$field] = "'{$_POST[$field]}'";
      }
    }

    $affectRows = 0;

    $connector = new mysqli($host, $username, $password, $db);
    $connector->set_charset("utf8");

    $sets = array_map(function($key, $value) {
      return "$key = $value";
    }, array_keys($data), $data);

    $sets = join($sets, ",");

    $sql = "UPDATE giangday SET $sets WHERE MaCB='{$_POST['MaCB']}' AND MaMH='{$_POST['MaMH']}'";

    $result = $connector->query($sql);

    if ($result)
      $affectRows = $connector->affected_rows;

    $connector->close();
  ?>
  So mau tin cap nhat <?= $affectRows ?>
  <br>
  SQL <?= $sql ?>
  <h4>Lê Sĩ Bích - 20155125</h4>
</body>
</html>
