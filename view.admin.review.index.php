<?php

include_once('controller.review.php');

$action = new ReviewController();
$data = $action->index();

print '<div>
				<button class="btn btn-primary btn-rounded" onclick="window.location=\'./?!=review&i=insert\'">
					<i class="iconfa-edit"></i> &nbsp; Insert New Review
        </button>
       </div>';

if(count($data) > 0)
{
	print '	<table id="dyntable" class="table table-bordered responsive">
						<thead>
							<tr>
								<th class="head1 text-center"></th>
								<th class="head0 text-center">#</th>
								<th class="head1 text-center">Name</th>
								<th class="head0 text-center">Email</th>
								<th class="head1 text-center">Book</th>
								<th class="head0 text-center">Rate</th>
								<th class="head1 text-center">Date</th>
								<th class="head0 text-center">Review</th>
							</tr>
						</thead>
						<tbody>';

	$i = 0;
	foreach(json_decode($data) as $key=>$val)
	{
		print '	<tr>
							<td></td>
							<td>'.++$i.'</td>
							<td>'.$val->user.'</td>
							<td>'.$val->email.'</td>
							<td>'.$val->book.'</td>
							<td class="text-center">'.$val->rate.'</td>
							<td class="text-center">'.$val->date.'</td>
							<td class="text-center">
								<button class="btn btn-transparent btn-primary" title="View" data-target="#view'.$i.'" data-toggle="modal">
									<i class="iconfa-eye-open"></i>
								</button>
							</td>
						</tr>
							<div aria-hidden="false" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" class="modal hide fade in" id="view'.$i.'">
								<div class="modal-header">
									<button aria-hidden="true" data-dismiss="modal" class="close" type="button">&times;</button>
									<h3 id="myModalLabel">'.$val->user.'</h3>
								</div>
								<div class="modal-body">
									<p>'.$val->review.'</p>
								</div>
								<div class="modal-footer">
									<button class="btn btn-danger pull-left" onclick="window.location=\'./?!=review&i=delete&)='.please('encrypt',$val->id).'&(='.please('encrypt',$val->user).'\'">Delete</button>
									<button data-dismiss="modal" class="btn pull-right">Close</button>
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
            <p style="margin: 8px 0"><strong>Review</strong> is empty.</p>
          </div>';
}
