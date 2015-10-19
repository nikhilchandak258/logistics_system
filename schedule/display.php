<?php
include 'connect.php';
include 'loggedin.php';
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