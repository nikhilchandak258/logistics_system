<?php
session_start();
include 'connect.php';
error_reporting(E_ERROR | E_PARSE);
if(!isset($_SESSION['temp']))
header('Location:index.php');
echo "<a href=\"counter.php\" style='text-decoration: none;float: left;border: 1px solid black;padding: 0.5em;border-radius: 13px;color: black;box-shadow: inset 0 0 10px 0px;'>Count</a>";

echo "<a href=\"update.php\" style='text-decoration: none;float: left;margin-left:46%;border: 1px solid black;padding: 0.5em;border-radius: 13px;color: black;box-shadow: inset 0 0 10px 0px;'>Update</a>";
echo "<a href=\"logout.php\" style='text-decoration: none;float: right;border: 1px solid black;padding: 0.5em;border-radius: 13px;color: black;box-shadow: inset 0 0 10px 0px;'>Logout</a>";

?>
<html>
<head>
<title>Registration Page</title>
</head>
<body style="background-color:rgba(121, 222, 241, 1);">

<form action="input.php" method="post">
<br/>
<br />
Barcode Id:<input type="text" name="bid" maxlength="6"/>
<br /><input type="submit" name="submit" />
</form>
<?php
if(isset($_POST['submit']))
{
if(!empty($_POST['bid']))
{

$reg=mysql_real_escape_string($_POST['bid']);
	if($reg[0]=='n' && $reg[1]=='k')
	$type="workshop";
	if($reg[0]=='n' && $reg[1]=='n')
	$type="contestentry";	
	if($reg[0]=='k' && $reg[1]=='n')
	$type="conference";
$query="select bid from $type where bid='$reg'";
	$count=mysql_query($query,$con);
	$x=mysql_fetch_array($count);
	if(mysql_num_rows($count)==1)
	{
	   $_SESSION['REG']=$x['bid'];
     include 'output.php';
	}
    else
    {
    echo "<h2 style='color:red'>Registration id not found</h2>";
    }  
}
}
$reg= $_SESSION['REG'];
if(isset($_POST['wkshop']))
			{
				$wkid=$_POST['workshop'];
				echo $reg."	";
				$wkchk=mysql_query("UPDATE workshop2013 Set chk='1' WHERE bid='$reg' and wkshpid='$wkid'",$con);
				$wkname =mysql_query("SELECT wkshp_name FROM workshopname WHERE wkshpid='$wkid'",$con);
				$wknameResult=mysql_fetch_array($wkname);
				echo $wknameResult[0]." Checked In";
				
			}
	
                if(isset($_POST['TCS']))
					{			  		
					$result =mysql_query("UPDATE conference Set cf1='1' WHERE bid='$reg'",$con);
						
					echo $reg ." <h3 style=\"color:green;\">TCS checked in";
					}
		
				if(isset($_POST['APPLE']))
					{			  		
					$result =mysql_query("UPDATE conference Set cf2='1' WHERE bid='$reg'",$con);
						
					echo $reg ." <h4 style=\"color:green;\">PCSS checked in</h3>";
					}
				if(isset($_POST['GOOGLE']))
					{			  		
					$result =mysql_query("UPDATE conference Set cf3='1' WHERE bid='$reg'",$con);
						
					echo $reg ." <h4 style=\"color:green;\">PHILIPS checked in<h4>";
					}
					
if(isset($_POST['contestSubmit'])){
				
			$contId=$_POST['cont'];
			for($i=0;$i<sizeof($contId);$i++){
			//	echo $contId[$i].":";
	$contchk=mysql_query("UPDATE contest Set ck='1' WHERE bid='$reg' and contestid='$contId[$i]'",$con);
	$contname =mysql_query("SELECT contest FROM contestdata WHERE id='$contId[$i]'",$con);
	$contnameResult=mysql_fetch_array($contname);
	echo $contnameResult[0]." Checked In<br/>";
										}
			}
?>
</body>
</html>