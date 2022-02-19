<div class="span9">
	<div class="row-fluid">
		<div class="block" style="height:500px">
			<div id="chart-container" class="block-body collapse in">
            
<?php
	$strSQL='select * from dang_ky where masv="'.$_SESSION['user'].'"';
	$kq=mysqli_query($conn, $strSQL);
 	if(mysqli_num_rows($kq)>0)
	{ echo "<table class='table'><thead class='thead-light'>
                <tr><th>Lớp thực hành</th><th>Thứ</th><th>Ca bắt đầu</th><th>Số ca</th><th>Tuần</th><th>Số lượng sv\lớp</th><th>Hủy đăng ký</th> </tr></thead>";
		$strSQL2='SELECT dang_ky.id, mon.tenm, khung_gio.thu, khung_gio.cabatdau, khung_gio.soca,khung_gio.tuan, tkb_thuc_hanh.soluongsv FROM `tkb_thuc_hanh`,mon,khung_gio,dang_ky,sinh_vien WHERE mon.mam=tkb_thuc_hanh.mam AND tkb_thuc_hanh.mag=khung_gio.mag AND sinh_vien.masv=dang_ky.masv AND dang_ky.matkb=tkb_thuc_hanh.matkb AND sinh_vien.masv="'.$_SESSION['user'].'"';
	$kq2=mysqli_query($conn, $strSQL2);
	while($rows=mysqli_fetch_array($kq2))
{
	echo"<tr><td>$rows[1]</td><td>$rows[2]</td><td>Ca $rows[3]</td><td>$rows[4]</td><td>";
	for($i=1;$i<=$rows[5];$i++)
	{
		echo"$i ";
	}
	echo "</td><td>$rows[6]</td><td> <a href='../module/del_dang_ky.php?madk=$rows[0]'>Hủy</a></td></tr>";
} 
echo "</table>";
?>

<?php
}	
	else
	{
		?><center>
        <h3 style="color:#F00">
		<?php
		echo "Sinh viên hiện chưa đăng ký thời khóa biểu thực hành";
		?>
        </h3><img src="../images/logo.png" style="margin-top:12%;margin-bottom:12%; width:200px; height:200px">
        </center>
        <?php
	}
?>
			</div>
		</div>
	</div>

</div>