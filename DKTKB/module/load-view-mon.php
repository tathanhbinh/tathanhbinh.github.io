<style>
* { /* reset lại margin và padding cho các tag */
    margin: 0;
    padding: 0;
}
.tableStyle {
     border: none;
    width: 100%;
	margin-bottom:20px;
}
.tableStyle th {
    background-color: #cad8fa;
    padding: 5px;
}
.tableStyle td {
   
    padding: 5px;
}

</style>
<div class="span9">
	<div class="row-fluid">
		<div class="block">
			<div id="chart-container" class="block-body collapse in">
<table class="tableStyle">
<tr>
<th>Mã học phần</th>
<th>Tên học phần</th>
<th>Delete</th>
</tr>
<?php
$strSQL="select * from mon";
	$kq=mysqli_query($conn, $strSQL);
	while($rows=mysqli_fetch_array($kq))
{
	echo "<tr>";
	echo "<td>$rows[0]</td><td>$rows[1]</td><td><a href=../module/del_mon.php?mahp=$rows[0]><i class='fas fa-trash'></i></a></td>";
	echo "</tr>";
}
?>
</table>
			</div>
		</div>
	</div>

</div>
<div class="span9">
	<div class="row-fluid">
		<div class="block">
			<div id="chart-container" class="block-body collapse in">		
            <center><h3>Thêm Mới Học Phần</h3></center><center>
            
            <form style="margin-top:10px" name="mon" action="../module/is_mon.php" method="post">
  <div class="row">
    <div class="col">
      <input type="text" class="form-control" id="mahp" placeholder="Nhập mã học phần" name="mahp">
    </div>
    <div class="col">
      <input type="text" class="form-control" placeholder="Nhập tên học phần" name="tenhp"><br />
      <strong><button type="submit" class="btn btn-primary mb-2">Thêm</button></strong>
    </div>
  </div>
</form></center>
            </div>
		</div>
	</div>

</div>