<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <title>:: Quan ly ban hang ::</title>
  <script language=JavaScript>
  function checkInput() {
    if (document.frmPHP.txtid_sp.value=="") {
      alert("Invalid ID, Please enter ID");
      document.frmPHP.txtid_sp.focus();
      return false;
    }
    if (document.frmPHP.txttensanpham.value=="") {
      alert("Please enter Name");
      document.frmPHP.txttensanpham.focus();
      return false;
    }
    if (document.frmPHP.txtdongia.value=="") {
      alert("Please enter Name");
      document.frmPHP.txtdongia.focus();
      return false;
    }

    return true;
  }
</script>
</head>
<body>
  <table>
    <form name="frmPHP" method="post" action="sanpham_doinsert.php" onsubmit="return checkInput();">
      <tr>
        <td align="left" class="content-sm"><b>
          Please enter ma sp, ten san phẩm, đơn giá
        </b></td>
      </tr>
      <tr>
        <td align="left" >ma sp:</td>
      </tr>
      <tr>
        <td align="left">
          <input type="text" name="txtid_sp" size="25" maxlength="6" class="textbox">
        </td>
      </tr>
      <tr>
        <td align="left" >Ten san pham:</td>
      </tr>
      <tr>
        <td align="left" >
          <input type="text" name="txttensanpham" size="50" maxlength="50" class="textbox">
        </td>
      </tr>
      <tr>
        <td align="left" >Đơn giá:</td>
      </tr>
      <tr>
        <td align="left" >
          <input type="text" name="txtdongia" size="12" maxlength="8" class="textbox">
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
  
  <h3>
    Lê Sĩ Bích 20155125
  </h3>
</body>
</html>
