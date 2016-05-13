<?php
session_start();
ob_start();
if(!(isset($_SESSION['A_id'])) || ($_SESSION['A_id'] == ''))
		{
		   header('Location: ..index.php'); //redirect URL
		   exit();
		}

 $query1=mysqli_connect("localhost","root","","malwa_operations_arp");


if(isset($_POST['go'])){

$SQL = "select * from it_ticket_service ";
$exportData = mysqli_query ($query1,$SQL ) or die ( "Sql error : " . mysqli_error( ) );
}
if(isset($_POST['gone']))

{
$c=$_GET['x'];
$SQL ="SELECT * FROM it_ticket_service Where Tech_id='".$c."'";
$exportData = mysqli_query ($query1,$SQL ) or die ( "Sql error : " . mysqli_error( ) );
}
$header = '';
$result ='';

 
$fields = mysqli_num_fields ( $exportData );
 
for ( $i = 0; $i < $fields; $i++ )
{
    $header .= mysqli_fetch_field( $exportdata , $i ) . "\t";
}
 
while( $row = mysqli_fetch_row( $exportData ) )
{
    $line = '';
    foreach( $row as $value )
    {                                            
        if ( ( !isset( $value ) ) || ( $value == "" ) )
        {
            $value = "\t";
        }
        else
        {
            $value = str_replace( '"' , '""' , $value );
            $value = '"' . $value . '"' . "\t";
        }
        $line .= $value;
    }
    $result .= trim( $line ) . "\n";
}
$result = str_replace( "\r" , "" , $result );
 
if ( $result == "" )
{
    $result = "\nNo Record(s) Found!\n";                        
}
 
header("Content-type: application/octet-stream");
if(isset($_POST['go'])){
header("Content-Disposition: attachment; filename=student_request_details.xls");}
if(isset($_POST['gone'])){
header("Content-Disposition: attachment; filename=student.xls");}

header("Pragma: no-cache");
header("Expires: 0");
print "$header\n$result";
 
?>
