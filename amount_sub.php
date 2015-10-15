<?php
require_once ('phplib/populator.php');
initdb();
session_start();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>::::::::::::   Welcome to Collectorate Public School &amp; Collage maintenance system  :::::::::::</title>
<link rel = "stylesheet" type = "text/css" href = "styler.css" />
</head>

<body background="imgs/backimg.jpg">
<center>
<table width="780" border="0" cellpadding="0" cellspacing="0">
  <tr>
    <td><img src="imgs/banner.jpg" width="780" height="100" /></td>
  </tr>
  <tr>
    <td>
	<table width="780" border="0" cellpadding="0" class="Buttontable">
	  <tr>
	    <td width="130" class="MOut" onmouseover="this.className='MOver'" onmouseout="this.className='MOut'"><a href="http://127.0.0.1/cpsc2">Home</a></td>
	    <td width="130" class="MOut" onmouseover="this.className='MOver'" onmouseout="this.className='MOut'">Join Us</td>
	    <td width="130" class="MOut" onmouseover="this.className='MOver'" onmouseout="this.className='MOut'">Log in</td>
	    <td width="130" class="MOut" onmouseover="this.className='MOver'" onmouseout="this.className='MOut'">Contact Us</td>
	    <td width="130" class="MOut" onmouseover="this.className='MOver'" onmouseout="this.className='MOut'">About Us</td>
	    <td width="130" class="MOut" onmouseover="this.className='MOver'" onmouseout="this.className='MOut'">&nbsp;</td>
	  </tr>
	</table>
	</td>
  </tr>
</table>
<table width="79%" border="0" cellpadding="0" cellspacing="0" class="bodytext">
  <tr>
    <td align="left">
	<?php
	$vlevel=$_SESSION['level'];
	$vtitle=$_SESSION['title'];
	
	for($i=0; $i<count($_SESSION[type]); $i++){
		$vtype[$i]=$_SESSION[type][$i];
	}

	for($i=0; $i<count($_SESSION[amount]); $i++){
		$vamount[$i]=$_SESSION[amount][$i];
	}
	
	for($i=0; $i<count($vtype); $i++){
		echo "for type ".$vtype[$i]." the amount is ".$vamount[$i]."<br />";
	}
	
	$vfeeid=mysql_query("select fee_id from tbl_fee where level = '$vlevel' and fee_title = '$vtitle' and ending_date ='0000-00-00'");
	while($line = mysql_fetch_array($vfeeid, MYSQL_ASSOC)) {
		foreach($line as $col_value) {
			$fid=$col_value;
			echo "$col_value"."<br />";
		}
		$i++;
	}
	
	for($i=0; $i<count($vtype); $i++){
		$feetypeid=mysql_query("select fee_type_id from tbl_fee_type where type_title='$vtype[$i]'");
		while($line = mysql_fetch_array($feetypeid, MYSQL_ASSOC)) {
			foreach($line as $col_value) {
				$ftid=$col_value;
				echo "$col_value"."<br />";
			}
			$i++;
		}
		echo "amount is ".$vamount[$i]." i=".$i;
		$res=mysql_query("INSERT INTO `tbl_fee_amount` ( `fee_id` , `fee_type_id` , `amount` ) VALUES ('$fid', '$ftid', '$vamount[$i]')");
	}
	?>
	</td>
  </tr>
</table>
</center>
</body>
</html>
