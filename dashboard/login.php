<?php
session_start();
include('db.php');
$error = NULL;	
 if(isset($_POST['submit']))
{

	$username = $_POST['username'];
	$password = $_POST['password'];
                   
	if(  $username !== '' && $password !== '' ) 
	{ 
                $password = sha1($password) ;
		$sql = mysqli_query($MySQL_Handle,"SELECT * FROM `usersystem` WHERE username='$username' and password='$password'");
		if( mysqli_num_rows($sql) != 0 ) 
		{ //success
			$_SESSION['logged-in'] = $username;
			@header('Location: index.php');
			exit;
		} 
		else 
		{ 
			$error = "Incorrect login information"; 
		}
	} 
	else 
	{ 
		$error = 'All information is not filled out correctly';
	}
}


?>

<!DOCTYPE html>
<!-- Template Name: Clip-One - Responsive Admin Template build with Twitter Bootstrap 3.x Version: 1.4 Author: ClipTheme -->
<!--[if IE 8]><html class="ie8 no-js" lang="en"><![endif]-->
<!--[if IE 9]><html class="ie9 no-js" lang="en"><![endif]-->
<!--[if !IE]><!-->
<html lang="en" class="no-js">
	<!--<![endif]-->
	<!-- start: HEAD -->
	<head>
	<title>TELC - لوحة التحكم</title>

		<!-- start: META -->
		<meta charset="utf-8" />
		<!--[if IE]><meta http-equiv='X-UA-Compatible' content="IE=edge,IE=9,IE=8,chrome=1" /><![endif]-->
		<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimum-scale=1.0, maximum-scale=1.0">
		<meta name="apple-mobile-web-app-capable" content="yes">
		<meta name="apple-mobile-web-app-status-bar-style" content="black">
		<meta content="" name="description" />
		<meta content="" name="author" />
		<!-- end: META -->
		<!-- start: MAIN CSS -->
		<link rel="stylesheet" href="assets/css/bootstrap.css">
		<link rel="stylesheet" href="assets/font-awesome/css/font-awesome.css">
		<link rel="stylesheet" href="assets/fonts/style.css">
		<link rel="stylesheet" href="assets/css/main.css">
		<link rel="stylesheet" href="assets/css/main-responsive.css">
		<link rel="stylesheet" href="assets/css/print.css" type="text/css" media="print"/>
		<link rel="stylesheet" href="assets/css/rtl-version.css">
		<link rel="stylesheet" href="assets/css/custom.css">

		<!--[if IE 7]>
		<link rel="stylesheet" href="assets/plugins/font-awesome/css/font-awesome-ie7.min.css">
		<![endif]-->
		<!-- end: MAIN CSS -->
		<!-- start: CSS REQUIRED FOR THIS PAGE ONLY -->
		<!-- end: CSS REQUIRED FOR THIS PAGE ONLY -->
	</head>
	<!-- end: HEAD -->
	<!-- start: BODY -->
	<body class="login rtl">
		<div class="main-login col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3">
			<div class="logo">
			<img src="assets/images/logo.png" alt="">	


			</div>
			<!-- start: LOGIN BOX -->
			<div class="box-login">
				<h3>الدخول الى حجرة التحكم</h3>

			      <!-- Error Message -->


				<form class="form-login" action="" method="POST">
					<div class="errorHandler alert alert-danger <?php if($error==NULL) echo 'no-display';  ?> no-display">
						<i class="icon fa fa-ban" aria-hidden="true"></i> 
						<?php echo $error?>
					</div>
					<fieldset>
						<div class="form-group">
							<span class="input-icon input-icon-right">
								<input type="text" class="form-control error" name="username" placeholder="اسم الدخول">
								<i class="fa fa-user"></i> </span>
							<!-- To mark the incorrectly filled input, you must add the class "error" to the input -->
							<!-- example: <input type="text" class="login error" name="login" value="Username" /> -->
						</div>
						<div class="form-group">
							<span class="input-icon input-icon-right">
								<input type="password" class="form-control password" name="password" placeholder="كلمة السر">
								<i class="fa fa-lock"></i>
							 </span>
						</div>
						<div class="form-actions">
							<button type="submit" class="btn btn-bricky pull-left btn-block btn-flat" name="submit">
								<i class="fa fa-arrow-circle-right"></i>دخول 
							</button>
						</div>

					</fieldset>
				</form>
			</div>
			<div class="copyright">
				<p>All Rights Reserved. Designed to 
                    <span class="text-primary">Mahara Digital trading Co.</span></p>
				<p>Designed & Developed by <a href="www.almubarmig.com" target="_blank">almubarmig.com</a> </p>
			</div>
			<!-- end: COPYRIGHT -->
		</div>


		<script src="assets/js/jquery.min.js"></script>

		<script src="assets/js/jquery-ui-1.10.2.custom.min.js"></script>
		<script src="assets/js/bootstrap.min.js"></script>
			<script src="assets/js/perfect-scrollbar-rtl.js"></script>
		<script src="assets/js/less-1.5.0.min.js"></script>

		<script src="assets/js/jquery.cookie.js"></script>
		<script src="assets/js/main.js"></script>
		<script src="assets/js/jquery.validate.min.js"></script>
		<script src="assets/js/login.js"></script>


		<!-- end: JAVASCRIPTS REQUIRED FOR THIS PAGE ONLY -->
		<script>
			jQuery(document).ready(function() {
				Main.init();
				Login.init();
			});
		</script>
	</body>
	<?php
mysqli_close($MySQL_Handle);?>
	<!-- end: BODY -->
</html>