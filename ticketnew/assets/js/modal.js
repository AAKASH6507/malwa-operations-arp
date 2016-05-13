$(document).ready(function () {

	$('body').on('click', '.custom_modal', function (e) {
		
		e.preventDefault();
		
		$('#custom_modal_anchor').modal();
		$('#custom_modal_anchor').html('<div class="modal-dialog"><div class="modal-content"><div class="modal-header"><button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button><h4 class="modal-title">Loading...</h4></div><div class="modal-body">Loading...</div><div class="modal-footer"><a href="#" class="btn btn-default" data-dismiss="modal">Cancel</a></div></div></div>');

		var select2 = true;
		
		if ($(this).data('select2') === undefined) {
		} else {
			select2 = $(this).data('select2');
		}
		
		$.ajax({
			type: "GET",
			cache: false,
			url:  $(this).data('href'),
			success: function(data){
				$('#custom_modal_anchor').html(data);
				if (select2) {
					$('select').select2({ width: 'resolve' });
				}
			}
		});
		
		$(this).toggleClass("active");
		
	});

});