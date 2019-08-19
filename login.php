<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
<title>Technical Services | Sign In/Up</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Credit Login / Register Form Responsive Widget,Login form widgets, Sign up Web forms , Login signup Responsive web form,Flat Pricing table,Flat Drop downs,Registration Forms,News letter Forms,Elements" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- Custom Theme files -->
<link href="css/font-awesome.min.css" rel="stylesheet" type="text/css" media="all">
<link href="css/popuo-box.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/style2.css" rel="stylesheet" type="text/css" media="all" />
<!-- //Custom Theme files -->
<!-- web font -->
<link href="//fonts.googleapis.com/css?family=Oswald:400,700" rel="stylesheet">
<link href="//fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">

<!-- //web font -->
</head>
<body>
<h1>KBC | Technical Services Login / Registration Portal</h1>
<div class="main-agileits">

<!--form-stars-here-->
		<div class="form-w3-agile">
			<h2>KBC | login form</h2>
			<form method="post" action="login.php">
				<div class="form-sub-w3">
					<input type="text" name="username" placeholder="Username " required="" />
				<div class="icon-w3">
					<i class="fa fa-user" aria-hidden="true"></i>
				</div>
				</div>
				<div class="form-sub-w3">
					<input type="password" name="password" placeholder="Password" required="" />
				<div class="icon-w3">
					<i class="fa fa-unlock-alt" aria-hidden="true"></i>
				</div>
				</div>
				<p class="p-bottom-w3ls">Are you new to KBC Technical?<a class="w3_play_icon1" href="#small-dialog1">  Register here</a></p>
				
				<div class="submit-w3l">
					<input type="submit" value="Login" name="login_user">
				</div>
			</form>
		</div>
<!--//form-ends-here-->
</div>
<div id="small-dialog1" class="mfp-hide">
					<div class="contact-form1">
										<div class="contact-w3-agileits">
										<h3>Register Form</h3>
											<form action="login.php" method="post">
												<?php include('errors.php'); ?>
												<div class="form-sub-w3ls">
													<input placeholder="Full Official Name" name="full_name" type="text" required="">
													<div class="icon-agile">
														<i class="fa fa-user" aria-hidden="true"></i>
													</div>
												</div>
												<div class="form-sub-w3ls">
													<input type="text" name="username" placeholder="Username" required="" value="<?php echo $username; ?>">
													<div class="icon-agile">
														<i class="fa fa-user" aria-hidden="true"></i>
													</div>
												</div>
												<div>
													  <select width="280" style="width: 280px" name="section"> 
													    <option value="Management">Management</option>
													    <option value="Production">Production</option>
													    <option value="Transmission">Transmission</option>
													  </select>
													<div class="icon-agile">
														<i class="fa fa-user" aria-hidden="true"></i>
													</div>
												</div>
												<div>
													  <select width="280" style="width: 280px" name="unit">
													    <option value="Management">Management</option>
													    <option value="DVBT">DVBT</option>
													    <option value="TV-Centre">TV-Centre</option>
													    <option value="TV-Links">TV-Links</option>
													    <option value="CAR">CAR</option>
													    <option value="OB TV">OB TV</option>
													    <option value="OB Radio">OB Radio</option>
													  </select>
													<div class="icon-agile">
														<i class="fa fa-user" aria-hidden="true"></i>
													</div>
												</div>
												<div class="form-sub-w3ls">
													<input placeholder="Employee Number" name="employee_no" type="text" required="">
													<div class="icon-agile">
														<i class="fa fa-user" aria-hidden="true"></i>
													</div>
												</div>
												<div class="form-sub-w3ls">
													<input type="email" name="email" placeholder="KBC Email" required="" value="<?php echo $email; ?>">
													<div class="icon-agile">
														<i class="fa fa-envelope-o" aria-hidden="true"></i>
													</div>
												</div>
												<div class="form-sub-w3ls">
													<input placeholder="Password" name="password_1" type="password" required="">
													<div class="icon-agile">
														<i class="fa fa-unlock-alt" aria-hidden="true"></i>
													</div>
												</div>
												<div class="form-sub-w3ls">
													<input placeholder="Confirm Password" name="password_2" type="password" required="">
													<div class="icon-agile">
														<i class="fa fa-unlock-alt" aria-hidden="true"></i>
													</div>
												</div>
											</div>
											<div class="login-check">
								 			 <label class="checkbox"><input type="checkbox" name="checkbox" checked=""><p>I Accept Terms & Conditions</p></label>
											</div>
											<div class="submit-w3l">
												<input type="submit" value="Register" name="reg_user">
											</div>
										</form>
					</div>	
				</div>
<!-- copyright -->
	<div class="copyright w3-agile">
		<p> © 2019 KBC Login / Register Form . All rights reserved | Design by <a href="https://www.youtube.com/channel/UCRX1mqN-ocDbs1Tc6ZOkmkA" target="_blank">C0nan 3xploits</a></p>
	</div>
	<!-- //copyright --> 
	<script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
	<!-- pop-up-box -->  
		<script src="js/jquery.magnific-popup.js" type="text/javascript"></script>
	<!--//pop-up-box -->
	<script>
		$(document).ready(function() {
		$('.w3_play_icon,.w3_play_icon1,.w3_play_icon2').magnificPopup({
			type: 'inline',
			fixedContentPos: false,
			fixedBgPos: true,
			overflowY: 'auto',
			closeBtnInside: true,
			preloader: false,
			midClick: true,
			removalDelay: 300,
			mainClass: 'my-mfp-zoom-in'
		});
																		
		});
	</script>
</body>
</html>