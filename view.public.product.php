<?php

include_once('controller.book.php');
include_once('controller.review.php');

if($_SERVER['REQUEST_METHOD'] == 'POST')
{
	$action = new ReviewController();
	if($action->store())
	{
		header('Location:'.$_SERVER['HTTP_REFERRER']);
		exit();
	}
}

$action = new BookController();
$data = $action->index($_GET['product']);

if(count(json_decode($data)) > 0)
{
	$_action = new ReviewController();

	foreach(json_decode($data) as $key=>$val)
	{
		$_data = $_action->getReview($val->id);
		$rate = $star = $review = $tags = NULL;

		foreach(json_decode($_data) as $_key=>$_val)
		{
			$st = NULL;
			$rate += $_val->rate;

			for($i=1; $i<=5; $i++)
			{
				$st .= ($i <= $_val->rate ? '<i class="fa fa-star"></i> ' : '<i class="fa fa-star-o"></i> ');
			}

			$review .= '<div class="review">
										<div class="review-info">
											<div class="name">
												<i class="fa fa-comment-o fa-flip-horizontal fa-fw"></i> '.$_val->name.'</div>
											<div class="date"> on <em>'.$_val->date.'</em></div>
											<div class="rating">'.$st.'</div>
										</div>
										<div class="text">'.$_val->review.'</div>
									</div>';
		}

		for($i=1; $i<=5; $i++)
		{
			$star .= ($i <= (round($rate/5,0)) ? '<i class="fa fa-star"></i> ' : '<i class="fa fa-star-o"></i> ');
		}

		$__data = $action->getTags($val->id);

		foreach(json_decode($__data) as $__key=>$__val)
		{
			$tags .= '<a href="#a">'.$__val->name.'</a>';
		}

		print '	<div class="container">
							<!-- row -->
							<div class="row">
								<div class="col-md-12 box-block">
									<!--  box content -->
									<div class="box-content">
										<!-- single product -->
										<div class="single-product">
											<!-- Images -->
											<div class="images col-md-4 col-sm-12 col-xs-12">
												<div class="row">
													<!-- Big Image and Zoom -->
													<div class="big-image col-md-12 col-sm-12 col-xs-12"> <img id="product-image" src="images/cover/'.$val->title.'.png" data-zoom-image="images/cover/'.$val->title.'.png" alt="" style="height:457px" /> </div>
													<!-- end: Big Image and Zoom -->
												</div>
											</div>
											<!-- end: Images -->
											<!-- product details -->
											<div class="product-details col-md-8 col-sm-12 col-xs-12">
												<!-- Title and rating info -->
												<div class="title">
													<h1>'.$val->title.'<div style="font-size:smaller"><small>'.$val->subtitle.'</small></div></h1>
													<div class="rating"> '.$star.' <span>'.$GLOBALS['O56'].' '.count(json_decode($_data)).' '.$GLOBALS['O57'].' </span> </div>
												</div>
												<!-- end: Title and rating info -->
												<div class="row">
													<!-- Availability, Product Code, Brand and short info -->
													<div class="short-info-wr col-md-12 col-sm-12 col-xs-12">
														<div class="short-info">
															<div class="product-attr-text">'.$GLOBALS['O60'].': <span><i>'.$val->author.'</i></span></div>
															<div class="product-attr-text"><p>'.$GLOBALS['O61'].': <span><i>'.$val->publisher.'</i></span></p></div>
															<div class="product-attr-text"><p>ISBN: <span><i>'.$val->isbn.'</i></span></p></div>
															<div class="product-attr-text"><p>'.$GLOBALS['O62'].': <span><i>'.$val->page.'</i></span></p></div>
															<div class="product-attr-text"><p>'.$GLOBALS['O63'].': <span><i>'.$val->year.'</i></span></p></div>
															<div class="product-attr-text"><p>'.$GLOBALS['O64'].': <span><i>'.$val->language.'</i></span></p></div>
															<div class="product-attr-text"><p>'.$GLOBALS['O65'].': <span class="available"><i>'.$val->stock.' '.$GLOBALS['O66'].'</i></span></p></div>
														</div>
													</div>
													<!-- end: Availability, Product Code, Brand and short info -->
												</div>
												<div class="row">
													<div class="price-wr col-md-6 col-sm-8 col-xs-12">
														<div class="big-price"> <span class="price-new"><span class="sym">'.symbol().'</span>'.$val->price.'</span> </div>
													</div>
													<div class="product-btns-wr col-md-6 col-sm-8 col-xs-12">
														<div class="product-btns">
															<div class="product-big-btns">
																<button class="btn btn-compare" onclick="window.location=\'./?wishlist=add&item='.$val->id.'\'"> <i class="fa fa-heart fa-fw"></i> '.$GLOBALS['O59'].' </button>
																<button class="btn btn-addtocart" onclick="window.location=\'./?cart=add&item='.$val->id.'\'"> <i class="fa fa-shopping-cart fa-fw"></i> '.$GLOBALS['O15'].' </button>
															</div>
														</div>
													</div>
												</div>
											</div>
											<!-- end: product details -->
										</div>
										<!-- end: single product -->
									</div>
									<!-- end: box content -->
								</div>
							</div>
							<!-- end:row -->
						</div>
						<!-- end: container-->
						<div class="clearfix f-space20"></div>
						<!-- container -->
						<div class="container">
							<!-- row -->
							<div class="row">
								<!-- tabs -->
								<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 main-column box-block product-details-tabs">
									<!-- Details Info/Reviews/Tags -->
									<!-- Nav tabs -->
									<ul class="nav nav-tabs blog-tabs nav-justified">
										<li class="active"><a href="#details-info" data-toggle="tab"><i class="fa  fa-th-list fa-fw"></i> '.$GLOBALS['O67'].'</a></li>
										<li><a href="#reviews" data-toggle="tab"><i class="fa fa-comments fa-fw"></i> '.$GLOBALS['O68'].'</a></li>
										<li> <a href="#tags" data-toggle="tab"><i class="fa fa-tags fa-fw"></i> '.$GLOBALS['O69'].' </a> </li>
									</ul>
								<!-- Tab panes -->
								<div class="tab-content">
									<div class="tab-pane active" id="details-info">'.$val->description.'</div>
								<div class="tab-pane" id="reviews">
									<div class="heading"> <span><strong>"'.$val->title.'"</strong> '.$GLOBALS['O70'].' '.count(json_decode($_data)).' '.$GLOBALS['O57'].'</span>
										<div class="rating"> '.$star.' </div>
										<a href="#wr" style="color:#E65A4B"> '.$GLOBALS['O71'].'</a>
									</div>
									'.$review.'
									<div class="write-reivew" id="#write-review">
										<h3>'.$GLOBALS['O72'].'</h3>
										<div class="fr-border"></div>
										<!-- Form -->
										<form action="" id="review_form" method="post">
											<div class="row">
												<div class="col-md-4 col-xs-12"> <a name="wr"> </a>
													<fieldset class="rating">
														<input type="radio" id="star5" name="rate" value="5" />
														<label for="star5" title="Rocks!" class="fa fa-star">5 stars</label>
														<input type="radio" id="star4" name="rate" value="4" />
														<label for="star4" title="Pretty good" class="fa fa-star">4 stars</label>
														<input type="radio" id="star3" name="rate" value="3" />
														<label for="star3" title="Cool" class="fa fa-star">3 stars</label>
														<input type="radio" id="star2" name="rate" value="2" />
														<label for="star2" title="Kinda bad" class="fa fa-star">2 stars</label>
														<input type="radio" id="star1" name="rate" value="1" />
														<label for="star1" title="Oops!" class="fa fa-star">1 star</label>
													</fieldset>
													<input type="text" name="name" id="name" placeholder="'.$GLOBALS['O50'].'*" autocomplete="off" required>
													<input type="email" name="email" id="email" placeholder="'.$GLOBALS['O25'].'" autocomplete="off" required>
													<input type="hidden" name="title" value="'.$val->id.'">
												</div>
												<div class="col-md-8 col-xs-12">
													<textarea name="review" id="review" placeholder="'.$GLOBALS['O68'].'" rows="8" autocomplete="off" required></textarea>
												</div>
											</div>
											<button name="submit" type="submit" class="btn normal color1 pull-right">Submit</button>
										</form>
										<!-- end: Form -->
									</div>
								</div>
								<div class="tab-pane" id="tags">
									<div class="tags">'.$tags.'</div>
								</div>
							</div>
							<!-- end: Tab panes -->
							<!-- end: Details Info/Reviews/Tags -->
							<div class="clearfix f-space30"></div>
						</div>
						<!-- end: tabs -->
					</div>
					<!-- row -->
				</div>
				<!-- end: container -->';
	}
}
else
{
	echo '<div class="container">
					<div class="errorpage">
						<div class="errortitle">
							<h4 class="animate0 fadeInUp">The page you are looking for has not been found :(</h4>
							<span class="animate1 bounceIn">4</span>
							<span class="animate2 bounceIn">0</span>
							<span class="animate3 bounceIn">4</span>
							<div class="errorbtns animate4 fadeInUp">
								<button onclick="history.back()" class="btn color3 large">Go to Previous Page</button>
							</div>
						</div>
					</div>
				</div>';
}
