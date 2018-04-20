<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <title>:: Quan ly sinh vien::</title>
  <script language=JavaScript>
    function checkInput() {
      const fields = ['MaMH', 'TenMH', 'SoTiet']

      let allPassed = fields.every(field => {
        const fieldPassed = document.frmPHP[field].value.trim() !== ''
        if (!fieldPassed) {
          alert(`Invalid ${field}, Please enter ${field}`)
          document.frmPHP[field].focus()
        }
        return fieldPassed
      })

      return allPassed
    }
  </script>
</head>
<body>
  <table>
    <form name="frmPHP" method="post" action="insert_action.php" onsubmit="return checkInput();">
      <tr>
        <td align="left" class="content-sm"><b>
          Please enter informations
        </b></td>
      </tr>

      <tr>
        <td align="left" >MaMH:</td>
        <td align="left">
          <input type="text" name="MaMH" size="25" maxlength="6" class="textbox">
        </td>
      </tr>

      <tr>
        <td align="left">TenMH:</td>
        <td align="left">
          <input type="text" name="TenMH" size="25" maxlength="50" class="textbox">
        </td>
      </tr>

      <tr>
        <td align="left">SoTiet:</td>
        <td align="left">
          <input type="text" name="SoTiet" size="25" maxlength="50" class="textbox">
        </td>
      </tr>

      <tr>
        <td align="left" valign="top"><br>
          <input type="submit" value="Submit" class="button">
          <input type="reset" value="Reset" class="button">
        </td>
      </tr>
    </form>
  </table>
  <h4>Lê Sĩ Bích - 20155125</h4>
</body>
</html>
