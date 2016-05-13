<?php
// Start the session
session_start();
ob_start();
ini_set("display_errors", "off");
if(($_SESSION['A_id'] != '') && (isset($_SESSION['A_id'])))
		{
		   header('Location: mytickets.php'); //redirect URL
		   if($_SESSION['A_id']=='0862admin' && (isset($_SESSION['A_id'])))
		{
			header('Location: ../ticket3/log.php');
		}
		   exit();
		}
		
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<title>Tickets 2 - Login</title>
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

		
	
		
	<link rel="stylesheet" href="system/libraries/select2/select2.css" />
	<script type="text/javascript" src="system/libraries/select2/select2.min.js"></script>
	<script type="text/javascript"> 
	$(document).ready(function () {
		//Custom Selectmenu
		$('select').select2({ width: 'resolve' });
	});
	</script>
	
	<!-- 57x57 (precomposed) for iPhone 3GS, 2011 iPod Touch and older Android devices -->
	<link rel="apple-touch-icon-precomposed" href="user/themes/standard/images/apple-touch-icon-precomposed.png">

	<!-- 72x72 (precomposed) for 1st generation iPad, iPad 2 and iPad mini -->
	<link rel="apple-touch-icon-precomposed" sizes="72x72" href="user/themes/standard/images/apple-touch-icon-72x72-precomposed.png">

	<!-- 114x114 (precomposed) for iPhone 4, 4S, 5 and 2012 iPod Touch -->
	<link rel="apple-touch-icon-precomposed" sizes="114x114" href="user/themes/standard/images/apple-touch-icon-114x114-precomposed.png">

	<!-- 144x144 (precomposed) for iPad 3rd and 4th generation -->
	<link rel="apple-touch-icon-precomposed" sizes="144x144" href="user/themes/standard/images/apple-touch-icon-144x144-precomposed.png">
	
		
	</head>

<body>
		<div class="left-border">
		<div class="right-border">
			<div class="page-wrapper">
				<div id="header">
					<div id="header-design">
						<div id="logo-image">
							<h1>Tickets - Login</h1>
						</div>
												<div class="clear"></div>
						
					</div>
					
				</div>
				
				<div id="menu">
					<ul id="nav">
											 
											</ul>
					<div class="clear"></div>
					
				</div>
				
				<div id="page-body">	
					

		<div id="sidebar">
			<div id="login-details" class="widget">
				<div class="left">
					<h2 style="color:red">Malwa Operations ARP</h2>
				</div>
				<div class="right">
							
				</div>
				<div class="clear"></div>

				<p >Tickets Login</p>
				<br />
				<div class="clear"></div>

				<div class="right">
					<p><a href="../ARP1/index.html" class="button logout">Home</a>
										</p>
				</div>
				<div class="clear"></div>

			</div>
		</div>
		
		<div id="box">
						
						
			<form method="post" action="insert.php">		
			<div id="content">
				<p>Username<br /><input type="text" name="username" /></p>
				<p>Password <br /><input type="password" name="password" /></p>
				<p><button type="submit" value=""submit" name="submit" class="button logout">Login</button></p>	
			</div>
			<?php if($_GET["x"]==1)
		{echo "<a style=\"color:red\">
  <strong>Wrong ID or Password!</strong> 
</a>";}
?>
		</div>
	</form>

					<div class="clear"></div>
					<br />
					<div id="footer">
						<div id="footer-design">
							<div id="copyright">Copyright &copy; 2015-16 MISTINDORE. ALL RIGHTS ARE RESERVED</div>
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
