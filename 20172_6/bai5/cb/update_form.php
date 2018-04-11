<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <title>:: Quan ly can bo::</title>
  <script language=JavaScript>
    function checkInput() {
      const fields = ['MaCB']

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
    <form name="frmPHP" method="post" action="update_action.php" onsubmit="return checkInput();">
      <tr>
        <td align="left" class="content-sm"><b>
          Please enter informations to update
        </b></td>
      </tr>

      <tr>
        <td align="left" >MaCB:</td>
        <td align="left">
          <input type="text" name="MaCB" size="25" maxlength="50" class="textbox">
        </td>
      </tr>

      <tr>
        <td align="left" >Username:</td>
        <td align="left">
          <input type="text" name="Username" size="25" maxlength="50" class="textbox">
        </td>
      </tr>

      <tr>
        <td align="left" >Password:</td>
        <td align="left">
          <input type="text" name="Password" size="25" maxlength="50" class="textbox">
        </td>
      </tr>

      <tr>
        <td align="left" >HoCB:</td>
        <td align="left">
          <input type="text" name="HoCB" size="25" maxlength="50" class="textbox">
        </td>
      </tr>

      <tr>
        <td align="left" >TenCB:</td>
        <td align="left">
          <input type="text" name="TenCB" size="25" maxlength="50" class="textbox">
        </td>
      </tr>

      <tr>
        <td align="left" >GioiTinh:</td>
        <td align="left">
          <input type="text" name="GioiTinh" size="25" maxlength="50" class="textbox">
        </td>
      </tr>

      <tr>
        <td align="left" >NgaySinh:</td>
        <td align="left">
          <input type="text" name="NgaySinh" size="25" maxlength="50" class="textbox">
        </td>
      </tr>

      <tr>
        <td align="left" >NoiSinh:</td>
        <td align="left">
          <input type="text" name="NoiSinh" size="25" maxlength="50" class="textbox">
        </td>
      </tr>

      <tr>
        <td align="left" >DiaChi:</td>
        <td align="left">
          <input type="text" name="DiaChi" size="25" maxlength="50" class="textbox">
        </td>
      </tr>

      <tr>
        <td align="left" >Mavien:</td>
        <td align="left">
          <input type="text" name="Mavien" size="25" maxlength="50" class="textbox">
        </td>
      </tr>

      <tr>
        <td align="left" >Chucdanh:</td>
        <td align="left">
          <input type="text" name="Chucdanh" size="25" maxlength="50" class="textbox">
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
