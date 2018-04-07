<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta charset="utf-8">
  <title></title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <?php
    $PI = 3.14;
    $r = '';
    $s = '';
    $c = '';
    if (!empty($_POST)) {
      $r = $_POST['r'];
      $s = $r * $r * $PI;
      $c = 2 * $r * $PI;
    };
  ?>

  <div class="wrapper">
    <div class="header">
      Diện tích và chu vi hình tròn
    </div>

    <form class="round" action="ex4.php" method="post">
      <table>
        <tr>
          <td>Bán kính:</td>
          <td>
            <input type="text" name="r" value="<?php echo $r ?>">
          </td>
        </tr>
        <tr>
          <td>Diện tích</td>
          <td>
            <input type="text" name="s" value="<?php echo $s ?>" disabled>
          </td>
        </tr>
        <tr>
          <td>Chu vi:</td>
          <td>
            <input type="text" name="c" value="<?php echo $c ?>" disabled>
          </td>
        </tr>
        <tr>
          <td colspan="2">
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
