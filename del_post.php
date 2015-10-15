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
	<p>To add more types <a href="type_post.php">click here.</a></p>
	<p>Or to set another type <a href="fee_type.php">click here.</a></p>
	<?php
	$value=$_GET['col'];
	$Query="delete from tbl_fee_type where type_title='$value'";
	$result=mysql_query($Query) or die("can't execute query");
	
	$Q2="ALTER TABLE `tbl_tution_book` DROP `$value`";
	$R2=mysql_query($Q2) or die("can't execute query");
	?>
	</td>
  </tr>
</table>
</center>
</body>
</html>
