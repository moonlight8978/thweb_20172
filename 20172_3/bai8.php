<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <title>Trang chủ</title>
  <link href="bai8.css" rel="stylesheet" type="text/css" />
</head>
<body>
  <div id="wrap">
    <div id="header">
      <div id="header-tabs">
        <ul>
          <li id="current"><a href="#"><span>Tab1</span></a></li>
          <li><a href="#"><span>Tab2</span></a></li>
          <li><a href="#"><span>Tab3</span></a></li>
          <li><a href="#"><span>Tab4</span></a></li>
          <li><a href="#"><span>Tab5</span></a></li>
          <li><a href="#"><span>Tab6</span></a></li>
          <li><a href="#"><span>Tab7</span></a></li>
          <li><a href="#"><span>Tab8</span></a></li>
        </ul>
      --> Đây là TabMenu
      </div>
      <p>&nbsp;</p>
      <p>&nbsp;</p>
      <p>-->Đây là Header</p>
    </div>
    <div id="content-wrap">
      <div id="main">
        <h1>Hóa đơn bán hàng</h1>

        <form>
          <table>
            <tr>
              <th>Mua</th>
              <th>STT</th>
              <th>Tên sản phẩm</th>
              <th>Đơn giá</th>
              <th>Số lượng</th>
              <th>Thành tiền</th>
            </tr>

            <tr>
              <td>
                <input type="checkbox" name="" value="">
              </td>
              <td>1</td>
              <td>Sách Tin học cơ bản</td>
              <td><span class="price">15000</span></td>
              <td>
                <input class="input-quantity" type="text" value="">
              </td>
              <td>
                <input class="input-total" type="text" value="" placeholder="0">
              </td>
            </tr>

            <tr>
              <td>
                <input type="checkbox" name="" value="">
              </td>
              <td>2</td>
              <td>Sách Word</td>
              <td><span class="price">15000</span></td>
              <td>
                <input class="input-quantity" type="text" value="">
              </td>
              <td>
                <input class="input-total" type="text" value="" placeholder="0">
              </td>
            </tr>

            <tr>
              <td>
                <input type="checkbox" name="" value="">
              </td>
              <td>3</td>
              <td>Sách PowerPoint</td>
              <td><span class="price">15000</span></td>
              <td>
                <input class="input-quantity" type="text" value="">
              </td>
              <td>
                <input class="input-total" type="text" value="" placeholder="0">
              </td>
            </tr>

            <tr>
              <td>
                <input type="checkbox" name="" value="">
              </td>
              <td>4</td>
              <td>USB Kingston 2G</td>
              <td><span class="price">120000</span></td>
              <td>
                <input class="input-quantity" type="text" value="">
              </td>
              <td>
                <input class="input-total" type="text" value="" placeholder="0">
              </td>
            </tr>

            <tr>
              <td colspan="4">
                <button type="button" name="button">Nhập lại</button>
              </td>
              <td>Tổng cộng</td>
              <td>
                <input id="sum" type="text" value="" placeholder="0">
              </td>
            </tr>
          </table>
        </form>

        <h3>
          Lê Sĩ Bích 20155125
        </h3>
      </div>
      <div id="sidebar">
        <h1>Đăng nhập</h1>
        <form name="frmlogin" method="post" id="frmlogin" action="log_exc.php">
          <p><strong>Tài khoản</strong>&nbsp <input name="txuser" type="text" class="textbox" maxlength="50" /></p>
          <p><strong>Mật khẩu</strong>&nbsp <input name="txpass" type="password" class="textbox" maxlength="50" /></p>
          <p align="center">
            <input name="login" class="loginbutton" value="Đăng nhập" type="submit"/>
          </p>
        </form>
      </div>
    </div>
    <div id="footer">
      <p align="center">--> Đây là Footer </p>
    </div>
  </div>

  <script>
    let quantities = Array.from(document.getElementsByClassName("input-quantity"))
    let prices = Array.from(document.getElementsByClassName("price"))
      .map(el => parseInt(el.innerHTML))
    let totals = Array.from(document.getElementsByClassName("input-total"))
    let sum = document.getElementById("sum")

    quantities.forEach((quantityEl, i) => {
      quantityEl.addEventListener("input", function() {
        const quantity = parseInt(quantityEl.value);
        const total = quantity * prices[i]
        totals[i].value = total

        sum.value = totals.reduce((accumulator, currentValue) => {
          let val = currentValue.value ? parseInt(currentValue.value) : 0
          return val + accumulator
        }, 0)
      })
    })
  </script>
</body>
</html>
