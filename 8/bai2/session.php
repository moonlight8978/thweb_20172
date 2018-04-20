<?php
session_start();
session_register("name");
$_SESSION["name"] = "Kenny Huy";
?>
<html>
<head>
  <title>Test page 1</title>
</head>
<body>
  <b><a href=session2.php>Click here</a></b>
  <h4>Lê Sĩ Bích - 20155125</h4>
</body>
</html>
