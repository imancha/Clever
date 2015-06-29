<?php

include_once('controller.review.php');

$action = new ReviewController();

if($_SERVER['REQUEST_METHOD'] == 'POST')
{
	if($action->store())
	{
		echo '<div class="alert alert-success">
						<button class="close" type="button" data-dismiss="alert">x</button>
						<strong>Well done! </strong>
						You successfully added the review into the Book Review</i>.
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

?>

<div class="widget">
	<h4 class="widgettitle">Book Catalogue Form</h4>
	<div class="widgetcontent nopadding">
		<form class="stdform stdform2" action="" method="post" enctype="multipart/form-data">
			<input type="hidden" name="name" value="<?php echo $_SESSION['imancha']['name'] ?>">
			<input type="hidden" name="email" value="<?php echo $_SESSION['imancha']['email'] ?>">
			<p>
				<label>Title <small>The title of the book</small></label>
				<span class="formwrapper field">
					<span class="input-append" style="margin-bottom:-10px">
						<select name="title" id="title" data-placeholder="Choose Book" class="chzn-select input-xxlarge" tabindex="4">
							<option value=""></option>
							<?php
								$result = $action->select();

								foreach(json_decode($result) as $key=>$val)
								{
									print '<option value='.$val->id.'>'.$val->title.'</option>';
								}
							?>
						</select>
					</span>
				</span>
			</p>
			<p>
				<label>Review <small>The review of the book</small></label>
				<span class="field"><textarea id="elm1" name="review" rows="15" cols="80" style="width: 80%" class="tinymce"></textarea></span>
			</p>
			<p>
				<label>Rate <small>The rate(s) of the book</small></label>
				<span class="field"><input type="number" name="rate" id="rate" class="input-small" autocomplete="off" min="1" max="5"></span>
			</p>
			<p class="stdformbutton">
				<button name="submit" type="submit" class="btn btn-primary">Submit</button>
				<button type="reset" class="btn">Reset</button>
			</p>
		</form>
	</div>
</div>
