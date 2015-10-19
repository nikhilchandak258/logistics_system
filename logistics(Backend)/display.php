<?php 
include_once 'loggedin.php';
include_once 'connect.php';
error_reporting(0);

	

	

	
	if(isset($_POST['submit'])||isset($_POST['bid'])||isset($_POST['sheetid']))
	{
	$errorMessage="";
    $reg=$_POST['bid'];
	$sheetcode=$_POST['sheetid'];
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
	if(empty($errorMessage))
	{
	//$result = mysql_query("SELECT * FROM workshop WHERE bid='$reg'",$con) or die ("Error in query: $result. ".mysql_error());
	$table = mysql_query("SELECT * FROM $type WHERE bid='$reg' OR sheetid='$sheetcode'",$con) or die(mysql_error()); 
	if($type=='workshop')
    {
			echo "<table style=\" /*margin-top:0px;*/cellpadding=\"10\" cellpadding=\"10\" border=\"2\"\">";
		
			echo "<tr>";
						echo "<td colspan=\"2\">"."Id"."</td>"."<br/>";
						echo "<td colspan=\"2\">"."Sheet Code"."</td>"."<br/>";
						echo "<td colspan=\"2\">"."Reg Id"."</td>"."<br/>";
                        echo "<td colspan=\"2\">"."Date"."</td>"."<br/>";
						echo "<td colspan=\"2\">"."First Name"."</td>"."<br/>";
						echo "<td colspan=\"2\">"."Last Name"."</td>"."<br/>";
						echo "<td colspan=\"2\">"."Email"."</td>"."<br/>";
						echo "<td colspan=\"2\">"."Contact"."</td>"."<br/>";
						echo "<td colspan=\"2\">"."College"."</td>"."<br/>";
						echo "<td colspan=\"2\">"."slot"."</td>"."<br/>";
						echo "<td colspan=\"2\">"."Amount"."</td>"."<br/>";
						echo "<td colspan=\"2\">"."Paid"."</td>"."<br/>";
					  echo "<td colspan=\"6\">"."Robotics Workshop"."</td>"."<br/>";
						
							
					echo "</tr>";
						while($rc=mysql_fetch_array($table))
			{
			echo "<tr>";
			for($i=0;$i<mysql_num_fields($table);$i++)
				echo "<td colspan=\"2\">".mysql_field_name($rc, $i)."	".$rc[$i]."</td>";
			echo "</tr>";

			}

echo "</table>";
	}
	if($type=='conference')
    {
	echo "<table style=\" /*margin-top:0px;*/cellpadding=\"10\" cellpadding=\"10\" border=\"2\"\">";
		
			echo "<tr>";
						echo "<td colspan=\"2\">"."Id"."</td>"."<br/>";
						echo "<td colspan=\"2\">"."Sheet Code"."</td>"."<br/>";
						echo "<td colspan=\"2\">"."Reg Id"."</td>"."<br/>";
                        echo "<td colspan=\"2\">"."Date"."</td>"."<br/>";
						echo "<td colspan=\"2\">"."First Name"."</td>"."<br/>";
						echo "<td colspan=\"2\">"."Last Name"."</td>"."<br/>";
						echo "<td colspan=\"2\">"."Contact"."</td>"."<br/>";
						echo "<td colspan=\"2\">"."College"."</td>"."<br/>";
						echo "<td colspan=\"2\">"."Email"."</td>"."<br/>";
						echo "<td colspan=\"2\">"."Amount"."</td>"."<br/>";
						echo "<td colspan=\"2\">"."Paid"."</td>"."<br/>";
						echo "<td colspan=\"6\">"."Conference"."</td>"."<br/>";
					  
						
							
					echo "</tr>";
						while($rc=mysql_fetch_array($table))
			{
			echo "<tr>";
			for($i=0;$i<mysql_num_fields($table);$i++)
				echo "<td colspan=\"2\">".mysql_field_name($rc, $i)."	".$rc[$i]."</td>";
			echo "</tr>";

			}

echo "</table>";
	}
    if($type=='contestentry')
    { 
			echo "<table style=\" /*margin-top:0px;*/cellpadding=\"10\" cellpadding=\"10\" border=\"2\"\">";
		
			echo "<tr>";
						echo "<td colspan=\"2\">"."Id"."</td>"."<br/>";
						echo "<td colspan=\"2\">"."Sheet Code"."</td>"."<br/>";
						echo "<td colspan=\"2\">"."Reg Id"."</td>"."<br/>";
                        echo "<td colspan=\"2\">"."Date"."</td>"."<br/>";
						echo "<td colspan=\"2\">"."First Name"."</td>"."<br/>";
						echo "<td colspan=\"2\">"."Last Name"."</td>"."<br/>";
						echo "<td colspan=\"2\">"."Contact"."</td>"."<br/>";
						echo "<td colspan=\"2\">"."Email"."</td>"."<br/>";
						echo "<td colspan=\"2\">"."College"."</td>"."<br/>";
						echo "<td colspan=\"2\">"."Amount"."</td>"."<br/>";
						echo "<td colspan=\"2\">"."Paid"."</td>"."<br/>";
						echo "<td colspan=\"6\">"."Participants"."</td>"."<br/>";
					 					
							
					echo "</tr>";
						while($rc=mysql_fetch_array($table))
			{
			echo "<tr>";
			for($i=0;$i<mysql_num_fields($table);$i++)
				echo "<td colspan=\"2\">".mysql_field_name($rc, $i)."	".$rc[$i]."</td>";
			echo "</tr>";
			}
echo "</table>";
	}
	}
	}
	//else(empty($table)){
		//echo "<h3 style=\"color:red;\">No Reg Id of this type exists....</h3>";}
			mysql_close($con);
?>