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
                <input type="hidden" name="page" value="ds-gv" />
                <td>Chọn học phần:</td><td><select form="add-tkb" name="mlop">
<?php
$strSQL="SELECT * FROM `mon`";
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
		echo "<center><h2>DANH SÁCH GIẢNG VIÊN HỌC PHẦN $matkb</h2></center>
    <table class='table'><thead class='thead-light'>
                <tr><th>Mã giảng viên</th><th>Tên giảng viên</th><th>Mã học phần giảng dạy</th></tr></thead> ";
$strSQL="SELECT * FROM `giang_vien` WHERE mam='$matkb'";
	$kq=mysqli_query($conn, $strSQL);
	while($rows=mysqli_fetch_array($kq))
{
	echo"<tr><td>$rows[0]</td><td>$rows[1]</td><td>$rows[3]</td></tr>";
}
	
	
}else {
		echo "<center><h2>DANH SÁCH TẤT CẢ GIẢNG VIÊN</h2></center>
    <table class='table'><thead class='thead-light'>
                <tr><th>Mã giảng viên</th><th>Tên giảng viên</th><th>Mã học phần giảng dạy</th></tr></thead> ";
$strSQL="SELECT * FROM `giang_vien`";
	$kq=mysqli_query($conn, $strSQL);
	while($rows=mysqli_fetch_array($kq))
{
	echo"<tr><td>$rows[0]</td><td>$rows[1]</td><td>$rows[3]</td></tr>";
}
	
	}
?>
</table>
			</div>
		</div>
	</div>
</div>