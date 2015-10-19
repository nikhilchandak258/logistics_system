<?php
	if($reg[0]=='n' && $reg[1]=='k')
	$type="workshop";
	if($reg[0]=='n' && $reg[1]=='n')
	$type="contestentry";	
	if($reg[0]=='k' && $reg[1]=='n')
	$type="conference";

	$result=mysql_query("select * from $type where bid='$reg'",$con) or die(mysql_error()); ;
	while($row=mysql_fetch_array($result))
    {
    echo "<h3 style=\"color:green;\">Table</h3><br/>";

			echo "<table style=\"cellpadding=\"10\" border=\"2\"\">";

			echo "<tr >";

			for($i=2;$i<mysql_num_fields($result);$i++)

			echo "<td style=\"width:400;\">".mysql_field_name($result, $i)."<hr/>".$row[$i];echo"<td/></br>";
			echo "</tr></table>";

    }	
	
	if($type=="workshop")
	{
			echo "<form  method=\"post\">";
echo "<select name=\"workshop\">WORKSHOP";			
				echo "<option value=\"-1\"></option>";
					
			$wkshop=mysql_query("SELECT wkshpid FROM workshop2013 WHERE bid='$reg' ",$con);
			while($wkshopResult=mysql_fetch_array($wkshop))
			for($i=0;$i<sizeof($wkshopResult);$i++){
			echo $wkshopResult[$i];
					echo "<br/>";
						
	$wkname =mysql_query("SELECT wkshp_name FROM workshopname WHERE wkshpid='$wkshopResult[$i]'",$con);
	$wkday =mysql_query("SELECT day FROM workshopname WHERE wkshpid='$wkshopResult[$i]'",$con);
				
			/*while($wkshopName=mysql_fetch_array($wkname)){
             $chkResult=mysql_query("SELECT chk FROM workshop2013 WHERE bid='$reg'and wkshpid='$wkshopResult[$i]'",$con);
			$ck=mysql_fetch_array($chkResult); 
			if($ck[0]=='1')		
			echo $wkshopName[$i]." CHECK IN";			
             }*/		
		
		while($wkshopName=mysql_fetch_array($wkname)){
		while($wkshopDay=mysql_fetch_array($wkday)){
					
	
	$chkResult=mysql_query("SELECT chk FROM workshop2013 WHERE bid='$reg'and wkshpid='$wkshopResult[$i]'",$con);
					$ck=mysql_fetch_array($chkResult);
					//echo $ck;
						
					if($ck[0]==NULL || $ck[0]=='0')		
					echo "<option value  =\"$wkshopResult[$i]\">".$wkshopName[$i].":".$wkshopDay[$i] ."</option>";					
						
					if($ck[0]=='1')		
					echo $wkshopName[$i]." CHECK IN";					
						}					
										}
										
									
			}		echo "</select><input type=\"submit\" value=\"submit\" name=\"wkshop\">";
					echo"</form></br>";

                        $checkedin=mysql_query("Select chk,wkshp_name,workshop2013.bid,workshop2013.wkshpid,day from workshop2013,workshopname where workshop2013.bid='$reg' AND (workshop2013.wkshpid=workshopname.wkshpid)",$con);
            while($row=mysql_fetch_array($checkedin))	
            {
			    if($row['chk']==1)
               echo "<br /><h4 style='color:green'>ID:".$reg." ".$row['wkshp_name']." Checked IN On "."Day".$row['day']."</h4>";
             }	

	//	$count++;}
	
	
				}
				
		if($type=="conference")
		{
		            $conference1=mysql_query("SELECT conference1 FROM conference  WHERE bid='$reg' ",$con);
					$conference2=mysql_query("SELECT conference2 FROM conference  WHERE bid='$reg' ",$con);
					$conference3=mysql_query("SELECT conference3 FROM conference  WHERE bid='$reg' ",$con);
					
					$confResult1=mysql_fetch_array($conference1);
					$confResult2=mysql_fetch_array($conference2);
					$confResult3=mysql_fetch_array($conference3);
					
							if($confResult1[0]=='TCS')
							{
							$chk=mysql_query("SELECT cf1 FROM conference WHERE bid='$reg' ",$con);
								$chkResult=mysql_fetch_array($chk);
//								echo $chkResult[0];
								if($chkResult[0]==NULL||$chkResult[0]=='0')
							echo "<form method=\"POST\"><input type=\"submit\" name=\"TCS\"value=\"TCS\"><br/></form>";
								
								if($chkResult[0]=='1')
								echo	"<br/><h2 style=\"color:green;\">TCS already checked in";
							
							}
							
							if($confResult2[0]=='APPLE')
							{
							$chk=mysql_query("SELECT cf2 FROM conference WHERE bid='$reg' ",$con);
								$chkResult=mysql_fetch_array($chk);
//								echo $chkResult[0];
							
							if($chkResult[0]==NULL||$chkResult[0]=='0')
							echo "<form method=\"POST\"><input type=\"submit\" name=\"APPLE\"value=\"PCSS\"><br/></form>";		
							if($chkResult[0]=='1')
							echo	"<br/><h2 style=\"color:green;\">PCSS already checked in";
								
							}
							
							if($confResult3[0]=='GOOGLE')
							{
							$chk=mysql_query("SELECT cf3 FROM conference WHERE bid='$reg' ",$con);
								$chkResult=mysql_fetch_array($chk);
//								echo $chkResult[0];
							if($chkResult[0]==NULL||$chkResult[0]=='0')
							echo "<form method=\"POST\"><input type=\"submit\" name=\"GOOGLE\"value=\"PHILIPS\"><br/></form>";
							if($chkResult[0]=='1')
							echo "<br/><h2 style=\"color:green;\">PHILIPS already checked in";
							
							}
		}
		
		if($type=="contestentry")
		{
			$contest=mysql_query("SELECT contestid FROM contest WHERE bid='$reg'",$con);
							echo "<form method=\"post\">";
							
							while($contestck=mysql_fetch_array($contest)){
							for($i=0;$i<sizeof($contestck);$i++){
							//echo $contestck[$i]."<br/>";
							$name=mysql_query("SELECT contest FROM contestdata WHERE id='$contestck[$i]'",$con);
							while($contname=mysql_fetch_array($name))
							echo $contname[0];
									if($i==0){
	$chk=mysql_query("SELECT ck FROM contest WHERE bid='$reg' and contestid='$contestck[$i]'",$con);
		$check=mysql_fetch_array($chk);
		if($check[$i]=='0'||$check[0]==NULL)
	echo "<input type=\"checkbox\" name=\"cont[]\" value=\"$contestck[$i]\">".$contname[0]."<br/>"; 
		if($check[$i]=='1')
				echo $contname[0]." Checked in<br/>";
												}
														}
												
																		}
	echo "<input type=\"submit\" name=\"contestSubmit\" value=\"submit\">";
												echo "</form>";
					
		
		}
						
		
		
		
		
		
		    
	

?>