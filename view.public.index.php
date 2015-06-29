<?php

include_once('controller.review.php');
include_once('controller.stock.php');

$action = new StockController();
$_action = new ReviewController();

if(isset($_GET['view']))
{
	session_start();
	$_GET['view'] == 'list' ? $_SESSION['imancha']['view'] = 'list' : $_SESSION['imancha']['view'] = 'grid';
	header('Location: '.$_SERVER['HTTP_REFERER']);
	exit();
}

isset($_SESSION['imancha']['view']) ? NULL : $_SESSION['imancha']['view'] = 'grid';
isset($_GET['page']) ? $pages = $_GET['page'] : $pages = 1;

if($_SESSION['imancha']['view'] == 'list')
{
	$perpage = 5;
	$data = $action->select(($pages-1)*$perpage,$perpage,$_SESSION['imancha']['region']);
}
else
{
	$perpage = 6;
	$data = $action->select(($pages-1)*$perpage,$perpage,$_SESSION['imancha']['region']);
}

$max = $action->counts($_SESSION['imancha']['region']);

print '<div class="container">
				<!-- row -->
				<div class="row">
					<div class="col-md-12 col-sm-12 col-xs-12 box-block">
						<div class="box-heading category-heading">
							<span>'.$GLOBALS['O45'].' '.((($pages-1)*$perpage)+1).'-'.(((((($pages-1)*$perpage)+1)+$perpage)-1) > $max ? $max : ((((($pages-1)*$perpage)+1)+$perpage)-1)).' '.$GLOBALS['O46'].' '.$max.' '.$GLOBALS['O47'].'</span>
							<ul class="nav nav-pills pull-right">
								<li class="view-list'.($_SESSION['imancha']['view'] == 'list' ? ' active' : '').'"> <a href="./?view=list"> <i class="fa fa-list-ul fa-fw"></i></a> </li>
								<li class="view-grid'.($_SESSION['imancha']['view'] != 'list' ? ' active' : '').'"> <a href="./?view=grid"> <i class="fa fa-th-large fa-fw"></i></a> </li>
							</ul>
						</div>
						<div class="row clearfix f-space10"></div>
						<div class="box-content">
							<div class="box-products">';

if($_SESSION['imancha']['view'] == 'list')
{
	foreach(json_decode($data) as $key=>$val)
	{
		$_data = $_action->getReview($val->id);
		$rate = $star = NULL;

		foreach(json_decode($_data) as $_key=>$_val)
		{
			$rate += $_val->rate;
		}

		for($i=1; $i<=5; $i++)
		{
			($i <= (round($rate/5,0))) ? $star .= '<i class="fa fa-star"></i> ' : $star .= '<i class="fa fa-star-o"></i> ';
		}

		print '			<!-- Product Row -->
								<div class="row list-product">
									<!-- Product -->
									<!-- Image -->
									<div class="col-md-4 col-sm-12 col-xs-12 product-image">
										<div class="image">
											<a class="img" href="./?product='.$val->id.'">
												<img alt="'.$val->title.'" src="images/cover/'.$val->title.'.png" title="'.$val->title.'" class="ani-image" style="height:340px;">
											</a>
										</div>
									</div>
									<!-- end: Image -->
									<div class="col-md-8 col-sm-12 col-xs-12 product-title">
										<div class="producttitle">
											<h1><a href="./?product='.$val->id.'">'.$val->title.'</a></h1>
											<div style="color:#ffffff">'.$val->subtitle.'&nbsp;</div>
											<div class="rating">'.$star.'</div>
											<span class="reviews-info">'.$GLOBALS['O56'].' '.count(json_decode($_data)).' '.$GLOBALS['O57'].'</span> </div>
									</div>
									<div class="col-md-3 col-sm-4 col-xs-12 product-price">
										<div class="big-price"> <span class="price-new"><span class="sym">'.symbol().'</span>1'.$val->price.'</span> </div>
									</div>
									<div class="col-md-5 col-sm-8 col-xs-12 product-meta">
										<div class="productmeta">
											'.substr(strip_tags($val->desc),0,250).'... '.'<a href="./?product='.$val->id.'">'.$GLOBALS['O58'].'</a>
											<div class="category-list-btns">
												<button class="btn normal btn-compare" data-toggle="tooltip" title="'.$GLOBALS['O59'].'"  onclick="window.location=\'./?wishlist=add&item='.$val->id.'\'"> <i class="fa normal fa-heart fa-fw"></i> </button>
												<button class="btn normal btn-addtocart" onclick="window.location=\'./?cart=add&item='.$val->id.'\'"> <i class="fa fa-shopping-cart fa-fw"></i> '.$GLOBALS['O15'].' </button>
											</div>
										</div>
									</div>
								</div>
								<!-- end: Product Row -->
								<div class="row clearfix f-space10"></div>';
	}
}
else
{
	print '				<!-- Products Row -->
								<div class="row box-product">';

	foreach(json_decode($data) as $key=>$val)
	{
		$_data = $_action->getReview($val->id);
		$rate = $star = NULL;

		foreach(json_decode($_data) as $_key=>$_val)
		{
			$rate += $_val->rate;
		}

		for($i=1; $i<=5; $i++)
		{
			if($i <= (round($rate/5,0)))
				$star .= '<i class="fa fa-star"></i> ';
			else
				$star .= '<i class="fa fa-star-o"></i> ';
		}

			print '			<!-- Product -->
									<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12" style="margin-bottom:3.3%">
										<div class="product-block">
											<div class="image"><a class="img" href="./?product='.$val->id.'"><img alt="'.$val->title.'" src="images/cover/'.$val->title.'.png" title="'.$val->title.'"></a></div>
											<div class="product-meta">
												<div class="name"><a href="./?product='.$val->id.'">'.$val->title.'</a></div>
												<div class="big-price"> <span class="price-new"><span class="sym">'.symbol().'</span>'.$val->price.'</span> </div>
												<div class="big-btns"> <button class="btn btn-default btn-view pull-left" onclick="window.location=\'./?product='.$val->id.'\'">'.$GLOBALS['O14'].'</button> <button class="btn btn-default btn-addtocart pull-right" onclick="window.location=\'./?cart=add&item='.$val->id.'\'">'.$GLOBALS['O15'].'</button> </div>
												<div class="small-price"> <span class="price-new"><span class="sym">'.symbol().'</span>'.$val->price.'</span> </div>
												<div class="rating">'.$star.'</div>
												<div class="small-btns">
													<button class="btn btn-default btn-compare pull-left" data-toggle="tooltip" title="'.$GLOBALS['O59'].'"  onclick="window.location=\'./?wishlist=add&item='.$val->id.'\'"> <i class="fa fa-heart fa-fw"></i> </button>
													<button class="btn btn-default btn-addtocart pull-left" data-toggle="tooltip" title="'.$GLOBALS['O15'].'" onclick="window.location=\'./?cart=add&item='.$val->id.'\'"> <i class="fa fa-shopping-cart fa-fw"></i> </button>
												</div>
											</div>
											<div class="meta-back"></div>
										</div>
									</div>
									<!-- end: Product -->';
	}

	print '				</div>
								<!-- end: Products Row -->';
}

if($perpage < $max)
{
	$page = floor($max/$perpage);
	if($max % $perpage > 0)
		$page += 1;
}
else
{
	$page = 1;
}

$po = $pn = $pp = NULL;
for($p=1; $p<=$page; $p++)
{
	($page==1 OR $p==$pages) ? $pa=' class="active"' : $pa='';
	$po .= '<li'.$pa.'><a href=".'.(isset($_GET['tags']) ? '&' : '?').'page='.$p.'">'.$p.'</a></li>';
}
$prev = (isset($_GET['tags']) ? '&' : '?').'page='.($pages-1);
$next = (isset($_GET['tags']) ? '&' : '?').'page='.($pages+1);
if($pages == 1 OR $page == 1)
{
	$pp=' class="disabled"';
	$prev='';
}
if($pages == $page)
{
	$pn=' class="disabled"';
	$next='';
}
print '					</div>
							</div>
							<span class="pull-left">'.$GLOBALS['O45'].' '.((($pages-1)*$perpage)+1).'-'.(((((($pages-1)*$perpage)+1)+$perpage)-1) > $max ? $max : ((((($pages-1)*$perpage)+1)+$perpage)-1)).' '.$GLOBALS['O46'].' '.$max.' '.$GLOBALS['O47'].'</span>
							<div class="pull-right">
								<ul class="pagination pagination-lg">
									<li'.$pp.'><a href="'.$prev.'"><i class="fa fa-angle-left"></i></a></li>
									'.$po.'
									<li'.$pn.'><a href="'.$next.'"><i class="fa fa-angle-right"></i></a></li>
								</ul>
							</div>
						</div>
					</div>
					<!-- end:row -->
				</div>';
