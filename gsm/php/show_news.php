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

 $code=$_GET['id_news'];

$query="SELECT * FROM news WHERE code = $code";

$result=mysql_db_query("gsm",$query,$link);
$row=mysql_fetch_array($result);
?>
<body>
 <table border="0" cellspacing="0" cellpadding="0" width="100%">
  <tr>
   <td align="center" colspan="2">
	<img src="pic/tbl/news.jpg" width="100%" height="50">
   </td>
  </tr>
  <tr>
   <td width="100%">
    <font face="Tahoma, Arial" size="2">
    <table border="0" cellspacing="0" width="100%">
	 <tr>
      <td align="left" dir="rtl" width="20%">
	   <font color="#666666"><?php echo $row['date']?></font>
      </td>
	  <td align="right" dir="rtl">
	   <b><font color="#999999" dir="rtl"><?php echo $row['title']?></font></b>
      </td>
	 </tr>
	 <tr>
	  <td align="right" dir="rtl" valign="top" width="73%">
	   <font color="#999999" dir="rtl"><?php echo $row['text']?></font></td>
	  <td align="right" valign="top"><img src="<?php echo $row['pic']?>" width="150" height="200"/></td>
	 </tr>
	 <tr><td><br /></td></tr>
	</table>	
	</font>
   </td>
  </tr>
 </table>
</body>
</html>
