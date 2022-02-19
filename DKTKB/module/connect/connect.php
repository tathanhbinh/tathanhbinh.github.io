<?php
session_start();
require_once('conn.php');
	$ur=$_REQUEST["usr"];	
	$ps=$_REQUEST["pass"];
	$ps = base64_encode($ps);
	$strSQL="select * from tai_khoan where user = '$ur' and pass = '$ps'";
	$kq=mysqli_query($conn, $strSQL);
	if(mysqli_num_rows($kq)>0)
	{
		while($rows=mysqli_fetch_array($kq))
{
	$_SESSION['loai'] = $rows[2];
}
		$_SESSION['user'] = $ur;
	if($_SESSION['loai']==1)
	{
	$strSQL1="select * from sinh_vien where masv = '$ur'";
	$kq1=mysqli_query($conn, $strSQL1);
	while($rows1=mysqli_fetch_array($kq1))
	{
		$_SESSION['name'] = $rows1[1];
	}
    	echo "Bạn đã đăng nhập thành công";
	}
		elseif($_SESSION['loai']==0)
		{
			$_SESSION['name'] = "Admin";
			echo "Bạn đã đăng nhập thành công";
		}
	}
	else 
	{
		echo "Tài khoản hoặc mật khẩu không đúng";
	}
?>
