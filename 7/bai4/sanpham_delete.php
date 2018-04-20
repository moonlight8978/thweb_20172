<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <title>:: Quan ly ban hang ::</title>
  <script language=JavaScript>
    function checkInput() {
      if (document.frmPHP.txtID.value=="") {
        alert("Invalid ID, Please enter ID");
        document.frmPHP.txtID.focus();
        return false;
      }
      return true;
    }
  </script>
</head>
<body>
  <table>
    <form name="frmPHP" method="post" action="sanpham_dodelete.php" onsubmit="return checkInput();">
      <tr>
        <td align="left" class="content-sm"><b>
          Please enter ID to delete
        </b></td>
      </tr>
      <tr>
        <td align="left" >ID:</td>
      </tr>
      <tr>
        <td align="left">
          <input type="text" name="txtID" size="25" class="textbox">
        </td>
      </tr>
      <tr>
        <td align="left" valign="top"><br>
          <input type="submit" value="Delete" class="button">
          <input type="reset" value="Reset" class="button">
        </td>
      </tr>
    </form>
  </table>
  <h4>Lê Sĩ Bích - 20155125</h4>
</body>
</html>
