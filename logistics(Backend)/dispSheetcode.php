<?php
   	include 'loggedin.php';
	?>
	
<html>
	<head>
    <title>Display Sheetcode</title>
</head>
<body>
<div style="margin:0px auto;width:300px;height:145px;padding: 5px 0px;text-align: center;border: 1px solid #9C9C9C;border-radius: 10px;">

<br/>
<div style="margin:0px auto;">

<form method="post">
Enter Sheetcode:<input type="text" name="sheetid"/><br/>
<input type="radio" name="event" value="workshop">Workshop<br/>
<input type="radio" name="event" value="conference">Conference<br/>
<input type="radio" name="event" value="contest">Contests<br/>
  <select name="contestlist">
  <?php include'connect.php';
  //connection to database php
 
  $result = mysqli_query($con,"SELECT * from contestdata");

  
  
 if($result==false)
	{
	echo 'Error';
	}

/*for autosuggest*/	
 while($row = mysqli_fetch_array($result))
	 {	
	 //echo "hello";
	 ?>
	<option value="<?php echo $row['id']?>"><?php echo $row['contest']?></option>
	<?php }	?>

   </select>
<input type="submit" name="submit"/>
</form>
</div>
</div>
<?php
include 'displaySheet.php';
?>
</body>
</html>
