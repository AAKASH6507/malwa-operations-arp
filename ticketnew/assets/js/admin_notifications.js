function lcs_admin_notifications() {
	$.ajax({
		type: "GET",
		cache: false,
		dataType: "json",
		url: sts_base_url + "/simple/livechat_admin_activesessions/",
		success: function(data){
											
			if (data.length > lcs_admin_active_sessions && lcs_start_notifications) {
				var audio = new Audio(sts_base_url + '/user/plugins/livechat/audio/alert1.wav');
				audio.play();
			}
			
			lcs_start_notifications			= true;
			lcs_admin_active_sessions		= data.length;
	
			$('#lcs_admin_active_sessions_menu').html('('+data.length+')');

			
		
		}
	 });
	 
	setTimeout(function() {
		lcs_admin_notifications()
	}, 5000);
	
};

var lcs_admin_active_sessions = 0;
var lcs_start_notifications = false;

$(document).ready(function () {

	lcs_admin_notifications();

});