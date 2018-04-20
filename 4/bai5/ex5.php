<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta charset="utf-8">
  <title></title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <?php
    $name = '';
    $old = '';
    $new = '';
    $price = 2000;
    $total = '';
    if (!empty($_POST)) {
      $name = $_POST['name'];
      $new = $_POST['new'];
      $old = $_POST['old'];
      $price = $_POST['price'];
      $total = $price * ($new - $old);
    };
  ?>

  <div class="wrapper">
    <div class="header">
      thanh toán tiền điện
    </div>

    <form class="round" action="ex5.php" method="post">
      <table>
        <tr>
          <td>Tên chủ hộ</td>
          <td colspan="2">
            <input type="text" name="name" value="<?php echo $name ?>">
          </td>
        </tr>
        <tr>
          <td>Chi số cũ</td>
          <td>
            <input type="text" name="old" value="<?php echo $old ?>">
          </td>
          <td>(Kw)</td>
        </tr>
        <tr>
          <td>Chi số mới</td>
          <td>
            <input type="text" name="new" value="<?php echo $new ?>">
          </td>
          <td>(Kw)</td>
        </tr>
        <tr>
          <td>Đơn giá</td>
          <td>
            <input type="text" name="price" value="<?php echo $price ?>">
          </td>
          <td>(VNĐ)</td>
        </tr>
        <tr>
          <td>Số tiền thanh toán</td>
          <td>
            <input type="text" name="total" value="<?php echo $total ?>" disabled>
          </td>
          <td>(VNĐ)</td>
        </tr>
        <tr>
          <td colspan="3">
            <button type="submit" name="button">Tính</button>
          </td>
        </tr>
      </table>
    </form>
  </div>

  <h4>
    Lê Sĩ Bích - 20155125
  </h4>
</body>
</html>
