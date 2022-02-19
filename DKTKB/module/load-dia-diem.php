<select form="add-tkb" name="dia-diem">
<?php
$strSQL="select * from dia_diem";
	$kq=mysqli_query($conn, $strSQL);
	while($rows=mysqli_fetch_array($kq))
{
	echo "<option value='$rows[0]'> $rows[1] </option>";
}
?>
</select>