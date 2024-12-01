<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>
<?php
$link=mysql_connect("localhost","root","");

if (!$link)
die ("اشكال در ارتباط با پایگاه داده!");

$query="SELECT * FROM about_me ";

$result=mysql_db_query("gsm",$query,$link);
$row=mysql_fetch_array($result);
?>
<body>
 <table border="0" cellspacing="0" cellpadding="0" width="100%">
  <tr>
   <td align="center">
	<img src="pic/tbl/about_me.jpg" width="100%" height="50">
   </td>
  </tr>
  <tr>
   <td align="right">
    <font face="tahoma" dir="rtl" size="2"><?php echo $row['text']?></font>
   </td>
  </tr>
 </table>
</body>
</html>
