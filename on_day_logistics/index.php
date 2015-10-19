<?php
session_start();
include 'connect.php';
if(isset($_POST['submit']))
{
	if(!empty($_POST['buser']) && !empty($_POST['bpwd']))
	{
	$user=mysql_real_escape_string($_POST['buser']);
	$pwd=mysql_real_escape_string($_POST['bpwd']);
        $_SESSION['temp']=$user;
	$query="select id,pwd from admin where id='$user' and pwd='$pwd'";
	$count=mysql_query($query,$con);
	if(mysql_num_rows($count)==1)
	{
	header('Location:input.php');
	}
	else
	{
	echo "<h2>Wrong username or password</h2>";
	}
	}
}
?>
<html>
<head>
<title>Schedule</title>
<style type="text/css">
body{
background-color:rgba(121, 222, 241, 1);
font-family:aldrich;

}
a{
color:white;
}
</style>
</head>
<body>
<span style="font-family:fusion;font-size:40px"><center>ISAAC 2013</center></span>
<hr />
<div style="margin:0px auto;width:330px;height:100px;padding: 5px 0px;text-align: center;border: 1px solid #9C9C9C;border-radius: 10px;">
<div style="margin:0px auto;">
Login:
<form action="index.php" method="post">
Enter user name:<input type="text" maxlength="6" name="buser"/><br/>
Enter Password:<input type="password" maxlength="10" name="bpwd"/><br/>
<input type="submit" name="submit"/>
</form>
</div>
</div>
</body>
</html>
</body>
</html>