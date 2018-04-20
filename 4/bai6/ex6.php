<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta charset="utf-8">
  <title></title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <?php
    $first = '';
    $second = '';
    $avg = '';
    $result = '';
    $grade = '';
    if (!empty($_POST)) {
      $first = $_POST['first'];
      $second = $_POST['second'];
      $avg = ($first + $second * 2) / 3;
      $result = $avg >= 5 ? "Được lên lớp" : "Ở lại lớp";
      $grade =
        $avg >= 8 ? "Giỏi" : (
          $avg < 8 && $avg >= 6.5 ? "Khá" : (
            $avg < 6.5 && $avg >= 5 ? "Trung bình" : "Yếu"
          )
        );
    };
  ?>

  <div class="wrapper">
    <div class="header">
      kết quả học tập
    </div>

    <form class="round" action="ex6.php" method="post">
      <table>
        <tr>
          <td>Điểm HK1</td>
          <td>
            <input type="text" name="first" value="<?php echo $first ?>">
          </td>
        </tr>
        <tr>
          <td>Điểm HK2</td>
          <td>
            <input type="text" name="second" value="<?php echo $second ?>">
          </td>
        </tr>
        <tr>
          <td>Điểm trung bình</td>
          <td>
            <input type="text" name="avg" value="<?php echo $avg ?>" disabled>
          </td>
        </tr>
        <tr>
          <td>Kết quả</td>
          <td>
            <input type="text" name="result" value="<?php echo $result ?>" disabled>
          </td>
        </tr>
        <tr>
          <td>Xếp loại học lực</td>
          <td>
            <input type="text" name="grade" value="<?php echo $grade ?>" disabled>
          </td>
        </tr>
        <tr>
          <td colspan="2">
            <button type="submit" name="button">Xem kết quả</button>
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
