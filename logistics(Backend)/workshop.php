<?php
    include 'connect.php';
	include 'loggedin.php';
	?>
	
	<html>
    <head>
	<title>Logistics</title>
    </head>
    <body id="bmain">
    <h4 style="margin:0"><center><font size="6" color="" face="Ariel"><div class="name">Workshop Details</div></font></center></h4><br>
       
	<form method="post">
	<?php include 'submitworkshop.php';
//this where the values are added to the database
?>
	<?php
	     include 'common.php';
		 //common form
    ?>
	
<label><span></span><input type="text" style="visibility: collapse"></label>

<label style="width: 54%;float: none;">Robotics Workshop:</label>

      <label style="width: 42%;">Accelerduino</label><input type='checkbox' name="accelerduino" value='accelerduino' />
      <label style="width: 42%;">Androidbotics</label><input type='checkbox' name="androidbotics" value='androidbotics ' />
      <label style="width: 42%;">Eyediots</label><input type='checkbox' name="eyediots" value='eyediots' />
    <center><input type="submit" value="submit" name="submit" id="sub" style="margin: 0 auto;float: none;font-size: 18px;bottom: 0px;position: relative;left: -310px;bottom: -100px;"/></center>

	</form>
	 </div>
	 
	 </body>
</html>
    <?php
    mysqli_close($con);
    ?>

