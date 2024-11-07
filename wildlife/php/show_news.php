<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>
 <?php
include("db.php");

 $code=$_GET['id_news'];

$query="SELECT * FROM news WHERE code = $code";

$result=mysqli_query($link,$query);
$row=mysqli_fetch_array($result);
?>
<body>
 <table border="0" cellspacing="0" cellpadding="0" width="100%">
  <tr>
   <td bgcolor="#FF6600" colspan="2" align="right">
    <font size="5" face="Courier New, Courier, monospace"><b>اخبار</b></font>
   </td>
  </tr>
  <tr>
   <td width="100%">
    <font face="Tahoma, Arial" size="2">
    <table border="0" cellspacing="0" width="100%">
	 <tr>
	  <td align="right" colspan="2" width="20%" dir="rtl">
	   <b><font color="#999999" dir="rtl"><?php echo $row['title']?></font></b></td>
	 </tr>
	 <tr>
	  <td align="right" colspan="2" dir="rtl">
	   <font color="#666666"><?php echo $row['date']?></font></td>
	 </tr>
	 <tr>
	  <td align="right" dir="rtl" valign="top" width="73%">
	   <font color="#999999" dir="rtl"><?php echo $row['text']?></font></td>
	  <td align="right"><img src="<?php echo $row['pic']?>" width="200" height="200"/></td>
	 </tr>
	 <tr><td><br /></td></tr>
	</table>	
	</font>
   </td>
  </tr>
 </table>
</body>
</html>
