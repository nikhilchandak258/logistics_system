<?php
   	include 'loggedin.php';
	?>
	<html>
	<head>
    <title>Display</title>
</head>
<body>
<div style="margin:0px auto;width:300px;height:145px;padding: 5px 0px;text-align: center;border: 1px solid #9C9C9C;border-radius: 10px;">

<br/>
<div style="margin:0px auto;">

<form method="post">
Enter Barcode id:<input type="text" name="bid"/><br/>
<br/>
<input type="submit" name="submit"/>
</form>
</div>
</div>
<?php
include 'display.php';
?>
</body>
</html>
