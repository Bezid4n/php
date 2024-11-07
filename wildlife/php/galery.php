<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>
 <?php
include("db.php");


$query="SELECT * FROM `galery`";

$result=mysqli_query($link,$query);
?>
<body>
<table border="0" cellspacing="0" cellpadding="0" width="100%">
  <tr>
   <td bgcolor="#FF6600" colspan="2" align="right" valign="top">
    <font size="5" face="Courier New, Courier, monospace"><b>گالری</b></font>
   </td>
  </tr>
  <tr>
   <td  width="100%">
    <table border="0" cellspacing="7" align="center">
	<?php
		while($row=mysqli_fetch_array($result))
	      {?>
	 <tr>
	  <td width="50%" align="center">
	   <a href="php/show_galery.php?id=<?php echo $row['code'];?>" target="_blank">
	   <img src="<?php echo $row['pic']?>" title="<?php echo $row['title']?>" border="0" width="300" height="200"/></a></td>
	 </tr>
	 <?php } ?>
	</table>
   </td>
  </tr>
 </table>
 </body>
</html>