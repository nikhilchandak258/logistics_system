<?php
session_start();
if(isset($_SESSION['buser']))
{
	$server = $_SERVER['SERVER_NAME'];
	header('Location: http://nproject.5gbfree.com/logistics/backend/loggedin.php');
	exit();
}

$con=mysql_connect("localhost","nproject_admin","webmaster14");
if (!$con)
  {
  die('Could not connect:Custom: ' . mysql_error());
  }
$db_selected = mysql_select_db("nproject_logi", $con); 
if(isset($_POST['submit']))
{
	if(!empty($_POST['buser']) && !empty($_POST['bpwd']))
	{
	$user=mysql_real_escape_string($_POST['buser']);
	$pwd=mysql_real_escape_string($_POST['bpwd']);
	$query="select name,pwd from back_login where name='$user' and pwd='$pwd'";
	$count=mysql_query($query,$con);
	//echo "inside";
	if($count === FALSE) 
	{
	//echo "die";
    die(mysql_error()); // TODO: better error handling
	}
	if(mysql_num_rows($count)==1)
	{
	//echo "redirect";
	$_SESSION['buser']=$_POST['buser'];
	$server = $_SERVER['SERVER_NAME'];
	header("Location: http://nproject.5gbfree.com/logistics/backend/loggedin.php");
	exit();
	}
//echo $_SESSION['buser'];
	}
}


?>

<html>
<head>
<title>Backend Login Terminal</title>
</head>
<body>
<div style="margin:0px auto;width:300px;height:145px;padding: 5px 0px;text-align: center;border: 1px solid #9C9C9C;border-radius: 10px;">
<h2 style="text-align:center;margin:0px;">Login</h2>
<br/>
<div style="margin:0px auto;">

<form action="index.php" method="post">
Enter user name:<input type="text" name="buser"/><br/>
Enter Password:<input type="password" name="bpwd"/><br/>
<input type="submit" name="submit"/>
</form>
</div>
</div>


<?php
mysql_close($con);
?>
</body>
</html>