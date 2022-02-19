<!DOCTYPE html>
<html lang="en">
<head>
<title>Login</title>
<link rel="shortcut icon" type="image/png" href="system/images/lgth.png"/>
<meta name="viewport" content="width=device-width, initial-scale=1" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Clean Login Form Responsive, Login Form Web Template, Flat Pricing Tables, Flat Drop-Downs, Sign-Up Web Templates, Flat Web Templates, Login Sign-up Responsive Web Template, Smartphone Compatible Web Template, Free Web Designs for Nokia, Samsung, LG, Sony Ericsson, Motorola Web Design" />

<!-- css files -->
<link href="../css/font-awesome.min.css" rel="stylesheet" type="text/css" media="all">
<link href="../css/style.css" rel="stylesheet" type="text/css" media="all" />
<!-- /css files -->

<!-- online fonts -->
<link href="//fonts.googleapis.com/css?family=Sirin+Stencil" rel="stylesheet">
<!-- online fonts -->
<link rel='stylesheet' href='https://cdn.rawgit.com/t4t5/sweetalert/v0.2.0/lib/sweet-alert.css'>
<script src='https://cdn.rawgit.com/t4t5/sweetalert/v0.2.0/lib/sweet-alert.min.js'></script>

<body>
<div class="container demo-1" style="background-image:url(images/bann.png)">
	<div class="content">
        <div id="large-header" class="large-header" style="text-align:center">
			<h1 style="color:#006; font-family:'Palatino Linotype', 'Book Antiqua', Palatino, serif">ĐĂNG KÝ THỜI KHÓA BIỂU THỰC HÀNH </h1>
				<div class="main-agileits">
				<!--form-stars-here-->
						<div class="form-w3-agile">
							<h2 style="font-size:36px">LOGIN</h2>
                            <img style="width:70px;height:70px" src="../images/logo.png"/>
							<div class="form-main">
								<div class="form-sub-w3">
									<input id="user" type="text" name="Username" placeholder="Username" required="" />
								
								</div>
								<div class="form-sub-w3">
									<input id="pass" type="password" name="Password" placeholder="Password" required="" />
								<div class="icon-w3">
									
								</div>
								</div>
								<p class="p-bottom-w3ls"></p>
								<p class="p-bottom-w3ls1"></p>
								<div class="clear"></div>
								<div class="submit-w3l">
									<input onClick="gui()" type="submit" value="Login">
								</div>
							</div>
							<div class="social w3layouts">
								<div class="heading">
									<h5></h5>
									<div class="clear"></div>
								</div>
								<div class="icons">
									
									<div class="clear"></div>
								</div>
								<div class="clear"></div>
							</div>
						</div>
				<!--//form-ends-here-->
				</div><!-- copyright -->
					<div class="copyright w3-agile">
						<p> </p>
					</div>
					<!-- //copyright --> 
        </div>
	</div>
</div>	

</body>
</html>
<script>
function gui()
{
	if( document.getElementById("user").value=="")
	{
		swal ( "" ,"Tên đăng nhập không được bỏ trống" ,  "warning" )
	}
	else 
	{
		if( document.getElementById("pass").value=="")
	{
		swal ( "" ,"Mật khẩu không được bỏ trống" ,  "warning" )
		document.getElementById("usr").innerHTML = a;
	}
	else 
	{
		var xml= new XMLHttpRequest();
	    xml.onreadystatechange= function(){
		if((xml.status==200)&&(xml.readyState==4)){
			if(xml.responseText.trim()=="Bạn đã đăng nhập thành công")
			{
				window.location="index.php";
			}
			else
			{
				swal ( "" ,xml.responseText,  "error" )
			}
		}
	};
	xml.open("GET","../module/connect/connect.php?usr=" + document.getElementById("user").value+"&pass="+document.getElementById("pass").value,true);
	xml.send();
	}
	}
}
</script>