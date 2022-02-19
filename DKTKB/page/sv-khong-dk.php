<div class="span9">
	<div class="row-fluid">
		<div class="block">
			<div id="chart-container" class="block-body collapse in">
            <center><h2>DANH SÁCH SINH VIÊN CHƯA ĐĂNG KÝ HỌC PHẦN</h2></center>
    <table class='table'><thead class='thead-light'>
                <tr><th>Mã số sinh viên</th><th>Tên</th><th>Mã lớp</th></tr></thead>        
<?php
$strSQL="SELECT * FROM sinh_vien WHERE sinh_vien.masv NOT IN (SELECT dang_ky.masv FROM dang_ky)";
	$kq=mysqli_query($conn, $strSQL);
	while($rows=mysqli_fetch_array($kq))
{
	echo"<tr><td>$rows[0]</td><td>$rows[1]</td><td>$rows[2]</td></tr>";
}
?>
</table>
			</div>
		</div>
	</div>
</div>