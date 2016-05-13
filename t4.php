<?php
include 'connection.php';

$id=$_GET["x"];

$result ="SELECT * FROM it_ticket_service where T_id='".$id."'";
$mydata = mysqli_query($conn,$result);

while($rowval = mysqli_fetch_array($mydata))

 {

$T_id= $rowval['T_id'];
$Proirity= $rowval['Proirity'];

$Lab_no= $rowval['Lab_no'];

$Pc_no= $rowval['Pc_no'];

$Issue= $rowval['Issue'];

$Issue_decription = $rowval['Issue_decription'];




}

if(isset($_POST['submit']) && (isset($_POST['Technician']))){
   $y = $_POST['Technician'];

	 $sql="INSERT INTO tech_detail (T_id,Proirity,Lab_no,Pc_no,Issue,Issue_decription,Tech_id,Head_Inst)

VALUES

('".$T_id."','".$Proirity."','".$Lab_no."','".$Pc_no."','".$Issue."','".$Issue_decription."','".$y."','".$_POST['description']."')";

$mydata1 = mysqli_query($conn,$sql);


}

mysqli_close($conn);

 

header('Location: ../ticket3/log.php');
?>

