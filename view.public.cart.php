<?php

include_once('controller.cart.php');
include_once('controller.book.php');

$action = new CartController();

if(isset($_GET['cart']))
{
	switch($_GET['cart'])
	{
		case 'plus':
		case 'add':
			$action->insert();
			break;
		case 'minus':
			$action->update();
			break;
		case 'remove':
			$action->remove();
			break;
	}

	header('Location: '.$_SERVER['HTTP_REFERER']);
	exit();
}

print '	<div class="container">
					<div class="row">
						<div class="col-md-12">
							<div class="page-title">
								<h2>'.$GLOBALS['O18'].' ('.count($_SESSION['imancha']['cart']).' Items)</h2>
							</div>
						</div>
					</div>
				</div>
				<div class="row clearfix f-space10"></div>';

if(!empty($_SESSION['imancha']['cart']))
{
	$_action = new BookController();
	$_data = $action->index();
	$i = $total = 0;

	foreach(json_decode($_data) as $_key=>$_val)
	{
		$data = $_action->index($_val->id);

		foreach(json_decode($data) as $key=>$val)
		{
			print '	<!-- product -->
							<div class="container" id="'.++$i.'">
								<div class="row">
									<div class="product">
										<div class="col-md-2 col-sm-3 hidden-xs p-wr">
											<div class="product-attrb-wr">
												<div class="product-attrb">
													<div class="image">
														<a class="img" href="./?product='.$val->id.'">
															<img alt="product info" src="images/cover/'.$val->title.'.png" title="'.$val->title.'">
														</a>
													</div>
												</div>
											</div>
										</div>
										<div class="col-md-3 col-sm-7 col-xs-9 p-wr">
											<div class="product-attrb-wr">
												<div class="product-meta">
													<div class="name"><h3><a href="./?product='.$val->id.'">'.$val->title.'</a></h3></div>
													<div class="subtitle"><small>'.$val->subtitle.'</small></div>
													<div class="author"><p>By: '.$val->author.'</p></div>
													<div class="publisher"><p>'.$val->publisher.'</p></div>
												</div>
											</div>
										</div>
										<div class="col-md-2 hidden-sm hidden-xs p-wr">
											<div class="product-attrb-wr">
												<div class="product-attrb">
													<div class="price"> <span class="a-price"><span class="sym">'.symbol().'</span>'.$_val->price.'</span> </div>
												</div>
											</div>
										</div>
										<div class="col-md-2 hidden-sm hidden-xs p-wr">
											<div class="product-attrb-wr">
												<div class="product-attrb">
													<div class="qtyinput">
														<div class="quantity-inp">
															<input type="text" class="quantity-input" name="p_quantity" value="'.$_val->qty.'" disabled>
															<div class="quantity-txt minusbtn"><a href="./?cart=minus&item='.$val->id.'" class="qty qtyminus" ><i class="fa fa-minus fa-fw"></i></a></div>
															<div class="quantity-txt plusbtn"><a href="./?cart=plus&item='.$val->id.'" class="qty qtyplus" ><i class="fa fa-plus fa-fw"></i></a></div>
														</div>
													</div>
												</div>
											</div>
										</div>
										<div class="col-md-2 hidden-sm hidden-xs p-wr">
											<div class="product-attrb-wr">
												<div class="product-attrb">
													<div class="price"> <span class="t-price"><span class="sym">'.symbol().'</span>'.($_val->price*$_val->qty).'</span> </div>
												</div>
											</div>
										</div>
										<div class="col-md-1 col-sm-2 col-xs-3 p-wr">
											<div class="product-attrb-wr">
												<div class="product-attrb">
													<div class="remove"> <button class="btn color2" data-toggle="tooltip" data-original-title="Remove" onclick="window.location=\'./?cart=remove&item='.$val->id.'\'"><i class="fa fa-trash-o fa-fw color2"></i></button> </div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<!-- end: product -->
							<div class="row clearfix f-space30"></div>';
						$total += $_val->price*$_val->qty;
		}
	}

	print '<div class="container">
					<div class="row">
						<!-- 	Total amount -->
						<div class="col-md-5 col-sm-5 col-xs-12 cart-box-wr pull-right">
							<div class="box-content">
								<div class="cart-box-tm">
									<div class="tm3 bgcolor2">Total </div>
									<div class="tm4 bgcolor2">'.symbol().$total.'</div>
								</div>
								<div class="clearfix f-space10"></div>
								<button class="btn large color1 pull-right" onclick="window.location=\'./?!=checkout\'">Proceed to Checkout</button>
								<div class="clearfix f-space30"></div>
							</div>
						</div>
						<!-- end: Total amount -->
					</div>
				</div>
				<div class="clearfix f-space30"></div>';
}
