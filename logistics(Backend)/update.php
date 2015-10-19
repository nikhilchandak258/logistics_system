<?php
   	include 'loggedin.php';
	?>
	
<html>
<head>
<title>Update</title>
</head>
<body>
<div style="margin:0px auto;width:100%;height:145px;padding: 5px 0px;text-align: center;border: 1px solid #9C9C9C;border-radius: 10px;">
<br/>
<div style="margin:0px auto;">
<form method="post">
Enter Barcode id:<input type="text" name="bid" value="<?php echo $_POST['bid'];?>"/><br/>
Enter final total amount:<input type="text" name="paid" /><br/>
<input type="submit" name="submit"/>
<br/>
</form>
</div>
</div>
<?php
include 'displayUpdate.php';
?>
</body>
</html>