<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta charset="utf-8">
  <title></title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <?php
    $n = '';
    $result = '';
    function isPrimeNumber($n) {
      if ($n <= 1) {
        return false;
      }

      if ($n == 2) {
        return true;
      }

      for ($i = 2; $i < $n; $i += 1) {
        if ($n % $i == 0) {
          return false;
        }
      }

      return true;
    }
    if (!empty($_POST)) {
      $n = $_POST["n"];
      $result = array();
      for ($i = 2; $i <= $n; $i += 1) {
        if (isPrimeNumber($i)) {
          array_push($result, $i);
        }
      }
      $result = join($result, " ") . " là số nguyên tố.";
    }
  ?>

  <div class="wrapper">
    <div class="header">
      tìm số nguyên tố
    </div>

    <form class="round" action="ex8.php" method="post">
      <table>
        <tr>
          <th>Nhập N</th>
          <td>
            <input type="text" name="n" value="<?php echo $n ?>">
          </td>
        </tr>

        <tr>
          <td colspan="2">
            <button type="submit" name="button">Các số nguyên tố <= N</button>
          </td>
        </tr>

        <tr>
          <td colspan="2">
            <input type="text" name="result" value="<?php echo $result ?>" disabled>
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
