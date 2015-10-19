<?php
session_start();
include 'connect.php';
//error_reporting(E_ERROR | E_PARSE);
/*if(isset($_SESSION['fname']))
{
header('Location:loggedin.php');
}*/

/*$time_now=mktime(date('h')+5,date('i')+30);
 	$time=date('h:i A',$time_now);
	//echo $time;
	if ($time>='11:00 AM'){
	echo "<h3 style=\"color:red\">Registration have been closed currently.Registrations will begun at 1pm</h3>";
	}*/
if(isset($_POST['submit']))
{
	if(!empty($_POST['buser']) && !empty($_POST['bpwd']))
	{
	$user=mysql_real_escape_string($_POST['buser']);
	$pwd=mysql_real_escape_string($_POST['bpwd']);
	$query="select bid,cnt_number,first_name,last_name,slot from login where bid='$user' and cnt_number='$pwd'";
	$count=mysql_query($query,$con);
	if($count === FALSE) 
	{
    die(mysql_error()); // TODO: better error handling
	}
	if(mysql_num_rows($count)==1)
	{
	$row = mysql_fetch_array($count);
    
	$_SESSION['lname']=$row["last_name"];
	$_SESSION['fname']=$row["first_name"];
	$_SESSION['slots']=$row["slot"];
	$_SESSION['number']=$row["bid"];
	$_SESSION['bid']=$row["bid"];
	$_SESSION['msg']="";
	if($user[0]=='n' && $user[1]=='k' && ($row["slot"]>0))
	{
	header('Location:schedule.php');
	}
	if($user[0]=='n' && $user[1]=='k' && ($row["slot"]<=0))
	{
	header('Location:display.php');
	}
	echo "If you are seeing this page than your browser has some technical issues. Replace <b>redirect.php</b> in url with <b>schedule.php</b>.";
	
	}
	else
	{
	echo "<h2>Wrong username or password</h2>";
	}

	}
}


mysql_close($con);
?>
