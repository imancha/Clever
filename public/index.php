<?php session_start(); ob_start();
	if($_SESSION['imancha']['region'] == 1){$O0='Beranda';$O1='Kategori';$O2='Halaman';$O3='Bantuan';$O4='Tentang';$O5='Daftar Keinginan';$O6='Keranjang Saya';$O7='Checkout';$O8='Produk';$O9='Category Grid';$O10='Category List';$O11='Kontak';$O12='Lihat Keranjang';$O13='Spesial';$O14='Lihat';$O15='Tambah ke Keranjang';$O16='Best Seller';$O17='<p style="word-spacing:2px; font-size:larger;"><strong>Clever Books Online Shop</strong> adalah sebuah toko buku online yang menjual buku-buku dari berbagai macam kategori. Temukan buku-buku yang berkualitas yang dijual dengan harga diskon. Gratis Pengiriman dan Cash on Delivery di seluruh dunia di lebih dari 100 kota. Hadiah kejutan dengan nilai 30% pada pesanan lebih dari Rp. 700.000. Sale Upto 50% pada semua buku. Harga Nyaman & terjangkau untuk Anda. 100% Jaminan Uang Kembali *. Kami mendukung segala sesuatu yang kami jual dengan dukungan 24/7.</p><p style="word-spacing:2px; font-size:larger;">Saat ini, toko kami tersedia di Indonesia dan Amerika Serikat. Tetapi toko online kami dapat diakses dari seluruh dunia yang membuat belanja menjadi semakin mudah, kapanpun dan dimanapun.</p>';$O18='Keranjang';$O19='Langkah';$O20='ALAMAT PENGIRIMAN';$O21='Your Personal Details';$O22='*harus diisi';$O23='Nama Depan*';$O24='Nama Belakang*';$O25='Email*';$O26='Phone*';$O27='Alamat*';$O28='Perusahaan';$O29='Alamat*';$O30='Kota*';$O31='Kode Post*';$O32='Provinsi*';$O33='Negara*';$O34='Lanjut';$O35='Ubah';$O36='METODE PENGIRIMAN';$O37='Silahkan pilih metode pengiriman yang digunakan pada pemesanan ini.';$O38='METODE PEMBAYARAN';$O39='Silahakan pilih metode pembayaran yang digunakan pada pemesanan ini.';$O40='Komentar/pesan';$O41='Konfirmasi Pesanan';$O42='Silahkan konfirmasi pesanan anda.';$O43='Batal';$O44='Terima kasih telah berbelanja pada Clever Books Online Shop. Kami akan segera memproses pesanan anda.';$O45='Menampilkan';$O46='dari';$O47='produk';$O48='per halaman';$O49='Lihat Semua';$O50='Nama';$O51='Harga';$O52='Rendah-Tinggi';$O53='Tinggi-Rendah';$O54='Penerbit';$O55='Terbaru';$O56='Produk ini mempunyai';$O57='review';$O58='selengkapnya';$O59='Tambah ke Keinginan';$O60='Pengarang';$O61='Penerbit';$O62='Halaman';$O63='Tahun';$O64='Bahasa';$O65='Ketersediaan';$O66='dalam Stock';$O67='Deskripsi';$O68='Review';$O69='Tags';$O70='mempunyai';$O71='Tambahkan Review';$O72='Tulis review';$O73='id-ID';}else{$O0='Home';$O1='Categories';$O2='Pages';$O3='Help';$O4='About';$O5='Wishlist';$O6='My Cart';$O7='Checkout';$O8='Product';$O9='Category Grid';$O10='Category List';$O11='Contact';$O12='View Cart';$O13='Specials';$O14='View';$O15='Add to Cart';$O16='Best Seller';$O17='<p style="word-spacing:2px; font-size:larger;"><strong>Clever Books Online Shop</strong> is an online book store that sell books from various categories. Discover quality books for sale at discounted prices. Free Shipping and Cash on Delivery all over in world over $100. Surprise Gift with value $50 on orders over $700. Summer Sale Upto 50% off on all books. Convenient & affordable prices for you. 100% Money Back Guarantee*. We support everything we sell with 24/7 support.</p><p style="word-spacing:2px; font-size:larger;">Currently, our store are available in <strong>Indonesia</strong> and <strong>United States</strong>. But our online store can be accessed from all over the world that made shopping very easy, everytime and everywhere.</p>';$O18='Cart';$O19='Steps';$O20='SHIPPING ADDRESS';$O21='Your Personal Details';$O22='*required';$O23='First Name*';$O24='Last Name*';$O25='Email*';$O26='Phone*';$O27='Address*';$O28='Company';$O29='Address*';$O30='City*';$O31='Post Code*';$O32='State*';$O33='Country*';$O34='Continue';$O35='Update';$O36='SHIPPING METHOD';$O37='Please select the preferred shipping method to use on this order.';$O38='PAYMENT METHOD';$O39='Please select the preferred Payment method to use on this order.';$O40='Comments/messsage';$O41='Confirm Order';$O42='Please confirm your order.';$O43='Cancel';$O44='Thank you for shopping at Clever Books Online Shop. We will process your order immediately.';$O45='Showing';$O46='of';$O47='products';$O48='per page';$O49='Show All';$O50='Name';$O51='Price';$O52='Low-High';$O53='High-Low';$O54='Publisher';$O55='Recent';$O56='This product has';$O57='review(s)';$O58='read more';$O59='Add to Wishlist';$O60='Author';$O61='Publisher';$O62='Pages';$O63='Year';$O64='Language';$O65='Availability';$O66='in Stock';$O67='Description';$O68='Reviews';$O69='Tags';$O70='has';$O71='Add Review';$O72='Write a review';$O73='en-US';}
	if(isset($_GET['MyRegionIs']))
	{
		include_once('../controller.cart.php');

		session_start();
		$_SESSION['imancha']['region'] = array();
		$_SESSION['imancha']['cart'] = array();
		$_SESSION['imancha']['wishlist'] = array();
		switch($_GET['MyRegionIs'])
		{
			case '>id' : $_SESSION['imancha']['region'] = 1; break;
			case '>us' : $_SESSION['imancha']['region'] = 2; break;
		}

		$action = new CartController();
		$_SESSION['imancha']['id'] = $action->storeVisitor();

		header('Location: .');
		exit();
	}
	if(!isset($_SESSION['imancha']['region']) || ($_SESSION['imancha']['region'] != 1 AND $_SESSION['imancha']['region'] != 2))
	{
		header('Location: ../view.public.region.php');
		exit();
	}
?>
<!DOCTYPE html>
<!--[if IE 7 ]><html class="ie ie7 lte9 lte8 lte7" lang="en-US"><![endif]-->
<!--[if IE 8]><html class="ie ie8 lte9 lte8" lang="en-US">	<![endif]-->
<!--[if IE 9]><html class="ie ie9 lte9" lang="en-US"><![endif]-->
<!--[if (gt IE 9)|!(IE)]><!-->
<html class="noIE" lang="<?php echo $GLOBALS['O73']; ?>">
<!--<![endif]-->
<head>
	<meta charset="UTF-8">
	<meta content="width=device-width, initial-scale=1, maximum-scale=1" name="viewport">
	<meta content="Clever Book Online Shop" name="description">
	<meta content="Mohammad Abdul Iman Syah" name="author">
	<title>Clever Books Online Shop</title>
	<!-- Reset CSS -->
	<link href="css/normalize.css" rel="stylesheet" type="text/css"/>
	<!-- Bootstrap core CSS -->
	<link href="css/bootstrap.css" rel="stylesheet">
	<!-- Iview Slider CSS -->
	<link href="css/iview.css" rel="stylesheet">
	<!--	Responsive 3D Menu	-->
	<link href="css/menu3d.css" rel="stylesheet"/>
	<!-- Animations -->
	<link href="css/animate.css" rel="stylesheet" type="text/css"/>
	<!-- Custom styles for this template -->
	<link href="css/custom.css" rel="stylesheet" type="text/css" />
	<!-- Style Switcher -->
	<link href="css/style-switch.css" rel="stylesheet" type="text/css"/>
	<!-- Color -->
	<link href="css/skin/color.css" id="colorstyle" rel="stylesheet">
	<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!--[if lt IE 9]> <script src="js/html5shiv.js"></script> <script src="js/respond.min.js"></script> <![endif]-->
	<!-- Bootstrap core JavaScript -->
	<script src="js/jquery-1.10.2.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/bootstrap-select.js"></script>
	<!-- Custom Scripts -->
	<script src="js/scripts.js"></script>
	<!-- MegaMenu -->
	<script src="js/menu3d.js" type="text/javascript"></script>
	<!-- iView Slider -->
	<script src="js/raphael-min.js" type="text/javascript"></script>
	<script src="js/jquery.easing.js" type="text/javascript"></script>
	<script src="js/iview.js" type="text/javascript"></script>
	<script src="js/retina-1.1.0.min.js" type="text/javascript"></script>
	<script src="js/script.js"></script>
	<!--[if IE 8]><script type="text/javascript" src="js/selectivizr.js"></script><![endif]-->
</head>

<body onload = date_time('date_time','<?php echo $GLOBALS['O73']; ?>');>
<!-- Header -->
<header>
  <!-- Top Heading Bar -->
  <div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="topheadrow">
					<ul class="nav nav-pills pull-left hidden-xs">
						<li><a id="date_time"></a></li>
					</ul>
					<ul class="nav nav-pills pull-right">
						<li class="dropdown">
							<a class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" href="#">
								<?php echo $_SESSION['imancha']['region']==1 ? 'IND' : 'ENG'; ?>
								<i class="fa fa-angle-down fa-fw"></i>
							</a>
							<ul class="dropdown-menu" role="menu">
								<li><a href="./?MyRegionIs=>us">ENG</a></li>
								<li><a href="./?MyRegionIs=>id">IND</a></li>
							</ul>
						</li>
						<li>
							<a href="./?!=wishlist">
								<i class="fa fa-heart fa-fw"></i>
								<span class="hidden-xs">
									<?php echo $GLOBALS['O5'].'('.count($_SESSION['imancha']['wishlist']).')'; ?>
								</span>
							</a>
						</li>
						<li>
							<a href="../?!=cart">
								<i class="fa fa-shopping-cart fa-fw"></i>
								<span class="hidden-xs">
									<?php echo $GLOBALS['O6']; ?>
								</span>
							</a>
						</li>
					</ul>
				</div>
			</div>
		</div>
	</div>
  <!-- end: Top Heading Bar -->
  <div class="f-space20"></div>
  <!-- Logo and Search -->
  <div class="container">
    <div class="row clearfix">
      <div class="col-lg-3 col-xs-12">
				<div class="logo">
					<a href="./" title="Clever Book Onine Shop">
						<div class="logoimage"><i class="fa fa-shopping-cart fa-fw"></i></div>
						<div class="logotext"><span style="font-size:smaller;"><strong>CLEVER BOOKS</strong></span></div>
						<span class="slogan">ONLINE SHOP</span>
					</a>
				</div>
			</div>
      <!-- end: logo -->
      <div class="visible-xs f-space20"></div>
      <!-- search -->
      <!-- end: search -->
    </div>
  </div>
  <!-- end: Logo and Search -->
  <div class="f-space20"></div>
  <!-- Menu -->
  <div class="container">
    <div class="row clearfix">
      <div class="col-lg-3 col-md-3 col-sm-4 col-xs-12 menu-col visible-xs">
        <!-- Mega Menu -->
        <div class="menu3dmega vertical menuMegasub" id="menuMega">
          <ul>
            <!-- Menu Item Links for Mobiles Only -->
            <li>
							<a href="./">
								<i class="fa fa-home fa-fw"></i>
								<span><?php echo $GLOBALS['O0']; ?></span>
							</a>
						</li>
            <li>
							<a href="./?!=about">
								<i class="fa fa-info-circle fa-fw"></i>
								<span><?php echo $GLOBALS['O4']; ?></span>
							</a>
						</li>
            <li>
							<a href="./?!=contact">
								<i class="fa fa-pencil-square-o fa-fw"></i>
								<span><?php echo $GLOBALS['O11']; ?></span>
							</a>
						</li>
            <li>
							<a href="./?!=wishlist">
								<i class="fa fa-heart fa-fw"></i>
								<span><?php echo $GLOBALS['O5']; ?></span>
							</a>
						</li>
            <li>
							<a href="./?!=cart">
								<i class="fa fa-shopping-cart fa-fw"></i>
								<span><?php echo $GLOBALS['O6']; ?></span>
							</a>
						</li>
            <li>
							<a href="./?!=checkout">
								<i class="fa fa-external-link fa-fw"></i>
								<span><?php echo $GLOBALS['O7']; ?></span>
							</a>
						</li>
            <!-- end: Menu Item -->
          </ul>
        </div>
        <!-- end: Mega Menu -->
      </div>
      <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 hidden-xs">
        <!-- Navigation Buttons/Quick Cart for Tablets and Desktop Only -->
        <div class="menu-links">
					<ul class="nav nav-pills nav-justified" style="font-size:larger;">
						<li<?php echo isset($_GET['!']) ? '' : ' class=active' ?>>
							<a href="./">
								<i class="fa fa-home fa-fw"></i>
								<span class="hidden-sm"><?php echo $GLOBALS['O0']; ?></span>
							</a>
						</li>
						<li<?php echo (isset($_GET['!']) AND $_GET['!'] == 'about') ? ' class=active' : '' ?>>
							<a href="./?!=about">
								<i class="fa fa-info-circle fa-fw"></i>
								<span class="hidden-sm"><?php echo $GLOBALS['O4']; ?></span>
							</a>
						</li>
						<li<?php echo (isset($_GET['!']) AND $_GET['!'] == 'contact') ? ' class=active' : '' ?>>
							<a href="./?!=contact">
								<i class="fa fa-pencil-square-o fa-fw"></i>
								<span class="hidden-sm "><?php echo $GLOBALS['O11']; ?></span>
							</a>
						</li>
						<li class="dropdown">
							<a href="./?!=cart">
								<i class="fa fa-shopping-cart fa-fw"></i>
								<span class="hidden-sm">
									<?php echo count($_SESSION['imancha']['cart']) < 0 ? '0' : count($_SESSION['imancha']['cart']) ?> items | <?php echo symbol().total() ?>
								</span>
							</a>
							<!-- Quick Cart -->
							<div class="dropdown-menu quick-cart">
								<div class="qc-row qc-row-heading">
									<span class="qc-col-qty">QTY</span>
									<span class="qc-col-name"><?php echo count($_SESSION['imancha']['cart']) ?> items in bag</span>
									<span class="qc-col-price"><?php echo symbol().total() ?></span>
								</div>
								<?php echo item() ?>
								<div class="qc-row-bottom">
									<button class="btn qc-btn-viewcart pull-left" onclick="window.location='./?!=cart'"><?php echo $GLOBALS['O12'];?></button>
									<button class="btn qc-btn-checkout pull-right" onclick="window.location='./?!=checkout'"><?php echo $GLOBALS['O7']; ?></button>
								</div>
							</div>
							<!-- end: Quick Cart -->
						</li>
					</ul>
				</div>
        <!-- end: Navigation Buttons/Quick Cart Tablets and large screens Only -->
      </div>
    </div>
  </div>
</header>
<!-- end: Header -->
<div class="row clearfix"></div>
<div class="container">
  <div class="row">
    <div class="col-md-12">
      <div class="breadcrumb">
				<a href="./">
					<i class="fa fa-home fa-fw"></i>
					<?php echo $GLOBALS['O0']; ?>
				</a>
				<?php breadcrumb(); ?>
			</div>
      <!-- Quick Help for tablets and large screens -->
      <div class="quick-message hidden-xs">
        <div class="quick-box">
          <div class="quick-slide"> <span class="title"><?php $GLOBALS['O3']; ?></span>
            <div class="quickbox slide" id="quickbox">
              <div class="carousel-inner">
                <div class="item active"> <a href="mailto:imancha_266@ymail.com"> <i class="fa fa-envelope fa-fw"></i> Quick Message</a> </div>
                <div class="item"> <a href="https://www.facebook.com/imancha.os"> <i class="fa fa-question-circle fa-fw"></i> FAQ</a> </div>
                <div class="item"> <a href="https://www.facebook.com/imancha.os"> <i class="fa fa-phone fa-fw"></i> +6285 224057100</a> </div>
              </div>
            </div>
            <a class="left carousel-control" data-slide="prev" href="#quickbox"> <i class="fa fa-angle-left fa-fw"></i> </a> <a class="right carousel-control" data-slide="next" href="#quickbox"> <i class="fa fa-angle-right fa-fw"></i> </a> </div>
        </div>
      </div>
      <!-- end: Quick Help -->
    </div>
  </div>
</div>
<div class="row clearfix f-space10"></div>
<?php main(); ?>
<div class="container">
	<div class="row">
		<div class="col-lg-2 col-md-2 col-sm-4 col-xs-4">
			<div class="rec-banner blue">
				<div class="banner"> <i class="fa fa-thumbs-up"></i>
					<h3>Guarantee</h3>
					<p>100% Money Back Guarantee*</p>
				</div>
			</div>
		</div>
		<div class="col-lg-2 col-md-2 col-sm-4 col-xs-4">
			<div class="rec-banner red">
				<div class="banner"> <i class="fa fa-tags"></i>
					<h3>Affordable</h3>
					<p>Convenient & affordable prices for you</p>
				</div>
			</div>
		</div>
		<div class="col-lg-2 col-md-2 col-sm-4 col-xs-4">
			<div class="rec-banner orange">
				<div class="banner"> <i class="fa fa-headphones"></i>
					<h3>24/7 Support</h3>
					<p>We support everything we sell</p>
				</div>
			</div>
		</div>
		<div class="col-lg-2 col-md-2 col-sm-4 col-xs-4">
			<div class="rec-banner lightblue">
				<div class="banner"> <i class="fa fa-book"></i>
					<h3>Summer Sale</h3>
					<p>Upto 50% off on all books</p>
				</div>
			</div>
		</div>
		<div class="col-lg-2 col-md-2 col-sm-4 col-xs-4">
			<div class="rec-banner darkblue">
				<div class="banner"> <i class="fa fa-gift"></i>
					<h3>Surprise Gift</h3>
					<p>Value $50 on orders over $700</p>
				</div>
			</div>
		</div>
		<div class="col-lg-2 col-md-2 col-sm-4 col-xs-4">
			<div class="rec-banner black">
				<div class="banner"> <i class="fa fa-truck"></i>
					<h3>Free Shipping</h3>
					<p>All over in world over $100</p>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- end: Rectangle Banners -->
<div class="row clearfix f-space30"></div>
<!-- footer -->
<footer class="footer">
	<div class="copyrights">
		<div class="container">
			<div class="row">
				<div class="col-lg-8 col-sm-6 col-xs-6"> <span class="copytxt">Designed by <a href="#">Flatro</a> &amp; Modified by <a href="https://github.com/imancha/Clever" style="color:#FFF">Imancha</a> - All rights reserved</span> </div>
				<div class="col-lg-4 col-sm-6 col-xs-6 payment-icons"> <a href="#"> <img src="images/icons/discover.png" alt="discover"> </a> <a href="#a"> <img src="images/icons/2co.png" alt="2co"> </a> <a href="#a"> <img src="images/icons/paypal.png" alt="paypal"> </a> <a href="#a"> <img src="images/icons/mastercard.png" alt="master card"> </a> <a href="#a"> <img src="images/icons/visa.png" alt="visa card"> </a> <a href="#a"> <img src="images/icons/moneybookers.png" alt="moneybookers"> </a> </div>
			</div>
		</div>
	</div>
</footer>
<!-- end: footer -->

<!-- Style Switcher JS -->
<script src="js/style-switch.js" type="text/javascript"></script>
<section id="style-switch" class="bgcolor3">
  <h2>Style Switch <a href="#" class="btn color2"><i class="fa fa-cog "></i></a></h2>
  <div class="inner">
    <h3>Predefined Styles</h3>
    <ul class="colors list-unstyled" id="color1">
      <li><a href="#" class="blue-red" data-toggle="tooltip" title="Blue Red" > <i class="fa fa-cog fa-stop one"></i><i class="fa fa-cog fa-stop two"></i></a></li>
      <li><a href="#" class="midnight-blue" data-toggle="tooltip" title="Midnight Blue" > <i class="fa fa-cog fa-stop one"></i><i class="fa fa-cog fa-stop two"></i></a></li>
      <li><a href="#" class="mono-red" data-toggle="tooltip" title="Mono Red" > <i class="fa fa-cog fa-stop one"></i><i class="fa fa-cog fa-stop two"></i></a></li>
      <li><a href="#" class="pinegreen-purple" data-toggle="tooltip" title="PineGreen Purple" > <i class="fa fa-cog fa-stop one"></i><i class="fa fa-cog fa-stop two"></i></a></li>
      <li><a href="#" class="darkmagenta-rosybrown" data-toggle="tooltip" title="DarkMagenta RosyBrown" > <i class="fa fa-cog fa-stop one"></i><i class="fa fa-cog fa-stop two"></i></a></li>
      <li><a href="#" class="darkorchid-seagreen" data-toggle="tooltip" title="DarkOrchid SeaGreen" > <i class="fa fa-cog fa-stop one"></i><i class="fa fa-cog fa-stop two"></i></a></li>
      <li><a href="#" class="steel-blue" data-toggle="tooltip" title="Steel Blue" > <i class="fa fa-cog fa-stop one"></i><i class="fa fa-cog fa-stop two"></i></a></li>
      <li><a href="#" class="cadetblue-violetred" data-toggle="tooltip" title="CadetBlue VioletRed" > <i class="fa fa-cog fa-stop one"></i><i class="fa fa-cog fa-stop two"></i></a></li>
      <li><a href="#" class="mediumpurple-seagreen" data-toggle="tooltip" title="MediumPurple SeaGreen" > <i class="fa fa-cog fa-stop one"></i><i class="fa fa-cog fa-stop two"></i></a></li>
      <li><a href="#" class="steelblue-leafgreen" data-toggle="tooltip" title="SteelBlue LeafGreen" > <i class="fa fa-cog fa-stop one"></i><i class="fa fa-cog fa-stop two"></i></a></li>
      <li><a href="#" class="orange-steelblue" data-toggle="tooltip" title="Orange SteelBlue" > <i class="fa fa-cog fa-stop one"></i><i class="fa fa-cog fa-stop two"></i></a></li>
      <li><a href="#" class="gray" data-toggle="tooltip" title="Gray" > <i class="fa fa-cog fa-stop one"></i><i class="fa fa-cog fa-stop two"></i></a></li>
    </ul>
  </div>
  <div id="reset" class="inner"><a href="#" class="btn normal color2 ">Reset</a></div>
</section>
<!-- Google Maps -->
<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false&amp;language=en"></script>
<script type="text/javascript" src="js/gmap3.js"></script>
<script src="js/custom.js" type="text/javascript"></script>
</body>
</html>
<?php

function total()
{
	include_once('../controller.cart.php');

	$total = 0;

	if(!empty($_SESSION['imancha']['cart']))
	{
		$action = new CartController();
		$data = $action->index();

		foreach(json_decode($data) as $key=>$val)
		{
			$total += $val->price*$val->qty;
		}
	}

	return $total;
}

function item()
{
	include_once('../controller.cart.php');
	include_once('../controller.book.php');

	$item = NULL;

	if(!empty($_SESSION['imancha']['cart']))
	{
		$action = new CartController();
		$_action = new BookController();

		foreach(json_decode($action->index()) as $key=>$val)
		{
			foreach(json_decode($_action->index($val->id)) as $_key=>$_val)
			{
				$item .= '<div class="qc-row qc-row-item">
										<span class="qc-col-qty">'.$val->qty.'</span>
										<span class="qc-col-name"><a href="./?product='.$_val->id.'">'.$_val->title.'</a></span>
										<span class="qc-col-price">'.symbol().$val->price.'</span>
										<span class="qc-col-remove">
											<button class="btn" data-toggle="tooltip" title="Remove" onclick="window.location=\'./?cart=remove&item='.$_val->id.'\'"><i class="fa fa-times fa-fw"></i> </button>
										</span>
									</div>';
			}
		}
	}

	return $item;
}

function breadcrumb()
{
	if(isset($_GET['product']) AND !empty($_GET['product']))
		echo '<i class="fa fa-angle-right fa-fw"></i> '.$GLOBALS['O8'];
	elseif(isset($_GET['!']))
	{
		switch($_GET['!'])
		{
			case 'about': echo '<i class="fa fa-angle-right fa-fw"></i> '.$GLOBALS['O4'].''; break;
			case 'contact': echo '<i class="fa fa-angle-right fa-fw"></i> '.$GLOBALS['O11'].''; break;
			case 'wishlist': echo '<i class="fa fa-angle-right fa-fw"></i> '.$GLOBALS['O5'].''; break;
		}
	}
}

function symbol()
{
	if($_SESSION['imancha']['region'] == 1)
		return 'Rp ';

	return '$ ';
}

function main()
{
	if(isset($_GET['product']) AND !empty($_GET['product']))
		require '../view.public.product.php';
	elseif(isset($_GET['wishlist']) AND !empty($_GET['wishlist']))
		require '../view.public.wishlist.php';
	elseif(isset($_GET['cart']) AND !empty($_GET['cart']))
		require '../view.public.cart.php';
	elseif(isset($_GET['!']))
	{
		if($_GET['!']=='about')
			require '../view.public.about.php';
		elseif($_GET['!']=='contact')
			require '../view.public.contact.php';
		elseif($_GET['!']=='cart')
			require '../view.public.cart.php';
		elseif($_GET['!']=='checkout')
			require '../view.public.checkout.php';
		elseif($_GET['!']=='wishlist')
			require '../view.public.wishlist.php';
		elseif($_GET['!']=='order')
			require '../view.public.order.php';
	}
	else
		require '../view.public.index.php';
}

ob_end_flush();
