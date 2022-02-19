<div class="span9">

	<div class="row-fluid">
		<div class="block">

			<div id="chart-container" class="block-body collapse in" style="height:400px">
				 <center><h2>EXPORT FILE</h2></center>
<form method="POST">
Xuất thời khóa biểu tạm thời:
		<button class="btn btn-primary mb-2" name="xtkb" type="submit">Xuất file</button><br /><br />
        Xuất danh sách tình trạng đăng ký học phần của các lớp HP Thực Hành:
		<button class="btn btn-primary mb-2" name="xttdk" type="submit">Xuất file</button><br /><br />
        Xuất danh sách sinh viên chưa đăng ký học phần:
		<button class="btn btn-primary mb-2" name="xdssv" type="submit">Xuất file</button><br /><br />
        Xuất danh sách giảng viên:
		<button class="btn btn-primary mb-2" name="xdsgv" type="submit">Xuất file</button><br /><br />
        Xuất danh sách lớp HPTH:
		<button class="btn btn-primary mb-2" name="xdsl" type="submit">Xuất file</button>
	</form>
    
    <?php
require_once('../module/PHPExcel.php');
require_once ('../module/PHPExcel/IOFactory.php');
if(isset($_POST['xtkb'])){
$objExcel = new PHPExcel();
	$objExcel->setActiveSheetIndex(0);
	$sheet = $objExcel->getActiveSheet()->setTitle('TKBTT');

	$rowCount = 1;
	$sheet->setCellValue('A'.$rowCount,'Ca/Thứ');
	$sheet->setCellValue('B'.$rowCount,'Thứ 2');
	$sheet->setCellValue('C'.$rowCount,'Thứ 3');
	$sheet->setCellValue('D'.$rowCount,'Thứ 4');
	$sheet->setCellValue('E'.$rowCount,'Thứ 5');
	$sheet->setCellValue('F'.$rowCount,'Thứ 6');
	$sheet->setCellValue('G'.$rowCount,'Thứ 7');
	$sheet->setCellValue('A2','1');
	$sheet->setCellValue('A3','2');
	$sheet->setCellValue('A4','3');
	$sheet->setCellValue('A5','4');
	$ca1thu2= "SELECT mon.tenm,`khung_gio`.`cabatdau` FROM `khung_gio`,`tkb_thuc_hanh`,`mon` WHERE khung_gio.mag=tkb_thuc_hanh.mag AND mon.mam=tkb_thuc_hanh.mam AND khung_gio.thu='Thứ 2' AND khung_gio.cabatdau='1'ORDER BY `khung_gio`.`cabatdau` ASC";
	$ca2thu2= "SELECT mon.tenm,`khung_gio`.`cabatdau` FROM `khung_gio`,`tkb_thuc_hanh`,`mon` WHERE khung_gio.mag=tkb_thuc_hanh.mag AND mon.mam=tkb_thuc_hanh.mam AND khung_gio.thu='Thứ 2' AND khung_gio.cabatdau='2'ORDER BY `khung_gio`.`cabatdau` ASC";
	$ca3thu2= "SELECT mon.tenm,`khung_gio`.`cabatdau` FROM `khung_gio`,`tkb_thuc_hanh`,`mon` WHERE khung_gio.mag=tkb_thuc_hanh.mag AND mon.mam=tkb_thuc_hanh.mam AND khung_gio.thu='Thứ 2' AND khung_gio.cabatdau='3'ORDER BY `khung_gio`.`cabatdau` ASC";
	$ca4thu2= "SELECT mon.tenm,`khung_gio`.`cabatdau` FROM `khung_gio`,`tkb_thuc_hanh`,`mon` WHERE khung_gio.mag=tkb_thuc_hanh.mag AND mon.mam=tkb_thuc_hanh.mam AND khung_gio.thu='Thứ 2' AND khung_gio.cabatdau='4'ORDER BY `khung_gio`.`cabatdau` ASC";
	$ca1thu3= "SELECT mon.tenm,`khung_gio`.`cabatdau` FROM `khung_gio`,`tkb_thuc_hanh`,`mon` WHERE khung_gio.mag=tkb_thuc_hanh.mag AND mon.mam=tkb_thuc_hanh.mam AND khung_gio.thu='Thứ 3' AND khung_gio.cabatdau='1'ORDER BY `khung_gio`.`cabatdau` ASC";
	$ca2thu3= "SELECT mon.tenm,`khung_gio`.`cabatdau` FROM `khung_gio`,`tkb_thuc_hanh`,`mon` WHERE khung_gio.mag=tkb_thuc_hanh.mag AND mon.mam=tkb_thuc_hanh.mam AND khung_gio.thu='Thứ 3' AND khung_gio.cabatdau='2'ORDER BY `khung_gio`.`cabatdau` ASC";
	$ca3thu3= "SELECT mon.tenm,`khung_gio`.`cabatdau` FROM `khung_gio`,`tkb_thuc_hanh`,`mon` WHERE khung_gio.mag=tkb_thuc_hanh.mag AND mon.mam=tkb_thuc_hanh.mam AND khung_gio.thu='Thứ 3' AND khung_gio.cabatdau='3'ORDER BY `khung_gio`.`cabatdau` ASC";
	$ca4thu3= "SELECT mon.tenm,`khung_gio`.`cabatdau` FROM `khung_gio`,`tkb_thuc_hanh`,`mon` WHERE khung_gio.mag=tkb_thuc_hanh.mag AND mon.mam=tkb_thuc_hanh.mam AND khung_gio.thu='Thứ 3' AND khung_gio.cabatdau='4'ORDER BY `khung_gio`.`cabatdau` ASC";
	$ca1thu4= "SELECT mon.tenm,`khung_gio`.`cabatdau` FROM `khung_gio`,`tkb_thuc_hanh`,`mon` WHERE khung_gio.mag=tkb_thuc_hanh.mag AND mon.mam=tkb_thuc_hanh.mam AND khung_gio.thu='Thứ 4' AND khung_gio.cabatdau='1'ORDER BY `khung_gio`.`cabatdau` ASC";
	$ca2thu4= "SELECT mon.tenm,`khung_gio`.`cabatdau` FROM `khung_gio`,`tkb_thuc_hanh`,`mon` WHERE khung_gio.mag=tkb_thuc_hanh.mag AND mon.mam=tkb_thuc_hanh.mam AND khung_gio.thu='Thứ 4' AND khung_gio.cabatdau='2'ORDER BY `khung_gio`.`cabatdau` ASC";
	$ca3thu4= "SELECT mon.tenm,`khung_gio`.`cabatdau` FROM `khung_gio`,`tkb_thuc_hanh`,`mon` WHERE khung_gio.mag=tkb_thuc_hanh.mag AND mon.mam=tkb_thuc_hanh.mam AND khung_gio.thu='Thứ 4' AND khung_gio.cabatdau='3'ORDER BY `khung_gio`.`cabatdau` ASC";
	$ca4thu4= "SELECT mon.tenm,`khung_gio`.`cabatdau` FROM `khung_gio`,`tkb_thuc_hanh`,`mon` WHERE khung_gio.mag=tkb_thuc_hanh.mag AND mon.mam=tkb_thuc_hanh.mam AND khung_gio.thu='Thứ 4' AND khung_gio.cabatdau='4'ORDER BY `khung_gio`.`cabatdau` ASC";
	$ca1thu5= "SELECT mon.tenm,`khung_gio`.`cabatdau` FROM `khung_gio`,`tkb_thuc_hanh`,`mon` WHERE khung_gio.mag=tkb_thuc_hanh.mag AND mon.mam=tkb_thuc_hanh.mam AND khung_gio.thu='Thứ 5' AND khung_gio.cabatdau='1'ORDER BY `khung_gio`.`cabatdau` ASC";
	$ca2thu5= "SELECT mon.tenm,`khung_gio`.`cabatdau` FROM `khung_gio`,`tkb_thuc_hanh`,`mon` WHERE khung_gio.mag=tkb_thuc_hanh.mag AND mon.mam=tkb_thuc_hanh.mam AND khung_gio.thu='Thứ 5' AND khung_gio.cabatdau='2'ORDER BY `khung_gio`.`cabatdau` ASC";
	$ca3thu5= "SELECT mon.tenm,`khung_gio`.`cabatdau` FROM `khung_gio`,`tkb_thuc_hanh`,`mon` WHERE khung_gio.mag=tkb_thuc_hanh.mag AND mon.mam=tkb_thuc_hanh.mam AND khung_gio.thu='Thứ 5' AND khung_gio.cabatdau='3'ORDER BY `khung_gio`.`cabatdau` ASC";
	$ca4thu5= "SELECT mon.tenm,`khung_gio`.`cabatdau` FROM `khung_gio`,`tkb_thuc_hanh`,`mon` WHERE khung_gio.mag=tkb_thuc_hanh.mag AND mon.mam=tkb_thuc_hanh.mam AND khung_gio.thu='Thứ 5' AND khung_gio.cabatdau='4'ORDER BY `khung_gio`.`cabatdau` ASC";
	$ca1thu6= "SELECT mon.tenm,`khung_gio`.`cabatdau` FROM `khung_gio`,`tkb_thuc_hanh`,`mon` WHERE khung_gio.mag=tkb_thuc_hanh.mag AND mon.mam=tkb_thuc_hanh.mam AND khung_gio.thu='Thứ 6' AND khung_gio.cabatdau='1'ORDER BY `khung_gio`.`cabatdau` ASC";
	$ca2thu6= "SELECT mon.tenm,`khung_gio`.`cabatdau` FROM `khung_gio`,`tkb_thuc_hanh`,`mon` WHERE khung_gio.mag=tkb_thuc_hanh.mag AND mon.mam=tkb_thuc_hanh.mam AND khung_gio.thu='Thứ 6' AND khung_gio.cabatdau='2'ORDER BY `khung_gio`.`cabatdau` ASC";
	$ca3thu6= "SELECT mon.tenm,`khung_gio`.`cabatdau` FROM `khung_gio`,`tkb_thuc_hanh`,`mon` WHERE khung_gio.mag=tkb_thuc_hanh.mag AND mon.mam=tkb_thuc_hanh.mam AND khung_gio.thu='Thứ 6' AND khung_gio.cabatdau='3'ORDER BY `khung_gio`.`cabatdau` ASC";
	$ca4thu6= "SELECT mon.tenm,`khung_gio`.`cabatdau` FROM `khung_gio`,`tkb_thuc_hanh`,`mon` WHERE khung_gio.mag=tkb_thuc_hanh.mag AND mon.mam=tkb_thuc_hanh.mam AND khung_gio.thu='Thứ 6' AND khung_gio.cabatdau='4'ORDER BY `khung_gio`.`cabatdau` ASC";
	$ca1thu7= "SELECT mon.tenm,`khung_gio`.`cabatdau` FROM `khung_gio`,`tkb_thuc_hanh`,`mon` WHERE khung_gio.mag=tkb_thuc_hanh.mag AND mon.mam=tkb_thuc_hanh.mam AND khung_gio.thu='Thứ 7' AND khung_gio.cabatdau='1'ORDER BY `khung_gio`.`cabatdau` ASC";
	$ca2thu7= "SELECT mon.tenm,`khung_gio`.`cabatdau` FROM `khung_gio`,`tkb_thuc_hanh`,`mon` WHERE khung_gio.mag=tkb_thuc_hanh.mag AND mon.mam=tkb_thuc_hanh.mam AND khung_gio.thu='Thứ 72' AND khung_gio.cabatdau='2'ORDER BY `khung_gio`.`cabatdau` ASC";
	$ca3thu7= "SELECT mon.tenm,`khung_gio`.`cabatdau` FROM `khung_gio`,`tkb_thuc_hanh`,`mon` WHERE khung_gio.mag=tkb_thuc_hanh.mag AND mon.mam=tkb_thuc_hanh.mam AND khung_gio.thu='Thứ 7' AND khung_gio.cabatdau='3'ORDER BY `khung_gio`.`cabatdau` ASC";
	$ca4thu7= "SELECT mon.tenm,`khung_gio`.`cabatdau` FROM `khung_gio`,`tkb_thuc_hanh`,`mon` WHERE khung_gio.mag=tkb_thuc_hanh.mag AND mon.mam=tkb_thuc_hanh.mam AND khung_gio.thu='Thứ 7' AND khung_gio.cabatdau='4'ORDER BY `khung_gio`.`cabatdau` ASC";
	$kq1=mysqli_query($conn,$ca1thu2);
	while($rows1=mysqli_fetch_array($kq1))
{
	$sheet->setCellValue('B2',$rows1[0]);
}
 
$kq2=mysqli_query($conn,$ca1thu3);
	while($rows2=mysqli_fetch_array($kq2))
{
	$sheet->setCellValue('C2',$rows2[0]);
}
 
$kq3=mysqli_query($conn,$ca1thu4);
	while($rows3=mysqli_fetch_array($kq3))
{
	$sheet->setCellValue('D2',$rows3[0]);
}
 
$kq4=mysqli_query($conn,$ca1thu5);
	while($rows4=mysqli_fetch_array($kq4))
{
	$sheet->setCellValue('E2',$rows4[0]);
}
 
$kq5=mysqli_query($conn,$ca1thu6);
	while($rows5=mysqli_fetch_array($kq5))
{
	$sheet->setCellValue('F2',$rows5[0]);;
}
$kq6=mysqli_query($conn,$ca1thu7);
	while($rows6=mysqli_fetch_array($kq6))
{
	$sheet->setCellValue('G2',$rows6[0]);
}
$kq7=mysqli_query($conn,$ca2thu2);
	while($rows7=mysqli_fetch_array($kq7))
{
	$sheet->setCellValue('B3',$rows7[0]);
}
 
$kq8=mysqli_query($conn,$ca2thu3);
	while($rows8=mysqli_fetch_array($kq8))
{
	$sheet->setCellValue('C3',$rows8[0]);
}
 
$kq9=mysqli_query($conn,$ca2thu4);
	while($rows9=mysqli_fetch_array($kq9))
{
	$sheet->setCellValue('D3',$rows9[0]);
}
 
$kq10=mysqli_query($conn,$ca2thu5);
	while($rows10=mysqli_fetch_array($kq10))
{
	$sheet->setCellValue('E3',$rows10[0]);
}
 
$kq11=mysqli_query($conn,$ca2thu6);
	while($rows11=mysqli_fetch_array($kq11))
{
	$sheet->setCellValue('F3',$rows11[0]);
}
 
$kq12=mysqli_query($conn,$ca2thu7);
	while($rows12=mysqli_fetch_array($kq12))
{
	$sheet->setCellValue('G3',$rows12[0]);
}

$kq13=mysqli_query($conn,$ca3thu2);
	while($rows13=mysqli_fetch_array($kq13))
{
	$sheet->setCellValue('B4',$rows13[0]);
}
 
$kq14=mysqli_query($conn,$ca3thu3);
	while($rows14=mysqli_fetch_array($kq14))
{
	$sheet->setCellValue('C4',$rows14[0]);
}
 
$kq15=mysqli_query($conn,$ca3thu4);
	while($rows15=mysqli_fetch_array($kq15))
{
	$sheet->setCellValue('D4',$rows15[0]);
}
 
$kq101=mysqli_query($conn,$ca3thu5);
	while($rows101=mysqli_fetch_array($kq101))
{
	$sheet->setCellValue('E4',$rows101[0]);
}
 
$kq121=mysqli_query($conn,$ca3thu6);
	while($rows121=mysqli_fetch_array($kq121))
{
	$sheet->setCellValue('F4',$rows121[0]);
}
 
$kq132=mysqli_query($conn,$ca3thu7);
	while($rows132=mysqli_fetch_array($kq132))
{
	$sheet->setCellValue('G4',$rows132[0]);
}

$kq74=mysqli_query($conn,$ca4thu2);
	while($rows74=mysqli_fetch_array($kq74))
{
	$sheet->setCellValue('B5',$rows74[0]);
}
 
$kq84=mysqli_query($conn,$ca4thu3);
	while($rows84=mysqli_fetch_array($kq84))
{
	$sheet->setCellValue('C5',$rows84[0]);
}
 
$kq94=mysqli_query($conn,$ca4thu4);
	while($rows94=mysqli_fetch_array($kq94))
{
	$sheet->setCellValue('D5',$rows94[0]);;
}
 
$kq106=mysqli_query($conn,$ca4thu5);
	while($rows106=mysqli_fetch_array($kq106))
{
	$sheet->setCellValue('E5',$rows106[0]);
}
 
$kq116=mysqli_query($conn,$ca4thu6);
	while($rows116=mysqli_fetch_array($kq116))
{
	$sheet->setCellValue('F5',$rows116[0]);
}
 
$kq125=mysqli_query($conn,$ca4thu7);
	while($rows125=mysqli_fetch_array($kq125))
{
	$sheet->setCellValue('G5',$rows125[0]);
}
	$objWriter = new PHPExcel_Writer_Excel2007($objExcel);
	$filename = 'TKBTT.xlsx';
	$objWriter->save($filename);
	$objWriter = PHPExcel_IOFactory::createWriter($objExcel, 'Excel2007');
	 header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
header('Content-Disposition: attachment;filename="TKBTT.xlsx"');
header('Cache-Control: max-age=0');
echo "<h4 style='color:red'> Đã xuất file TKB tạm thời với tên <a href='$filename'> $filename</a></h4>";
}
if(isset($_POST['xttdk'])){
$objExcel = new PHPExcel();
	$objExcel->setActiveSheetIndex(0);
	$sheet = $objExcel->getActiveSheet()->setTitle('TTDKLHP');

	$rowCount = 1;
	$sheet->setCellValue('A'.$rowCount,'Lớp HP Thực Hành');
	$sheet->setCellValue('B'.$rowCount,'Thứ');
	$sheet->setCellValue('C'.$rowCount,'Ca bắt đầu');
	$sheet->setCellValue('D'.$rowCount,'Số lượng sv/lớp');
$strSQL="SELECT tkb_thuc_hanh.matkb, mon.tenm, khung_gio.thu, khung_gio.cabatdau, khung_gio.soca,khung_gio.tuan, tkb_thuc_hanh.soluongsv FROM `tkb_thuc_hanh`,mon,khung_gio WHERE mon.mam=tkb_thuc_hanh.mam AND tkb_thuc_hanh.mag=khung_gio.mag";
	$result = mysqli_query($conn, $strSQL);
	while($row = mysqli_fetch_array($result)){
		$rowCount++;
		$strSQL1="SELECT * from dang_ky where dang_ky.matkb='$row[0]'";
	$kq2=mysqli_query($conn, $strSQL1);
	$ss=mysqli_num_rows($kq2);
		$sheet->setCellValue('A'.$rowCount,$row[1]);
		$sheet->setCellValue('B'.$rowCount,$row[2]);
		$sheet->setCellValue('C'.$rowCount,"Ca".$row[3]);
		$sheet->setCellValue('D'.$rowCount,$ss."/".$row[6]);
	}

	$objWriter = new PHPExcel_Writer_Excel2007($objExcel);
	$filename = 'TTDKLHP.xlsx';
	$objWriter->save($filename);
	$objWriter = PHPExcel_IOFactory::createWriter($objExcel, 'Excel2007');
	 header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
header('Content-Disposition: attachment;filename="TTDKLHP.xlsx"');
header('Cache-Control: max-age=0');
echo "<h4 style='color:red'> Đã xuất file danh sách tình trạng đăng ký học phần của các lớp HP Thực Hành với tên <a href='$filename'> $filename</a></h4>";
}
if(isset($_POST['xdsgv'])){
$objExcel = new PHPExcel();
	$objExcel->setActiveSheetIndex(0);
	$sheet = $objExcel->getActiveSheet()->setTitle('DSGV');

	$rowCount = 1;
	$sheet->setCellValue('A'.$rowCount,'MSGV');
	$sheet->setCellValue('B'.$rowCount,'Họ Tên');
	$sheet->setCellValue('C'.$rowCount,'Mã Khoa');
	$sheet->setCellValue('D'.$rowCount,'Mã HP Giảng Dạy');
$strSQL="SELECT * FROM `giang_vien`";
	$result = mysqli_query($conn, $strSQL);
	while($row = mysqli_fetch_array($result)){
		$rowCount++;
		$sheet->setCellValue('A'.$rowCount,$row[0]);
		$sheet->setCellValue('B'.$rowCount,$row[1]);
		$sheet->setCellValue('C'.$rowCount,$row[2]);
		$sheet->setCellValue('D'.$rowCount,$row[3]);
	}

	$objWriter = new PHPExcel_Writer_Excel2007($objExcel);
	$filename = 'DSGV.xlsx';
	$objWriter->save($filename);
	$objWriter = PHPExcel_IOFactory::createWriter($objExcel, 'Excel2007');
	 header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
header('Content-Disposition: attachment;filename="DSGV.xlsx"');
header('Cache-Control: max-age=0');
echo "<h4 style='color:red'> Đã xuất file danh sách giảng viên với tên <a href='$filename'> $filename</a></h4>";
}
if(isset($_POST['xdssv'])){
$objExcel = new PHPExcel();
	$objExcel->setActiveSheetIndex(0);
	$sheet = $objExcel->getActiveSheet()->setTitle('DSSVCDK');

	$rowCount = 1;
	$sheet->setCellValue('A'.$rowCount,'MSSV');
	$sheet->setCellValue('B'.$rowCount,'Họ Tên');
	$sheet->setCellValue('C'.$rowCount,'Mã Lớp');
$strSQL="SELECT * FROM sinh_vien WHERE sinh_vien.masv NOT IN (SELECT dang_ky.masv FROM dang_ky)";
	$result = mysqli_query($conn, $strSQL);
	while($row = mysqli_fetch_array($result)){
		$rowCount++;
		$sheet->setCellValue('A'.$rowCount,$row['masv']);
		$sheet->setCellValue('B'.$rowCount,$row['tensv']);
		$sheet->setCellValue('C'.$rowCount,$row['mal']);
	}

	$objWriter = new PHPExcel_Writer_Excel2007($objExcel);
	$filename = 'DSSVCDK.xlsx';
	$objWriter->save($filename);
	$objWriter = PHPExcel_IOFactory::createWriter($objExcel, 'Excel2007');
	 header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
header('Content-Disposition: attachment;filename="DSSVCDK.xlsx"');
header('Cache-Control: max-age=0');
echo "<h4 style='color:red'> Đã xuất file danh sách sinh viên chưa đăng ký học phần với tên <a href='$filename'> $filename</a></h4>";
}
if(isset($_POST['xdsl'])){
	$objExcel = new PHPExcel();
	$numSheet = 0;
	$strSQL = "SELECT * FROM tkb_thuc_hanh";
	$result = mysqli_query($conn, $strSQL);
	while($rows = mysqli_fetch_array($result)){
		
		$objExcel->createSheet();
		$objExcel->setActiveSheetIndex($numSheet);
		$sheet = $objExcel->getActiveSheet()->setTitle($rows[0].$rows[1]);
		$numRow = 1;
		$sheet->setCellValue("A$numRow",'MSSV');
		$sheet->setCellValue("B$numRow",'Họ tên');

	$sql1="SELECT sinh_vien.masv, sinh_vien.tensv FROM sinh_vien,dang_ky,tkb_thuc_hanh WHERE dang_ky.matkb=tkb_thuc_hanh.matkb AND sinh_vien.masv=dang_ky.masv AND tkb_thuc_hanh.matkb='$rows[0]'";
		$diem = mysqli_query($conn, $sql1);
		while($hocsinh = mysqli_fetch_array($diem)){
			$numRow++;
			$sheet->setCellValue("A$numRow",$hocsinh['0']);
			$sheet->setCellValue("B$numRow",$hocsinh['1']);
		}
		$numSheet++;
	}
	$objWriter = new PHPExcel_Writer_Excel2007($objExcel);
	$filename = "DSLHPTH.xlsx";
	$objWriter->save($filename);
	$objWriter = PHPExcel_IOFactory::createWriter($objExcel, 'Excel2007');
	 header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
header('Content-Disposition: attachment;filename="DSSVCDK.xlsx"');
header('Cache-Control: max-age=0');
echo "<h4 style='color:red'> Đã xuất file danh sách lớp HPTH với tên <a href='$filename'> $filename</a></h4>";
}
?>
    	</div>
		</div>
	</div>

</div>
