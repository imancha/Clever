<?php

include_once('controller.order.php');

$action = new OrderController();

if(isset($_GET['order']))
{
	$action->store();
}
else
{
	print '	<div class="container">
						<div class="row">
							<div class="col-md-12">
								<div class="page-title">
									<br>
									<h3>'.$GLOBALS['O44'].'</h3>
								</div>
							</div>
						</div>
					</div>
					<div class="row clearfix f-space30"></div>';
}
