<?php
    include 'connect.php';
	include 'loggedin.php';
?>


<html>
<head>
	<title>Contests</title>




</head>
<body>
 <h4 style="margin:0"><center><font size="6" color="" face="Ariel"><div class="name">Contest Details</div></font></center></h4><br>




 	<form method="post">
	<?php include 'submitContest.php';
//this where the values are added to the database
?>
	<?php
	     include 'common.php';
		 //common form
    ?>




<label><span></span><input type="text" style="visibility: collapse"></label>



<label style="width: 58%;float: none;">Enter Participants Detail</label>
<label>First Name
<span class="small">Add your first name</span>
</label>
<input type="text" name="fname1" value="<?php echo htmlspecialchars($_POST['fname1']);?>"/>

<label>Last Name
<span class="small">Add your Last Name</span>
</label>
<input type="text" name="lname1" value="<?php echo htmlspecialchars($_POST['lname1']);?>"/>
<label>First Name
<span class="small">Add your first name</span>
</label>
<input type="text" name="fname2" value="<?php echo htmlspecialchars($_POST['fname2']);?>"/>

<label>Last Name
<span class="small">Add your Last Name</span>
</label>
<input type="text" name="lname2" value="<?php echo htmlspecialchars($_POST['lname2']);?>"/><label>First Name
<span class="small">Add your first name</span>
</label>
<input type="text" name="fname3" value="<?php echo htmlspecialchars($_POST['fname3']);?>"/>

<label>Last Name
<span class="small">Add your Last Name</span>
</label>
<input type="text" name="lname3" value="<?php echo htmlspecialchars($_POST['lname3']);?>"/>



<label style="width: 54%;float: none;">Contest Detail</label>
	<table id="contest" border=1>

<tr>
	
	<?php 
	echo "ROBOTICS:";
	$cn=0;
	$result =mysqli_query($con,"SELECT * FROM contestdata");
	if(!$result)
	echo("Result Failed".mysql_error());
	 while($row=mysqli_fetch_array($result))
		{
		if($cn<6){
		$cn++;
		echo "<td>".$row['contest'].":<input type=\"checkbox\"  value=\"$row[id]\" name=\"contest[]\"></td>";
		}
		else {
		   if($cn==6)
		   {
			echo "</tr></table><table id='contest' style='line-height:15px' border=1>Non-robotics<tr>";
			$cn++;
			echo "<td>".$row['contest'].":<input type=\"checkbox\"  value=\"$row[id]\" name=\"contest[]\"></td>";
			}
			else
			{
		echo "<td>".$row['contest'].":<input type=\"checkbox\"  value=\"$row[id]\" name=\"contest[]\"></td>";
	 
		}
		}}
	?>	
	</tr>
</table>


<br/><center><input type="submit" value="submit" name="submit" id="sub" style="margin: 0 auto;float: none;font-size: 18px;bottom: -200px;left: 0;right: 0;"/></center>

	</form>

	</div>
	
	
	
</body>
</html>
<?php
mysqli_close($con);
?>
