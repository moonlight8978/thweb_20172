<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <title>::Welcome to PHP</title>
</head>
<body>
  <h4>Form variable</h4>
  <?php
    $Name = $_POST["fullname"];
    $Gender = $_POST["gender"];
  ?>
  <table>
    <tr>
      <td>Name:</td>
      <td><?php echo $Name; ?>
      </td>
    </tr>
    <tr>
      <td>Gender:</td>
      <td><?php echo $Gender; ?></td>
    </tr>
  </table>
  <h4>
    Lê Sĩ Bích - 20155125
  </h4>
</body>
</html>
