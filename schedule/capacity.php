<?php
include 'connect.php';
$result=mysql_query("Select * from workshopname",$con);
echo "<table id='capacity' style='display:none;'>";
while($row=mysql_fetch_array($result))
{

echo "<tr><td>".$row['wkshp_name']."</td>";
echo "<td id='".$row['wkshpid']."'>".$row['capacity']."</td></tr>";


}
echo "</table>";
?>