$(document).ready(function () {

	$('body').on('change', '.selection_checkbox', function(e){
		if ($(this).prop('checked') == true) {
			$(this).parent().addClass('btn-success');			
			
			var i = 1;
			$(this).parent().parent().parent().parent().parent().children('td').each(function() {
				if (i != 3 && i != 4) {
					$(this).addClass("ticket-highlight");
				}
				i++;
			});		
		}
		else {
			$(this).parent().removeClass('btn-success');
			
			$(this).parent().parent().parent().parent().parent().children('td').each(function() {
				$(this).removeClass("ticket-highlight");
			});	
		}
    });

	//toggle all button
    $('.toggle_all_tickets').click(function (e) {
		e.preventDefault();

		 $('.selection_checkbox').each(function () {
			$(this).parent().toggleClass("active");

			if ($(this).prop('checked') == true) {
				//already checked, going to remove
				$(this).removeAttr('checked');
				$(this).parent().removeClass('btn-success');

				$(this).parent().parent().parent().parent().parent().children('td').each(function() {
					$(this).removeClass("ticket-highlight");
				});	

			}
			else {
				$(this).prop('checked','checked');
				$(this).parent().addClass('btn-success');
				
				var i = 1;
				$(this).parent().parent().parent().parent().parent().children('td').each(function() {
					if (i != 3 && i != 4) {
						$(this).addClass("ticket-highlight");
					}
					i++;
				});

			}
		 });
    });
	

    $('body').on('click', '#show-filter-button', function (e){
            e.preventDefault();
            $('.filter').slideDown();
            $(".show-filter a").text('Hide Filter');
            $("#show-filter-button").addClass('hide-filter').addClass('btn-default').removeClass('btn-primary').removeClass('btn-100');
    });
    
     $('body').on('click', '.hide-filter', function (e){
		e.preventDefault();
		$('.filter').slideUp();
		$(".show-filter a").text('Show Filter');
        $("#show-filter-button").removeClass('hide-filter').removeClass('btn-default').addClass('btn-primary').addClass('btn-100');
    });
    
    
	
	$('#action').change(function (e) {
		if ($('#action').val() == 'delete') {
			$('#submit').addClass("red");
			$('#submit').removeClass("btn-primary");
			$('#submit').addClass("btn-danger");
		}
		else {
			$('#submit').removeClass("red");
			$('#submit').removeClass("btn-danger");
			$('#submit').addClass("btn-primary");
		}
	});
	
	//check bulk delete action
	$('#submit').click(function (e) {
		if ($('#action').val() == 'delete') {
			if (confirm("Are you sure you wish to delete these tickets?")) {
				
			}
			else {
				e.preventDefault();
			}
		}
	});
	
	//Delete existing file
	$('body').on('click', '.delete_existing_ticket_file', function(e){
		e.preventDefault();

		if (confirm("Are you sure you wish to delete this file?")){
			
			var ticket_id = $(this).closest('li').attr("id");
			var ticket_exploded = ticket_id.split('-');
			ticket_id = ticket_exploded[1];
			
			var file_id = $(this).attr("id");
			var file_exploded = file_id.split('-');
			file_id = file_exploded[1];
			
			$.ajax({
				type: "POST",
				url:  sts_base_url + "/tickets/deletefile/" + file_id + "/",
				data: "delete=true&ticket_id=" + ticket_id,
				success: function(html){
				}
			 });
			 
			 $(this).parent('li').remove(); 
		}
		else {
			return false;
		}
		
    });	

});