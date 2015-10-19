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
    

	   //Automatic slot generator
	   if($reg[2]=="2" || $reg[2]=="3" || $reg[2]=="4")
	   {
	   $slot = "3";
	   $case1= "1";
	  
	   }
	   if($reg[2]=="6" || $reg[2]=="7" || $reg[2]=="8")
           {
	   $slot = "6";
	   $case1= "1";
	   }
	   
	   //date generation
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
    $sql="INSERT INTO workshop (sheetid, bid,date,first_name,last_name, email, cnt_number, clg, slot, amount, paid,accelerduino,androidbotics,eyediots)
    VALUES
    ('$sheet','$reg','$date1','$first_name',
'$last_name','$email','$contact','$college','0','$amt','$paid','','','')";
mysqli_query($con,$sql);

	echo "<h2 style=\"color:green;\">Data Submitted</h2>";


//wkshpslot table	
if($amt==4100 || $amt==4180 || $amt==180 || $amt==100 )
{
$sql1="INSERT INTO login (bid,first_name,last_name,cnt_number,clg, slot,amount)
VALUES
('$reg','$first_name',
'$last_name','$contact','$college','$slot','$amt')";

mysqli_query($con,$sql1);


			
//mainlogin table



										
					


$result = "UPDATE workshop SET slot='$slot'
						WHERE bid='$reg' ";
mysqli_query($con,$result);
}

$sql2="INSERT INTO mainlogin (bid ,cnt_number ,amount ,paid ,date)
VALUES
('$reg','$contact','$amt','$paid',NOW())";

mysqli_query($con,$sql2);

if($paid>400) 
{ 
$r1=$_POST['accelerduino'];
$r2=$_POST['androidbotics'];
$r3=$_POST['eyediots'];





$r= "UPDATE workshop
SET accelerduino='$r1', androidbotics='$r2',eyediots='$r3'
WHERE bid='$reg'";
mysqli_query($con,$r);
}

	header("Location:Workshop.php");
			exit();
			
	}

	
}	
	?>

