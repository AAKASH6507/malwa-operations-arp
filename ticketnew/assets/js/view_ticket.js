$(document).ready(function () {

	$('.canned_responses_list').hide();
	//$('#ticket_transfer_department_form').hide();

	$('#show_canned_responses').click(function (e) {
		$('.canned_responses_list').slideDown();
	});
	
	$('#add_extra_file').click(function (e) {
		e.preventDefault();

		$('#attach_file_area').append('<div><div class="pull-left"><input name="file[]" type="file" /></div><div class="pull-right"><a href="#" id="remove_this_file"><span class="glyphicon glyphicon-remove"></span></a></div></div>');

	});
	
	$('body').on('click', '#remove_this_file', function(e){
		e.preventDefault();

		$(this).parent().parent().remove();
	
	});
	
	$('body').on('click', '.insert_canned_response', function(e){
		e.preventDefault();
				
		$('#ticket_reply_description').redactor('insert.html', $(this).data('canned_response'));
		
	});
	
	$('#ticket_private_reply').click(function (e) {
		e.preventDefault();
		
		$('#ticket_public_reply').parent().removeClass('active');
		$('#ticket_private_reply').parent().addClass('active');
		$('#ticket_reply_tab_content').addClass('bg-light-gray');
		$('#ticket_email_owner_notice').slideUp();
		$('input[name=private]').val("1");
	});
	
	$('#ticket_public_reply').click(function (e) {
		e.preventDefault();
		
		$('#ticket_private_reply').parent().removeClass('active');
		$('#ticket_public_reply').parent().addClass('active');
		$('#ticket_reply_tab_content').removeClass('bg-light-gray');		
		$('#ticket_email_owner_notice').slideDown();
		$('input[name=private]').val("0");
	});
	
});		