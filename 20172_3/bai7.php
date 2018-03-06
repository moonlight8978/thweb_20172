<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <title>Trang chủ</title>
  <link href="bai7.css" rel="stylesheet" type="text/css" />
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
        <h1>Phiếu đăng kí học tin học</h1>

        <form class="form-apply">
          <table>
            <tr>
              <th>Họ tên</th>
              <td>
                <input type="text" name="name" value="">
              </td>
              <th>Điện thoại</th>
              <td>
                <input type="text" name="phone" value="">
              </td>
            </tr>

            <tr>
              <th>Ngày sinh</th>
              <td>
                <input type="text" name="birthday" value="">
              </td>
              <th>Nơi sinh</th>
              <td>
                <input type="text" name="birthplace" value="">
              </td>
            </tr>

            <tr>
              <th>Môn học</th>
              <td>
                <select name="subject">
                  <option value="thcb">Tin học căn bản</option>
                  <option value="word">Word</option>
                  <option value="excel">Excel</option>
                  <option value="access">Access</option>
                  <option value="pp">PowerPoint</option>
                  <option value="web">Thiết kế Web</option>
                </select>
              </td>
              <th>Ca học</th>
              <td>
                <select name="time">
                  <option value="ab">AB</option>
                  <option value="cj">CJ</option>
                  <option value="de">DE</option>
                  <option value="hi">HI</option>
                  <option value="kl">KL</option>
                </select>
              </td>
            </tr>

            <tr>
              <th>Ngày</th>
              <td>
                <select name="day">
                  <option value="246">246</option>
                  <option value="357">357</option>
                  <option value="234567">234567</option>
                  <option value="sunday">Chủ nhật</option>
                </select>
              </td>
              <th>Giờ</th>
              <td>
                <select name="hour">
                  <option value="7,0-11,0">7h00 - 11h00</option>
                  <option value="7,30-17,0">7h30 - 17h00</option>
                  <option value="11,0-13,0">11h00 - 13h00</option>
                  <option value="13,0-17,0">13h00 - 17h00</option>
                </select>
              </td>
            </tr>

            <tr>
              <th>Khai giảng</th>
              <td>
                <input type="text" name="start" value="">
              </td>
              <th>Kết thúc</th>
              <td>
                <input type="text" name="end" value="">
              </td>
            </tr>

            <tr>
              <td colspan="2">
                <div class="border-dash">
                  <button type="button">Gửi</button>
                </div>
              </td>
              <td colspan="2">
                <div class="border-dash">
                  <button type="button">Xóa</button>
                </div>
              </td>
            </tr>
          </table>
        </form>

        <h3 class="name">
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
</body>
</html>
