<?php
session_start();
ob_start();
include 'connection.php';
$t=$_POST['action_id'];
if(isset($_POST['submit']) && $t=='Closed' && $_POST['checkbox'] ){
  
$checkbox = $_POST['checkbox'];
$z=$_POST['T_id'];
$x=$_SESSION['A_id'];
	

 foreach ($checkbox as $checkboxes=>$value) {
	   $sql1 = "UPDATE it_ticket_service SET Status = '".$t."',Closed_by='".$x."',Closed_on=now() WHERE T_id='".$value."'" ;
$mydata1 = mysqli_query($conn,$sql1);
       
        }
        
       
       }








mysqli_close($conn);

 

header('Location: ../ticket3/mytickets.php');
?>

