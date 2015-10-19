<?php
session_start();
?>
<html>
<head>
<title>Backend Login Terminal</title>
</head>
<body>
<form action="back_login.php" method="post">
Enter user name:<input type="text" name="buser"/><br/>
Enter Password:<input type="text" name="bpwd"/><br/>
<input type="submit" name="submit"/>
</form>

<?php

if(isset($_SESSION['buser']))
{
header('Location:loggedin.php');
}


$con=mysql_connect("localhost","isaaclbq_isaac","isaac2013");
if (!$con)
  {
  die('Could not connect:Custom: ' . mysql_error());
  }
$db_selected = mysql_select_db("isaaclbq_logi", $con); 
if(isset($_POST['submit']))
{
	if(!empty($_POST['buser']) && !empty($_POST['bpwd']))
	{
	$user=mysql_real_escape_string($_POST['buser']);
	$pwd=mysql_real_escape_string($_POST['bpwd']);
	$query="select name,pwd from back_login where name='$user' and pwd='$pwd'";
	$count=mysql_query($query,$con);
	if($count === FALSE) 
	{
    die(mysql_error()); // TODO: better error handling
	}
	
	if(mysql_num_rows($count)==1)
	{
	$_SESSION['buser']=$_POST['buser'];
	header('Location:loggedin.php');
	}
echo $_SESSION['buser'];
	}
}
else echo "Error";

mysql_close($con);
?>
</body>
</html>