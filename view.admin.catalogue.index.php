<?php

include_once('controller.book.php');

$book = new BookController();
$data = $book->index();

print '<div>
				<button class="btn btn-primary btn-rounded" onclick="window.location=\'./?!=catalogue&i=insert\'">
					<i class="iconfa-edit"></i> &nbsp; Insert New Book
        </button>
       </div>';

if(count($data) > 0)
{
	print '	<table id="dyntable" class="table table-bordered responsive">
						<colgroup>
							<col class="con0" />
							<col class="con1" />
							<col class="con0" />
							<col class="con1" />
							<col class="con0" />
							<col class="con1" />
							<col class="con0" />
							<col class="con1" />
							<col class="con0" />
						</colgroup>
						<thead>
							<tr>
								<th class="head0 text-center"></th>
								<th class="head1">Title</th>
								<th class="head0">Author</th>
								<th class="head1">Publisher</th>
								<th class="head0">Warehouse</th>
								<th class="head1 text-center">Price</th>
								<th class="head0 text-center">Stock</th>
								<th class="head0 text-center" title="delete"><i class="iconfa-trash"></i></th>
								</tr>
						</thead>
						<tbody>';

	foreach(json_decode($data) as $key=>$val)
	{
		print '	<tr>
							<td></td>
							<td>'.$val->title.(empty($val->subtitle) ? '' : '<small>: '.substr($val->subtitle,0,50).(strlen($val->subtitle) > 50 ? '...' : '')).'</small></td>
							<td>'.$val->author.'</td>
							<td>'.$val->publisher.'</td>
							<td>'.$val->warehouse.'</td>
							<td>'.$val->price.'</td>
							<td class="text-center">'.$val->stock.'</td>
							<td class="text-center"><button class="btn btn-transparent btn-danger" title="Delete" data-target="#delete'.$val->id.'" data-toggle="modal"><i class="iconfa-trash"></i></button></td>
						</tr>
						<div aria-hidden="false" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" class="modal hide fade in" id="delete'.$val->id.'">
							<div class="modal-header">
								<button aria-hidden="true" data-dismiss="modal" class="close" type="button">&times;</button>
								<h3 id="myModalLabel">'.$val->title.'</h3>
								<div><small>'.$val->subtitle.'</small></div>
							</div>
								<div class="modal-body">
									<p>Delete this book from the database...?</p>
								</div>
								<div class="modal-footer">
									<button class="btn btn-danger" onclick="window.location=\'./?!=catalogue&i=delete&)='.please('encrypt',$val->id).'\'">Delete</button>
									<button data-dismiss="modal" class="btn">Cancel</button>
								</div>
						</div>';
	}

	print '	</tbody>
				</table>';
}
else
{
	print '	<div class="alert alert-error alert-block">
            <button data-dismiss="alert" class="close" type="button">&times;</button>
            <h4>Oops...!</h4>
            <p style="margin: 8px 0"><strong>Catalogue</strong> is empty.</p>
          </div>';
}
