<?php

include_once('controller.book.php');
include_once('controller.cart.php');
include_once('controller.order.php');

$action = new OrderController();
$_action = new CartController();
$__action = new BookController();

if(!empty($_SESSION['imancha']['cart']))
{
	print '	<!-- Page title -->
					<div class="container">
						<div class="row">
							<div class="col-md-12">
								<div class="page-title">
									<h2>'.$GLOBALS['O7'].' <span>(4 '.$GLOBALS['O19'].')</span></h2>
								</div>
							</div>
						</div>
					</div>
					<!-- end: Page title -->
					<div class="row clearfix f-space10"></div>
					<div class="container">
						<!-- row -->
						<div class="row">
							<div class="col-md-12 col-sm-12 col-xs-12 main-column box-block">
								<!-- Checkout Options -->
								<div class="box-content checkout-op">
									<div class="panel-group" id="checkout-options">
										<!--Shipping Address panel -->
										<div class="panel panel-default">
											<div class="panel-heading" data-parent="#checkout-options" data-target="#op3" data-toggle="collapse">
												<h4 class="panel-title"> <a href="#"> <span class="fa fa-envelope-o"></span> '.$GLOBALS['O20'].' </a><span class="op-number">01</span> </h4>
											</div>
											<div class="panel-collapse collapse in" id="op3">
												<div class="panel-body">
													<div class="row co-row">
															<!-- Login -->
															<div class="col-md-6 col-xs-12">
																<div class="box-content form-box">
																	<h4>'.$GLOBALS['O21'].'</h4>
																	<div id="error1" class="alert">'.$GLOBALS['O22'].'</div>
																	<input type="text" value="" autocomplete="off" id="firstname" placeholder="'.$GLOBALS['O23'].'" class="input4" required>
																	<div id="error2" class="alert">'.$GLOBALS['O22'].'</div>
																	<input type="text" value="" autocomplete="off" id="lastname" placeholder="'.$GLOBALS['O24'].'" class="input4" required>
																	<div id="error3" class="alert">'.$GLOBALS['O22'].'</div>
																	<input type="text" value="" autocomplete="off" id="email" placeholder="'.$GLOBALS['O25'].'" class="input4" required>
																	<div id="error4" class="alert">'.$GLOBALS['O22'].'</div>
																	<input type="text" value="" autocomplete="off" id="phone" placeholder="'.$GLOBALS['O26'].'" class="input4" required>
																</div>
															</div>
															<!-- end: Login -->
															<!-- Register -->
															<div class="col-md-6 col-xs-12">
																<div class="box-content form-box">
																	<h4>'.$GLOBALS['O27'].'</h4>
																	<div id="error5" class="alert">'.$GLOBALS['O22'].'</div>
																	<input type="text" value="" autocomplete="off" id="company" placeholder="'.$GLOBALS['O28'].'" class="input4">
																	<div id="error6" class="alert">'.$GLOBALS['O22'].'</div>
																	<input type="text" value="" autocomplete="off" id="address" placeholder="'.$GLOBALS['O29'].'" class="input4" required>
																	<div id="error7" class="alert">'.$GLOBALS['O22'].'</div>
																	<input type="text" value="" autocomplete="off" id="city" placeholder="'.$GLOBALS['O30'].'" class="input4" required>
																	<div id="error8" class="alert">'.$GLOBALS['O22'].'</div>
																	<input type="text" value="" autocomplete="off" id="postcode" placeholder="'.$GLOBALS['O31'].'" class="input4">
																	<div id="error9" class="alert">'.$GLOBALS['O22'].'</div>
																	<input type="text" value="" autocomplete="off" id="state" placeholder="'.$GLOBALS['O32'].'" class="input4" required>
																	<div id="error10" class="alert">'.$GLOBALS['O22'].'</div>
																	<input type="text" value="" autocomplete="off" id="country" placeholder="'.$GLOBALS['O33'].'" class="input4" required>
																	<button id="formOne" class="btn medium color2 pull-right" onclick="formOne()">'.$GLOBALS['O34'].'</button>
																	<button id="editOne" class="btn medium color2 pull-right none" onclick="editOne()">'.$GLOBALS['O35'].'</button>
																</div>
															</div>
														<!-- end: Register -->
													</div>
												</div>
											</div>
										</div>
										<!-- end: Shipping Address panel -->
										<!--Shipping Method -->
										<div id="p4" class="panel panel-default disabled"> <!-- add class disabled to prevent from clicking -->
											<div class="panel-heading collapsed" data-parent="#checkout-options" data-target="#op4" data-toggle="collapse">
												<h4 class="panel-title"> <a href="#a"> <span class="fa fa-truck"></span> '.$GLOBALS['O36'].' </a><span class="op-number">02</span> </h4>
											</div>
											<div class="panel-collapse collapse" id="op4">
												<div class="panel-body">
													<div class="row co-row">';

													$data = $action->shippingMethod($_SESSION['imancha']['region']);

													if(count(json_decode($data)) > 0)
													{
														print '	<!-- Shipping methods -->
																		<div class="col-md-12 col-xs-12">
																			<div class="box-content form-box">
																				<h4>'.$GLOBALS['O37'].'</h4>
																				<div id="error11" class="alert">'.$GLOBALS['O22'].'</div>';

														$k = 0;
														foreach(json_decode($data) as $key=>$val)
														{
															print '		<label class="radio" for="radio'.++$k.'">
																					<input type="radio" value="'.$val->id.'" id="radio'.$k.'" data-toggle="radio" name="shippingmethod" class="pull-left">
																					<span class="pull-left color1 provider">'.$val->name.'</span> - <span class="color2 price">'.symbol().$val->cost.'</span><br/>
																					<em>'.$val->description.' <br/>'.$val->estimate.'</em>
																				</label>';
														}

														print '			<button id="formTwo" class="btn medium color2 pull-right" onclick="formTwo()">'.$GLOBALS['O34'].'</button>
																				<button id="editTwo" class="btn medium color2 pull-right none" onclick="editTwo()">'.$GLOBALS['O35'].'</button>
																			</div>
																		</div>
																		<!-- end: Shipping methods -->';
													}

							print '			</div>
												</div>
											</div>
										</div>
										<!-- end: Shipping Method -->
										<!-- Payment Method -->
										<div id="p5" class="panel panel-default disabled"> <!-- add class disabled to prevent from clicking -->
											<div class="panel-heading collapsed" data-parent="#checkout-options" data-target="#op5" data-toggle="collapse">
												<h4 class="panel-title"> <a href="#a"> <span class="fa fa-money"></span> '.$GLOBALS['O38'].' </a><span class="op-number">03</span> </h4>
											</div>
											<div class="panel-collapse collapse" id="op5">
												<div class="panel-body">
													<div class="row co-row">';

													$data = $action->paymentMethod($_SESSION['imancha']['region']);

													if(count(json_decode($data)) > 0)
													{
														print '	<!-- Payment methods -->
																		<div class="col-md-12 col-xs-12">
																			<div class="box-content form-box">
																				<h4>'.$GLOBALS['O39'].'</h4>
																				<div id="error12" class="alert">'.$GLOBALS['O22'].'</div>';

														$j = 0;
														foreach(json_decode($data) as $key=>$val)
														{
															print '		<label class="radio" for="radoi'.++$j.'">
																					<input type="radio" value="'.$val->id.'" id="radoi'.$j.'" data-toggle="radio" name="paymentmethod" class="pull-left">
																					<span class="pull-left color1 provider">'.$val->name.'</span><br/>
																					<em>'.$val->description.'</em>
																				</label>';
														}

														echo '			<textarea name="comments" id="comments" cols="10" rows="8" class="input4" placeholder="'.$GLOBALS['O40'].'"></textarea>
																				<button id="formThree" class="btn medium color2 pull-right" onclick="formThree()">'.$GLOBALS['O34'].'</button>
																				<button id="editThree" class="btn medium color2 pull-right none" onclick="editThree()">'.$GLOBALS['O35'].'</button>
																			</div>
																		</div>
																		<!-- end: Payment methods -->';
													}

							print '			</div>
												</div>
											</div>
										</div>
										<!-- end: Payment Method -->
										<!-- Confirm Order -->
										<div id="p6" class="panel panel-default disabled"> <!-- add class disabled to prevent from clicking -->
											<div class="panel-heading collapsed" data-parent="#checkout-options" data-target="#op6" data-toggle="collapse">
												<h4 class="panel-title"> <a href="#"> <span class="fa fa-check"></span> '.$GLOBALS['O41'].' </a><span class="op-number">04</span> </h4>
											</div>
											<div class="panel-collapse collapse" id="op6">
												<div class="panel-body">
													<div class="row co-row">
														<div class="col-md-12 col-xs-12">
															<div class="box-content form-box">
																<h4>'.$GLOBALS['O42'].'</h4>';

$_data = $_action->index();
$i = $total = 0;

foreach(json_decode($_data) as $_key=>$_val)
{
	$data = $__action->index($_val->id);

	foreach(json_decode($data) as $key=>$val)
	{
		print '	<!-- product -->
						<div class="row" id="'.++$i.'">
							<div class="product" style="display:block;">
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
						<!-- end: product -->
						<div class="clearfix f-space10"></div>';
					$total += $_val->price*$_val->qty;
	}
}

							print ' 		<div class="box-content cart-box-wr pull-right">
														<div class="cart-box-tm">
															<div class="tm3 bgcolor2">Total </div>
															<div class="tm4 bgcolor2">'.symbol().'<span class="pull-right">'.$total.'</span></div>
														</div>
													</div>
													<div class="clearfix f-space20"></div>
													<button class="btn large color1 pull-right" onclick="order()">Create Order</button>
													<button class="btn large color3 pull-right" style="margin-right:2px" onclick="window.location=\'./?!=cart\'">'.$GLOBALS['O43'].'</button>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<!-- end: Confirm Order -->
						</div>
					</div>
					<!-- end: Checkout Options -->
				</div>
			</div>
		</div>
		<div class="clearfix f-space30"></div>';
}
else
{
	header('Location: ./?!=cart');
	exit();
}
