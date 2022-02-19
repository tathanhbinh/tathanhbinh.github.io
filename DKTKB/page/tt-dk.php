<div class="span9">
	<div class="row-fluid">
		<div class="block">
			<div id="chart-container" class="block-body collapse in">
            <center><h2>TÌNH TRẠNG ĐĂNG KÝ CỦA CÁC LỚP HỌC PHẦN</h2></center>
    <table class='table'><thead class='thead-light'>
                <tr><th>Lớp thực hành</th><th>Thứ</th><th>Ca bắt đầu</th><th>Số lượng sv\lớp</th></tr></thead>        
<?php
$strSQL="SELECT tkb_thuc_hanh.matkb, mon.tenm, khung_gio.thu, khung_gio.cabatdau, khung_gio.soca,khung_gio.tuan, tkb_thuc_hanh.soluongsv FROM `tkb_thuc_hanh`,mon,khung_gio WHERE mon.mam=tkb_thuc_hanh.mam AND tkb_thuc_hanh.mag=khung_gio.mag";
	$kq=mysqli_query($conn, $strSQL);
	while($rows=mysqli_fetch_array($kq))
{
	$strSQL1="SELECT * from dang_ky where dang_ky.matkb='$rows[0]'";
	$kq2=mysqli_query($conn, $strSQL1);
	$ss=mysqli_num_rows($kq2);
	echo"<tr><td>$rows[1]</td><td>$rows[2]</td><td>Ca $rows[3]</td><td>$ss/$rows[6]</td></tr>";
}
?>
</table>
			</div>
		</div>
	</div>
</div>