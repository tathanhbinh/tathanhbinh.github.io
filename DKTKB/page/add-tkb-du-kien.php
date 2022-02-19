<style>
select{
width:600px;
}
td{
	text-align:left;
	font-weight:bold;
}
</style>
<div class="span9">
	<div class="row-fluid">
		<div class="block">

			<div id="chart-container" class="block-body collapse in">
            <center><h2>THÊM THỜI KHÓA BIỂU THỰC HÀNH DỰ KIẾN</h2></center>
<form id="add-tkb" action="../module/is-tkb.php" method="post">
                <table>
                <tr>
                <td>Chọn học kỳ:</td><td><select form="add-tkb" name="hocky">
<?php
$strSQL="select * from hoc_ky";
	$kq=mysqli_query($conn, $strSQL);
	while($rows=mysqli_fetch_array($kq))
{
	echo "<option value='$rows[0]'>$rows[1]</option>";
}
?>
</select> </td>
<td>
</td>
                </tr>
                <tr>
                <td>Chọn Học Phần:</td><td> <?php include "../module/load-mon.php"; ?></td>
                </tr>
                <tr>
                <td>Số lượng sinh viên:</td><td> <input type="number" name="slsv" value="30"/></td>
                </tr>
                <tr>
                <td>Số lớp:</td><td> <input type="number" name="slop" value="1"/></td>
                </tr>
                <tr>
                <td colspan="2"><button type="submit" class="btn btn-primary mb-2">Xác Nhận</button></td>
                </tr>
                </table>
</form>
			</div>
		</div>
	</div>

</div>