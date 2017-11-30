<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport"
	content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
<meta name="description" content="">
<meta name="author" content="ThemeBucket">
<link rel="shortcut icon" href="#" type="image/png">

<title>后台登陆</title>

<link href="css/style.css" rel="stylesheet">
<link href="css/style-responsive.css" rel="stylesheet">


</head>

<body class="login-body">

	<div class="container">

		<form method= "post" class="form-signin" onsubmit='return check()' action="logindo.php">
			<div class="form-signin-heading text-center">
				<h1 class="sign-title">登陆</h1>
				<img src="images/login-logo.png" alt="" />
			</div>
			<div class="login-wrap">
				<input type="text" class="form-control" placeholder="在此输入用户名 " name='username' /> 
			    <input type="password" class="form-control"placeholder="在此输入密码" name='passcode' /> 
					
							<input type="text" class="form-control" placeholder="输入验证码" oninput="keyupfunc()" id='checkkey' />
							<img id="aaa" onmouseleave="keyupfunc()" src="checkcode.php" onclick="this.src='checkcode.php?id='+Math.random()"/>
						
<button class="btn btn-lg btn-login btn-block" type="submit">
                <i class="fa fa-check"></i>
            </button>
				<div class="registration">
					未注册? <a class="" href="registration.php"> 点击注册 </a>
				</div>
				<label class="checkbox"> <input type="checkbox" value="remember-me">
					记住我

				</label>

			</div>



		</form>

	</div>



	<!-- Placed js at the end of the document so the pages load faster -->

	<!-- Placed js at the end of the document so the pages load faster -->
	<script src="js/jquery-1.10.2.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/modernizr.min.js"></script>
 <script>
		loadXMLDoc();
		function check(){
			var temp=document.getElementById('checkkey').value;
			if(temp==num){
				//alert("验证成功！");
				return true;
			}else{
				alert("验证码错误！");
				return false;
			}
			
		}
		function keyupfunc(){
			loadXMLDoc();
		}
		
	
		function loadXMLDoc()
{

	var xmlhttp;
	if (window.XMLHttpRequest)
	{
		//  IE7+, Firefox, Chrome, Opera, Safari 浏览器执行代码
		xmlhttp=new XMLHttpRequest();
	}
	else
	{
		// IE6, IE5 浏览器执行代码
		xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
	}
	xmlhttp.onreadystatechange=function()
	{
		if (xmlhttp.readyState==4 && xmlhttp.status==200)
		{
			
			num=xmlhttp.responseText;
			//document.getElementById('hidd').innerHTML=num;
		
		}
	}
	xmlhttp.open("GET","p.txt",true);
	xmlhttp.send();
	}

	</script>
</body>
</html>
