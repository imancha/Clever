<?php session_start(); ob_start(); ?>
<!DOCTYPE html>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />

		<title>Clever Books Online Shop</title>

		<link rel="stylesheet" href="css/style.default.css" type="text/css" />
		<link rel="stylesheet" href="css/responsive-tables.css">
		<link rel="stylesheet" href="css/bootstrap-fileupload.min.css" type="text/css" />
		<link rel="stylesheet" href="css/jquery-te-1.4.0.css" type="text/css" />
	</head>

	<body>
		<div class="mainwrapper">
			<div class="header">
				<div class="logo">
					<a href="./"><img src="images/logo.png" alt="" /></a>
				</div>
				<div class="headerinner">
					<ul class="headmenu">
						<li class="right">
							<div class="userloggedinfo">
								<img src="images/photos/avatar5.png" alt="" />
								<div class="userinfo">
									<h5><?php echo $_SESSION['imancha']['name'] ?></h5>
									<ul>
										<li><a href="#"><?php echo $_SESSION['imancha']['email'] ?></a></li>
										<li><a href="#"><?php echo $_SESSION['imancha']['status'] ?></a></li>
										<li><a href="../view.admin.login.php?<?php echo str_shuffle(please('encrypt',date("Y-m-d H:i:s"))) ?>">Sign Out</a></li>
									</ul>
								</div>
							</div>
						</li>
					</ul><!--headmenu-->
				</div>
			</div>
			<div class="leftpanel"><?php navigation(); ?></div>
			<div class="rightpanel">
				<div class="breadcrumb"><?php breadcrumb(); ?></div>
        <div class="pageheader"><?php pageheader(); ?></div>
        <div class="maincontent">
					<div class="maincontentinner">
						<div class="main">
							<?php
								if(!(isset($_SESSION['imancha']['name']) || isset($_SESSION['imancha']['email']))){
									header('Location: ../view.admin.login.php');
									exit();
								}
								if(isset($_SESSION['message'])){
									echo $_SESSION['message'];
									$_SESSION['message'] = '';
								}
								main();
							?>
						</div>
						<div class="footer">
							<div class="footer-right">
								<span>Designed by: <a href="#">ThemePixels</a> and <a href="#">Imancha</a>. All Rights Reserved.</span>
							</div>
						</div><!--footer-->
					</div><!--maincontentinner-->
        </div><!--maincontent-->
			</div><!--rightpanel-->
		</div><!--mainwrapper-->
		<script type="text/javascript" src="js/jquery-1.9.1.min.js"></script>
		<script type="text/javascript" src="js/jquery-migrate-1.1.1.min.js"></script>
		<script type="text/javascript" src="js/jquery-ui-1.9.2.min.js"></script>
		<script type="text/javascript" src="js/bootstrap.min.js"></script>
		<script type="text/javascript" src="js/bootstrap-fileupload.min.js"></script>
		<script type="text/javascript" src="js/bootstrap-timepicker.min.js"></script>
		<script type="text/javascript" src="js/jquery.uniform.min.js"></script>
		<script type="text/javascript" src="js/jquery.validate.min.js"></script>
		<script type="text/javascript" src="js/jquery.tagsinput.min.js"></script>
		<script type="text/javascript" src="js/jquery.autogrow-textarea.js"></script>
		<script type="text/javascript" src="js/charCount.js"></script>
		<script type="text/javascript" src="js/colorpicker.js"></script>
		<script type="text/javascript" src="js/ui.spinner.min.js"></script>
		<script type="text/javascript" src="js/chosen.jquery.min.js"></script>
		<script type="text/javascript" src="js/jquery.cookie.js"></script>
		<script type="text/javascript" src="js/jquery.smartWizard.min.js"></script>
		<script type="text/javascript" src="js/modernizr.min.js"></script>
		<script type="text/javascript" src="js/flot/jquery.flot.min.js"></script>
		<script type="text/javascript" src="js/flot/jquery.flot.resize.min.js"></script>
		<script type="text/javascript" src="js/tinymce/jquery.tinymce.js"></script>
		<script type="text/javascript" src="js/jquery.dataTables.min.js"></script>
		<script type="text/javascript" src="js/jquery-te-1.4.0.min.js"></script>
		<script type="text/javascript" src="js/responsive-tables.js"></script>
		<script type="text/javascript" src="js/wysiwyg.js"></script>
		<script type="text/javascript" src="js/fullcalendar.min.js"></script>
		<script type="text/javascript" src="js/jquery.jgrowl.js"></script>
		<script type="text/javascript" src="js/jquery.alerts.js"></script>
		<script type="text/javascript" src="js/jquery.cookie.js"></script>
		<script type="text/javascript" src="js/forms.js"></script>
		<script type="text/javascript" src="js/custom.js"></script>
		<script type="text/javascript" src="js/elements.js"></script>
		<script type="text/javascript" src="js/script.js"></script>
		<script type="text/javascript">
			jQuery('.accordion').accordion({heightStyle: "content"});
			//Replaces data-rel attribute to rel.
			//We use data-rel because of w3c validation issue
			jQuery('[data-rel]').each(function() {
					jQuery(this).attr('rel', jQuery(this).data('rel'));
			});

			jQuery("[data-rel='tooltip']").tooltip();
		</script>
		<!--[if lte IE 8]><script language="javascript" type="text/javascript" src="js/excanvas.min.js"></script><![endif]-->
	</body>
</html>
<?php
/*	Left panel navigation	*/
function navigation(){
	$active_1 =
	$active_2 =
	$active_4 =
	$active_6 =
	$active_10 = NULL;
	switch(empty($_REQUEST['!']) ? NULL : $_REQUEST['!']){
		case 'catalogue' 	: $active_2 = 'active'; break;
		case 'customer' 	: $active_4 = 'active'; break;
		case 'review'			: $active_6 = 'active'; break;
		case 'order'			: $active_10 = 'active'; break;
		default : $active_1 = 'active';
	}

	if($_SESSION['imancha']['status'] == 'admin')
	{
		echo '<div class="leftmenu">
						<ul class="nav nav-tabs nav-stacked">
							<li class="nav-header">Navigation</li>
							<li class="'.$active_1.'"><a href="./"><span class="iconfa-laptop"></span> Dashboard</a></li>
							<li class="'.$active_2.'"><a href="./?!=catalogue"><span class="iconfa-book"></span> Catalogue</a></li>
							<li class="'.$active_6.'"><a href="./?!=review"><span class="iconfa-star"></span> Review</a></li>
						</ul>
					</div><!--leftmenu-->';
	}
	elseif($_SESSION['imancha']['status'] == 'employee')
	{
		echo '<div class="leftmenu">
						<ul class="nav nav-tabs nav-stacked">
							<li class="nav-header">Navigation</li>
							<li class="'.$active_1.'"><a href="./"><span class="iconfa-laptop"></span> Dashboard</a></li>
							<li class="'.$active_4.'"><a href="./?!=customer"><span class="iconfa-group"></span> Customer</a></li>
							<li class="'.$active_10.'"><a href="./?!=order"><span class="iconfa-shopping-cart"></span> Order</a></li>
						</ul>
					</div><!--leftmenu-->';
	}
}
/*	Breadcrumb	*/
function breadcrumb(){
	$xo = '<ul class="breadcrumbs">
					<li><a href="./"><i class="iconfa-home"></i></a> <span class="separator"></span></li>';
	switch(empty($_REQUEST['!']) ? NULL : $_REQUEST['!']){
		case 'catalogue' : $xo .= '<li><a href="./?!=catalogue">Book Catalogue</a> <span class="separator"></span></li>';
			switch(empty($_REQUEST['i']) ? NULL : $_REQUEST['i']){
				case 'insert' : $xo .= '<li>Insert</li>'; break;
				case 'update' : $xo .= '<li>Update</li>'; break;
				case 'delete'	: $xo .= '<li>Delete</li>'; break;
				default : $xo .= '<li>View</li>';
			}
		break;
		case 'customer' : $xo .= '<li><a href="./?!=customer">Book Customer</a> <span class="separator"></span></li>';
			switch(empty($_REQUEST['i']) ? NULL : $_REQUEST['i']){
				case 'insert' : $xo .= '<li>Insert</li>'; break;
				case 'update' : $xo .= '<li>Update</li>'; break;
				case 'delete'	: $xo .= '<li>Delete</li>'; break;
				default: $xo .= '<li>View</li>';
			}
		break;
		case 'review' : $xo .= '<li><a href="./?!=review">Book Review</a> <span class="separator"></span></li>';
			switch(empty($_REQUEST['i']) ? NULL : $_REQUEST['i']){
				case 'insert' : $xo .= '<li>Insert</li>'; break;
				case 'update' : $xo .= '<li>Update</li>'; break;
				case 'delete'	: $xo .= '<li>Delete</li>'; break;
				default: $xo .= '<li>View</li>';
			}
		break;
		case 'order' : $xo .= '<li><a href="./?!=order">Book Order</a> <span class="separator"></span></li>';
			switch(empty($_REQUEST['i']) ? NULL : $_REQUEST['i']){
				case 'insert' : $xo .= '<li>Insert</li>'; break;
				case 'update' : $xo .= '<li>Update</li>'; break;
				case 'delete'	: $xo .= '<li>Delete</li>'; break;
				default: $xo .= '<li>View</li>';
			}
		break;
		default :
			$xo .= '<li>Dashboard</li>';
	}

	$xo .= '<li class="right">
						<a href="" data-toggle="dropdown" class="dropdown-toggle"><i class="icon-tint"></i> Color Skins</a>
						<ul class="dropdown-menu pull-right skin-color">
							<li><a href="default">Default</a></li>
							<li><a href="navyblue">Navy Blue</a></li>
							<li><a href="palegreen">Pale Green</a></li>
							<li><a href="red">Red</a></li>
							<li><a href="green">Green</a></li>
							<li><a href="brown">Brown</a></li>
						</ul>
					</li>
				</ul>';

	echo $xo;
}
/*	Page header	*/
function pageheader(){
	switch(empty($_REQUEST['!']) ? NULL : $_REQUEST['!']){
		case 'catalogue' : $icon = 'iconfa-book'; $title = 'Book Catalogue';
			switch(empty($_REQUEST['i']) ? NULL : $_REQUEST['i']){
				case 'insert' : $subtitle = 'Insert'; break;
				case 'update' : $subtitle = 'Update'; break;
				case 'delete'	: $subtitle = 'Delete'; break;
				default		: $subtitle = 'View'; break;
			}
		break;
		case 'customer' : $icon = 'iconfa-group'; $title = 'Book Customer';
			switch(empty($_REQUEST['i']) ? NULL : $_REQUEST['i']){
				case 'insert' : $subtitle = 'Insert'; break;
				case 'update' : $subtitle = 'Update'; break;
				case 'delete'	: $subtitle = 'Delete'; break;
				default		: $subtitle = 'View'; break;
			}
		break;
		case 'review' : $icon = 'iconfa-star'; $title = 'Book Review';
			switch(empty($_REQUEST['i']) ? NULL : $_REQUEST['i']){
				case 'insert' : $subtitle = 'Insert'; break;
				case 'update' : $subtitle = 'Update'; break;
				case 'delete'	: $subtitle = 'Delete'; break;
				default		: $subtitle = 'View'; break;
			}
		break;
		case 'order' : $icon = 'iconfa-shopping-cart'; $title = 'Book Order';
			switch(empty($_REQUEST['i']) ? NULL : $_REQUEST['i']){
				case 'insert' : $subtitle = 'Insert'; break;
				case 'update' : $subtitle = 'Update'; break;
				case 'delete'	: $subtitle = 'Delete'; break;
				default		: $subtitle = 'View'; break;
			}
		break;
		default :
			$icon = 'iconfa-laptop'; $title = 'Dashboard'; $subtitle = 'All Features Summary';
	}

	$xo = '<div class="pageicon"><span class="'.$icon.'"></span></div>
					<div class="pagetitle"><h5>'.$subtitle.'</h5><h1>'.$title.'</h1></div>';

	echo $xo;
}
function please($action, $string){
	$output = false;
	$encrypt_method = "AES-256-CBC";
	$secret_key = 'Imancha';
	$secret_iv = 'Mohammad Abdul Iman Syah';
	$key = hash('sha256', $secret_key);
	$iv = substr(hash('sha256', $secret_iv), 0, 16);
	if($action == 'encrypt'){
		$output = openssl_encrypt($string, $encrypt_method, $key, 0, $iv);
		$output = base64_encode($output);
	}elseif($action == 'decrypt'){
		$output = openssl_decrypt(base64_decode($string), $encrypt_method, $key, 0, $iv);
	}
	return $output;
}
/*	Main content	*/
function main(){
	switch(empty($_REQUEST['!']) ? NULL : $_REQUEST['!']){
		case 'catalogue' 	:
			switch(empty($_REQUEST['i']) ? NULL : $_REQUEST['i']){
				case 'insert' :
					require '../view.admin.catalogue.insert.php';
					break;
				case 'delete' :
					require '../view.admin.catalogue.delete.php';
					break;
				default:
					require '../view.admin.catalogue.index.php';
			}
			break;
		case 'customer' 	:
			switch(empty($_REQUEST['i']) ? NULL : $_REQUEST['i']){
				default:
					require '../view.admin.customer.index.php';
			}
			break;
		case 'review'			:
			switch(empty($_REQUEST['i']) ? NULL : $_REQUEST['i']){
				case 'insert'	:
					require '../view.admin.review.insert.php';
					break;
				case 'delete'	:
					require '../view.admin.review.delete.php';
					break;
				default:
					require '../view.admin.review.index.php';
			}
			break;
		case 'order'			:
			switch(empty($_REQUEST['i']) ? NULL : $_REQUEST['i']){
				default:
					require '../view.admin.order.index.php';
			}
			break;
		default						:
			require '../view.admin.dashboard.php';
	}
}
ob_end_flush();
