<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Bai 11</title>
  <style>
    .even {
      color: red;
      font-weight: bold;
      padding-right: 5px;
    }

    .odd {
      color: blue;
      font-style: italic;
      padding-right: 5px;
    }
  </style>
</head>
<body>
  <?php
    for ($i = 1; $i <= 200; $i += 1) {
      $x = $i % 2;
      switch ($x) {
        case 0: {
          echo "<span class='even'>" . $i . "</span>";
          break;
        }
        case 1: {
          echo "<span class='odd'>" . $i . "</span>";
          break;
        }
      }
      if ($i % 10 == 0) {
        echo "<br>";
      }
    }
  ?>
  <h3 class="name">
    Lê Sĩ Bích 20155125
  </h3>
</body>
</html>
