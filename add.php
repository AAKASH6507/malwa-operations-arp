<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<title>Tickets 2 - New Ticket</title>
	<!--[if lte IE 7]>
	<link rel="stylesheet" type="text/css" href="http://www.onlinecompanyportal.com/tickets2/user/themes/standard/css/ie.css" media="screen" />
	<![endif]-->
	
	<!--<meta name="viewport" content="width=device-width, initial-scale=1.0" />-->
			
	<link rel="stylesheet" type="text/css" href="user/themes/standard/css/reset-min.css" />
	<link type="text/css" media="screen" href="user/themes/standard/css/suckerfish.css" rel="stylesheet" />
	<link type="text/css" media="screen" href="user/themes/standard/css/default.css" rel="stylesheet" />
    <link rel="shortcut icon" href="favicon.ico" />
	
	
	<script type="text/javascript" src="system/libraries/js/jquery.js"></script>
	
	
	<script type="text/javascript">
		var sts_base_url		 	= "http://www.onlinecompanyportal.com/tickets2";
		var sts_current_theme		= "standard";
		var sts_current_theme_sub	= "";
	</script>
		<script type="text/javascript" src="system/js/view_ticket.js"></script>
	
			<script type="text/javascript" src="system/libraries/redactor/redactor.min.js"></script>
		<link rel="stylesheet" href="system/libraries/redactor/css/redactor.css" />

			<script type="text/javascript" src="assets/js/priorities.js"></script>
		<script type="text/javascript" src="assets/js/departments.js"></script>
		<script type="text/javascript" src="assets/system/js/tickets.js"></script>
		<script type="text/javascript" src="assets/system/js/add_ticket.js"></script>
		<script type="text/javascript" src="assets/system/js/custom_fields.js"></script>
		<script type="text/javascript" src="assets/js/user_selector.js"></script>
		<script type="text/javascript" src="assets/js/users.js"></script>
		
	
	
			

		<script type="text/javascript"> 
		$(document).ready(
			function()
			{
				$('.wysiwyg_enabled').redactor({
					focus: false, 
					buttons: [
						'html', '|', 'formatting', '|', 'bold', 'italic', 'deleted', '|',
						'unorderedlist', 'orderedlist', 'outdent', 'indent', '|',
						'image', 'table', 'link', '|',
						'fontcolor', 'backcolor', '|',
						'alignleft', 'aligncenter', 'alignright', 'justify', '|',
						'horizontalrule'
					]
				});
			}
		);
		</script>
		
	<link rel="stylesheet" href="http://www.onlinecompanyportal.com/tickets2/system/libraries/select2/select2.css" />
	<script type="text/javascript" src="http://www.onlinecompanyportal.com/tickets2/system/libraries/select2/select2.min.js"></script>
	<script type="text/javascript"> 
	$(document).ready(function () {
		//Custom Selectmenu
		$('select').select2({ width: 'resolve' });
	});
	</script>
	
	<!-- 57x57 (precomposed) for iPhone 3GS, 2011 iPod Touch and older Android devices -->
	<link rel="apple-touch-icon-precomposed" href="http://www.onlinecompanyportal.com/tickets2/user/themes/standard/images/apple-touch-icon-precomposed.png">

	<!-- 72x72 (precomposed) for 1st generation iPad, iPad 2 and iPad mini -->
	<link rel="apple-touch-icon-precomposed" sizes="72x72" href="http://www.onlinecompanyportal.com/tickets2/user/themes/standard/images/apple-touch-icon-72x72-precomposed.png">

	<!-- 114x114 (precomposed) for iPhone 4, 4S, 5 and 2012 iPod Touch -->
	<link rel="apple-touch-icon-precomposed" sizes="114x114" href="http://www.onlinecompanyportal.com/tickets2/user/themes/standard/images/apple-touch-icon-114x114-precomposed.png">

	<!-- 144x144 (precomposed) for iPad 3rd and 4th generation -->
	<link rel="apple-touch-icon-precomposed" sizes="144x144" href="http://www.onlinecompanyportal.com/tickets2/user/themes/standard/images/apple-touch-icon-144x144-precomposed.png">
	
		
	</head>
<?php
include 'connection.php';
//mysqli_select_db("dbnpatient",$conn);

?>
<body>
		<div class="left-border">
		<div class="right-border">
			<div class="page-wrapper">
				<div id="header">
					<div id="header-design">
						<div id="logo-image">
							<h1>Tickets 2 - New Ticket</h1>
						</div>
						<div id="header-right">
							<p id="welcome-text">Welcome Admin</p>
							<a href="index.html" class="button logout">Logout</a>
						<div class="clear"></div>
						</div>
					<div class="clear"></div>
				</div>
			</div>
				<div id="menu">
					<ul id="nav">
					<li><a href="log.html"><span>Tickets</span></a>
					<ul>
						<li><a href="#"><span>Add</span></a></li>
					</ul>
					</li>

					<li><a href="#"><span>Profile</span></a></li>
					<li><a href="#"><span>Users</span></a></li>
					<li><a href="#"><span>Settings</span></a>
					<ul>
						<li><a href="#"><span>API</span></a></li>
						<li><a href="#"><span>Auth</span></a></li>
						<li><a href="#"><span>Email</span></a></li>
						<li><a href="#"><span>Tickets</span></a></li>
						<li><a href="#"><span>Plugins</span></a></li>
						<li><a href="#"><span>Logs</span></a></li>
					</ul>
					</li>
					</ul>
					<div class="clear"></div>
					</div>
				<div id="page-body">	
				<form method="post" enctype="multipart/form-data" action="detail.php">
				<div id="sidebar">
				<div id="users-details" class="widget">
				<div class="left">
				<h2>New Ticket</h2>
				</div>
				<div class="right">
					<p><button type="submit" name="add">Add</button></p>
				</div>
				<div class="clear"></div><br />
				<div class="right">
				<!--		<p><a href="#" id="show_extra_settings" class="button logout" onclick="assets/js/add_ticket.js">Show Extra Settings</a></p>-->
				</div>
				<div class="clear"></div>
				</div>
				</div>
			<div id="box">
			<div id="content">	
		
			<p>Ticket ID<br />
							<?php
							$sql = "SELECT * FROM it_ticket_service";
$mydata = mysqli_query($conn,$sql);
				
 echo "<select name='p'>"; 
 while($row = mysqli_fetch_assoc($mydata)) 
 { 
    echo "<option value = '".$row[T_id]."'>".$row[T_id]."</option>"; 
  
 }
 echo "</select>"; 	
 ?>
			<!--<select name="ticket_id" id="ticket_id">
			<option value="1">101</option>
			<option value="2">102</option>
			<option value="3">103</option>
			</select>--></p>
			
				  <input type="submit" value="Click Here For Details" style="color:white;background-color:brown; height:30px" />
				<div class="clear"></div>
				</div>
				</div>
		</form>
				<div class="clear"></div>
					<br />
					<div id="footer">
						<div id="footer-design">
							<div id="copyright">Copyright &copy; <a href="http://www.dalegroup.net/">Dalegroup Pty Ltd</a> 2016</div>
							<div id="version"></div>
							<div class="clear"></div>
						</div>
					</div>
				</div>				
			</div>
		</div>
	</div>
</body>
</html>
