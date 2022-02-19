<style>
select{
width:500px;
}

</style>
<div class="span9">
	<div class="row-fluid">
		<div class="block">
			<div id="chart-container" class="block-body collapse in" style="margin-bottom:350px">

                <table>
                <tr><form id="add-tkb" action="dang-ky-tkb.php" method="get">
                <input type="hidden" name="page" value="dang-ky" />
                <td>Chọn học phần:</td><td><select form="add-tkb" name="mam">
<?php
$strSQL="SELECT DISTINCT mon.mam, mon.tenm FROM mon,tkb_thuc_hanh WHERE mon.mam=tkb_thuc_hanh.mam";
	$kq=mysqli_query($conn, $strSQL);
	while($rows=mysqli_fetch_array($kq))
{
	echo "<option value='$rows[0]'>$rows[1]</option>";
}
?>
</select>&nbsp;<button type="submit" class="btn btn-primary mb-2">KIỂM TRA</button> </td>
<td>
</td></form>
                </tr>
                </table>
                <table class="table"><thead class="thead-light">
                <tr><th>Lớp thực hành</th><th>Thứ</th><th>Ca bắt đầu</th><th>Số ca</th><th>Tuần</th><th>Số lượng sv\lớp</th><th>Đăng ký</th> </tr></thead>
                <?php
				if(isset($_GET['mam']))
				{
					$mam=$_GET['mam']; 
					$strSQLk="SELECT * FROM sinh_vien,tkb_thuc_hanh,dang_ky,mon WHERE dang_ky.masv=sinh_vien.masv AND dang_ky.matkb=tkb_thuc_hanh.matkb AND sinh_vien.masv='".$_SESSION['user']."' AND tkb_thuc_hanh.mam=mon.mam AND mon.mam='$mam'";
	$kqk=mysqli_query($conn, $strSQLk);
	if(mysqli_num_rows($kqk)>0)
	{
		$strSQL="SELECT tkb_thuc_hanh.matkb, mon.tenm, khung_gio.thu, khung_gio.cabatdau, khung_gio.soca,khung_gio.tuan, tkb_thuc_hanh.soluongsv FROM `tkb_thuc_hanh`,mon,khung_gio WHERE mon.mam=tkb_thuc_hanh.mam AND tkb_thuc_hanh.mag=khung_gio.mag AND mon.mam='".$mam."'";
	$kq=mysqli_query($conn, $strSQL);
	while($rows=mysqli_fetch_array($kq))
{
	$strSQL1="SELECT * from dang_ky where dang_ky.matkb='$rows[0]'";
	$kq2=mysqli_query($conn, $strSQL1);
	$ss=mysqli_num_rows($kq2);
	echo"<tr><td>$rows[1]</td><td>$rows[2]</td><td>Ca $rows[3]</td><td>$rows[4]</td><td>";
	for($i=1;$i<=$rows[5];$i++)
	{
		echo"$i ";
	}
	echo "</td><td>$ss/$rows[6]</td><td> <a href='#'><i style='color:red' class='fas fa-ban'></i>
</a></td></tr>";
}
		}
	else{
					$strSQL="SELECT tkb_thuc_hanh.matkb, mon.tenm, khung_gio.thu, khung_gio.cabatdau, khung_gio.soca,khung_gio.tuan, tkb_thuc_hanh.soluongsv FROM `tkb_thuc_hanh`,mon,khung_gio WHERE mon.mam=tkb_thuc_hanh.mam AND tkb_thuc_hanh.mag=khung_gio.mag AND mon.mam='".$mam."'";
	$kq=mysqli_query($conn, $strSQL);
	while($rows=mysqli_fetch_array($kq))
{
	$strSQL1="SELECT * from dang_ky where dang_ky.matkb='$rows[0]'";
	$kq2=mysqli_query($conn, $strSQL1);
	$ss=mysqli_num_rows($kq2);
	echo"<tr><td>$rows[1]</td><td>$rows[2]</td><td>Ca $rows[3]</td><td>$rows[4]</td><td>";
	for($i=1;$i<=$rows[5];$i++)
	{
		echo"$i ";
	}
	if($ss<$rows[6])
	echo "</td><td>$ss/$rows[6]</td><td> <a href='../module/dktkb.php?matkb=$rows[0]'>Đăng Ký</a></td></tr>";
	else
	{
		echo "</td><td>$ss/$rows[6]</td><td> <a href='#'><i style='color:red' class='fas fa-ban'></i>
</a></td></tr>";
	}
}
	}
				}
				else{
					$strSQL="select * from tkb_thuc_hanh";
					$kq=mysqli_query($conn, $strSQL);
					if(mysqli_num_rows($kq)>0)
					{
						
					}
					else
					{
						echo "<center>Học kỳ hiện chưa có thời khóa biểu thực hành</center>";
					}
				}
				
				?>
                
</center></table>
			</div>
		</div>
	</div>

</div>