<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta charset="utf-8">
  <title></title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <h3>PHÉP TÍNH TRÊN HAI SỐ</h3>
  <?php
    $operator = $_POST["operator"];
    $firstValue = $_POST["firstValue"];
    $secondValue = $_POST["secondValue"];
    if ($operator == 'add') {
      $operatorText = 'Cộng';
      $result = $firstValue + $secondValue;
    } else if ($operator == 'sub') {
      $operatorText = 'Trừ';
      $result = $firstValue - $secondValue;
    } else if ($operator == 'mul') {
      $operatorText = 'Nhân';
      $result = $firstValue * $secondValue;
    } else if ($operator == 'div') {
      $operatorText = 'Chia';
      $result = $firstValue / $secondValue;
    }
  ?>
  <table>
    <tr>
      <td>Chọn phép tính</td>
      <td>
        <?php echo $operatorText ?>
      </td>
    </tr>
    <tr>
      <td>Số thứ nhất</td>
      <td>
        <input type="text" name="firstValue" value="<?php echo $firstValue ?>">
      </td>
    </tr>
    <tr>
      <td>Số thứ hai</td>
      <td>
        <input type="text" name="secondValue" value="<?php echo $secondValue ?>">
      </td>
    </tr>
    <tr>
      <td>Kết quả</td>
      <td>
        <input type="text" name="secondValue" value="<?php echo $result ?>">
      </td>
    </tr>
    <tr>
      <td></td>
      <td>
        <a href="javascript:window.history.back(-1);">Quay lại trang trước</a>
      </td>
    </tr>
  </table>
  <h4>
    Lê Sĩ Bích - 20155125
  </h4>
</body>
</html>
