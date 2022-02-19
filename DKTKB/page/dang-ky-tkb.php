<?php 
	ini_set( "display_errors", 0); 
	session_start();
	// Cek Login
	if (isset($_SESSION['user']) && $_SESSION['loai']==1){  
	require_once('../module/connect/conn.php');
	?>	
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Hệ Thống Đăng Ký Thời Khóa Biểu Thực Hành</title>
    <link rel="shortcut icon" type="image/png" href="images/lgth.png"/>
    <meta content="IE=edge,chrome=1" http-equiv="X-UA-Compatible">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="lib/bootstrap/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="lib/bootstrap/css/bootstrap-responsive.css">
    <link rel="stylesheet" type="text/css" href="../css/theme.css">
    <script src='https://kit.fontawesome.com/a076d05399.js'></script>
    <link rel="stylesheet" href="lib/font-awesome/css/font-awesome.css">
    <script src="lib/jquery-1.8.1.min.js" type="text/javascript"></script>
	<script type="text/javascript" src="lib/jquery.validate.min.js"></script>
 </head>
<style>
td{
	font-family:Arial, Helvetica, sans-serif;
	text-align:center;
}
tr{
	font-family:Arial, Helvetica, sans-serif;
	text-align:center;
}
table{
	font-family:Arial, Helvetica, sans-serif;
text-align:center;
}
div{
font-family:Arial, Helvetica, sans-serif;
}
body
{
	font-family:Arial, Helvetica, sans-serif;
}
ul
{
	font-family:Arial, Helvetica, sans-serif;
}
li
{
	font-family:Arial, Helvetica, sans-serif;
	color:#FFF;
}
</style>
  <body> 
	<script>var $jnoc = jQuery.noConflict();</script>
    
    <div class="navbar" style="background-color:#FFF ; border: none">
        <div class="navbar-inner" style=" border: none; height:100px">
            <div class="container-fluid" style="background-image:url(../images/HD.png); border: none; height:100px;background-repeat: no-repeat;background-position: center;background-color:#003">
               
            </div>
             <span style="float:right;color:#000; font-style:normal; font-weight:bold; font-size:18px; margin-top:22px; margin-right:10px; font-family:'Times New Roman', Times, serif
                ">Xin chào <?php echo  $_SESSION['name'];?></span>
        </div>
        
    </div>
    

    <div class="container-fluid">
        
        <div class="row-fluid">
            <div class="span3">
                <div class="sidebar-nav">
                <a href="dang-ky-tkb.php?page=home"><div style="background-color:#00C; color:#FFF; font-size:16px; font-weight:bold;" class="nav-header" data-toggle="collapse" data-target="#home-menu"><img  height="30" width="30" src="../images/user-profile.png"/>&nbsp;&nbsp;Trang Chủ</div>
                <ul id="home-menu" class="nav nav-list collapse in" style="border:none; background-color:rgb(4,84,175);color:#FFF">
                       
                    </ul></a>
                  <a href="dang-ky-tkb.php?page=dang-ky"><div style="background-color:#00C; color:#FFF; font-size:16px; font-weight:bold;" class="nav-header" data-toggle="collapse" data-target="#dashboard-menu"><img  height="30px" width="30px" src="../images/tick.png"/>&nbsp;&nbsp;Đăng Ký Thời Khóa Biểu<span style="float:right"></span></div>
                    <ul id="dashboard-menu" class="nav nav-list collapse in" style="border:none; background-color:rgb(4,84,175);color:#FFF">
                        
                    </ul>
                    </a>
                    <a href="dang-ky-tkb.php?page=logout"><div style="background-color:#00C; color:#FFF; font-size:16px; font-weight:bold;" class="nav-header" data-toggle="collapse" data-target="#back-menu"><img  height="30px" width="30px" src="../images/logout.png"/>&nbsp;&nbsp;Đăng Xuất</div>
                <ul id="back-menu" class="nav nav-list collapse in" style="border:none">
                    </ul></a>
			</div>
        </div>
      
	  <?php 

			@$hal=$_GET['page'];
			if(!$hal){ include "../module/home.php"; }
			else {
			switch($hal){
			case "home" : include "../module/home.php"; break;
			case "dang-ky" : include "../module/dang-ky.php"; break;
			
			case "logout" : include "../module/logout.php";break;
			default : include "page_null.php"; break;
			}
			}
		?>

    </div>  
    </div>
    
       <div style="background-image:url(../images/thft.png); height:100px; width:100%; float:right;text-align:center; color:#FFF">
       <br>
<strong>Bản Quyền thuộc về ...</strong>
<p>Địa chỉ: ...</p>
<p> Điện Thoại: ... </p>

</div>

    <script src="lib/bootstrap/js/bootstrap.js"></script>
  </body>
</html>

<?php } else {
		header("location:../index.php");
	}
	?>