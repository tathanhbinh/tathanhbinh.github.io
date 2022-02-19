<?php
require_once('connect/conn.php');
$mam=$_GET['mahp'];
        $sql="TRUNCATE TABLE khung_gio";
		 $conn->query($sql);
		 $sql1="TRUNCATE TABLE tkb_thuc_hanh";
		 $conn->query($sql1);
		 $sql1="TRUNCATE TABLE dang_ky";
		 $conn->query($sql1);
	header("Location: ../page/quan-tri.php?page=tkb-du-kien");
?>