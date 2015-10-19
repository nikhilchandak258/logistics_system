<?php
    include 'connect.php';
	?>
	
	<html>
    <head>
	<title>Logistics</title>
    </head>
    <body id="bmain">
    <h4><center><font size="6" color="" face="Ariel"><div class="name">Workshop Details</div></font></center></h4><br>
       
	<form method="post">
	<?php include 'submitContest2.php';
//this where the values are added to the database?>

<?php include'contestForm.php'; //the form is included in this file
?>

<br/>
<input type="submit" value="submit" name="submit" />

	</form>
	
	
	
</body>
</html>
<?php
    mysqli_close($con);
    ?>
