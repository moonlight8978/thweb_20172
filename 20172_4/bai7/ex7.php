<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta charset="utf-8">
  <title></title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <?php
    $has31days = array(1, 3, 5, 7, 8, 10, 12);
    $month = '';
    $year = '';
    $days = '';
    if (!empty($_POST)) {
      $month = $_POST["month"];
      $year = $_POST["year"];
      if ($month == 2) {
        $days = ($year % 4 == 0) ? 29 : 28;
      } else {
        $days = in_array($month, $has31days) ? 31 : 30;
      }
      $days = "Tháng $month năm $year có $days ngày";
    }
  ?>

  <div class="wrapper">
    <div class="header">
      tính ngày trong tháng
    </div>

    <form class="round" action="ex7.php" method="post">
      <table>
        <tr>
          <th>Tháng/năm</th>
          <td>
            <input type="text" name="month" value="<?php echo $month ?>">
            <span>/</span>
            <input type="text" name="year" value="<?php echo $year ?>">
          </td>
        </tr>

        <tr>
          <td colspan="2">
            <button type="submit" name="button">Xem kết quả</button>
          </td>
        </tr>

        <tr>
          <td colspan="2">
            <input type="text" name="days" value="<?php echo $days ?>" disabled>
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
