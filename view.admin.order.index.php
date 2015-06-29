<?php

include_once('controller.order.php');
include_once('controller.cart.php');

$action = new OrderController();

if($_SERVER['REQUEST_METHOD'] == 'POST')
{
	if($action->update())
	{
		echo '<div class="alert alert-success">
						<button class="close" type="button" data-dismiss="alert">x</button>
						<strong>Well done! </strong>
						You successfully updated the Order Status.
					</div>';
	}
	else
	{
		echo '<div class="alert alert-error">
						<button class="close" type="button" data-dismiss="alert">x</button>
						<strong>Oh snap! </strong>
						Change a few things up and try submitting again.
					</div>';
	}
}

$data = $action->order();

if(count($data) > 0)
{
	print '	<table id="dyntable" class="table table-bordered responsive">
						<thead>
							<tr>
								<th class="head1"></th>
								<th class="head1">#</th>
								<th class="head0">Datetime</th>
								<th class="head1">Name</th>
								<th>Payment Method</th>
								<th>Shipping Method</th>
								<th>Message</th>
								<th>Total</th>
								<th class="head1 text-center">Cart</th>
								<th>Status</th>
								<th class="head0 text-center" title="edit"><i class="iconfa-edit"></i></th>
							</tr>
						</thead>
						<tbody>';

	$cart = new CartController();

	$i = 0;
	foreach(json_decode($data) as $key=>$val)
	{
		$_data = $cart->show($val->cart);

		print '		<tr>
								<td></td>
								<td>'.++$i.'</td>
								<td>'.$val->date.'</td>
								<td>'.$val->first.' '.$val->last.'</td>
								<td>'.$val->payment.'</td>
								<td>'.$val->shipping.'</td>
								<td>'.$val->message.'</td>
								<td>'.$val->total.'</td>
								<td class="text-center"><button class="btn btn-transparent btn-primary" title="View" data-target="#view'.$val->id.'" data-toggle="modal"><span class="badge">'.count(json_decode($_data)).'</span></button></td>
								<td>'.$val->status.'</td>
								<td class="text-center"><button class="btn btn-transparent btn-warning" title="Edit" data-target="#edit'.$val->id.'" data-toggle="modal"><i class="iconfa-edit"></i></button></td>
							</tr>
							<div aria-hidden="false" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" class="modal hide fade in" id="edit'.$val->id.'">
								<div class="modal-header">
									<button aria-hidden="true" data-dismiss="modal" class="close" type="button">&times;</button>
									<h3 id="myModalLabel">Order Status</h3>
								</div>
								<form method="post" action="">
									<div class="modal-body">
										<div style="font-size:larger">
											<div style="margin-bottom:10px;"><strong>Name:</strong> '.$val->first.' '.$val->last.'</div>
											<div style="margin-bottom:10px;"><strong>Total:</strong> '.$val->total.'</div>
											<div style="margin-bottom:10px;"><strong>Status:</strong>
												<input name="id" type="hidden" value="'.$val->id.'">
												<select name="status">
													<option value="Packing"'.($val->status == 'Packing' ? ' selected=selected' : '').'>Packing</option>
													<option value="Shipping"'.($val->status == 'Shipping' ? ' selected=selected' : '').'>Shipping</option>
													<option value="Delivered"'.($val->status == 'Delivered' ? ' selected=selected' : '').'>Delivered</option>
												</select>
											</div>
										</div>
									</div>
									<div class="modal-footer">
										<button class="btn btn-primary pull-left" type="submit">Submit</button>
										<button data-dismiss="modal" class="btn pull-right" type="reset">Close</button>
									</div>
								</form>
							</div>
							<div aria-hidden="false" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" class="modal hide fade in" id="view'.$val->id.'">
								<div class="modal-header">
									<button aria-hidden="true" data-dismiss="modal" class="close" type="button">&times;</button>
									<h3 id="myModalLabel">'.$val->first.' '.$val->last.'</h3>
								</div>
								<div class="modal-body">
									<div style="width:100%; border-bottom:1px solid #eee;">
										<span style="float:left;"><strong>#</strong></span>
										<span style="margin:20px;"><strong>Item</strong></span>
										<span style="float:right;"><strong>Qty</strong></span>
									</div>';

					$i = 0;
					foreach(json_decode($_data) as $_key=>$_val)
					{
						print '<div style="width:100%;margin-bottom:5px;">
										<span style="float:left;">'.++$i.'</span>
										<span style="margin:20px;">'.$_val->item.'</span>
										<span style="float:right;">'.$_val->quantity.'</span>
									</div>';
					}
		print '			</div>
								<div class="modal-footer">
									<button data-dismiss="modal" class="btn">Close</button>
								</div>
							</div>';
	}

	print '		</tbody>
					</table>';
}
else
{
	print '	<div class="alert alert-error alert-block">
            <button data-dismiss="alert" class="close" type="button">&times;</button>
            <h4>Oops...!</h4>
            <p style="margin: 8px 0"><strong>Order</strong> is empty.</p>
          </div>';
}
