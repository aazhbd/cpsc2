<?php
require_once ('phplib/populator.php');
initdb();
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
	<p>List of Types defined. <a href="fee_type.php">Click here to include more fields</a>. </p>
	<?php
	extract($_POST);
	if(strcmp($CType, "Select One")==0) die("Single or Multiple had to be chosen");
	$fee=SpaceUnderscore($fee);
	$InsertQuery="INSERT INTO `tbl_fee_type` ( `fee_type_id` , `type_title` , `fee_type` ) VALUES (NULL , '$fee', '$CType');";
	$result=mysql_query($InsertQuery) or die("Can't execute query");
	
	$SelectQuery="Select type_title, fee_type from `tbl_fee_type`";
	$SResult=mysql_query($SelectQuery) or die("Can't execute query");
	
	echo "<table width=50% border=0 class='textformtable'>\n";
	echo "<tr>
			<td>Serial</td>
			<td>Field Title</td>
			<td>Field Type</td>
		  </tr>";
	$i=1;
	while($line = mysql_fetch_array($SResult, MYSQL_ASSOC)) {
		echo "\t<tr>\n";
		echo "\t\t<td>$i</td>\n";
		foreach($line as $col_value) {
			echo "\t\t<td>$col_value</td>\n";
		}
		$i++;
		echo "\t\t<td><a href='del_post.php?col={$line['type_title']}'><img src='imgs/delp.jpg' width=24 height=20 border=0 /></td>\n";
		echo "\t</tr>\n";
	}
	echo "</table>\n";
	
	$Qttb="ALTER TABLE `tbl_tution_book` ADD `$fee` VARCHAR( 20 ) NULL ";
	$Rttb = mysql_query($Qttb) or die("Can't execute query ".mysql_error());
	?>
	</td>
  </tr>
</table>
</center>
</body>
</html>
