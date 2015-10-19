<?php


session_start();

/*if(!isset($_SESSION['username']))
header('Location:index.php');
*/
GLOBAL $connection;
//$connection=mysql_connect('localhost','root','');
$connection = mysql_connect("208.43.192.70:3307","drupal_ad","Ieeetsec@2013");

if(!$connection)
die(mysql_error().'Connection Failed');

//$db=mysql_select_db('logistics2012',$connection);
$db=mysql_select_db("drupal_db",$connection);
	
if(!$db)
die(mysql_error().'Connection Failed');


?>
<html>

<?php
/*	$time_now=mktime(date('h')+5,date('i')+30);
 $time=date('h:i A',$time_now);
	//echo $time;	
	if ($time>='00:00 AM'){
	unset($_SESSION['username']);
	session_destroy();
	header('Location:index.php');
	}
*/


	$reg=$_SESSION['username'];
$check=mysql_query("SELECT Reg FROM scheduleselected WHERE Reg='$reg' ",$connection);	
/*$slot=mysql_query("SELECT slots FROM scheduleselected WHERE Reg='$reg' ",$connection);	
$slotValue=mysql_fetch_query($slot);


$sum=0;
for($z=0;$z<sizeof($slotValue);$z++)
	$sum=$slotValue[$z]+$sum;	
			//print_r($check);
			//echo mysql_num_rows($check);	*/
/*			if(mysql_num_rows($check)!=""){
header ('Location:mySlots.php');
			}
*/				
if(isset($_POST['submit']))
{

	


	$regCard=$_SESSION['username'];
	$result=mysql_query("SELECT package FROM workshop2012 WHERE Reg='$regCard' ",$connection);							
		while($slotValue=mysql_fetch_array($result))
				{
					for($p=0;$p<sizeof($result);$p++)
					$slotSel= $slotValue[$p];
				}

		$value=$_POST['wkshop'];
echo $value;

$add=0;
for ($y=0;$y<sizeof($value);$y++){
	//echo $value[$y];
	$slots=mysql_query("SELECT slots FROM wkschedule2012 WHERE id='$value[$y]'",$connection);
	$class=mysql_query("SELECT class FROM wkschedule2012 WHERE id='$value[$y]'",$connection);
	$capacity=mysql_query("SELECT capacity FROM wkschedule2012 WHERE id='$value[$y]'",$connection);
	$wkid=mysql_query("SELECT code FROM wkschedule2012 WHERE id='$value[$y]'",$connection);
	if(!$slots) 
	die (mysql_error()."No slots");
//echo($slots);
	$slotVal=mysql_fetch_array($slots);
	$capVal=mysql_fetch_array($capacity);
		$wkidVal=mysql_fetch_array($wkid);
//	echo 'OKAY'.$wkidVal[0];	
	//	print_r($capVal);
			
	for($z=0;$z<sizeof($value);$z++)
				$add=$add+$slotVal[$z];
				//	echo $capVal[$y].'<br/>';
								
	//for($a=0;$a<sizeof($value);$a++)
		//echo $capVal[$a]." &nbsp &nbsp<br/>";
								
 		}
		//echo "This is the no. of slots : ".$add;//this is the sumation of the no. of  the slots selected
					
/*							if($add<$slotSel)
							{
				echo "<script type=\"text/javascript\">";
				echo	"alert(\"BOO\")";
				echo "</script>"; 							
				for($y=0;$y<sizeof($value);$y++)
					{	
				$send=mysql_query("INSERT INTO scheduleselected (Reg,wkid,slots) 
					VALUES ('$regCard','$value[$y]','$slotVal[$y]')"
					,$connection);
					}
					header("Location:mySlots.php");
				
							}*/
						
					if($add<=$slotSel)
					{
						for($y=0;$y<sizeof($value);$y++)
					{	
				$send=mysql_query("INSERT INTO scheduleselected (Reg,wkid) 
					VALUES ('$regCard','$value[$y]')"
					,$connection);
					}
					header("Location:mySlots.php");
											}
					else{
					echo "<h3 style=\"color:green;\">Slots entitled to you are ".$slotSel." and you have selected ".$add." slots</h3>";
					}
}


			?>
<head>
<script type="text/javascript" src="jquery-1.3.2.min.js"></script>	
<script type="text/javascript">

$(function(){

	$('.2s1').click(function(){
		var value=$(this).attr('checked');
		//alert(value);
		if(value==true){
		$('.2s1').attr('disabled',true);
		$('.2s1s2').attr('disabled',true);
		$('.2s1').attr('checked',false);
		$('.2s1s2').attr('checked',false);

		$(this).attr('checked',true);		
		
		$(this).attr('disabled',false);
		}
		else{
		$('.2s1').attr('disabled',false);
		$('.2s1s2').attr('disabled',false);
		$(this).attr('disabled',false);
		}
	
	});
	
	$('.2s2').click(function(){
		var value=$(this).attr('checked');
		//alert(value);
		if(value==true){
		$('.2s2').attr('disabled',true);
		$('.2s1s2').attr('disabled',true);
		$('.2s2s3').attr('disabled',true);
		$('.2s2').attr('checked',false);
		$('.2s1s2').attr('checked',false);
		$('.2s2s3').attr('checked',false);

		$(this).attr('checked',true);		
		
		$(this).attr('disabled',false);
		}
		else{
		$('.2s2').attr('disabled',false);
		$('.2s1s2').attr('disabled',false);
		$('.2s2s3').attr('disabled',false);
		$(this).attr('disabled',false);
		}
	
	});

	$('.2s3').click(function(){
		var value=$(this).attr('checked');
		//alert(value);
		if(value==true){
		$('.2s3').attr('disabled',true);
		$('.2s3').attr('checked',false);

		$(this).attr('checked',true);		
		
		$(this).attr('disabled',false);
		}
		else{
		$('.2s3').attr('disabled',false);
		$(this).attr('disabled',false);
		}
	
	});
	
	$('.2s1s2').click(function(){
		var value=$(this).attr('checked');
		//alert(value);
		if(value==true){
		$('.2s1').attr('disabled',true);
		$('.2s2').attr('disabled',true);
		$('.2s2s3').attr('disabled',true);
		$('.2s2s3').attr('checked',false);
		$('.2s1').attr('checked',false);
		$('.2s2').attr('checked',false);

		$(this).attr('checked',true);		
		$(this).attr('disabled',false);
		
		}
		else{
		$('.2s1').attr('disabled',false);
		$('.2s2').attr('disabled',false);
		$('.2s2s3').attr('disabled',false);
		$(this).attr('disabled',false);
		}
	
	});

	$('.2s2s3').click(function(){
		var value=$(this).attr('checked');
		//alert(value);
		if(value==true){
		$('.2s3').attr('disabled',true);
		$('.2s2').attr('disabled',true);
		$('.2s3').attr('checked',false);
		$('.2s2').attr('checked',false);

		$(this).attr('checked',true);		
		$(this).attr('disabled',false);
		
		}
		else{
		$('.2s3').attr('disabled',false);
		$('.2s2').attr('disabled',false);
		$(this).attr('disabled',false);
		}
	
	});
	
	
});
</script>

<script type="text/javascript">

$(function(){

	$('.3s1').click(function(){
		var value=$(this).attr('checked');
		//alert(value);
		if(value==true){
		$('.3s1').attr('disabled',true);
		$('.3s1s2').attr('disabled',true);
		$('.3s1').attr('checked',false);
		$('.3s1s2').attr('checked',false);

		$(this).attr('checked',true);		
		
		$(this).attr('disabled',false);
		}
		else{
		$('.3s1').attr('disabled',false);
		$('.3s1s2').attr('disabled',false);
		$(this).attr('disabled',false);
		}
	
	});

	$('.3s2').click(function(){
		var value=$(this).attr('checked');
		//alert(value);
		if(value==true){
		$('.3s2').attr('disabled',true);
		$('.3s1s2').attr('disabled',true);
		$('.3s2s3').attr('disabled',true);
		$('.3s2').attr('checked',false);
		$('.3s1s2').attr('checked',false);
		$('.3s2s3').attr('checked',false);

		$(this).attr('checked',true);		
		
		$(this).attr('disabled',false);
		}
		else{
		$('.3s2').attr('disabled',false);
		$('.3s1s2').attr('disabled',false);
		$('.3s2s3').attr('disabled',false);
		$(this).attr('disabled',false);
		}
	
	});
	$('.3s1s2').click(function(){
		var value=$(this).attr('checked');
		//alert(value);
		if(value==true){
		$('.3s1').attr('disabled',true);
		$('.3s2').attr('disabled',true);
		$('.3s1s2').attr('disabled',true);
		$('.3s2s3').attr('disabled',true);
		$('.3s1').attr('checked',false);
		$('.3s2').attr('checked',false);
		$('.3s1s2').attr('checked',false);
		$('.3s2s3').attr('checked',false);

		$(this).attr('checked',true);		
		
		$(this).attr('disabled',false);
		}
		else{
		$('.3s1').attr('disabled',false);
		$('.3s2').attr('disabled',false);
		$('.3s1s2').attr('disabled',false);
		$('.3s2s3').attr('disabled',false);
		$(this).attr('disabled',false);
		}
	
	});

	
	$('.3s2s3').click(function(){
		var value=$(this).attr('checked');
		//alert(value);
		if(value==true){
		$('.3s2').attr('disabled',true);
		$('.3s1s2').attr('disabled',true);
		$('.3s2s3').attr('disabled',true);
		$('.3s3').attr('disabled',true);

		$('.3s3').attr('checked',false);
		$('.3s2').attr('checked',false);
		
		//$('.3s1s2').attr('checked',false);
	//	$('.3s2s3').attr('checked',false);

		$(this).attr('checked',true);		
		
		$(this).attr('disabled',false);
		}
		else{
		$('.3s2').attr('disabled',false);
		$('.3s1s2').attr('disabled',false);
		$('.3s2s3').attr('disabled',false);
		$('.3s3').attr('disabled',false);

	$(this).attr('disabled',false);
		}
	
	});

	$('.3s3').click(function(){
		var value=$(this).attr('checked');
		//alert(value);
		if(value==true){
		$('.3s3').attr('disabled',true);
		$('.3s2s3').attr('disabled',true);
		
		$('.3s3').attr('checked',false);
		$('.3s2s3').attr('checked',false);

		$(this).attr('checked',true);		
		
		$(this).attr('disabled',false);
		}
		else{
		$('.3s3').attr('disabled',false);
		$('.3s2s3').attr('disabled',false);
		$(this).attr('disabled',false);
		}
	
	});
	
	
});
</script>

<script type="text/javascript">

$(function(){

	$('.1s1').click(function(){
		var value=$(this).attr('checked');
		//alert(value);
		if(value==true){
		$('.1s1').attr('disabled',true);
		$('.1s1s2').attr('disabled',true);
		$('.1s1').attr('checked',false);
		$('.1s1s2').attr('checked',false);

		$(this).attr('checked',true);		
		
		$(this).attr('disabled',false);
		}
		else{
		$('.1s1').attr('disabled',false);
		$('.1s1s2').attr('disabled',false);
		$(this).attr('disabled',false);
		}
	
	});

	
	$('.1s2s3').click(function(){
		var value=$(this).attr('checked');
		//alert(value);
		if(value==true){
		//$('.1s1').attr('disabled',true);
		$('.1s1s2').attr('disabled',true);
		$('.1s2s3').attr('disabled',true);
		$('.1s3').attr('disabled',true);

		$('.1s3').attr('checked',false);
		//$('.1s1').attr('checked',false);
		
		$('.1s1s2').attr('checked',false);
		$('.1s2s3').attr('checked',false);

		$(this).attr('checked',true);		
		
		$(this).attr('disabled',false);
		}
		else{
		//$('.1s1').attr('disabled',false);
		$('.1s1s2').attr('disabled',false);
		$('.1s2s3').attr('disabled',false);
		$('.1s3').attr('disabled',false);

	$(this).attr('disabled',false);
		}
	
	});

	$('.1s3').click(function(){
		var value=$(this).attr('checked');
		//alert(value);
		if(value==true){
		$('.1s3').attr('disabled',true);
		$('.1s3').attr('checked',false);

		$(this).attr('checked',true);		
		
		$(this).attr('disabled',false);
		}
		else{
		$('.1s3').attr('disabled',false);
		$(this).attr('disabled',false);
		}
	
	});
	
	$('.1s1s2').click(function(){
		var value=$(this).attr('checked');
		//alert(value);
		if(value==true){
		$('.1s1').attr('disabled',true);
		$('.1s2s3').attr('disabled',true);
		$('.1s1s2').attr('disabled',true);
		$('.1s1s2').attr('checked',false);
		$('.1s1').attr('checked',false);
		$('.1s2s3').attr('checked',false);
	
		$(this).attr('checked',true);		
		$(this).attr('disabled',false);
		
		}
		else{
		$('.1s1').attr('disabled',false);
		$('.1s2').attr('disabled',false);
		$('.1s1s2').attr('disabled',false);
		$('.1s2s3').attr('disabled',false);
		
		$(this).attr('disabled',false);
		}
	
	});

});
</script>

	<title>Schedule</title>
<style type="text/css">

body{
color: #000000;
background:url(gradient_texture.png);
font-size:14.5px;

font-family:Verdana;

}

</style>

	</head>
<body>

<h5> Kindly note that the selections made now are final and no changes will be accepted at the later stage.For any queries contact Rishi Solanki :+91 9820401482 Natasha Mehta :+91 9967263392</h5>
<a href="logout.php">LOGOUT</a> &nbsp &nbsp &nbsp &nbsp
<a href="mySlots.php">MY BOOKINGS</a>
<form method="post" id="form">
<h2>DAY 1 - 30th September 2012</h2>
<table cellpadding="10" border=1>
<th>SLOT 1 (9:00 - 11:30)</th>
<th>SLOT 2 (11:45 - 2:15)</th>
<th>SLOT 3 (2:30 - 5:00)</th>




<?php

function workshop($i)
{

$result = mysql_query("SELECT name,id,slots,class,capacity FROM wkschedule2012 Where id=$i");
//$result=mysql_query("SELECT*FROM wkschedule2012 ",$connection);

$res = mysql_query("SELECT wkId FROM  scheduleselected WHERE wkId='$i'");
//if(!$res)
//echo mysql_num_rows($res);


print_r($capacity);
//$limit=0.25*
if(!isset($result))
die(mysql_error().'Result failed');	
//print_r($result);

	$row=mysql_fetch_array($result);
	//echo ($row['name']);
		$capacity=$row['capacity'];
		//echo round($capacity)."	:".mysql_num_rows($res);
		
	if(mysql_num_rows($res)<=round($capacity))
	echo "<input type='checkbox' name=\"wkshop[]\" value=\"$row[id]\" class=\"$row[class]\" >".$row['name']."  ";
	
	else{
	echo $row['name']." (FULL) ";
	}
}
?>

<tr>
<?php 
echo "<td colspan=\"2\" >";workshop(1);echo "</td>";
echo "<td>";workshop(2);echo "</td>";
?>
</tr>

<tr>
<?php 
echo "<td>";workshop(3);echo "</td>";
echo "<td colspan=\"2\">";workshop(4);echo "</td>";
?>
</tr>

<?php 
echo "<td colspan=\"2\">";workshop(5);echo "</td>";
echo "<td>";workshop(6);echo "</td>";
?>
</tr>
<tr>
<?php 
echo "<td>";workshop(7);echo "</td>";
echo "<td colspan=\"2\">";workshop(8);echo "</td>";
?>
</tr>
<tr>
<td colspan="3"><center>iMac Botz</center></td>
</tr>

</table>
<h2>DAY 2 - 2nd October 2012</h2>
<table cellpadding="10" border=1>
<th>SLOT 1 (9:00 - 11:30)</th>
<th>SLOT 2 (11:45 - 2:15)</th>
<th>SLOT 3 (2:30 - 5:00)</th>
<tr>
<?php 
echo "<td>";workshop(9);echo "</td>";
echo "<td >";workshop(10);echo "</td>";
echo "<td >";workshop(11);echo "</td>";
?>
</tr>
<br/>
<tr>
<?php 
echo "<td colspan=\"2\">";workshop(12);echo "</td>";
echo "<td>";workshop(13);echo "</td>";
?>
</tr><br/>
<tr>
<?php 
echo "<td>";workshop(14);echo "</td>";
echo "<td>";workshop(15);echo "</td>";
echo "<td>";workshop(16);echo "</td>";
?>
</tr>
<tr>
<?php 
echo "<td>";workshop(17);echo "</td>";
echo "<td>";workshop(18);echo "</td>";
echo "<td>";workshop(19);echo "</td>";
?>
</tr>
<tr>
<?php 
echo "<td>";workshop(20);echo "</td>";
echo "<td>";workshop(21);echo "</td>";
echo "<td>";workshop(22);echo "</td>";

?>
</tr>
<tr>
<td colspan="3"><center>SixthSense Botz</center></td>
</tr>

</table>
<h2>DAY 3 - 7th October 2012</h2>
<table cellpadding="10" border=1>
<th>SLOT 1 (9:00 - 11:30)</th>
<th>SLOT 2 (11:45 - 2:15)</th>
<th>SLOT 3 (2:30 - 5:00)</th>
<tr>
<?php 
echo "<td>";workshop(23);echo "</td>";
echo "<td>";workshop(24);echo "</td>";
echo "<td>";workshop(25);echo "</td>";
?>
</tr>
<br/>
<tr>
<?php 
echo "<td colspan=\"2\">";workshop(26);echo "</td>";
echo "<td >";workshop(27);echo "</td>";
?>
</tr><br/>
<tr>
<?php 
echo "<td >";workshop(28);echo "</td>";
echo "<td colspan=\"2\">";workshop(29);echo "</td>";

?>
</tr>
<tr>
<td colspan="3"><center>AcceleroAurdino Botz</center></td>
</tr>

</table>
<br/><br/>
<input type="submit" name="submit" value="submit">
</form>
</body>
</html>