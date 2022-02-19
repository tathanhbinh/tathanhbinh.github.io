<?php
session_start();
if (isset($_SESSION['user']) == false) {
	header('Location: page/login.php');
}
else
{
	if($_SESSION['loai']==1)
	{
		header('Location: dang-ky-tkb.php');
	}
	elseif($_SESSION['loai']==0)
	{
		header('Location: quan-tri.php');
	}
	else
	{
		header('Location: login.php');
	}
}
?>