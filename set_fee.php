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
		<p>Here is the page to modify in "Table Fee" table</p><br />
	<form id="form1" name="form1" method="post" action="fee_post.php">
	  <table width="760" border="0" class="textformtable">
        <tr>
          <td width="100">Level</td>
          <td width="660"><?php echo getlevelcombo("Level"); ?></td>
        </tr>
        <tr>
          <td>Title</td>
          <td><input type="text" name="Title" /></td>
        </tr>
        <tr>
          <td>Total Amount</td>
          <td><input type="text" name="amount" /></td>
        </tr>
        <tr>
          <td>Effective Date</td>
          <td><?php echo enterdatecombo("effecyear", "effecmonth", "effecday"); ?></td>
        </tr>
        <tr>
          <td></td>
          <td></td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td>
		  <input type="reset" name="Submit2" value="Reset" /> 
		  <input type="submit" name="Submit" value="Submit" /></td>
        </tr>
      </table>
    </form>
	</td>
  </tr>
</table>
</center>
</body>
</html>
