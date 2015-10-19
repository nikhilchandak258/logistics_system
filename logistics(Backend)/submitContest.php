<?php
	
	if(isset($_POST['submit'])||isset($_POST['sheetid'])||isset($_POST['bid'])||isset($_POST['fname'])||isset($_POST['lname'])||isset($_POST['amt'])||isset($_POST['clg'])||isset($_POST['paid'])||isset($_POST['mail']))
    {	
	$sheet=$_POST['sheetid'];
	
	$reg =$_POST['bid'];
	$first_name =$_POST['fname'];
	$last_name =$_POST['lname'];
	$contact =$_POST['numb'];
	$amt=$_POST['amt'];
	$paid=$_POST['paid'];
	$college=$_POST['clg'];
	$email =$_POST['mail'];
	  $part_name =$_POST['fname1'] ." ". $_POST['lname1'] .",". $_POST['fname2'] ." ". $_POST['lname2'] .",". $_POST['fname3'] ." ". $_POST['lname3'];
$contest=$_POST['contest'];
    
	$date1= "";
	   $day = $sheet[4];
	   $day1 = $sheet[5];
	   $month = $sheet[6];
	   $date1 .=$day;
	   $date1 .=$day1;
	   $date1 .="/";
	   $date1 .=$month;
	   $date1 .="/2013";
	
	
		
		if($_POST['sheetid']=="") 
        {
			$errorMessage .= "<li style=\"color:red;\">You forgot to enter sheet code!</li>";
		}
		if($_POST['fname']=="") 
        {
			$errorMessage .= "<li style=\"color:red;\">You forgot to enter  first name!</li>";
		}
		if(empty($_POST['lname'])) 
        {
			$errorMessage .= "<li style=\"color:red;\">You are forget to enter the  last name!</li>";
		}
		if(empty($_POST['numb'])) 
        {
			$errorMessage .= "<li style=\"color:red;\">You forgot to enter contact Number!</li>";
		}
		if(empty($_POST['mail'])) 
        {
			$errorMessage .= "<li style=\"color:red;\">You forgot to enter  email!</li>";
		}
		if(empty($_POST['amt'])) 
        {
			$errorMessage .= "<li style=\"color:red;\">You forget to enter the amount!</li>";
		}
		if(!is_numeric($_POST['numb']))
		{
			$errorMessage .="<li style=\"color:red;\">Please enter numeric data in contact!</li>";
		}
		if(strlen($_POST['numb'])!=10)
		{
		$errorMessage .="<li style=\"color:red;\">Number of digits in contact number incorrect!</li>";
		}
		
		if(!is_numeric($_POST['amt']))
		{
			$errorMessage .="<li style=\"color:red;\">Please enter numeric data in amount!</li>";
		}
		if(!is_numeric($_POST['paid']))
		{
			$errorMessage .="<li style=\"color:red;\">Please enter numeric data in paid!</li>";
		}
		

			//email validation
	    if (!filter_var($email, FILTER_VALIDATE_EMAIL))
		{
		$errno++;
			$errorMessage .="<li style=\"color:red;\">Please enter a valid email id!</li>";
		} 
	
		
	if(empty($_POST['paid'])) 
        {
			$errorMessage .= "<li style=\"color:red;\">You forgot to enter the amount paid!</li>";
		}
		if(empty($_POST['bid'])) 
        {
			$errorMessage .= "<li style=\"color:red;\">You forget to enter the registration id!</li>";
		}
		if(empty($_POST['clg'])) 
        {
			$errorMessage .= "<li style=\"color:red;\">You forget to enter the college name!</li>";
		}
         
		 
	

	
	
	//this will tell me the no of contestant in a team

	
	//contest limiter
	$cost=$_POST['amt'];
	$base_amt=30;
	$count=0;
	while($cost!=0)
	{
	$count++;
	$cost=$cost/$base_amt;
	}
	//end limiter
	
	echo $errorMessage;
	
	
	if(empty($errorMessage))
		{
		//alert(sizeof($contest));
		for($i=0;$i<sizeof($contest);$i++)
		{
			//echo $contest[$i];
			$query1="INSERT INTO contest
								(sheetid,bid,contestid)
								VALUES('$sheet','$reg','$contest[$i]')";
			$result = mysqli_query($con,$query1);
		}	
		
	
	
		
			$query="INSERT INTO contestentry
							(sheetid,bid,date,first_name,last_name,cnt_number,email,clg,amount,paid,participants)
							VALUES('$sheet','$reg','$date1','$first_name','$last_name','$contact','$email','$college','$amt','$paid','$part_name')";
			$entry =mysqli_query($con,$query);
		
							
							
			echo "<h2 style=\"color:green;\">Data Submitted</h2>";
$sql2="INSERT INTO mainlogin (bid ,cnt_number ,amount ,paid ,date)
VALUES
('$reg','$contact','$amt','$paid',NOW())";

mysqli_query($con,$sql2);	
						
		header("Location:contest.php");
			exit();
	
	
		}
}
?>

