<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta charset="utf-8">
  <title></title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <h3>PHÉP TÍNH TRÊN HAI SỐ</h3>
  <form action="ex3-1.php" method="post">
    <table>
      <tr>
        <td>Chọn phép tính</td>
        <td>
          <input type="radio" name="operator" value="add">Cộng
          <input type="radio" name="operator" value="sub">Trừ
          <input type="radio" name="operator" value="mul">Nhân
          <input type="radio" name="operator" value="div">Chia
        </td>
      </tr>
      <tr>
        <td>Số thứ nhất</td>
        <td>
          <input type="text" name="firstValue" value="">
        </td>
      </tr>
      <tr>
        <td>Số thứ hai</td>
        <td>
          <input type="text" name="secondValue" value="">
        </td>
      </tr>
      <tr>
        <td></td>
        <td>
          <button type="submit" name="submit">Tính</button>
        </td>
      </tr>
    </table>
  </form>
  <h4>
    Lê Sĩ Bích - 20155125
  </h4>
</body>
</html>
