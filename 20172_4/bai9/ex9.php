<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta charset="utf-8">
  <title></title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <?php
    $news = '';
    $link = '';
    $class = '';
    if (!empty($_POST)) {
      $class = 'active';
      $news = $_POST["news"];
      if ($news == 'tuoi_tre') {
        $link = 'https://tuoitre.vn/';
      } else if ($news == 'thanh_nien') {
        $link = 'https://thanhnien.vn/';
      } else if ($news == 'vn_express') {
        $link = 'https://vnexpress.net/';
      }
    }
  ?>

  <div class="wrapper">
    <div class="header">
      đọc báo trên mạng
    </div>

    <form class="round" action="ex9.php" method="post">
      <table>
        <tr>
          <th>Chọn báo muốn đọc</th>
          <td>
            <select class="" name="news">
              <option value="tuoi_tre" <?php echo $news == 'tuoi_tre' ? 'selected' : '' ?>>
                Báo Tuổi trẻ
              </option>
              <option value="thanh_nien" <?php echo $news == 'thanh_nien' ? 'selected' : '' ?>>
                Báo Thanh niên
              </option>
              <option value="vn_express" <?php echo $news == 'vn_express' ? 'selected' : '' ?>>
                Việt Nam Express
              </option>
            </select>
          </td>
        </tr>

        <tr>
          <td colspan="2">
            <button type="submit" name="button">Đến báo muốn đọc</button>
            <a class="link <?php echo $class ?>" href="<?php echo $link ?>">Link báo</a>
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
