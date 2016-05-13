<html>
<body>

<?php
// Start the session
session_start();
ob_start();


$con = mysqli_connect("localhost","root","","malwa_operations_arp");

if (!$con)

  {

  die('Could not connect: ' . mysql_error());

  }





//checking if someone is not already logged in, if so so redirecting to the actual page
   
    
    

//SETTING SESSION AFTET CHECKING USERNAME AND PASSWORD
     $username= $_POST["username"];
     $password= $_POST["password"];
     
     $sql = "SELECT * FROM admin_record WHERE A_id ='".$username."' and password ='".$password."'";
	 $result = mysqli_query($con,$sql);
	
if (!$result) {
    echo 'Could not run query: ' . mysqli_error();
    exit;
}
$row = mysqli_fetch_row($result);

echo $row[0]; // 42
echo $row[1]; // the email value
	 
     if (!mysqli_query($con,$sql))

  {

  die('Error: ' . mysqli_error());

  }
     
	
    if($result)
     {
       $num_rows = mysqli_num_rows($result);
     
       if ($num_rows > 0) 
       {
       
                 
         
      
         $_SESSION['A_id'] = $row[0];
			
		header('Location: ../ticket3/mytickets.php');
	if($_SESSION['A_id']=='0862admin')
		{
			header('Location: ../ticket3/log.php');
		}
         exit();
		 
}

else{
$_SESSION['flag']=1;
echo "invalid";
header('Location: index.php?x=1');}
}
?>
</body>
</html>
