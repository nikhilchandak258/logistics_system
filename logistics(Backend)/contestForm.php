



	<!--<form method="POST">-->
	Sheet Code :<input type="text" name="sheet" value="<?php echo htmlspecialchars($_POST['sheet']);?>"/>&nbsp &nbsp &nbsp &nbsp &nbsp<br/><br/>
	&nbsp Reg Id :<input type="text" name="reg" value="<?php echo htmlspecialchars($_POST['reg']);?>"/> &nbsp &nbsp
	College :
	<!--<select name="col" value="<?php echo $_POST['col'];?>">
	<option value="-1"></option>
	<option value="TSEC">TSEC</option>
	<option value="A.C.Patil">A.C Patil</option>
	<option value="Abhinav Institute of Technology and management">Abhinav Institute of Technology and management</option>
	<option value="Atharva College of Engineering">Atharva College of Engineering</option>
	<option value="Bharati Vidyapeeth University - College of Engineering">Bharati Vidyapeeth University - College of Engineering</option>
	<option value="Bharatiya VIDHYAPEETH College Of Engineering">Bharatiya VIDHYAPEETH College Of Engineering</option>
	<option value="Bhavan SPDN College">Bhavan SPDN College</option>
	<option value="College of Engineering Pune (COEP)">College of Engineering Pune (COEP)</option>
	<option value="D.G. Ruparel College">D.G. Ruparel College</option>
	<option value="D.J Sanghvi College of Engineering">D.J Sanghvi College of Engineering</option>
	<option value="Datta Meghe">Datta Meghe</option>
	<option value="Department of Biotechnology, University of Mumbai">Department of Biotechnology, University of Mumbai  </option>
	<option value="Don Bosco">Don Bosco</option>
	<option value="Dr. Dy Patil">Dr. Dy Patil</option>
	<option value="DY Patil University">DY Patil University</option>
	<option value="Fr. Agnel Vashi">Fr. Agnel Vashi</option>
	<option value="Fr. Conceicao Rodrigues College of Engineering (Bandra)">Fr. Conceicao Rodrigues College of Engineering (Bandra)</option>
	<option value="Government Polytechnic">Government Polytechnic</option>
	<option value="ICT">ICT</option>
	<option value="IIT Bombay">IIT Bombay</option>
	<option value="Institute of Mechanical Engineers">Institute of Mechanical Engineers</option>
	<option value="K.J.Somaiya Vidhyavihar">K.J.Somaiya Vidhyavihar</option>
	<option value="K.J.Somaiya Sion">K.J.Somaiya Sion</option>
	<option value="LR Tiwari">LR Tiwari</option>
	<option value="Maharashtra Institute of Technology (MIT)">Maharashtra Institute of Technology (MIT)</option>
	<option value="Mahatma Gandhi Mission's College of Engineering and Technology">Mahatma Gandhi Mission's College of Engineering and Technology</option>
	<option value="Mithibai College of Arts, Chauhan Institute of Science & Amrutben Jivanlal College of Commerce & Eco">Mithibai College of Arts, Chauhan Institute of Science & Amrutben Jivanlal College of Commerce & Eco</option>
	<option value="Mukesh Patel School of Technology, Management and Engineering">Mukesh Patel School of Technology, Management and Engineering</option>
	<option value="Pillai's Institute Of IT, Engineering and Research">Pillai's Institute Of IT, Engineering and Research</option>
	<option value="R.D. National College & W. A. Science College">R.D. National College & W. A. Science College</option>
	<option value="RAIT">RAIT</option>
	<option value="Rajiv Gandhi College of Engineering">Rajiv Gandhi College of Engineering</option>
	<option value="Ramnarain Ruia College">Ramnarain Ruia College</option
	<option value="Rizvi College of Engineering">Rizvi College of Engineering</option>
	<option value="Royal College">Royal College</option>
	<option value="Ruia College of Engineering">Ruia College of Engineering</option>
	<option value="Ryan College Of Engineering & Management">Ryan College Of Engineering & Management</option>
	<option value="S.K. Somaiya College of Arts, Science & Commerce">S.K. Somaiya College of Arts, Science & Commerce</option>
	<option value="Saboo Sidik">Saboo Sidik</option>
	<option value="Sardar Patel Institute of Technology">Sardar Patel Institute of Technology</option>
	<option value="Sathaye College">Sathaye College</option>
	<option value="Shah and Anchor">Shah and Anchor</option>
	<option value="Shri Bhagubhai Mafatlal Polytechnic">Shri Bhagubhai Mafatlal Polytechnic  </option>
	<option value="SIES">SIES</option>
	<option value="Usha Pravin Gandhi college">Usha Pravin Gandhi college </option>
	<option value="St. Francis Institute of Technology">St. Francis Institute of Technology</option>
	<option value="Swami Vivekanand">Swami Vivekanand</option>
	<option value="Symbiosis Institude of Technology(SIT)">Symbiosis Institude of Technology(SIT)</option>
	<option value="Thakur College of Engineering">Thakur College of Engineering</option>
	<option value="Usha Mittal Institute of technology(SNDT)">Usha Mittal Institute of technology(SNDT)</option>
	<option value="Vidhyalankar">Vidhyalankar</option>
	<option value="Vidhyaviharini College">Vidhyaviharini College</option>
	<option value="VJTI">VJTI</option>
	<option value="Watumall">Watumall</option>
	<option value="Xavier Institute of Technology">Xavier Institute of Technology</option>
	<option value="Vasantdata Patil">Vasantdata Patil</option>
	<option value="Misc.">Misc.</option>
	<option value="Terna">Terna</option>
	<option value="Mumbai University Kalina">Mumbai University Kalina</option>
	<option value="KC THANE">KC THANE</option>
	<option value="IT ULHASNAGAR">IT ULHASNAGAR</option>
	<option value="CHM ULHASNAGAR">CHM ULHASNAGAR</option>
	<option value="KC College">KC College Churchgate</option>
	<option value="Jai Hind ChurchGate ">Jai Hind Churchgate</option>
	<option value="Wilson Girgaum">Wilson Girgaum</option>
	<option value="Lokmanya Tilak">Lokmanya Tilak</option>
	<option value="Rizvi Bandra">Rizvi Bandra</option>
		
	</select>-->
	
	<!--for making a dynamic php college list-->
	<select name="col">
	<?php 
	$con=mysql_connect("localhost","root","");
	if (mysql_errno())
	  {
	  echo "Failed to connect to MySQL: " . mysql_error();
	  }
	$db = mysql_select_db("isaac", $con); 
	
	if(!$db)
	die("Database Selection Failed:".mysql_error());
	   
	$result = mysql_query("SELECT * FROM college ORDER BY name",$con) or die ("Couldn't execute query.");

	if($result==false)
		{
		echo '<div style="text-align: center;">Please Check your name</div>';
		}

	/*for autosuggest*/	
	 while($row = mysql_fetch_array($result))		/*for making a select list*/
		 {	?>
		<option value="<?php echo $row['name']?>"><?php echo $row['name']?></option>
		<?php }	?>
	</select>
	<!--end of dynamic college list-->
	
	<br/><br/>

	Amount :<input type="text" name="amt"value="<?php echo $_POST['amt'];?>"/>&nbsp &nbsp &nbsp &nbsp &nbsp
	Paid :<input type="text"name="paid" value="<?php echo $_POST['paid'];?>"/>&nbsp &nbsp &nbsp &nbsp &nbsp<br/>
	<br/>
	
	<h2>Participant 1</h2>
	First Name :<input type="text" name ="first_name1" value="<?php echo htmlspecialchars($_POST['first_name1']);?>"/>&nbsp &nbsp &nbsp &nbsp &nbsp
	Last Name :<input type="text" name ="last_name1"value="<?php  echo htmlspecialchars($_POST['last_name1']);?>"/>&nbsp &nbsp &nbsp &nbsp
	Contact Number :<input type="text" name="contact1" value="<?php echo $_POST['contact1'];?>"/> &nbsp  &nbsp &nbsp
	Email :<input type="text" name="email1" size="60"value="<?php echo htmlspecialchars($_POST['email1']);?>"/>&nbsp &nbsp &nbsp &nbsp &nbsp
	<br/>
	
	<h2>Participant 2</h2>
	First Name :<input type="text" name ="first_name2" value="<?php echo htmlspecialchars($_POST['first_name2']);?>"/>&nbsp &nbsp &nbsp &nbsp &nbsp
	Last Name :<input type="text" name ="last_name2"value="<?php  echo htmlspecialchars($_POST['last_name2']);?>"/>&nbsp &nbsp &nbsp &nbsp
	Contact Number :<input type="text" name="contact2" value="<?php echo $_POST['contact2'];?>"/> &nbsp &nbsp &nbsp
	Email :<input type="text" name="email2" size="60" value="<?php echo htmlspecialchars($_POST['email2']);?>"/>&nbsp &nbsp &nbsp &nbsp &nbsp
	<br/>
	
	<h2>Participant 3</h2>
	First Name :<input type="text" name ="first_name3" value="<?php echo htmlspecialchars($_POST['first_name3']);?>"/>&nbsp &nbsp &nbsp &nbsp &nbsp
	Last Name :<input type="text" name ="last_name3"value="<?php  echo htmlspecialchars($_POST['last_name3']);?>"/>&nbsp &nbsp &nbsp &nbsp
	Contact Number :<input type="text" name="contact3" value="<?php echo $_POST['contact3'];?>"/>&nbsp &nbsp &nbsp
	Email :<input type="text" name="email3" size="60"value="<?php echo htmlspecialchars($_POST['email3']);?>"/>&nbsp &nbsp &nbsp &nbsp &nbsp
	<br/>
	
	<h2>Participant 4</h2>
	First Name :<input type="text" name ="first_name4" value="<?php echo htmlspecialchars($_POST['first_name4']);?>"/>&nbsp &nbsp &nbsp &nbsp &nbsp
	Last Name :<input type="text" name ="last_name4"value="<?php  echo htmlspecialchars($_POST['last_name4']);?>"/>&nbsp &nbsp &nbsp &nbsp
	Contact Number :<input type="text" name="contact4" value="<?php echo $_POST['contact4'];?>"/> &nbsp &nbsp &nbsp
	Email :<input type="text" name="email4" size="60" value="<?php echo htmlspecialchars($_POST['email4']);?>"/>&nbsp &nbsp &nbsp &nbsp &nbsp
	<br/>	
	<h2>Contest</h2>
	<?php 
	$result =mysql_query("SELECT*FROM contestdata");
	if(!$result)
	echo("Rsult Failed".mysql_error());
	 while($row=mysql_fetch_array($result))
		{
		//echo $row[id]." ".$row[contest]."<br/>";
						
		echo "<input type=\"checkbox\"  value=\"$row[id]\" name=\"contest[]\">".$row['contest']."<br/>";
		}
	?>	
	
<!--	</form>
	-->
