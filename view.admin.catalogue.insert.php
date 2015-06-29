<?php

include_once('controller.book.php');

$action = new BookController();

if($_SERVER['REQUEST_METHOD'] == 'POST')
{
	if($action->store())
	{
		echo '<div class="alert alert-success">
						<button class="close" type="button" data-dismiss="alert">x</button>
						<strong>Well done! </strong>
						You successfully added the <i>'.$_POST['title'].' <small>'.$_POST['subtitle'].'</small></i> into the Book Catalogue.
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
			<p>
				<label>Title <small>The title of the book</small></label>
				<span class="field"><input type="text" name="title" id="title" class="input-xxlarge" autocomplete="off" required></span>
			</p>
			<p>
				<label>Subtitle <small>The subtitle of the book</small></label>
				<span class="field"><input type="text" name="subtitle" id="subtitle" class="input-xxlarge" autocomplete="off"></span>
			</p>
			<p>
				<label>Description <small>The description of the book</small></label>
				<span class="field"><textarea id="elm1" name="description" rows="15" cols="80" style="width: 80%" class="tinymce"></textarea></span>
			</p>
			<p>
				<label>Author <small>The author(s) name of the book</small></label>
				<span class="field"><textarea name="author" id="author" class="span5" style="resize: vertical; height: 113px;" cols="80" rows="8"></textarea></span>
			</p>
			<p>
				<label>Category <small>The category of the book</small></label>
				<span class="formwrapper field">
					<span class="input-append" style="margin-bottom:-10px">
						<select name="category[]" id="category1" data-placeholder="Choose Categories..." class="chzn-select" multiple="multiple" style="width:321px;" tabindex="4">
							<option value=""></option>
							<?php
								$result = $action->getCategoryDetail();

								foreach(json_decode($result) as $key=>$val)
								{
									echo '<option value='.$val->id.'>'.$val->name.'</option>';
								}
							?>
						</select>
					</span>
				</span>
			</p>
			<p>
				<label>Publisher <small>The publisher of the book</small></label>
				<span class="field"><input type="text" name="publisher" id="publisher" class="input-xlarge" autocomplete="off"></span>
			</p>
			<p>
				<label>ISBN <small>The ISBN of the book</small></label>
				<span class="field"><input type="number" name="isbn" id="isbn" class="input-xlarge" autocomplete="off"></span>
			</p>
			<p>
				<label>Language <small>The language of the book</small></label>
				<span class="field">
					<select name="language" id="language" data-placeholder="Choose a Language..." style="width:215px" class="chzn-select" tabindex="2">
						<option></option>
						<option value="Indonesia">Indonesia</option>
						<option value="English">English</option>
					</select>
				</span>
			</p>
			<p>
				<label>Page <small>The number of pages of the book</small></label>
				<span class="field"><input type="number" name="page" id="page" class="input-small" autocomplete="off"></span>
			</p>
			<p>
				<label>Year <small>The publication date (year) of the book</small></label>
				<span class="field"><input type="number" name="year" id="year" class="input-small" autocomplete="off"></span>
			</p>
			<p>
				<label>Warehouse <small>The warehouse of the book</small></label>
				<span class="field">
					<input type="checkbox" name="warehouse[]" id="wareid" value="1"> Indonesia
					<span id="itemid" style="margin-left:49px;">
						<input type="text" name="price1" id="priceid" class="input-small" placeholder="Rp" autocomplete="off">
						<input type="number" name="stock1" id="stockid" class="input-small" placeholder="Stock" autocomplete="off">
					</span>
					<br>
					<input type="checkbox" name="warehouse[]" id="wareus" value="2"> United States
					<span id="itemus" style="margin-left:30px;">
						<input type="text" name="price2" id="priceus" class="input-small" placeholder="$" autocomplete="off">
						<input type="number" name="stock2" id="stockus" class="input-small" placeholder="Stock" autocomplete="off">
					</span>
				</span>
			</p>
			<p>
			<label>Cover <small>The cover of the book</small></label>
				<span class="field">
					<span class="fileupload fileupload-new" data-provides="fileupload">
						<span class="input-append" style="margin-bottom:0px">
							<span class="uneditable-input span3">
								<i class="iconfa-file fileupload-exists"></i>
								<span class="fileupload-preview"></span>
							</span>
							<span class="btn btn-file"><span class="fileupload-new">Select file</span>
							<span class="fileupload-exists">Change</span>
							<input type="file" name="cover" />
						</span>
						<a href="#" class="btn fileupload-exists" data-dismiss="fileupload">Remove</a>
					</span>
				</span>
			</p>
			<p class="stdformbutton">
				<button name="submit" type="submit" class="btn btn-primary">Submit</button>
				<button type="reset" class="btn">Reset</button>
			</p>
		</form>
	</div>
</div>
