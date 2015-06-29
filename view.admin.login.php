<!DOCTYPE html>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<title>Clever Books Online Shop</title>
		<link rel="stylesheet" href="admin/css/style.default.css" type="text/css" />

		<script type="text/javascript" src="admin/js/jquery-1.9.1.min.js"></script>
		<script type="text/javascript" src="admin/js/jquery-migrate-1.1.1.min.js"></script>
		<script type="text/javascript" src="admin/js/jquery-ui-1.9.2.min.js"></script>
		<script type="text/javascript" src="admin/js/modernizr.min.js"></script>
		<script type="text/javascript" src="admin/js/bootstrap.min.js"></script>
		<script type="text/javascript" src="admin/js/jquery.cookie.js"></script>
		<script type="text/javascript" src="admin/js/custom.js"></script>
	</head>

	<body class="loginpage">
		<div class="loginpanel">
			<div class="loginpanelinner">
				<div class="logo animate0 bounceIn"><img src="" alt="" /></div>
				<form id="login" action="" method="post">
					<div class="inputwrapper login-alert">
						<div class="alert alert-error">Invalid username or password</div>
					</div>
					<div class="inputwrapper animate1 bounceIn">
					<input type="text" name="username" id="username" placeholder="Enter username" autocomplete="off" />
					</div>
					<div class="inputwrapper animate2 bounceIn">
						<input type="password" name="password" id="password" placeholder="Enter password" autocomplete="off" />
					</div>
					<div class="inputwrapper animate3 bounceIn">
						<button name="login">Sign In</button>
					</div>
					<div class="inputwrapper animate4 bounceIn hide">
						<label><input type="checkbox" class="remember" name="signin" /> Keep me sign in</label>
					</div>
				</form>
			</div><!--loginpanelinner-->
		</div><!--loginpanel-->
		<div class="loginfooter">
			<p>&copy; 2013. Shamcey Admin Template. All Rights Reserved.</p>
		</div>
	</body>
</html>

<?php
if($_SERVER['REQUEST_METHOD'] == 'POST')
{
	include_once('controller.login.php');

	$user = new LoginController();
	if($user->login())
	{
		header('Location: admin');
		exit();
	}
}
elseif($_SERVER['REQUEST_METHOD'] == 'GET')
{
	session_start();
	session_destroy();
}
