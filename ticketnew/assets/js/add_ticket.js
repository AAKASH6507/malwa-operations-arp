$(document).ready(function () {

	$('.extra_settings').hide();
	$('.extra_settings .col-md-2').hide();

	$('#show_extra_settings').click(function () {
		$('.extra_settings').show();
		$('.extra_settings .col-md-2').each(function (settingsFade) {
			$(this).delay(300 * settingsFade).fadeIn();
		});
		$(this).closest('.panel-body').delay(500).slideUp();
	});

});
