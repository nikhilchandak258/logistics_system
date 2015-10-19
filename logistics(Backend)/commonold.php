<?php
//Common form
 ?>
 <table>
 <tr>
 <td>
 Sheet Code:</td>
 <td><input type="text" name="sheetid" maxlength="6" />
  </td>
  <tr>
  <td>
  Barcode Id:</td><td><input type="text" maxlength="6" name="bid"/>
  </td>
  </tr>
  </tr>
    <td>
    First Name:</td><td><input type="text" name="fname" />
	Last Name:</td><td><input type="text" name="lname" />
    </td>
  </tr>
  <tr>
    <td>
    Email id:</td>
    <td><input type="text" name="mail" />
    </td>
  </tr>
  <tr>
    <td>Mobile Number:</td>
	<td><input type="text" name="numb" maxlength="10"/>
    </td>
  </tr>
  <tr>
  <td>College:</td><td><input list="clg" name="clg"/>
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
	 echo "hello";
	 ?>
	<option value="<?php echo $row['clg_name']?>"></option>
	<?php }	?>

   </datalist>
   </td>

    
	<tr>
    <td>
    Amount:</td><td><input type="text" name="amt"/>
	
	
	Paid:</td>
	<td><input type="text" name="paid"/>
	</td>
	</tr>
	</table>