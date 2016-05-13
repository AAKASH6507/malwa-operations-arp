<?php
session_start();
ob_start();
if(!(isset($_SESSION['A_id'])) || ($_SESSION['A_id'] == ''))
		{
		   header('Location: index.php'); //redirect URL
		   exit();
		}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<title>Tickets 2 - Tickets</title>
	<!--[if lte IE 7]>
	<link rel="stylesheet" type="text/css" href="http://www.onlinecompanyportal.com/tickets2/user/themes/standard/css/ie.css" media="screen" />
	<![endif]-->
	
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		
	<link rel="stylesheet" type="text/css" href="assets/css/reset-min.css" />
	<link type="text/css" media="screen" href="assets/css/suckerfish.css" rel="stylesheet" />
	<link type="text/css" media="screen" href="user/themes/standard/css/default.css" rel="stylesheet" />
	
	<link rel="shortcut icon" href="http://www.onlinecompanyportal.com/tickets2/favicon.ico" />
	
	<script type="text/javascript" src="assets/js/jquery.js"></script>



	
	<script type="text/javascript">
		$(document).ready(function () {

var all = $('.green');
var seen = {};
all.each(function () {
    var txt = $(this).text();
    if (seen[txt]) {
        $(this).hide();
    }
    else {
        seen[txt] = true;
    }
});


});
	</script>

		<script type="text/javascript" src="assets/js/tickets.js"></script>
		
		

		
		<style>
		.green
		{
			text-align:center;
		}
		<!--* { 
	margin: 0; 
	padding: 0; 
}
body { 
	font: 14px/1.4 Georgia, Serif; 
}
#page-wrap {
	margin: 50px;
}
p {
	margin: 20px 0; 
}

	/* 
	Generic Styling, for Desktops/Laptops 
	*/
table { 
		width: 100%; 
		border-collapse: collapse; 
	}
	/* Zebra striping */
	tr:nth-of-type(odd) { 
		background: #eee; 
	}
	th { 
		background: #333; 
		color: white; 
		font-weight: bold; 
	}
	td, th { 
		padding: 6px; 
		border: 1px solid #ccc; 
		text-align: left; 
	}
		</style>
		<!--[if !IE]><!-->
		
	<style>
	
	/* 
	Max width before this PARTICULAR table gets nasty
	This query will take effect for any screen smaller than 760px
	and also iPads specifically.
	*/
	@media 
	only screen and (max-width: 760px),
	(min-device-width: 768px) and (max-device-width: 1024px)  {
	
		/* Force table to not be like tables anymore */
		table, thead, tbody, td, tr { 
			display: block; 
		}
		th{
			display :none;
		}
		
		/* Hide table headers (but not display: none;, for accessibility) */
		thead tr { 
			position: absolute;
			top: -9999px;
			left: -9999px;
		}
		
		tr { border: 1px solid #ccc; }
		
		td { 
			/* Behave  like a "row" */
			border: none;
			border-bottom: 1px solid #eee; 
			position: relative;
			padding-left: 50%; 
		}
		
		td:before { 
			/* Now like a table header */
			position: absolute;
			/* Top/left values mimic padding */
			top: 6px;
			left: 6px;
			width: 45%; 
			padding-right: 10px; 
			white-space: nowrap;
		}
		
		/*
		Label the data
		*/
		td:nth-of-type(1):before { content: "check"; }
		td:nth-of-type(2):before { content: "Ticket ID"; }
		td:nth-of-type(3):before { content: "Added"; }
		td:nth-of-type(4):before { content: "Status"; }
		td:nth-of-type(5):before { content: "Priority"; }
		td:nth-of-type(6):before { content: "User ID"; }
		td:nth-of-type(7):before { content: "User Name"; }
		td:nth-of-type(8):before { content: "class"; }
		td:nth-of-type(9):before { content: "Lab NO"; }
		td:nth-of-type(10):before { content: "Pc_no";  }
		td:nth-of-type(11):before {content: "Issue";  }
		td:nth-of-type(12):before { content: "Issue_decription"; }
		td:nth-of-type(13):before {content: "Assign T0"; }
	
	}
	
	/* Smartphones (portrait and landscape) ----------- */
	@media only screen
	and (min-device-width : 320px)
	and (max-device-width : 480px) {
		body { 
			padding: 0; 
			margin: 0; 
			width: 480px; }
		}
	
	/* iPads (portrait and landscape) ----------- */
	@media only screen and (min-device-width: 768px) and (max-device-width: 1024px) {
		body { 
			width: 768px; 
		}

	}
	
	</style>
	<!--<![endif]-->
	<link rel="stylesheet" href="assets/css/select2.css" />
	<script type="text/javascript" src="assets/js/select2.js"></script>
	<script type="text/javascript"> 
	$(document).ready(function () {
		//Custom Selectmenu
		$('select').select2({ width: 'resolve' });
	});
	
	/*$(document).ready(function () {

var all = $('.green');
var seen = {};
all.each(function () {
    var txt = $(this).text();
    if (seen[txt]) {
        $(this).hide();
    }
    else {
        seen[txt] = true;
    }
});


});*/
	
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



?>

<body>
	<form method="post" action="<?=$_SERVER['PHP_SELF'];?>">
		<div class="left-border">
		<div class="right-border">
			<div class="page-wrapper">
				<div id="header">
					<div id="header-design">
						<div id="logo-image">
							<h1>Tickets 2 - Tickets</h1>
						</div>
						<div id="header-right">
							<p id="welcome-text">Welcome Admin</p>
							<a href="signout.php" class="button logout">Logout</a>
							<div class="clear"></div>
						</div>
						<div class="clear"></div>
						</div>
					</div>
				<div id="menu">
					<ul id="nav">
					<li><a href="log.php"><span>Home</span></a>
							
					</li>
					
					
					<li><a href="#"><span>Details</span></a>
					<ul>
									<li><a href="tech.php"><span>Technician</span></a>
									</li>
									
									
									<li><a href="lab.php"><span>Lab</span></a></li>
									<li><a href="pc.php"><span>System</span></a></li>
								
								
								</ul>
					
					</li>
					
					
					<li><a href="#"><span>Settings</span></a>
				<ul>
				<li><a href="log.php"><span>Tickets</span></a></li>
				<li><a href="#"><span>Add tech</span></a></li>
				<li><a href="#"><span>Logs</span></a></li>
				</ul>
				</li>
				</ul>
				<div class="clear"></div>
				</div>
				
				<div id="page-wrap">
					
				<div id="content">		

			<div id="ticket-details" class="widget">
				
		<h2 class="left">Filter</h2>
			<div class="clear"></div>
	  <select style="padding:5px;" name="lab">
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
		</select>&nbsp;&nbsp;&nbsp;
		
		
		<button id="ok" type="submit" name="go">Search</button>
							
				<div class="clear"></div>

	
		
		
		</div>
			</div>
				</form>
		
		
		
				<form method="post" action="t3.php">
				<p>
							<a href="#">&laquo; Previous</a>
							<a href="#">Next &raquo;</a>
							<span class="right">Page 1</span>
				</p>
<div style="overflow-x:auto;">
<?php
if(isset($_POST['lab']))
{
	$l=$_POST['lab'];
$result ="SELECT * FROM it_ticket_service Where Lab_no='".$l."'";
$mydata = mysqli_query($conn,$result);
 $query = "SELECT COUNT(*) as totalno FROM it_ticket_service where Lab_no='".$l."'";
    $result1 = mysqli_query($conn,$query);
    while($data=mysqli_fetch_array($result1)){
    $count = $data['totalno'];
    }
   
echo "<table class=content id='myTable'>
<tr>

<th>Ticket ID</th>
<th>Added</th>
<th>Lab No</th>
<th>Pc_no</th>
<th>Issue</th>
<th >Total Tickets</th>
</tr>";

echo  "<tbody>";
while($record = mysqli_fetch_array($mydata))
{
	$id1=$record['T_id'];
echo "<tr>";

echo "<td>" .$record['T_id'] ."</td>";
echo "<td>" .$record['Assigned_on'] ."</td>";
echo "<td>" .$record['Lab_no'] ."</td>";
echo "<td>" .$record['Pc_no'] ."</td>";
echo "<td>" .$record['Issue'] ."</td>";
echo "<td class='green' rowspan='$count' style='background-color: rgba(255, 0, 0, 0.5);'>" .$count ."</td>";



	 
//onclick='return false'

echo "</tr>";


}

}

echo  "</tbody>";
echo "</table>";

mysqli_close($conn);

?>
</div>



						<p>
							<a href="#">&laquo; Previous</a>
							<a href="#">Next &raquo;</a>
							<span class="right">Page 1</span>
						</p>
						
						

						
						<div id="content">		
							<p>Selected Tickets &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Selected Tickets<br />
							<select id="action" name="action_id">
								
								<option value="Open">Open</option>
								<option value="Closed">Closed</option>
								<option value="Pending">Pending</option>
								<option value="delete">Delete</option>
							</select>
							
								
								<select style="padding:5px; width: 163px;" name="tech">
		<option > Not Assigned</option>
		<option value="T101">Technician-1</option>
							<option value="T102">Technician-2</option>
							<option value="T103">Technician-3</option>
		</select>
							<button id="submit" type="submit" name="submit">Do</button>
					
						</p>
							
							<div class="clear"></div>
						</div>
					</form>
						
						
	</div>
	
	
				<div class="clear"></div>
					<br />
					<div id="footer">
						<div id="footer-design">
							<div id="copyright">Copyright &copy; <a href="#"></a> 2016</div>
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

