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
<table width="780" border="0">
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
	<p>To modify these results click <a href="set_amount.php">here.</a></p>
	<p>
	<?php
	extract($_POST);
	$lev=$_SESSION['level'];
	
	echo "<p>Title: ".$title."<br />"."Level:".$lev."<br />";
	
	echo "<table width='70%' border='0'>";
	$j=1;
	echo "<tr>";
	echo "<td>Serial</td>";
	echo "<td>Title</td>";
	echo "<td>Amount</td>";
	echo "</tr>";
	for($i=0; $i<count($checkbox); $i++){
		if(($checkbox[$i]!=NULL) && ($textf[$i]==NULL)) die("You have to enter value at the checked text field");
		echo "<tr>";
		echo "<td>$j</td>";
		echo "<td>$checkbox[$i]</td>";
		echo "<td>$textf[$i]</td>";
		echo "</tr>";
		$j++;
	}
	for($i=0; $i<count($textf); $i++){
		$total+=$textf[$i];
	}
	
	$_SESSION['title']=$title;
	for($i=0; $i<count($checkbox); $i++){
		$_SESSION[type][$i]=$checkbox[$i];
	}
	for($i=0; $i<count(textf); $i++){
		$_SESSION[amount][$i]=$textf[$i];
	}
	?>
	</p>
	<p>Total: <?php echo $total; ?></p>
	<?php
	echo "<p>To confirm this results click <a href='amount_sub.php'>here.</a></p>";
	?>
	</td>
  </tr>
</table>
</center>
</body>
</html>
