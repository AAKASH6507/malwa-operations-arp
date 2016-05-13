$(document).ready(function () {

	$('#login_user_account_form').hide();
	$('#login_user_account_form_help').hide();
		
	if ($('#allow_login').val() == 1) {
		$('#login_user_account_form').slideDown();
		$('#login_user_account_form_help').slideDown();
	}
	
	$('#allow_login').change(function() {
		$('#login_user_account_form').slideToggle();
		$('#login_user_account_form_help').slideToggle();
	});
	
	if ($('#authentication_id').val() != 1) {
		$('#login_user_password_fields').slideUp();
	}
	
	$('#authentication_id').change(function() {
		if ($(this).val() == 1) {
			$('#login_user_password_fields').slideDown();
		}
		else {
			$('#login_user_password_fields').slideUp();
		}
	});

});