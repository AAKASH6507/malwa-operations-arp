<?php
include 'connection.php';


if(isset($_POST['submit']) && (isset($_POST['action_id']) )){
   $checkbox = $_POST['checkbox'];
   $y = $_POST['action_id'];

   foreach ($checkbox as $checkboxes=>$value) {
	   $sql = "UPDATE it_ticket_service SET Status = '".$y."'  WHERE T_id='".$value."'" ;
$mydata1 = mysqli_query($conn,$sql);
 
        }
}




header('Location: ../ticket3/log.php');
?>	
