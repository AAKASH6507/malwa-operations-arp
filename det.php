<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<title>Tickets 2 - New Guest Ticket</title>
	<!--[if lte IE 7]>
	<link rel="stylesheet" type="text/css" href="http://www.onlinecompanyportal.com/tickets2/user/themes/standard/css/ie.css" media="screen" />
	<![endif]-->
	
	<!--<meta name="viewport" content="width=device-width, initial-scale=1.0" />-->
			
		
	<link rel="stylesheet" type="text/css" href="assets/css/reset-min.css" />
	<link type="text/css" media="screen" href="assets/css/suckerfish.css" rel="stylesheet" />
	<link type="text/css" media="screen" href="user/themes/standard/css/default.css" rel="stylesheet" />
	
	<link rel="shortcut icon" href="http://www.onlinecompanyportal.com/tickets2/favicon.ico" />
	
	<script type="text/javascript" src="assets/js/jquery.js"></script>
	
	<script type="text/javascript">
		var sts_base_url		 	= "http://www.onlinecompanyportal.com/tickets2";
		var sts_current_theme		= "standard";
		var sts_current_theme_sub	= "";
	</script>

		<script type="text/javascript" src="assets/js/tickets.js"></script>

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
		
	<link rel="stylesheet" href="../../system/libraries/select2/select2.css" />
	<script type="text/javascript" src="../../system/libraries/select2/select2.min.js"></script>
	<script type="text/javascript"> 
	$(document).ready(function () {
		//Custom Selectmenu
		$('select').select2({ width: 'resolve' });
	});
	</script>
	
	<!-- 57x57 (precomposed) for iPhone 3GS, 2011 iPod Touch and older Android devices -->
	<link rel="apple-touch-icon-precomposed" href="../../user/themes/standard/images/apple-touch-icon-precomposed.png">

	<!-- 72x72 (precomposed) for 1st generation iPad, iPad 2 and iPad mini -->
	<link rel="apple-touch-icon-precomposed" sizes="72x72" href="../../user/themes/standard/images/apple-touch-icon-72x72-precomposed.png">

	<!-- 114x114 (precomposed) for iPhone 4, 4S, 5 and 2012 iPod Touch -->
	<link rel="apple-touch-icon-precomposed" sizes="114x114" href="../../user/themes/standard/images/apple-touch-icon-114x114-precomposed.png">

	<!-- 144x144 (precomposed) for iPad 3rd and 4th generation -->
	<link rel="apple-touch-icon-precomposed" sizes="144x144" href="../../user/themes/standard/images/apple-touch-icon-144x144-precomposed.png">
	
		
	</head>

<body>
		<div class="left-border">
		<div class="right-border">
			<div class="page-wrapper">
				<div id="header">
					<div id="header-design">
						<div id="logo-image">
							<h1>Tickets 2 - New Guest Ticket</h1>
						</div>
												<div class="clear"></div>
						
					</div>
					
				</div>
				
				<div id="menu">
					<ul id="nav">
					
					
											
						
							
							<li><a href="../../index.html"><span>Home</span></a></li>
														<li><a href="../index.html"><span>Guest Portal</span></a></li>
							
													 
											</ul>
					<div class="clear"></div>
					
				</div>
				
				<div id="page-body">	
					
			
	
		<div id="sidebar">
			<div id="users-details" class="widget">
				<div class="left">
					<h2>See Details</h2>
				</div>
			
				<div class="clear"></div>
				<form method="post" action="det.php">
<p>Department&nbsp;&nbsp;&nbsp;&nbsp;
					<select name="tech">
												<option value="">Select Technician</option>
												<option value="101">Technician-1</option>
												<option value="102">Technician-2</option>
												<option value="103">Technician-3</option>
											</select>
											<button type="submit" id="first" name="first" >Show</button>
											</p></form>
								<form method="post" action="det.php?q=hello">
				<p>Priority&nbsp;&nbsp;&nbsp;&nbsp;
				<select name="department_id">
												<option>Select Lab</option>
		<option>M1</option>
	    <option>M2</option>
		<option>M3</option>
		<option>M4</option>
		<option>M5</option>
		<option>M6</option>
		<option>M7</option>
		<option>M8</option>
		<option>M9</option>
											</select>
											<button type="submit" name="second" id="second">Show</button>
											</p></form>
											<form method="post" action="det.php?q=hello">
											<p>Priority&nbsp;&nbsp;&nbsp;&nbsp;
				<select name="department_id">
												<option>Select PC</option>
		<option>1</option>
		<option>2</option>
		<option>3</option>
		<option>4</option>
	    <option>5</option>
		<option>6</option>
		<option>7</option>
		<option>8</option>
		<option>9</option>
		<option>10</option>
		<option>11</option>
		<option>12</option>
											</select>
											<button type="submit" name="third" id="third">Show</button></p></form>

			</div>
		</div>

		<div id="box">
					
			<div id="content">	
				<p>
							<a href="#">&laquo; Previous</a>
							<a href="#">Next &raquo;</a>
							<span class="right">Page 1</span>
				</p>
				
			<?php
include 'connection.php';

if(isset($_POST['first']) && (isset($_POST['tech']))){
		$q=$_POST['tech'];
		$result ="SELECT * FROM it_ticket_service Where Tech_id='".$q."'";
$mydata = mysqli_query($conn,$result);;		


echo "<table class=content id='myTable'>
<tr>
<th>check</th>
<th>Ticket ID</th>
<th>Added</th>
<th>Status</th>
<th>Priority</th>
<th>User ID</th>
<th>User</th>
<th>class</th>
<th>Lab No</th>
<th>Pc_no</th>
<th>Issue</th>
<th>Issue Description</th>
<th >Assign To</th>
</tr>";

echo  "<tbody>";
while($record = mysqli_fetch_array($mydata))
{
	$id1=$record['T_id'];
echo "<tr>";
echo "<td>" ."<input type='checkbox' value='$id1' name='checkbox[]' id='checkbox' />". "</td>";
echo "<td>" .$record['T_id'] ."</td>";
echo "<td>" .$record['Assigned_on'] ."</td>";
echo "<td>" .$record['Status'] ."</td>";
echo "<td>" .$record['Proirity'] ."</td>";
echo "<td>" .$record['ID'] ."</td>";
echo "<td>" .$record['Name'] ."</td>";
echo "<td>" .$record['Class'] ."</td>";
echo "<td>" .$record['Lab_no'] ."</td>";
echo "<td>" .$record['Pc_no'] ."</td>";
echo "<td>" .$record['Issue'] ."</td>";
echo "<td>" .$record['Issue_decription'] ."</td>";
echo "<td id='myTd'>" .$record['Tech_id']. "</td>";

//onclick='return false'

echo "</tr>";


}
echo  "</tbody>";
echo "</table>";

mysqli_close($conn);


}
?>
						<p>
							<a href="#">&laquo; Previous</a>
							<a href="#">Next &raquo;</a>
							<span class="right">Page 1</span>
						</p>
						
						
				
   

 
     

				
			</div>
		</div>

	

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
	
