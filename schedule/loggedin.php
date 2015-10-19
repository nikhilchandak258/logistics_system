<?php
session_start();
if(!isset($_SESSION['fname']))
header('Location:index.php');
echo "<center>Welcome ".strtoupper($_SESSION['fname'])." ".strtoupper($_SESSION['lname']).",</br></center>";
echo "<a href=\"display.php\" style='text-decoration: none;float: left;border: 1px solid black;padding: 0.5em;border-radius: 13px;color: black;box-shadow: inset 0 0 10px 0px;'>My Bookings</a>";
echo "<a href=\"logout.php\" style='text-decoration: none;float: right;border: 1px solid black;padding: 0.5em;border-radius: 13px;color: black;box-shadow: inset 0 0 10px 0px;'>Logout</a>";
?>
