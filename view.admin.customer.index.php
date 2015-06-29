<?php

include_once('controller.order.php');

$action = new OrderController();
$data = $action->customer();

if(count($data) > 0)
{
	print '	<table id="dyntable" class="table table-bordered responsive">
						<thead>
							<tr>
								<th class="head1 text-center"></th>
								<th class="head0 text-center">#</th>
								<th class="head1 text-center">Name</th>
								<th class="head0 text-center">Email</th>
								<th class="head1 text-center">Phone</th>
								<th class="head0 text-center">Company</th>
								<th class="head1 text-center">Address</th>
								<th class="head0 text-center">City</th>
								<th class="head1 text-center">Post Code</th>
								<th class="head0 text-center">State</th>
								<th class="head1 text-center">Country</th>
							</tr>
						</thead>
						<tbody>';

		$i = 0;
		foreach(json_decode($data) as $key=>$val)
		{
			print '	<tr>
								<td></td>
								<td>'.++$i.'</td>
								<td>'.$val->first.' '.$val->last.'</td>
								<td>'.$val->email.'</td>
								<td>'.$val->phone.'</td>
								<td>'.$val->company.'</td>
								<td>'.$val->address.'</td>
								<td>'.$val->city.'</td>
								<td>'.$val->post.'</td>
								<td>'.$val->state.'</td>
								<td>'.$val->country.'</td>
							</tr>';
		}

		print '	</tbody>
					</table>';
}
else
{
	print '	<div class="alert alert-error alert-block">
            <button data-dismiss="alert" class="close" type="button">&times;</button>
            <h4>Oops...!</h4>
            <p style="margin: 8px 0"><strong>Customer</strong> is empty.</p>
          </div>';
}
