<?php 
include_once 'loggedin.php';
error_reporting(0);
$con=mysql_connect("localhost","isaaclbq_isaac","isaac2013");
if (mysql_errno())
  {
  echo "Failed to connect to MySQL: " . mysql_error();
  }
    $db_selected = mysql_select_db("isaaclbq_logi",$con); 
	if(!$db_selected)
	die("Database Selection Failed:".mysql_error());
	

	

	
	if((isset($_POST['submit'])||isset($_POST['sheetid']))&&(!empty($_POST['sheetid']))&&(!empty($_POST['event'])))
	{
	$errorMessage="";
    $reg=$_POST['bid'];
	$sheetcode=$_POST['sheetid'];
	$selection=$_POST['event'];
	$contestselect=$_POST['contestlist'];
	/*if($reg[0]=='n' && $reg[1]=='k')
	$type="workshop";
	if($reg[0]=='n' && $reg[1]=='n')
	$type="contestentry";	
	if($reg[0]=='k' && $reg[1]=='n')
	$type="conference";*/
	/*if($sheetcode[0]!='c'||$sheetcode[0]!='C')
	{
	$errorMessage="Incorrect Sheetcode";
	echo($sheetcode[0]);
	echo $errorMessage;
	echo $type;
	}*/
	echo ($type);
	if($selection=="workshop")
	{
	$type="workshop";
	}
	else if($selection=="conference")
	{
	$type="conference";
	}
	else if($selection=="contest")
	{
	$type="contestentry";
	}
	if(empty($errorMessage))
	{
	//$result = mysql_query("SELECT * FROM workshop WHERE bid='$reg'",$con) or die ("Error in query: $result. ".mysql_error());
	$table = mysql_query("SELECT * FROM $type WHERE sheetid='$sheetcode'",$con) or die(mysql_error());
	
	if($type=='workshop')
    {
			$num_rows = mysql_num_rows($table);
			echo("Total entries from this college=".$num_rows);
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
	$num_rows = mysql_num_rows($table);
	echo("Total entries from this college=".$num_rows);
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
    if(($type=='contestentry')&&(isset($contestselect))&&(!empty($contestselect)))
    {  
	
			$table = mysql_query("SELECT $type.id,$type.sheetid,$type.bid,$type.date,$type.first_name,$type.last_name,$type.cnt_number,$type.email,$type.clg,$type.amount,$type.paid,$type.participants FROM $type,contest,contestdata WHERE contest.contestid='$contestselect' AND contest.bid=contestentry.bid AND contestdata.id=contest.contestid and contestentry.sheetid='$sheetcode'",$con) or die(mysql_error());
			$num_rows = mysql_num_rows($table);
			echo("Total entries from this college=".$num_rows);
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