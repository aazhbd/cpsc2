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
	<p>This page is to modify the Table fee amount</p><br /><br />
	<form id="form1" name="form1" method="post" action="">
	  <table width="70%" border="0" class="textformtable">
        <tr>
          <td width="22%">Level</td>
          <td width="78%">
		  <select name="level" onchange="form1.submit()">
		  <?php
		  	echo getLevelComboOptions($_POST['level']);
		  ?>
	       </select>
          </td>
        </tr>
      </table>
	</form>
	<form id="form2" name="form2" method="post" action="amount_post.php">
	<table width="70%" border="0" class="textformtable">
        <tr>
          <td width="22%">Title</td>
          <td width="78%">
		  <select name="title">
		  <option>Select One</option>
		  <?php
			if( isset($_POST['level']) ){
				$Query="select fee_title from tbl_fee where level='{$_POST['level']}' and ending_date='0000-00-00'";
				$Result=mysql_query($Query) or die("Can't execute query");
				
				while( $line = mysql_fetch_array($Result) ){
					echo "<option>{$line['fee_title']}</option>";
				}
				$_SESSION['level']=$_POST['level'];
			}
		  ?>
		  </select>
		  </td>
        </tr>
		<tr>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
		</tr>
        <tr>
          <td>&nbsp;</td>
		  <td>
		  <?php
		  $Q="select type_title from tbl_fee_type where fee_type='SINGLE'";
		  $R=mysql_query($Q) or die("Can't execute query");
		  $j=0;
		  while($l=mysql_fetch_array($R)){
  		  	$j++;
			echo "<tr><td><label><input type='checkbox' name='checkbox[]' value='{$l['type_title']}' />{$l['type_title']}</label></td><td><input type='text' name='textf[]' /></td></tr>";
		  }
		  ?>
		  </td>
        </tr>
		<tr>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
		</tr>
        <tr>
          <td></td>
          <td>
		  <input type="reset" name="Submit2" value="Reset" /> 
		  <input type="submit" name="Submit" value="Submit" />
		  </td>
        </tr>
      </table>
	</form>
	</td>
  </tr>
</table>
</center>
</body>
</html>
