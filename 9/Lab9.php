<?php ob_start(); ?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<?php
	session_start();
?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>Untitled Document</title>
<style type="text/css">
	div{font-size:18px; color:#FF0000}

</style>
</head>
<body>
<form name="form1" method="post" action="Lab8.php">
<table width="800" border="1" align="center">
<tr>
<td colspan="2"><div align="center">ĐĂNG NHẬP</div></td>
</tr>
<tr>
<td width="394"><div align="right">mã nhân  viên:</div></td>
<td width="390"><input type="text" name="id_nv"></td>
</tr>
	<tr>
<td width="394"><div align="right">Mật khẩu:</div></td>
<td width="390"><input type="password" name="password"></td>
</tr>
<tr>
<td colspan="2"><div align="center">
<input type="submit" name="Submit" value="Dang nhap">
</div></td>
</tr>
<tr>
<td colspan="2"><div align="center" id="tbao">
	</div></td>
</tr>
</table>
</form>
<hr  size="2" align="center" color="#000066" width="600">
	<?php
	if($_POST["Submit"]=="Dang nhap" && $_POST["username"])
	{
		$id_nv = $_POST["id_nv"];
		//Ket noi den MySQL
$con=mysql_connect("localhost","root","123456") or die("Khong the ket noi den Server");
		//Chon CSDL qlbanhang
mysql_select_db("qlbanhang",$con) or die("khong ket noi CSDL duoc");
		//Chon bang ma la unicode utf-8
		mysql_query("set names 'utf8'");
		//Thuc hien cau truy van
$query="select * from nhanvien where id_nv='" . $_POST["username"] . "' And password='" . $_POST["password"] . "'";
		$result=mysql_query($query,$con);

		if(mysql_num_rows($result)>0)
		{
			//Dang nhap thanh cong luu ten nhân viên vao session
			$row = mysql_fetch_row($result);
			$tensv=$row["tennv"];
			session_register("id_nv");
			session_register("tennv");
			$_SESSION["id_nv"]=$id_nv
			$_SESSION["tennv"]=$tennv;
			header("Location:Lab9_1.php");
		}
		else
		{
		echo "<div align=center >Đăng nhập không thành công!<div>";
		}
		mysql_close($con);
	}
?>
</body>
</html>
<?php ob_flush(); ?>
