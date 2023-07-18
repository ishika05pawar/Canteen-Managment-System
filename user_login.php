<?php
	include ('bake_header.php');
?>
<!DOCTYPE html>
<html>
<head>
	<title>login</title>
	<link rel="stylesheet" type="text/css" href="plugins/fancybox/dist/jquery.fancybox.css">
</head>
<body>
	<div class="bake-main">
		<img src="image/makeup-brushes-makeup-artist-blush-preview.jpg" height="500px;" width="100%">
		<div class="form-main">
			<div class="fullform">
					<div style="text-align: center;">
						<form action="login_php_code.php" method="post">
							<input class="inpt" type="mail" name="mail" placeholder="Enter your Email" required="">
							<br>
							<input class="inpt" type="pwd" name="pwd" placeholder="Enter your password" required="" 
							><br>
							<p><?php 
								if(isset($_GET['pass']))
								{
									echo "password wrong";
								}
							 ?> </p>
							<input class="sub" type="submit" value="Log In">
						</form>
					</div>
					<div class="blank-div-login"></div>
					<div class="form-sub" style="text-align: center;">
						New on Eventos?<br>
						<a id="inline" href="#data">Sign Up</a>
						<div style="display:none">
							<div id="data">
								<div>
									<div class="signup-txt">
										Sign Up
									</div>
									<div class="signup-txt-sub">
										It's quick and easy
									</div>
								</div>
								<form action="signup.php" method="post">
									<input type="text" name="fname" class="uname" placeholder="First name" required="">
									<input type="text" name="lname" class="uname" placeholder="Last name">
									<br>
									<input type="text"   id="n2" name="ph" class="sfrm" placeholder="Phone no." required=""><span id="n2error"></span>
									<br>
									<input type="Email" name="mail" class="sfrm" placeholder="Email Id" required="">
									<br>
									<input type="password" name="pwd" class="sfrm" placeholder="Password" required="">
									<br>
									<div style="font-size: 19px;margin-left:4px ">
										Gender?
									</div>
									<input type="radio" name="gender"  id="male" value="Male" required="">
									<span class="gen" >
										 Male
									</span>
									<input type="radio" name="gender"  id="female" value="Female" required="">
									<span class="gen">
									 	Female
									 </span>
									<input type="radio" name="gender" id="other"  value="Other" required="">
									<span class="gen">
										 Other
									</span>
									<br>
									<input type="submit" onclick="checkphone()" name="sub_bt" class="sign-bt" value="Sign Up">
								</form>
							</div>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
	<script type="text/javascript" src="plugins/jquery-3.5.1.min.js"></script>
	<script type="text/javascript" src="plugins/fancybox/dist/jquery.fancybox.js"></script>
	<script type="">
		$("a#inline").fancybox({
			'hideOnContentClick': true,
			'transition':'elastic'
		});

		function checkphone(){
		var x1 = document.getElementById("n2").value;
		var y1 = document.getElementById("n2error");
		if(x1.length != 9 || isNaN(x1)){
			
			y1.innerHTML="Please add atleast 10 charcter or add only number ";
		}else{
			y1.innerHTML="";
		}
	}
	</script>
</body>
</html>
