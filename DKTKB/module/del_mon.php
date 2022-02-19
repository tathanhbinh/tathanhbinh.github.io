<?php
require_once('connect/conn.php');
$mam=$_GET['mahp'];
        $sql="DELETE FROM `mon` WHERE `mon`.`mam` = '$mam'";
		 $conn->query($sql);
	header("Location: ../page/quan-tri.php?page=ed-mon-hoc");
?>