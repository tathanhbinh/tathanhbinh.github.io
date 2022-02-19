<?php
session_start();
require_once('connect/conn.php');
$mssv=$_SESSION['user'];
$matkb=$_GET['matkb'];
        $sql="INSERT INTO `dang_ky` (`masv`,`matkb`) VALUES ('$mssv','$matkb')";
		 $conn->query($sql);
	header("Location: ../page/dang-ky-tkb.php");
?>