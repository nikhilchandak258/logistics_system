<?php

if(!isset($_SESSION['fname']))
header('Location:index.php');
echo "<center>Welcome ".strtoupper($_SESSION['fname'])." ".strtoupper($_SESSION['lname']).",</br></center>";
echo "<a href=\"logout.php\" style='text-decoration: none;float: right;border: 1px solid black;padding: 0.5em;border-radius: 13px;color: black;box-shadow: inset 0 0 10px 0px;'>Logout</a>";
$reg=$_SESSION['bid'];
$result=mysql_query("Select day,wkshp_name,workshop2013.wkshpid,time from workshop2013,workshopname where workshop2013.bid='$reg' And (workshop2013.wkshpid=workshopname.wkshpid)",$con);
echo "<table border='1' style='margin: 0 auto;'><tr><th>Day</th><th>Workshop</th><th>Slot Timing</th></tr>";
while($row=mysql_fetch_array($result))
{
echo "<tr style='text-align:center'><td>".$row['day']."</td>";
echo "<td>".$row['wkshp_name']."</td><td>".$row['time']."</td></tr>";
}
echo "</table>";
?>