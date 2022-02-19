<?php 
	ini_set( "display_errors", 0); 
	session_start();
	// Cek Login
	if (isset($_SESSION['user']) && $_SESSION['loai']==0){  
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
#dashboard-menu
{
}
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
	<script>
	var $jnoc = jQuery.noConflict();
    </script>
    <div class="navbar" style="background-color:#FFF ; border: none">
        <div class="navbar-inner" style=" border: none; height:100px">
            <div class="container-fluid" style="background-image:url(../images/HD.png); border: none; height:100px;background-repeat: no-repeat;background-position: center;background-color:#003;">
               
            </div>
             <span style="float:right;color:#000; font-style:normal; font-weight:bold; font-size:18px; margin-top:22px; margin-right:10px; font-family:'Times New Roman', Times, serif
                ">Xin chào <?php echo  $_SESSION['name'];?></span>
        </div>
        
    </div>
    

    <div class="container-fluid">
        
        <div class="row-fluid">
            <div class="span3">
                <div class="sidebar-nav">
                <a href="quan-tri.php?page=home"><div style="background-color:#00C; color:#FFF; font-size:16px; font-weight:bold;" class="nav-header" data-toggle="collapse" data-target="#home-menu"><img  height="40" width="40" src="../images/home.png"/>&nbsp;&nbsp;Trang Chủ</div>
                <ul id="home-menu" class="nav nav-list collapse in" style="border:none; background-color:rgb(4,84,175);color:#FFF">
                       
                    </ul></a>
                  <div style="background-color:#00C; color:#FFF; font-size:16px; font-weight:bold;" class="nav-header" data-toggle="collapse" data-target="#dashboard-menu"><img  height="40px" width="40px" src="../images/tkb.png"/>&nbsp;&nbsp;Quản Lý Thời Khóa Biểu<span style="float:right"></span></div>
                    <ul id="dashboard-menu" class="nav nav-list collapse in" style="background-color:rgb(4,84,175);color:#FFF">
                        <li><a style="color:#FFF; font-weight:bold" href="quan-tri.php?page=tkb-du-kien">&nbsp;&nbsp;&nbsp;&nbsp;<i class='far fa-calendar-alt' style="color:#FC0;font-size:25px"></i>&nbsp;Thời khóa biểu dự kiến</a></li>
                        <li ><a  style="color:#FFF; font-weight:bold" href="quan-tri.php?page=add-tkb-du-kien">&nbsp;&nbsp;&nbsp;&nbsp;<i class='far fa-calendar-plus' style="color:#0F0;font-size:25px"></i>&nbsp;Thêm thời khóa biểu dự kiến</a></li>
                         <li><a style="color:#FFF; font-weight:bold" href="quan-tri.php?page=ed-mon-hoc">&nbsp;&nbsp;&nbsp;&nbsp;<img height="25px" width="25px" src="../images/mh.png"/>&nbsp;Chỉnh sửa học phần</a></li>  
                </ul>
                 <a href="quan-tri.php?page=tkb-sv"><div style="background-color:#00C; color:#FFF; font-size:16px; font-weight:bold;" class="nav-header" data-toggle="collapse" data-target="#settings-menu"><img height="40px" width="40px" src="../images/tkb-sv.png"/>&nbsp;&nbsp;Thời Khóa Biểu Sinh Viên<span style="float:right"></span></div>
                <ul id="settings-menu" class="nav nav-list collapse in" style="border:none; background-color:rgb(4,84,175);color:#FFF">
                    </ul>
                    </a>
                     <a href="quan-tri.php?page=ds-gv"><div style="background-color:#00C; color:#FFF; font-size:16px; font-weight:bold;" class="nav-header" data-toggle="collapse" data-target="#settings-menu1"><img height="40px" width="40px" src="../images/tkb-sv.png"/>&nbsp;&nbsp;Danh Sách Giảng Viên<span style="float:right"></span></div>
                <ul id="settings-menu" class="nav nav-list collapse in" style="border:none; background-color:rgb(4,84,175);color:#FFF">
                    </ul>
                    </a>
                    <div style="background-color:#00C; color:#FFF; font-size:16px; font-weight:bold;" class="nav-header" data-toggle="collapse" data-target="#firewall-menu"><img height="35px" width="35px" src="../images/tk.png"/>&nbsp;&nbsp;Thống Kê<span style="float:right"></span></div>
                <ul id="firewall-menu" class="nav nav-list collapse in" style="background-color:rgb(4,84,175);color:#FFF">
                        <li><a  style="color:#FFF; font-weight:bold" href="quan-tri.php?page=tt-dk">&nbsp;&nbsp;&nbsp;<i class="fas fa-list" style="color:#6F0;font-size:25px"></i>&nbsp;Tình trạng đăng ký lớp</a></li>
                        <li ><a  style="color:#FFF; font-weight:bold" href="quan-tri.php?page=sv-khong-dk">&nbsp;&nbsp;&nbsp;<i class="fas fa-list" style="color:#F0F;font-size:25px"></i>&nbsp;Sinh viên không đăng ký học phần</a></li>
                        <li ><a  style="color:#FFF; font-weight:bold" href="quan-tri.php?page=ds-lop">&nbsp;&nbsp;&nbsp;<i class="fas fa-list" style="color:#FF0;font-size:25px"></i>&nbsp;Danh Sách Lớp</a></li>
                    </ul>
                    <a href="quan-tri.php?page=export_ex"><div style="background-color:#00C; color:#FFF; font-size:16px; font-weight:bold;" class="nav-header" data-toggle="collapse" data-target="#settings-menu1"><img height="40px" width="40px" src="../images/export-icon.png"/>&nbsp;&nbsp;Export File<span style="float:right"></span></div>
                <ul id="settings-menu" class="nav nav-list collapse in" style="border:none; background-color:rgb(4,84,175);color:#FFF">
                    </ul>
                    </a>
                   <a href="quan-tri.php?page=logout"><div style="background-color:#00C; color:#FFF; font-size:16px; font-weight:bold;" class="nav-header" data-toggle="collapse" data-target="#back-menu"><img  height="40px" width="40px" src="../images/logout.png"/>&nbsp;&nbsp;Đăng Xuất</div>
                <ul id="back-menu" class="nav nav-list collapse in" style="border:none; background-color:rgb(4,84,175);color:#FFF">
                       
                    </ul></a>
			</div>
        </div>
      
	  <?php 

			@$hal=$_GET['page'];
			if(!$hal){ include "home.php"; }
			else {
			switch($hal){
			case "home" : include "home.php"; break;
			case "ds-gv" : include "ds-gv.php"; break;
			case "tkb-du-kien" : include "tkb-du-kien.php"; break;
			case "tt-dk" : include "tt-dk.php"; break;
			case "sv-khong-dk" : include "sv-khong-dk.php"; break;
			case "ds-lop" : include "ds-lop.php"; break;
			case "add-tkb-du-kien" : include "add-tkb-du-kien.php"; break;
			case "ed-mon-hoc" : include "../module/load-view-mon.php";break;
			case "tkb-sv" : include "s-tkb-sv.php";break;
			case "logout" : include "../module/logout.php";break;
			case "export_ex" : include "../module/export.php";break;
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
<p>Điện Thoại: ... </p>
</div>

    <script src="lib/bootstrap/js/bootstrap.js"></script>
  </body>
</html>

<?php } else {
		header("location:../index.php");
	}
	?>