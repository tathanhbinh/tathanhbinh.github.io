<?php
session_start();
if (isset($_SESSION['user']) == false) {
	header('Location: page/login.php');
}
else
	header('Location: page/index.php');
?>