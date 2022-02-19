<?php
require_once('connect/conn.php');
$mam=$_POST['mahp'];
$tenmon=$_POST['tenhp'];
        $sql="INSERT INTO `mon` (`mam`, `tenm`,`mak`) VALUES ('$mam',N'$tenmon', 'CNTT')";
		 $conn->query($sql);
	header("Location: ../page/quan-tri.php?page=ed-mon-hoc");
?>