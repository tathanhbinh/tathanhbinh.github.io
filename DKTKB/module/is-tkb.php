<?php
require_once('connect/conn.php');
$mahk=$_POST['hocky'];
$mam=$_POST['mon'];
$soluongsv=$_POST['slsv'];
$slop=$_POST['slop'];
$strSQL1="select * from khung_gio where mahk = '$mahk'";
	$kq1=mysqli_query($conn, $strSQL1);
	if (mysqli_num_rows($kq1) > 0)
	echo "<h3><center>Học kỳ này đã có thời khóa biểu dự kiến vui lòng xóa trước khi thêm</center></h3>";
	else{
//echo $mahk;
//echo $soluongsv;
//echo $slop;
$mangkg=array();
$thu=2;
$ca=1;
//lap so lop
for($i=1;$i<=$slop;$i++)
{
	//inserts tkb
	 foreach($mam as $value) {
		 $mag=rand(10, 800);
		 $mangkg[]=$mag;
         $sql="INSERT INTO `tkb_thuc_hanh` (`mam`, `mag`,`soluongsv`) VALUES ('$value',$mag, '$soluongsv')";
		 $conn->query($sql);
		 
		 
 }
}
	
		
	

	 foreach($mangkg as $mag1) {
		
		if($ca>4)
		{
			$thu++;
			$ca=1;
		}
		if($thu>7)
		$thu=2;
	 $sql1="INSERT INTO `khung_gio` (`mag`, `thu`,`cabatdau`, `soca`,`tuan`,`mahk`) VALUES ('$mag1',N'Thứ $thu','$ca',18,18,'$mahk')";
	 $conn->query($sql1);
	 $ca++;
	}
	header("Location: ../page/quan-tri.php?page=tkb-du-kien");
	}
?>