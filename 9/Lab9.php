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
<form name="form1" method="post" action="Lab9.php">
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
	if(!empty($_POST) && $_POST["Submit"]=="Dang nhap" && $_POST["id_nv"])
	{
		$id_nv = $_POST["id_nv"];
		//Ket noi den MySQL
    $con=mysqli_connect("localhost","root","") or die("Khong the ket noi den Server");
		//Chon CSDL qlbanhang
    mysqli_select_db($con, "qlbanhang1") or die("khong ket noi CSDL duoc");
		//Chon bang ma la unicode utf-8
		mysqli_set_charset($con, "utf8");
		//Thuc hien cau truy van
    $query="select * from nhanvien where id_nv='{$_POST['id_nv']}' And password='{$_POST['password']}'";

		$result=mysqli_query($con, $query);

		if(mysqli_num_rows($result)>0)
		{
			//Dang nhap thanh cong luu ten nhân viên vao session
			$row = mysqli_fetch_assoc($result);
			$tensv=$row["tennv"];
			$_SESSION["id_nv"]=$id_nv;
			$_SESSION["tennv"]=$tennv;
			header("Location:Lab9_1.php");
		}
		else
		{
		echo "<div align=center >Đăng nhập không thành công!<div>";
		}
		mysqli_close($con);
	}
?>
</body>
</html>
<?php ob_flush(); ?>
