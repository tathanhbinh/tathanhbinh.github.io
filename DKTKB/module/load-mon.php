<?php
$strSQL="select * from mon";
	$kq=mysqli_query($conn, $strSQL);
	while($rows=mysqli_fetch_array($kq))
{
	$i=1;
	echo "<input type='checkbox' name='mon[]' value='$rows[0]' id='mon_".$i."'>
    <label for='mon_$i'>$rows[1]</label>";
	$i++;
}
?>
