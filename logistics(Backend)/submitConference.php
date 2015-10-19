	<?php




	//Validatros COmmand
	if(isset($_POST['submit'])) 
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
    
	$date1= "";
	   $day = $sheet[4];
	   $day1 = $sheet[5];
	   $month = $sheet[6];
	   $date1 .=$day;
	   $date1 .=$day1;
	   $date1 .="/";
	   $date1 .=$month;
	   $date1 .="/2013";
	
	
$errorMessage = "";
		$errno=0;
		if($_POST['sheetid']=="") 
        {
			$errorMessage .= "<li style=\"color:red;\">You forgot to enter SHEET CODE!</li>";
		$errno++;
		}
		if($_POST['fname']=="") 
        {$errno++;
			$errorMessage .= "<li style=\"color:red;\">You forgot to enter FIRST NAME!</li>";
		}
		if(empty($_POST['lname'])) 
        {$errno++;
			$errorMessage .= "<li style=\"color:red;\">You are forget to enter the LAST NAME!</li>";
		}
		if(empty($_POST['numb'])) 
        {$errno++;
			$errorMessage .= "<li style=\"color:red;\">You forgot to enter CONTACT Nnumber!</li>";
		}
		if(empty($_POST['mail'])) 
        {$errno++;
			$errorMessage .= "<li style=\"color:red;\">You forgot to enter  Email!</li>";
		}
		if(empty($_POST['amt'])) 
        {$errno++;
			$errorMessage .= "<li style=\"color:red;\">You forget to enter the AMOUNT!</li>";
		}
		if(!is_numeric($_POST['numb']))
		{$errno++;
			$errorMessage .="<li style=\"color:red;\">Please enter NUMERIC data in contact!</li>";
		}
		if(strlen($_POST['numb'])!=10)
		{$errno++;
		$errorMessage .="<li style=\"color:red;\">Contact number should br of 10 digits!</li>";
		}
		
		if(!is_numeric($_POST['amt']))
		{$errno++;
			$errorMessage .="<li style=\"color:red;\">Please enter NUMERIC data in amount!</li>";
		}
		if(!is_numeric($_POST['paid']))
		{$errno++;
			$errorMessage .="<li style=\"color:red;\">Please enter NUMERIC data in paid!</li>";
		}
		
      //email validation
	    if (!filter_var($email, FILTER_VALIDATE_EMAIL))
		{
		$errno++;
			$errorMessage .="<li style=\"color:red;\">Please enter a valid email id!</li>";
		}
		
		
		
	if(empty($_POST['paid'])) 
        {$errno++;
			$errorMessage .= "<li style=\"color:red;\">You forgot to enter the amount paid!</li>";
		}
//		if($_POST['slots']=="-1") 
  //      {$errno++;
	//		$errorMessage .= "<li style=\"color:red;\">You forgot to enter  the slots!</li>";
	//	}
		if(empty($_POST['bid'])) 
        {$errno++;
			$errorMessage .= "<li style=\"color:red;\">You forget to enter the REGISTRATION id!</li>";
		}
		if(empty($_POST['clg'])) 
        {$errno++;
			$errorMessage .= "<li style=\"color:red;\">You forget to SELECT the college name!</li>";
		}
	if($errno!=0)
{	echo $errorMessage;
}
	else {
     include 'connect.php';
	//old code
	
	$sql="INSERT INTO conference(sheetid, bid,date,first_name,last_name, email, cnt_number, clg, amount, paid,conference1,conference2,conference3) 
										VALUES('$sheet','$reg','$date1','$first_name',
'$last_name','$email','$contact','$college','$amt','$paid','','','')";
mysqli_query($con,$sql);

	echo "<h2 style=\"color:green;\">Data Submitted</h2>";
			
			
			$sql2="INSERT INTO mainlogin (bid ,cnt_number ,amount ,paid ,date)
VALUES
('$reg','$contact','$amt','$paid',NOW())";

mysqli_query($con,$sql2);
$conf1=$_POST['conf1'];
$conf2=$_POST['conf2'];
$conf3=$_POST['conf3'];


$sql1="UPDATE conference
SET conference1='$conf1', conference2='$conf2' ,conference3='$conf3'
WHERE bid='$reg' ";

if (!mysqli_query($con,$sql1))
  {
  die('Error: ' . mysqli_error($con));
  }

			
							
header("Location:conference.php");
			exit();
			
	}
	
	
		}	
	?>
