/*
 * Additional function for forms.html
 *	Written by ThemePixels
 *	http://themepixels.com/
 *
 *	Copyright (c) 2012 ThemePixels (http://themepixels.com)
 *
 *	Built for Katniss Premium Responsive Admin Template
 *  http://themeforest.net/category/site-templates/admin-templates
 */

jQuery(document).ready(function(){		

	// Transform upload file
	jQuery('.uniform-file').uniform();

	// Date Picker
	jQuery("#datepicker").datepicker({dateFormat:'yy-mm-dd'});

	// Dual Box Select
	var db = jQuery('#dualselect').find('.ds_arrow button');	//get arrows of dual select
	var sel1 = jQuery('#dualselect select:first-child');		//get first select element
	var sel2 = jQuery('#dualselect select:last-child');			//get second select element

	sel2.empty(); //empty it first from dom.

	db.click(function(){
		var t = (jQuery(this).hasClass('ds_prev'))? 0 : 1;	// 0 if arrow prev otherwise arrow next
		if(t) {
			sel1.find('option').each(function(){
				if(jQuery(this).is(':selected')) {
					jQuery(this).attr('selected',false);
					var op = sel2.find('option:first-child');
					sel2.append(jQuery(this));
				}
			});
		} else {
			sel2.find('option').each(function(){
				if(jQuery(this).is(':selected')) {
					jQuery(this).attr('selected',false);
					sel1.append(jQuery(this));
				}
			});
		}
		return false;
	});

	// Tags Input
	jQuery('#tags').tagsInput();
	jQuery('#author').tagsInput({defaultText: 'Add author'});
	jQuery('#category').tagsInput({defaultText: 'Add category'});

	// Spinner
	jQuery("#spinner").spinner({min: 0, max: 100, increment: 2});

	// Character Counter
	jQuery("#textarea2").charCount({
		allowed: 120,
		warning: 20,
		counterText: 'Characters left: '
	});

	// Select with Search
	jQuery(".chzn-select").chosen();

	// Textarea Autogrow
	jQuery('#autoResizeTA').autogrow();
	jQuery('#author').autogrow();


	// With Form Validation
	jQuery("#form1").validate({
		rules: {
			firstname: "required",
			lastname: "required",
			email: {
				required: true,
				email: true,
			},
			location: "required",
			selection: "required"
		},
		messages: {
			firstname: "Please enter your first name",
			lastname: "Please enter your last name",
			email: "Please enter a valid email address",
			location: "Please enter your location"
		},
		highlight: function(label) {
			jQuery(label).closest('.control-group').addClass('error');
	    },
	    success: function(label) {
	    	label
	    		.text('Ok!').addClass('valid')
	    		.closest('.control-group').addClass('success');
	    }
	});

	jQuery('#timepicker1').timepicker();


	// color picker
	if(jQuery('#colorpicker').length > 0) {
		jQuery('#colorSelector').ColorPicker({
			onShow: function (colpkr) {
				jQuery(colpkr).fadeIn(500);
				return false;
			},
			onHide: function (colpkr) {
				jQuery(colpkr).fadeOut(500);
				return false;
			},
			onChange: function (hsb, hex, rgb) {
				jQuery('#colorSelector span').css('backgroundColor', '#' + hex);
				jQuery('#colorpicker').val('#'+hex);
			}
		});
	}

	jQuery('#login').submit(function(){
			var u = jQuery('#username').val();
			var p = jQuery('#password').val();
			if(u == 'imancha' && p == 'imancha') {
				jQUery(location).attr('href','./?MyNameIs=imancha');				
			}else{
				jQuery('.login-alert').fadeIn();
				return false;				
			}
	});

	var next=1;
	//when the Add Field button is clicked
  jQuery("#btn-add").click(function (e) {
		var addTo = "#author"+next;
		var addRemove = "#author"+next;
		next = next+1;
		var newIn = '<input type="text" name="author[]" id="author'+(next)+'" class="input-xlarge">';
		var newInput = jQuery(newIn);
		var removeBtn = '<button type="button" class="btn remove" id="remove'+(next-1)+'"><i class="icon-minus"></i></button><span id="br'+(next-1)+'"><br></span>';
		var removeButton = jQuery(removeBtn);
		jQuery(addTo).after(newInput);
		jQuery(addRemove).after(removeButton);
		jQuery("#author"+next).attr('data-source',jQuery(addTo).attr('data-source'));
		jQuery("#count").val(next);

		jQuery('.remove').click(function(e){
			e.preventDefault();
			var fieldNum = this.id.charAt(this.id.length-1);
			var fieldID = "#author" + fieldNum;
			jQuery(this).remove();
			jQuery(fieldID).remove();
			jQuery("#br"+fieldNum).remove();
		});
  });

	var nextq = 1;
  jQuery("#btn-add1").click(function(){
		jQuery("#btn-add1").before('<button type="button" class="btn removeq" id="removeq'+(nextq)+'" style="padding-top:5px"><i class="icon-minus"></i></button><span id="brq'+(nextq)+'"><br></span>');
		jQuery("#btn-add1").before('<input type="text" name="category[]" id="category'+(nextq+1)+'" class="input-xlarge">');
		nextq = nextq+1;

		jQuery('.removeq').click(function(){
			var fieldNum = this.id.charAt(this.id.length-1);
			if(fieldNum != 1){
				jQuery(this).remove();
				jQuery("#category"+fieldNum).remove();
				jQuery("#brq"+fieldNum).remove();
			}else{
				jQuery(this).remove();
			}
		});
	});

	jQuery("#btn-add2").click(function (e) {
		var addTo = "#author"+next;
		var addRemove = "#author"+next;
		next = next+1;
		var newIn = '<input type="text" name="category[]" id="author'+(next)+'" class="input-xlarge">';
		var newInput = jQuery(newIn);
		var removeBtn = '<button type="button" class="btn remove" id="remove'+(next-1)+'"><i class="icon-minus"></i></button><span id="br'+(next-1)+'"><br></span>';
		var removeButton = jQuery(removeBtn);
		jQuery(addTo).after(newInput);
		jQuery(addRemove).after(removeButton);
		jQuery("#author"+next).attr('data-source',jQuery(addTo).attr('data-source'));
		jQuery("#count").val(next);

		jQuery('.remove').click(function(e){
			e.preventDefault();
			var fieldNum = this.id.charAt(this.id.length-1);
			var fieldID = "#author" + fieldNum;
			jQuery(this).remove();
			jQuery(fieldID).remove();
			jQuery("#br"+fieldNum).remove();
		});
  });

	jQuery('#itemid').hide();
	jQuery('#itemus').hide();

	jQuery('input[name="warehouse[]"]').on('click', function(){
		if(jQuery('#wareid').is(':checked')){jQuery('#itemid').fadeIn(1000);}
		else{jQuery('#itemid').fadeOut(1000);}
		if(jQuery('#wareus').is(':checked')){jQuery('#itemus').fadeIn(1000);}
		else{jQuery('#itemus').fadeOut(1000);}
	});

	jQuery('.jqte').jqte();

	// Smart Wizard 	
	jQuery('#wizard').smartWizard({onFinish: onFinishCallback});
	jQuery('#wizard2').smartWizard({onFinish: onFinishCallback});
	jQuery('#wizard3').smartWizard({onFinish: onFinishCallback});
	
	function onFinishCallback(){
			alert('Finish Clicked');
	} 	
	
});
