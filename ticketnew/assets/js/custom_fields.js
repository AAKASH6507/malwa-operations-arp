$(document).ready(function () {

    var dropdown_fields_item_count = 0; // Global unique counter

	$('#dropdown_fields').hide();
	
	if ($('#custom_field_type').val() == 'dropdown' || $('#custom_field_type').val() == 'checkbox') {
		$('#dropdown_fields').slideDown();
	}
	
	$('#custom_field_type').change(function() {
	  
	  if ($(this).val() == 'dropdown' || $('#custom_field_type').val() == 'checkbox') {
		$('#dropdown_fields').slideDown();
	  }
	  else {
		$('#dropdown_fields').slideUp();
	  }
	});

	//Add new dropdown item
	$('body').on('click', '#add_dropdown_field', function(e){
		dropdown_fields_item_count++; // Increment counter

		var clonedRow = $('.dropdown_field').clone();
		$(clonedRow).addClass('new_dropdown_field').removeClass('dropdown_field');
		$(clonedRow).find('input').val('').end().find('p').append(' <a href="#dropdown" id="delete_dropdown_item" class="btn btn-danger">Delete</a>').end().appendTo('.extra_dropdown_field');

	});
	
	//Delete line item
	$('body').on('click', '#delete_dropdown_item', function(e){
		$(this).parent('p').remove(); 
    });
		
});