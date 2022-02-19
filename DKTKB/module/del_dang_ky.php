<?php
require_once('connect/conn.php');
$madk=$_GET['madk'];
        $sql="DELETE FROM `dang_ky` WHERE `dang_ky`.`id` = '$madk'";
		 $conn->query($sql);
	header("Location: ../page/dang-ky-tkb.php");
?>