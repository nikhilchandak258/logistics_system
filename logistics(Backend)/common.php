<style type="text/CSS">
body{
font-family:"Lucida Grande", "Lucida Sans Unicode", Verdana, Arial, Helvetica, sans-serif;
font-size:12px;
}
p, h1, form, button{border:0; margin:0; padding:0;}
.spacer{clear:both; height:1px;}
/* ----------- My Form ----------- */
.myform{
margin:0 auto;
width:768px;
padding:14px;
height:675px;
}

/* ----------- stylized ----------- */
#stylized{
border:solid 2px #b7ddf2;
background:#ebf4fb;
}
#stylized h1 {
font-size:14px;
font-weight:bold;
margin-bottom:8px;
}
#stylized p{
font-size:11px;
color:#666666;
margin-bottom:20px;
border-bottom:solid 1px #b7ddf2;
padding-bottom:10px;
}
#stylized label{
display:block;
font-weight:bold;
text-align:right;
width:140px;
float:left;
}
#stylized .small{
color:#666666;
display:block;
font-size:11px;
font-weight:normal;
text-align:right;
width:140px;
}
#stylized input{
float:left;
font-size:12px;
padding:4px 2px;
border:solid 1px #aacfe4;
width:200px;
margin:2px 0 20px 10px;
}
#sub{
clear:both;
margin-left:150px;
width:125px;
height:31px;
background:#666666 url(img/button.png) no-repeat;
text-align:center;

color:#FFFFFF;
font-size:11px;
font-weight:bold;
}
.name{
    text-shadow: 0px 2px 3px #D4D4D4;
}

#contest{
line-height:5px;

}
#contest input{
float:none;
font-size:12px;
padding:4px 2px;
border:solid 1px #aacfe4;
width:15px;
margin:5px;

}
        </style>
      
	
        <div id="stylized" class="myform">
<form id="form" name="form" method="get" action="idisp">
<center><h1>Give your info here</h1>
<p>Please carefully fill the form with appropriate data in respective fields.</p>
</center>
<label>Sheet Code
<span class="small"></span>
</label>
<input type="text" name="sheetid" maxlength="7" value="<?php echo $_POST['sheetid'];?>" />

<label>Barcode Id
<span class="small">Add your barcode id</span>
</label>
<input type="text" maxlength="6" name="bid" value="<?php echo $_POST['bid'];?>"/>

<label>First Name
<span class="small">Add your first name</span>
</label>
<input type="text" name="fname" value="<?php echo htmlspecialchars($_POST['fname']);?>"/>

<label>Last Name
<span class="small">Add your Last Name</span>
</label>
<input type="text" name="lname" value="<?php echo htmlspecialchars($_POST['lname']);?>"/>

<label>Email Id
<span class="small">Enter your valid Email id</span>
</label>
<input type="text" name="mail" value="<?php echo htmlspecialchars($_POST['mail']);?>"/>

<label>Mobile Number
<span class="small">Enter your 10 digit mobile no.</span>
</label>
<input type="text" name="numb" maxlength="10" value="<?php echo $_POST['contact'];?>"/>

<label>College
<span class="small">Enter your college details</span>
</label>
<input list="clg" name="clg"/>
  <datalist id="clg">
  <?php include'connect.php';
  //connection to database php
 
  $result = mysqli_query($con,"SELECT clg_name from college");

  
  
 if($result==false)
	{
	echo '<div style="text-align: center;">error</div>';
	}

/*for autosuggest*/	
 while($row = mysqli_fetch_array($result))
	 {	
	 //echo "hello";
	 ?>
	<option value="<?php echo $row['clg_name']?>"></option>
	<?php }	?>

   </datalist>
   

<label>Amount
<span class="small"></span>
</label>
<input type="text" name="amt" value="<?php echo $_POST['amt'];?>"/>

<label>Paid
<span class="small"></span>
</label>
<input type="text" name="paid" value="<?php echo $_POST['paid'];?>"/>



 

