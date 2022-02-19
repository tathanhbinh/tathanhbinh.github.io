<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<title>TOOL</title>
</head>
<?php
if(isset($_POST['code']))
{
	$ma1=$_POST['code'];
	$kq1="Kết quả sau khi giải mã: ".base64_decode($ma1);
}
else
{
$ma1="";
$kq1="";
}
if(isset($_POST['code1']))
{
	$ma2=$_POST['code1'];
	$kq2="Kết quả sau khi mã hóa: ".base64_encode($ma2);
}
else
{
$ma2="";
$kq2="";
}
?>
<style>
.container {
	margin-top:100px;
  width: 1000px;
  border: none;
  padding: 10px;
 /* overflow: auto;*/
}

/*==cột #post==*/
#post {
	display:none;
  width: 300px;
  height: auto;
  background: #e8e8e8;
  float: left;
}

/*==cột #sidebar==*/
#sidebar {
  width: 1000px;
  height: auto;
  float: right;
}
</style>
<body>
<div id="content" class="container">
  <div id="post">
  </div>
  <div id="sidebar">
<center><h1>TOOL BASE64</h1></center>
<div class="container" style="margin-top:50px">
  <form action="tool-trl.php" method="post">
    <label for="email2" class="mb-2 mr-sm-2">Nhập mã Base64:</label>
    <input type="text" class="form-control" id="email2" placeholder="Nhập vào đây" name="code" value="<?php echo $ma1;?>">   
    <button type="submit" class="btn btn-primary mb-2">Giải mã</button>
  </form>
  <span> <?php echo $kq1;?></span>
</div>
<div class="container" style="margin-top:50px">
  <form action="tool-trl.php" method="post">
    <label for="email2" class="mb-2 mr-sm-2">Nhập chuỗi ký tự:</label>
    <input type="text" class="form-control" id="email2" placeholder="Nhập vào đây" name="code1" value="<?php echo $ma2;?>">   
    <button type="submit" class="btn btn-primary mb-2">Mã hóa</button>
  </form>
  <span> <?php echo $kq2;?></span>
</div>
</div>
</div>
</body>
</html>