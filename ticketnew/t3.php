<?php
include 'connection.php';


session_start();
ob_start();
if(isset($_POST['submit']) && (isset($_POST['action_id']) &&(isset($_POST['tech'])) )){
   $checkbox = $_POST['checkbox'];
   $y = $_POST['action_id'];
   $z = $_POST['tech'];
   foreach ($checkbox as $checkboxes=>$value) {
	   $sql = "UPDATE it_ticket_service SET Status = '".$y."',Tech_id= '".$z."', Tech_assigned=now() WHERE T_id='".$value."'" ;
$mydata1 = mysqli_query($conn,$sql);

        }
}

header('Location: ../ticket3/log.php');
?>	
