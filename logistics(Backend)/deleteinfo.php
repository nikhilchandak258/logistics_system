<?php
   include 'connect.php';
   
   
   	if(isset($_POST['submit'])||isset($_POST['bid']))
	{
	
   $reg=$_POST['bid'];

	$errorMessage="";
	if($reg[0]=='n' && $reg[1]=='k')
	$type="workshop";
	if($reg[0]=='n' && $reg[1]=='n')
	$type="contestentry";	
	if($reg[0]=='k' && $reg[1]=='n')
	$type="conference";
	if($reg[0]!='n' && $reg[0]!='k')
	{
	$errorMessage="Incorrect reg card number";
	echo $errorMessage;
	echo $type;
	}
   
    $result = "DELETE FROM $type WHERE bid='$reg' ";
	if (!mysqli_query($con,$result))
  {
  die('Error: ' . mysqli_error($con));
  }
  else
echo "1 record deleted";
    $result1 = "DELETE FROM mainlogin WHERE bid='$reg' ";
	mysqli_query($con,$result1);

	if($type=="contestentry")
    {
	$result2 = "DELETE FROM contest WHERE bid='$reg' ";
	mysqli_query($con,$result2);	
	
    }	
	
    if($type=="workshop")
    {
	$result3 = "DELETE FROM login WHERE bid='$reg' ";
	mysqli_query($con,$result3);	
	
    }	
   
	exit();
	}
?>