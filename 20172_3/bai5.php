<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Table</title>
  <style media="screen">
    table {
      border-collapse: collapse;
    }

    th, td {
      border: 1px solid #000;
    }
  </style>
</head>
<body>
  <?php
    $name = "Tên sách";
    $content = "Nội dung sách";
    $result = "<table>";
    $result .= "<tr><th>STT</th>";
    $result .= "<th>Tên sách</th>";
    $result .= "<th>Nội dung sách</th></tr>";

    for ($i = 1; $i <= 100; $i += 1) {
      $result .= "<tr><td>$i</td>";
      $result .= "<td>$name $i</td>";
      $result .= "<td>$content $i</td></tr>";
    }

    $result .= "</table>";
    echo $result;
  ?>
  <h3 class="name">
    Lê Sĩ Bích 20155125
  </h3>
</body>
</html>
