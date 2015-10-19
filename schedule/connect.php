<?php $con=mysql_connect("localhost","user_name","password");
if (mysql_errno())
  {
  echo "Failed to connect to MySQL: " . mysql_error();
  }
    $db_selected = mysql_select_db("database_name",$con); 
	if(!$db_selected)
	die("Database Selection Failed:".mysql_error());
?>