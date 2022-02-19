<style>
* { /* reset lại margin và padding cho các tag */
    margin: 0;
    padding: 0;
}
.tableStyle {
     border: 1px solid #ccc;
    width: 100%;
	margin-bottom:20px;
}
.tableStyle th {
    background-color: #cad8fa;
    padding: 5px;
}
.tableStyle td {
    background-color: #f0e7da;
    padding: 5px;
}

</style>

<div class="span9">
	<div class="row-fluid">
		<div class="block">
			<div id="chart-container" class="block-body collapse in">
<div class="form-group">
  <center><h2>THỜI KHÓA BIỂU THỰC HÀNH DỰ KIẾN</h2></center>
  <center><select style="margin-top:10px" class="form-control" id="tuan">
    <?php
	for($i=1;$i<=18;$i++)
	echo "<option>Tuần $i</option>";
	?>
  </select></center> <form action="../module/del_tkb.php"> <button type="submit" class="btn btn-primary mb-2">Delete TKB</button></form>
</div>
            
                <table class="tableStyle">
    <tr>
    <th>Thứ/Ca</th>
    <th>Thứ 2</th>
    <th>Thứ 3</th>
    <th>Thứ 4</th>
    <th>Thứ 5</th>
    <th>Thứ 6</th>
    <th>Thứ 7</th>
    </tr>
    <?php 
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
echo "<tr><th>Ca 1</th>
<td>";
$kq1=mysqli_query($conn,$ca1thu2);
	while($rows1=mysqli_fetch_array($kq1))
{
	echo "$rows1[0] <br>";
}
echo "</td><td>";
$kq2=mysqli_query($conn,$ca1thu3);
	while($rows2=mysqli_fetch_array($kq2))
{
	echo "$rows2[0] <br>";
}
echo "</td><td>";
$kq3=mysqli_query($conn,$ca1thu4);
	while($rows3=mysqli_fetch_array($kq3))
{
	echo "$rows3[0] <br>";
}
echo "</td><td>";
$kq4=mysqli_query($conn,$ca1thu5);
	while($rows4=mysqli_fetch_array($kq4))
{
	echo "$rows4[0] <br>";
}
echo "</td><td>";
$kq5=mysqli_query($conn,$ca1thu6);
	while($rows5=mysqli_fetch_array($kq5))
{
	echo "$rows5[0] <br>";
}
echo "</td><td>";
$kq6=mysqli_query($conn,$ca1thu7);
	while($rows6=mysqli_fetch_array($kq6))
{
	echo "$rows6[0] <br>";
}
echo "</td>
</tr>";
echo "<tr><th>Ca 2</th><td>";
$kq7=mysqli_query($conn,$ca2thu2);
	while($rows7=mysqli_fetch_array($kq7))
{
	echo "$rows7[0] <br>";
}
echo "</td><td>";
$kq8=mysqli_query($conn,$ca2thu3);
	while($rows8=mysqli_fetch_array($kq8))
{
	echo "$rows8[0]<br>";
}
echo "</td><td>";
$kq9=mysqli_query($conn,$ca2thu4);
	while($rows9=mysqli_fetch_array($kq9))
{
	echo "$rows9[0] <br>";
}
echo "</td><td>";
$kq10=mysqli_query($conn,$ca2thu5);
	while($rows10=mysqli_fetch_array($kq10))
{
	echo "$rows10[0] <br>";
}
echo "</td><td>";
$kq11=mysqli_query($conn,$ca2thu6);
	while($rows11=mysqli_fetch_array($kq11))
{
	echo "$rows11[0]<br>";
}
echo "</td><td>";
$kq12=mysqli_query($conn,$ca2thu7);
	while($rows12=mysqli_fetch_array($kq12))
{
	echo "$rows12[0] <br>";
}
echo "</td> </tr>";
echo "<tr><th>Ca 3</th> <td>";
$kq13=mysqli_query($conn,$ca3thu2);
	while($rows13=mysqli_fetch_array($kq13))
{
	echo "$rows13[0] <br>";
}
echo "</td><td>";
$kq14=mysqli_query($conn,$ca3thu3);
	while($rows14=mysqli_fetch_array($kq14))
{
	echo "$rows14[0]<br>";
}
echo "</td><td>";
$kq15=mysqli_query($conn,$ca3thu4);
	while($rows15=mysqli_fetch_array($kq15))
{
	echo "$rows15[0] <br>";
}
echo "</td><td>";
$kq101=mysqli_query($conn,$ca3thu5);
	while($rows101=mysqli_fetch_array($kq101))
{
	echo "$rows101[0] <br>";
}
echo "</td><td>";
$kq121=mysqli_query($conn,$ca3thu6);
	while($rows121=mysqli_fetch_array($kq121))
{
	echo "$rows121[0]<br>";
}
echo "</td><td>";
$kq132=mysqli_query($conn,$ca3thu7);
	while($rows132=mysqli_fetch_array($kq132))
{
	echo "$rows132[0] <br>";
}
echo "</td></tr>";
echo "<tr><th>Ca 4</th> <td>";
$kq74=mysqli_query($conn,$ca4thu2);
	while($rows74=mysqli_fetch_array($kq74))
{
	echo "$rows74[0] <br>";
}
echo "</td><td>";
$kq84=mysqli_query($conn,$ca4thu3);
	while($rows84=mysqli_fetch_array($kq84))
{
	echo "$rows84[0]<br>";
}
echo "</td><td>";
$kq94=mysqli_query($conn,$ca4thu4);
	while($rows94=mysqli_fetch_array($kq94))
{
	echo "$rows94[0] <br>";
}
echo "</td><td>";
$kq106=mysqli_query($conn,$ca4thu5);
	while($rows106=mysqli_fetch_array($kq106))
{
	echo "$rows106[0] <br>";
}
echo "</td><td>";
$kq116=mysqli_query($conn,$ca4thu6);
	while($rows116=mysqli_fetch_array($kq116))
{
	echo "$rows116[0]<br>";
}
echo "</td><td>";
$kq125=mysqli_query($conn,$ca4thu7);
	while($rows125=mysqli_fetch_array($kq125))
{
	echo "$rows125[0] <br>";
}
echo "</td></tr>";
?>
</table>           
            </div>
		</div>
	</div>

</div>
<script>
</script>