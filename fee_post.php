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
	<p>To go back and insert more data <a href="set_fee.php">click here.</a></p>
	<?php
	extract($_POST);
	if(strcmp($effecyear, "select")==0 || strcmp($effecmonth, "select")==0 || strcmp($effecday, "select")==0 || strcmp($Level, "Select One")==0) die("choose All the fields");
	$Qc="select * from tbl_fee where fee_title='$Title' and level='$Level' and ending_date='0000-00-00'";
	$R=mysql_query($Qc) or die("Can't execute query");
	
	if ( $row = mysql_fetch_assoc ($R) )
	{
		die("Close the entry with title '{$Title}'");
	}
	$effecdate = $effecyear . "-" . $effecmonth . "-" . $effecday;
	$Query = "INSERT INTO `tbl_fee` ( `fee_id` , `level` , `fee_title` , `total_amount` , `effective_date` , `ending_date` ) VALUES (NULL , '$Level', '$Title', '$amount', '$effecdate', '$enddate' )";
	$result = mysql_query($Query) or die("Can't execute query");
	?>
	<br />
	<br />
	<p>Selected data are:</p>
	<table width="760" border="0" class="bodytext">
      <tr>
        <td width="110">Level</td>
        <td width="650"><?php echo $Level ?></td>
      </tr>
      <tr>
        <td>Title</td>
        <td><?php echo $Title ?></td>
      </tr>
      <tr>
        <td>Total Amount </td>
        <td><?php echo $amount ?></td>
      </tr>
      <tr>
        <td>Effective Date </td>
        <td><?php echo $effecdate ?></td>
      </tr>
    </table>
	</td>
  </tr>
</table>
</center>
</body>
</html>
