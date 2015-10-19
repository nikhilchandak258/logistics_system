<?php
    include 'connect.php';
	include 'loggedin.php';
	?>

<html>
    <head>
	<title>Conferences</title>
    </head>
    <body id="bmain">
    <h4><center><font size="6" color="" face="Ariel"><div class="name">Conference Details</div></font></center></h4><br>
       
	<form method="post">
	<?php include 'submitConference.php';
//this where the values are added to the database
?>
	<?php
	     include 'common.php';
		 //common form
    ?>

<label><span></span><input type="text" style="visibility: collapse"></label>

<label style="width: 54%;float: none;">Conference:</label>

<label style="width: 42%;">TCS</label><input type="checkbox" name="conf1" value="TCS"/>
<label style="width: 42%;">PCSS</label><input type="checkbox" name="conf2" value="APPLE"/>
<label style="width: 42%;">conf3</label><input type="checkbox" name="conf3" value="GOOGLE"/>
<center><center><input type="submit" value="submit" name="submit" id="sub" style="margin: 0 auto;float: none;font-size: 18px;bottom: 0px;position: relative;left: -290px;top:100px;"/></center>
</form>
	 </div>
	 
	 </body>
</html>
    <?php
    mysqli_close($con);
    ?>