<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>نظر و پیشنهاد مربوطه</title>
</head>
 <?php
$link=mysql_connect("localhost","root","");

if (!$link)
die ("اشكال در ارتباط با پایگاه داده!");

 $code=$_GET['id'];

$query="SELECT * FROM contact_me WHERE code = $code";

$result=mysql_db_query("gsm",$query,$link);
$row=mysql_fetch_array($result);
?>
<body>
 <table border="0" cellspacing="0" cellpadding="0" width="100%">
  <caption align="center" dir="rtl" valign="top">
   <font face="Courier New" size="2"><b> نظر یا پیشنهاد ارسال شده توسط <font color="#FF0000"><?php echo $row['name'],$row['family']?> </font></b></font>
   <hr align="center" size="2" color="#999999" />
  </caption>
  <font face="Tahoma, Arial" size="2">
  <tr>
   <td align="right" dir="rtl">
	 <b><font color="#000000" dir="rtl">موضوع: <font color="#009900"><?php echo $row['title']?></font></font></b>
   </td>
  </tr>
  <tr>
   <td align="center" dir="rtl" valign="top" width="73%">
    <font color="#666666" dir="rtl"><?php echo $row['text']?></font>
   </td>
  </tr>
  <tr>
   <td align="left" valign="top">
    <font color="#006600" dir="ltr"><?php echo $row['email']?></font>
   </td>
  </tr>
  <tr><td><br /></td></tr>	
  </font>
 </table>
</body>
</html>
