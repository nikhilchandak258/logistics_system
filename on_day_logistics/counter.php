<?php
include 'connect.php';

ini_set('dislay errors',0);
error_reporting(~E_ALL);
echo "<style type=\"text/css\">
body{
color: #000000;
background:url(gradient_texture.png);
font-size:14.5px;

font-family:Verdana;

}
</style>";

	
	echo"<form method=\"POST\"></br>";

echo "<select name=\"workshop\">WORKSHOP";			
echo "<option value=\"-1\"></option>";
$chkResult=mysql_query("SELECT wkshp_name FROM workshopname ",$con);

	$idResult=mysql_query("SELECT wkshpid FROM workshopname ",$con);
$y=1;
	while($ck=mysql_fetch_array($chkResult))

	for($i=0;$i<sizeof($ck);$i++)
					{	
						if($i==0){
								if(($y>23 && $y<37) || $y==39)
							echo "<option value  ='$y' >".$y .":".$ck[$i] ."</option>";					
								$y++;	
							
								}
					}
										

								
					echo "</select><input type=\"submit\" value=\"submit\" name=\"wkshop\">";
					
					
					echo"</form></br>";
	$value=$_POST['workshop'];							
//								echo $y;
//				echo $y."aa<br/>";
	if(isset($value)){
	
//	echo $value;
			$count = mysql_query("SELECT count(bid) FROM workshop2013 WHERE wkshpid='$value' and chk='1'",$con);
								while($ct=mysql_fetch_array($count))
								echo $ct[0];
			}

		echo "<form method=\"POST\">";
		echo "<input type=\"submit\" name=\"PCSS\" value=\"PCSS\">";
		echo "<input type=\"submit\" name=\"TCS\" value=\"TCS\">";
		echo "<input type=\"submit\" name=\"PHILIPS\" value=\"PHILIPS\">";
		//echo "<input type=\"submit\" name=\"oracle\" value=\"oracle\">";
		echo "</form>";
		
	if(isset($_POST['PCSS']))
	{
			$conf1=mysql_query("SELECT count(distinct bid) FROM conference where cf2='1' ",$con);
			$c1=mysql_fetch_array($conf1);
			echo "PCSS  -".$c1[0]."<br/>";
	}

	if(isset($_POST['TCS']))
	{
			$conf2=mysql_query("SELECT count(distinct bid) FROM conference where cf1='1' ",$con);
			$c2=mysql_fetch_array($conf2);
			echo "TCS  -".$c2[0]."<br/>";
	}
	
	if(isset($_POST['PHILIPS']))
	{
			$conf3=mysql_query("SELECT count(distinct bid) FROM conference where cf3='1' ",$con);
			$c3=mysql_fetch_array($conf3);
			echo "PHILIPS  -".$c3[0]."<br/>";
	}
		/*if(isset($_POST['oracle']))
	{
			$conf2=mysql_query("SELECT count(distinct Reg) FROM conference2012 where Conf3Chk='1' ",$con);
			$c2=mysql_fetch_array($conf2);
			echo "Oracle -".$c2[0]."<br/>";
	}	*/			
	


echo "<a href=\"input.php\">BACK</a>";
	?>