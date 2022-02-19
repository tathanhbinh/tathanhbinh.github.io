<?php
require_once('connect/conn.php');
$mahk="HKI2020";
for($i=1;$i<=52;$i++)
{
for	($thu=2; $thu<=7;$thu++)
{
	for($ca=1;$ca<=4;$ca++)
	{
		$sql = "INSERT INTO `khung_gio` (`thoi_gian`, `tuan`, `mahk`, `trang_thai`) VALUES (N'Thứ ".$thu." ca ".$ca."', '$i', '$mahk', '0')";
		if (mysqli_query($conn, $sql)) {
  echo "Successfully <br>";
} else {
  echo "Error";
}
	}
}
}
?>