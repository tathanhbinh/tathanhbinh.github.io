<select form="add-tkb" name="khung-gio">
<?php
for	($thu=2; $thu<=7;$thu++)
{
	for($ca=1;$ca<=4;$ca++)
	{
		echo "<option>Thứ $thu ca $ca</option>";
	}
}
?>
</select>