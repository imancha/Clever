<?php

print '	<div class="alert alert-warning alert-block">
					<h4>Welcome!</h4>
					<p style="margin: 8px 0">This is the admin site of <strong>Clever Books Online Shop</strong>. In order to use this site, please select the navigation menu at the left page.</p>
				</div><!--alert-->';

include_once('controller.cart.php');

$action = new CartController();
$data = $action->visitor();

if(count($data) > 0)
{
	print '	<table id="dyntable" class="table table-bordered responsive">
						<thead>
							<tr>
								<th class="head1 text-center"></th>
								<th class="head0 text-center">#</th>
								<th class="head1 text-center">IP Address</th>
								<th class="head0 text-center">Warehouse</th>
								<th class="head1 text-center">Datetime</th>
							</tr>
						</thead>
						<tbody>';

	$i = 0;
	foreach(json_decode($data) as $key=>$val)
	{
		print '		<tr>
								<td></td>
								<td class="text-center">'.++$i.'</td>
								<td>'.$val->name.'</td>
								<td>'.$val->warehouse.'</td>
								<td>'.$val->datetime.'</td>
							</tr>';
	}

	print '		</tbody>
					</table>';
}
