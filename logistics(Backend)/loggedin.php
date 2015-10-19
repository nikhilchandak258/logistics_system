<?php session_start(); ?>
<?php
if(!isset($_SESSION['buser']))
header('Location:index.php');
//echo $_SESSION['buser']."THIS is the restricted page";
//echo "<a href=\"logout.php\"> <br/>LOGout</a>";
echo "<center>Welcome ".strtoupper($_SESSION['buser']).",<br/> Select the data that you want to enter </br></center><hr/>";
echo "<ul class=\"isaac_links\"><a href=\"workshop.php\" ><li> Add Workshop Details</li></a> &nbsp &nbsp <a href=\"conference.php\"><li> Add Conference Details</li></a> &nbsp &nbsp 
<a href=\"contest.php\"><li> Add Contest Details</li></a> &nbsp &nbsp <a href=\"dis.php\"><li> Display Single Record</li></a> &nbsp &nbsp<a href=\"dispSheetcode.php\"><li> Display Entire Sheet</li></a> &nbsp &nbsp<a href=\"update.php\"><li>Update</li></a>&nbsp &nbsp <a href=\"delete.php\"><li>Delete an entry</li></a>&nbsp &nbsp <a href=\"logout.php\"><li> Logout</li></a></ul><hr/>"
?>

<!--link rel="stylesheet" href="heading.css"-->
