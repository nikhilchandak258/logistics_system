<?php
session_start();
include 'connect.php';
$reg =$_SESSION['bid'];
$workshop=$_POST['workshop'];
$slot=$_SESSION['slots'];
$result=mysql_query("Select day,wkshp_name,workshop2013.wkshpid from workshop2013,workshopname where workshop2013.bid='$reg' And (workshop2013.wkshpid=workshopname.wkshpid)",$con);
$errormsg="You have already selected ";
$error=0;
while($row=mysql_fetch_array($result))
{
for($i=0;$i<sizeof($workshop);$i++)
{
if($row['wkshpid']==$workshop[$i]) 
{
$error=$error+1;
$errormsg.=$row['wkshp_name'];
} 
}
}
if($error==0)
{
if($slot>0)
{
for($i=0;$i<sizeof($workshop);$i++){
			//echo $workshop[$i];
			//$workshopname=mysql_query("Select wkshp_name from workshopname where wkshpid='$workshop[$i]'",$con);
			$capacity=mysql_query("Select capacity,slot,occupied from workshopname where wkshpid='$workshop[$i]'",$con);
            //$count=mysql_query("Select bid from workshop2013 where wkshpid='$workshop[$i]'",$con);
			$count=mysql_fetch_array($capacity);
			$y=$count["slot"];
			$slot=$slot-$y;
			$x=$count["capacity"];
			$x=$x-1;
			$z=$count["occupied"];
			$z=$z+1;
			$result = mysql_query("INSERT INTO workshop2013
								(bid,wkshpId)
								VALUES('$reg','$workshop[$i]')",$con);
			$countupdate=mysql_query("UPDATE workshopname SET capacity='$x',occupied='$z' where wkshpid='$workshop[$i]'",$con);					
			$loginupdate=mysql_query("UPDATE login SET slot='$slot' where bid='$reg'",$con);	
		}
		include 'display2.php';
}
else
{
include 'display.php';		
}
}
else
{
 $_SESSION['msg']=$errormsg;
	header('Location:schedule.php');

}		
           

?>