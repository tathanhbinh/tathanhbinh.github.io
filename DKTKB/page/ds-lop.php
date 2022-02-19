<style>
select{
width:500px;
}

</style>
<div class="span9">
	<div class="row-fluid">
		<div class="block">
			<div id="chart-container" class="block-body collapse in" >
                <table>
                <tr><form id="add-tkb" action="quan-tri.php" method="get">
                <input type="hidden" name="page" value="ds-lop" />
                <td>Chọn lớp học phần:</td><td><select form="add-tkb" name="mlop">
<?php
$strSQL="SELECT DISTINCT tkb_thuc_hanh.matkb, mon.tenm, khung_gio.thu, khung_gio.cabatdau FROM mon,tkb_thuc_hanh,khung_gio WHERE mon.mam=tkb_thuc_hanh.mam AND khung_gio.mag=tkb_thuc_hanh.mag";
	$kq=mysqli_query($conn, $strSQL);
	while($rows=mysqli_fetch_array($kq))
{
	echo "<option value='$rows[0]'>$rows[1] - $rows[2] - $rows[3]</option>";
}
?>
</select>&nbsp;<button type="submit" class="btn btn-primary mb-2">KIỂM TRA</button> </td>
<td>
</td></form>
                </tr>
                </table>
               
			</div>
		</div>
	</div>
</div>
<div class="span9">
	<div class="row-fluid">
		<div class="block">
			<div id="chart-container" class="block-body collapse in">
                   
<?php
if(isset($_GET['mlop']))
{
	$matkb=$_GET['mlop'];
	$strSQL="SELECT DISTINCT sinh_vien.masv, sinh_vien.tensv FROM sinh_vien,dang_ky,tkb_thuc_hanh WHERE dang_ky.matkb=tkb_thuc_hanh.matkb AND sinh_vien.masv=dang_ky.masv AND tkb_thuc_hanh.matkb='$matkb'";
	$kq=mysqli_query($conn, $strSQL);
 	if(mysqli_num_rows($kq)>0)
	{
		echo "<center><h2>DANH SÁCH SINH VIÊN</h2></center>
    <table class='table'><thead class='thead-light'>
                <tr><th>Mã số sinh viên</th><th>Tên</th></tr></thead> ";
$strSQL="SELECT DISTINCT sinh_vien.masv, sinh_vien.tensv FROM sinh_vien,dang_ky,tkb_thuc_hanh WHERE dang_ky.matkb=tkb_thuc_hanh.matkb AND sinh_vien.masv=dang_ky.masv AND tkb_thuc_hanh.matkb='$matkb'";
	$kq=mysqli_query($conn, $strSQL);
	while($rows=mysqli_fetch_array($kq))
{
	echo"<tr><td>$rows[0]</td><td>$rows[1]</td></tr>";
}
	}
	else echo "<center><h2>LỚP CHƯA CÓ SINH VIÊN ĐĂNG KÝ</h2></center>";
}else echo "<center><h2>CHỌN LỚP HỌC PHẦN ĐỂ XEM DANH SÁCH SINH VIÊN</h2></center>";
?>
</table>
			</div>
		</div>
	</div>
</div>