<?php
 include 'connect.php';
session_start();
if(!isset($_SESSION['fname']))
header('Location:index.php');
echo "<center>Welcome ".strtoupper($_SESSION['fname'])." ".strtoupper($_SESSION['lname']).",</br></center>";
echo "<a href=\"display.php\" style='text-decoration: none;float: left;border: 1px solid black;padding: 0.5em;border-radius: 13px;color: black;box-shadow: inset 0 0 10px 0px;'>My Bookings</a>";
echo "<a href=\"logout.php\" style='text-decoration: none;float: right;border: 1px solid black;padding: 0.5em;border-radius: 13px;color: black;box-shadow: inset 0 0 10px 0px;'>Logout</a>";
 
//error_reporting(E_ERROR | E_PARSE);
 /* $time_now=mktime(date('h')+5,date('i')+30);
 $time=date('h:i A',$time_now);
	//echo $time;	
	if ($time>='11:00 AM'){
	unset($_SESSION['username']);
	session_destroy();
	header('Location:index.php');
	}*/
   echo "<center><font color='red'>".$_SESSION['msg']."</font><center>";
   
   $result=mysql_query("Select wkshpid,wkshp_name,capacity from workshopname",$con);
echo "<table id='capacity' style='display:none;'>";
while($row=mysql_fetch_array($result))
{
echo "<tr><td>".$row['wkshp_name']."</td>";
echo "<td id='".$row['wkshpid']."'>".$row['capacity']."</td></tr>";
}
echo "</table>";
	?>

<html>
<head>
<title>Workshop Schedule</title>
<link rel="stylesheet" href="css/scheduleStyle.css">
<script type="text/javascript" src="js/jquery.js"></script>	
<script type="text/javascript" src="js/checkbox.js"></script>	
<script type="text/javascript">
function capacity()
{
var w1=$("#1").text();
var w2=$("#2").text();
var w3=$("#3").text();
var w4=$("#4").text();
var w5=$("#5").text();
var w6=$("#6").text();
var w7=$("#7").text();
var w8=$("#8").text();
var w9=$("#9").text();
var w10=$("#10").text();
var w11=$("#11").text();
var w12=$("#12").text();
var w13=$("#13").text();
var w14=$("#14").text();
var w15=$("#15").text();
var w16=$("#16").text();
var w17=$("#17").text();
var w18=$("#18").text();
var w19=$("#19").text();
var w20=$("#20").text();
var w21=$("#21").text();
var w22=$("#22").text();
var w23=$("#23").text();
var w24=$("#24").text();
var w25=$("#25").text();
var w26=$("#26").text();
var w27=$("#27").text();
var w28=$("#28").text();
var w29=$("#29").text();
var w30=$("#30").text();
var w31=$("#31").text();
var w32=$("#32").text();
var w33=$("#33").text();
var w34=$("#34").text();
var w35=$("#35").text();
var w36=$("#36").text();
var w37=$("#37").text();
var w38=$("#38").text();
var w39=$("#39").text();


if(w1<='0')
{
$x=$("#w1").text()+" is full";
$("#w1").addClass("full");
$("#w1").text($x);
}
if(w2<='0')
{
$x=$("#w2").text()+" is full";
$("#w2").addClass("full");
$("#w2").text($x);
}
if(w3<='0')
{
$x=$("#w3").text()+" is full";
$("#w3").addClass("full");
$("#w3").text($x);
}
if(w4<='0')
{
$x=$("#w4").text()+" is full";
$("#w4").addClass("full");
$("#w4").text($x);
}
if(w5<='0')
{
$x=$("#w5").text()+" is full";
$("#w5").addClass("full");
$("#w5").text($x);
}
if(w6<='0')
{
$x=$("#w6").text()+" is full";
$("#w6").addClass("full");
$("#w6").text($x);
}
if(w7<='0')
{
$x=$("#w7").text()+" is full";
$("#w7").addClass("full");
$("#w7").text($x);
}
if(w8<='0')
{
$x=$("#w8").text()+" is full";
$("#w8").addClass("full");
$("#w8").text($x);
}
if(w9<='0')
{
$x=$("#w9").text()+" is full";
$("#w9").addClass("full");
$("#w9").text($x);
}
if(w10<='0')
{
$x=$("#w10").text()+" is full";
$("#w10").addClass("full");
$("#w10").text($x);
}
if(w11<='0')
{
$x=$("#w11").text()+" is full";
$("#w11").addClass("full");
$("#w11").text($x);
}
if(w12<='0')
{
$x=$("#w12").text()+" is full";
$("#w12").addClass("full");
$("#w12").text($x);
}
if(w13<='0')
{
$x=$("#w13").text()+" is full";
$("#w13").addClass("full");
$("#w13").text($x);
}
if(w14<='0')
{
$x=$("#w14").text()+" is full";
$("#w14").addClass("full");
$("#w14").text($x);
}
if(w15<='0')
{
$x=$("#w15").text()+" is full";
$("#w15").addClass("full");
$("#w15").text($x);
}
if(w16<='0')
{
$x=$("#w16").text()+" is full";
$("#w16").addClass("full");
$("#w16").text($x);
}
if(w17<='0')
{
$x=$("#w17").text()+" is full";
$("#w17").addClass("full");
$("#w17").text($x);
}
if(w18<='0')
{
$x=$("#w18").text()+" is full";
$("#w18").addClass("full");
$("#w18").text($x);
}
if(w19<='0')
{
$x=$("#w19").text()+" is full";
$("#w19").addClass("full");
$("#w19").text($x);
}
if(w20<='0')
{
$x=$("#w20").text()+" is full";
$("#w20").addClass("full");
$("#w20").text($x);
}
if(w21<='0')
{
$x=$("#w21").text()+" is full";
$("#w21").addClass("full");
$("#w21").text($x);
}
if(w22<='0')
{
$x=$("#w22").text()+" is full";
$("#w22").addClass("full");
$("#w22").text($x);
}
if(w23<='0')
{
$x=$("#w23").text()+" is full";
$("#w23").addClass("full");
$("#w23").text($x);
}
if(w24<='0')
{
$x=$("#w24").text()+" is full";
$("#w24").addClass("full");
$("#w24").text($x);
}
if(w25<='0')
{
$x=$("#w25").text()+" is full";
$("#w25").addClass("full");
$("#w25").text($x);
}
if(w26<='0')
{
$x=$("#w26").text()+" is full";
$("#w26").addClass("full");
$("#w26").text($x);
}
if(w27<='0')
{
$x=$("#w27").text()+" is full";
$("#w27").addClass("full");
$("#w27").text($x);
}
if(w28<='0')
{
$x=$("#w28").text()+" is full";
$("#w28").addClass("full");
$("#w28").text($x);
}
if(w29<='0')
{
$x=$("#w29").text()+" is full";
$("#w29").addClass("full");
$("#w29").text($x);
}
if(w30<='0')
{
$x=$("#w30").text()+" is full";
$("#w30").addClass("full");
$("#w30").text($x);
}
if(w31<='0')
{
$x=$("#w31").text()+" is full";
$("#w31").addClass("full");
$("#w31").text($x);
}
if(w32<='0')
{
$x=$("#w32").text()+" is full";
$("#w32").addClass("full");
$("#w32").text($x);
}
if(w33<='0')
{
$x=$("#w33").text()+" is full";
$("#w33").addClass("full");
$("#w33").text($x);
}
if(w34<='0')
{
$x=$("#w34").text()+" is full";
$("#w34").addClass("full");
$("#w34").text($x);
}
if(w35<='0')
{
$x=$("#w35").text()+" is full";
$("#w35").addClass("full");
$("#w35").text($x);
}
if(w36<='0')
{
$x=$("#w36").text()+" is full";
$("#w36").addClass("full");
$("#w36").text($x);
}
if(w37<='0')
{
$x=$("#w37").text()+" is full";
$("#w37").addClass("full");
$("#w37").text($x);
}
if(w38<='0')
{
$x=$("#w38").text()+" is full";
$("#w38").addClass("full");
$("#w38").text($x);
}
if(w39<='0')
{
$x=$("#w39").text()+" is full";
$("#w39").addClass("full");
$("#w39").text($x);
}

}

function validate(form) {

     


    if(!valid) return false;
    else return confirm('Do you really want to submit the form?');
}
</script>
</head>
<body onload="capacity()">

<div id="schedule-container">
<h1 style="text-align:center;">Workshop Schedule</h1>
<p  style="text-align:center;"><b>Kindly note that the selections made now are final and no changes will be accepted at the later stage.<br/>
For any queries contact Nikhil Chandak :+91 9029789549 Kaustubh Nerurkar :+91 8097804736</b>
</p>

<div id="user-details">
<?php
echo "<br/>You have <span id='slot_store'>".strtoupper($_SESSION['slots'])."</span> slots remaining";

?>

</div>


<!--Start of Day 1 Schedule-->
<div id="day1-container" class="schedule">
<form onsubmit="return confirm('Do you really want to submit your choices? Once submitted you may not be able to change your choices');" action="slotreserve.php" method="post">
<table border="1" cellspacing="0">
<tr>
<th colspan="4"  style="background-color: #5C5C5C;color: #ECECEC; ">DAY 1:29<sup>th</sup>September</th>
</tr>

<tr  style="background-color: #777575;color: #ECECEC;">
<th>9:00-11:00</th>
<th>11:00-1:00</th>
<th>1:30-3:30</th>
<th>3:30-5:30</th>
</tr>

<tr>
<td id="w1" class="slot1"><input type="checkbox" name="workshop[]" value="1" class="11s">Ethical Hacking</td>
<td id="w37" class="slot1"><input type="checkbox" name="workshop[]" value="37" class="12s">Ethical Hacking</td>
<td id="w2" class="slot1"><input type="checkbox" name="workshop[]" value="2" class="13s">Web Development</td>
<td id="w3" class="slot1"><input type="checkbox" name="workshop[]" value="3" class="14s">Cloud Computing</td>
</tr>

<tr>
<td id="w4" colspan="2" class="slot2"><input type="checkbox" name="workshop[]" value="4" class="11s2s">Windows 8 Application Development</td>
<td id="w5" colspan="2" class="slot2"><input type="checkbox" name="workshop[]" value="5" class="13s4s">Android Application Development</td>
</tr>

<tr>
<td id="w6" class="slot1"><input type="checkbox" name="workshop[]" value="6" class="11s">Java</td>
<td id="w7" class="slot1"><input type="checkbox" name="workshop[]" value="7" class="12s">.Net Framework</td>
<td id="w8" class="slot3"><input type="checkbox" name="workshop[]" value="8" class="13s">PHP/Wordpress*</td>
<td id="w9" class="slot1"><input type="checkbox" name="workshop[]" value="9" class="14s">Web 3.0</td>
</tr>

<tr>
<td id="w10" colspan="2" class="slot2"><input type="checkbox" name="workshop[]" value="10" class="11s2s">VFX</td>
<td></td>
<td id="w11" class="slot3"><input type="checkbox" name="workshop[]" value="11" class="14s">MATLAB*</td>
</tr>

<tr>
<td colspan="4" class="robotics">Eyediots</td>
</tr>
</table>
</div>
<!--End of Day 1 Schedule-->

<!--Start of Day 2 Schedule-->
<div id="day2-container" class="schedule">
<table border="1" cellspacing="0">
<tr>
<th colspan="4" style="background-color: #5C5C5C;color: #ECECEC; ">DAY 2:2<sup>nd</sup>October</th>
</tr>

<tr style="background-color: #777575;color: #ECECEC;">
<th>9:00-11:00</th>
<th>11:00-1:00</th>
<th>1:30-3:30</th>
<th>3:30-5:30</th>
</tr>

<tr>
<td id="w12" colspan="2" class="slot2"><input type="checkbox" name="workshop[]" value="12" class="21s2s">3D Animation</td>
<td id="w13" class="slot1"><input type="checkbox" name="workshop[]" value="13" class="23s">Ethical Hacking</td>
<td id="w38" class="slot1"><input type="checkbox" name="workshop[]" value="38" class="24s">Ethical Hacking</td>
</tr>

<tr>
<td id="w14" class="slot1"><input type="checkbox" name="workshop[]" value="14" class="21s">Cloud Computing</td>
<td id="w15" colspan="2" class="slot2"><input type="checkbox" name="workshop[]" value="15" class="22s3s">Photography</td>
<td id="w16" class="slot1"><input type="checkbox" name="workshop[]" value="16" class="24s">Bioinformatics</td>
</tr>

<tr>
<td id="w17" colspan="2" class="slot2"><input type="checkbox" name="workshop[]" value="17" class="21s2s">Windows 8 Application Development</td>
<td id="w18" colspan="2" class="slot2"><input type="checkbox" name="workshop[]" value="18" class="23s4s">Android Application Development</td>
</tr>

<tr>
<td id="w19" colspan="2" class="slot2"><input type="checkbox" name="workshop[]" value="19" class="21s2s">Photoshop+Coreldraw</td>
<td id="w20" class="slot3"><input type="checkbox" name="workshop[]" value="20" class="23s">PHP/Wordpress*</td>
<td id="w21" class="slot1"><input type="checkbox" name="workshop[]" value="21" class="24s">Web 3.0</td>
</tr>

<tr>
<td id="w22" class="slot3"><input type="checkbox" name="workshop[]" value="22" class="21s">MATLAB*</td>
<td id="w23" class="slot1"><input type="checkbox" name="workshop[]" value="23" class="22s">Digital Forensics</td>

<td colspan="2"></td>
</tr>

<tr>
<td colspan="4"  class="robotics">Accelerduino</td>
</tr>
</table>
</div>
<!--End of Day 2 Schedule-->


<!--Start of Day 3 Schedule-->
<div id="day3-container" class="schedule">
<table border="1" cellspacing="0">
<tr>
<th colspan="4"  style="background-color: #5C5C5C;color: #ECECEC; ">DAY 3:6<sup>th</sup>October</th>
</tr>

<tr style="background-color: #777575;color: #ECECEC;">
<th>9:00-11:00</th>
<th>11:00-1:00</th>
<th>1:30-3:30</th>
<th>3:30-5:30</th>
</tr>

<tr>
<td id="w24" class="slot1"><input type="checkbox" name="workshop[]" value="24" class="31s">Ethical Hacking</td>
<td id="w39" class="slot1"><input type="checkbox" name="workshop[]" value="39" class="32s">Ethical Hacking</td>
<td id="w25" class="slot3"><input type="checkbox" name="workshop[]" value="25" class="33s">PHP/Wordpress*</td>
<td id="w26" class="slot1"><input type="checkbox" name="workshop[]" value="26" class="34s">Python</td>
</tr>

<tr>
<td id="w27" class="slot1"><input type="checkbox" name="workshop[]" value="27" class="31s">Java</td>
<td id="w28" class="slot1"><input type="checkbox" name="workshop[]" value="28" class="32s">.Net Framework</td>
<td id="w29" class="slot1"><input type="checkbox" name="workshop[]" value="29" class="33s">Web Development</td>
<td id="w30" class="slot1"><input type="checkbox" name="workshop[]" value="30" class="34s">Web 3.0</td>

</tr>

<tr>
<td id="w31" class="slot1"><input type="checkbox" name="workshop[]" value="31" class="31s">Spectrscopy</td>
<td id="w32" class="slot3"><input type="checkbox" name="workshop[]" value="32" class="32s">MATLAB*</td>
<td id="w33" class="slot1"><input type="checkbox" name="workshop[]" value="33" class="33s">Mutagenesis</td>
<td id="w34" class="slot1"><input type="checkbox" name="workshop[]" value="34" class="34s">Mathematics in Biology</td>
</tr>

<tr>
<td id="w35" class="slot1"><input type="checkbox" name="workshop[]" value="35" class="31s">Networking</td>
<td id="w36" class="slot1"><input type="checkbox" name="workshop[]" value="36" class="32s">Cloud Computing</td>
<td colspan="2"></td>
</tr>

<tr>
<td colspan="4" class="robotics">Android Botics</td>
</tr>
</table>
</div>
<center><input type="submit" value="submit" name="submit" id="sub" style="margin: 0 auto;float: none;font-size: 22px;top: 15px;position: relative;width: 200px;font-family: aldrich;"/></center>

</form>
<!--End of Day 3 Schedule-->


<div id="class-holder" class="colorcode">
<table border="1" cellspacing="0">
<tr>
<td class="slot1">Slot 1 : Green</td>
<td class="slot2">Slot 2 : Yellow</td>
<td class="slot3">Slot 3 : Red</td>
<td class="robotics">Robotics : Purple</td>
</tr>
<tr>
<td colspan="4">*If you select either of the 3 slot workshops(i.e <b style="color:red">red boxes</b>) then you have to come all three days for the workshop. </td>
</tr>

</div>

</body>
</html>