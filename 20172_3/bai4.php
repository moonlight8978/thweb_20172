<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Bảng cửu chương 2 - 5</title>
  <style>
    table {
      float: left;
      padding: 5px;
      margin-right: 1rem;
      background-color: #f4b942;
    }

    td {
      border-left: 1px solid #000;
      border-top: 1px solid #000;
    }
  </style>
</head>
<body>
  <?php
    $begin = 2;
    $end = 5;
    $result = "";
    for ($i = $begin; $i <= $end; $i += 1) {
      $result .= "<table>";
      $result .= "<tr><td colspan='3'>Bảng cửu chương $i";
      for ($j = 1; $j <= 10; $j += 1) {
        $result .= "<tr><td>$i</td>";
        $result .= "<td>$j</td>";
        $result .= "<td>" . $i * $j . "</td></tr>";
      }
      $result .= "</table>";
    }
    echo $result
  ?>
  <h3 class="name">
    Lê Sĩ Bích 20155125
  </h3>
</body>
</html>
