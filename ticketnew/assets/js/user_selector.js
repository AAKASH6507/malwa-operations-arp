function populate_users(department_id, selected_user_id, company_id) {
	$.ajax({
		type: "GET",
		cache: false,
		dataType: "json",
		url:  sts_base_url + "/data/users/?department_id=" + department_id + '&company_id=' + company_id,
		success: function(data){

			//quicker to replace the entire html select	
			$('#user_id').empty();
		
			html = '<option value="">&nbsp;</option>';

			if (data !== null) {
				$.each(
					data,
					function (index, value) {
						if (selected_user_id == value.id) {
							html += '<option value="'+ value.id + '" selected="selected">' + value.name  + '</option>';
						}
						else {
							html += '<option value="'+ value.id + '">' + value.name  + '</option>';						
						}
					}
				);
			}
									
			$('#user_id').html(html);
			if ($.fn.select2) {
				$('#user_id').select2('val', selected_user_id);
			}
			
		}
	});
}

function populate_assigned_users(department_id, selected_user_id) {
	$.ajax({
		type: "GET",
		cache: false,
		dataType: "json",
		url:  sts_base_url + "/data/users/?assigned_users=true&department_id=" + department_id,
		success: function(data){
			
			//quicker to replace the entire html select	
			$('#assigned_user_id').empty();
		
			html = '<option value="">&nbsp;</option>';

			if (data !== null) {
				$.each(
					data,
					function (index, value) {
						if (selected_user_id == value.id) {
							html += '<option value="'+ value.id + '" selected="selected">' + value.name  + '</option>';
						}
						else {
							html += '<option value="'+ value.id + '">' + value.name  + '</option>';												
						}
					}
				);
			}
									
			$('#assigned_user_id').html(html);
			if ($.fn.select2) {
				$('#assigned_user_id').select2('val', selected_user_id);
			}
		}
	});
}

$(document).ready(function () {

	if ($('#assigned_user_id').length > 0) {
		if ($('#assigned_user_id').val().length > 0) {
			if ($('#update_department_id').length > 0 && $('#update_department_id').val() != null && $('#update_department_id').val().length > 0) {
				populate_assigned_users($('#update_department_id').val(), $('#assigned_user_id').val());
			}
			else {
				populate_assigned_users(0, $('#assigned_user_id').val());
			}
		}
		else {			
			if ($('#update_department_id').length > 0 && $('#update_department_id').val() != null && $('#update_department_id').val().length > 0) {
				populate_assigned_users($('#update_department_id').val(), 0);
			}
			else {
				populate_assigned_users(0, 0);
			}			
		}
	}

	if ($('#user_id').length > 0) {
		if ($('#user_id').val().length > 0) {
			if ($('#update_department_id').length > 0 && $('#update_department_id').val().length > 0) {
				if ($('#company_id').length > 0 && $('#company_id').val().length > 0) {
					populate_users($('#update_department_id').val(), $('#user_id').val(), $('#company_id').val());
				}
				else {
					populate_users($('#update_department_id').val(), $('#user_id').val(), 0);				
				}
			}
			else {
				if ($('#company_id').length > 0 && $('#company_id').val().length > 0) {
					populate_users(0, $('#user_id').val(), $('#company_id').val());
				}
				else {
					populate_users(0, $('#user_id').val(), 0);				
				}
			}
		}
		else {
			if ($('#update_department_id').length > 0 && $('#update_department_id').val().length > 0) {
				if ($('#company_id').length > 0 && $('#company_id').val().length > 0) {
					populate_users($('#update_department_id').val(), 0, $('#company_id').val());
				}
				else {
					populate_users($('#update_department_id').val(), 0, 0);				
				}
			}
			else {
				if ($('#company_id').length > 0 && $('#company_id').val().length > 0) {
					populate_users(0, 0, $('#company_id').val());
				}
				else {
					populate_users(0, 0, 0);				
				}
			}
		}
	}

	$('body').on('change', '#company_id', function(e){
		if ($('#update_department_id').length > 0 && $('#update_department_id').val().length > 0) {
			populate_users($('#update_department_id').val(), 0, $(this).val());
		}
		else {
			populate_users(0, 0, $(this).val());		
		}
	});
	
	$('body').on('change', '#update_department_id', function(e){
		if ($('#company_id').length > 0 && $('#company_id').val().length > 0) {
			populate_users($(this).val(), 0, $('#company_id').val());
			populate_assigned_users($(this).val(), 0, $('#company_id').val());
		}
		else {
			populate_users($(this).val(), 0, 0);
			populate_assigned_users($(this).val(), 0 ,0);		
		}
	});
	
});