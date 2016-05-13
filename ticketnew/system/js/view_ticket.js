$(document).ready(function () {

	$('.canned_responses_list').hide();

	$('#show_canned_responses').click(function (e) {
		$('.canned_responses_list').slideDown();
	});
	
	$('#add_extra_file').click(function (e) {
		e.preventDefault();

		if (sts_current_theme == 'bootstrap') {
			$('#attach_file_area').append('<div><p><input name="file[]" type="file" /> <a href="#" id="remove_this_file"><i class="icon-remove"></i></a></p></div>');
		}
		else {
			$('#attach_file_area').append('<div><p><input name="file[]" type="file" /> <a href="#" id="remove_this_file"><img src="' + sts_base_url + '/user/themes/' + sts_current_theme + '/images/icons/delete.png" alt="Remove File" /></a></p></div>');			
		}
	});
	
	$('body').on('click', '#remove_this_file', function(e){
		e.preventDefault();

		$(this).parent().remove();
	
	});
	
	$('body').on('click', '.insert_canned_response', function(e){
		e.preventDefault();
		
		$('#ticket_reply_description').redactor('insertHtml', $('#ticket_reply_description').val() + $(this).data('canned_response'));
		
	});
	
});		