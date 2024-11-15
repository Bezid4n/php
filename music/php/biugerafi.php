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
$query="SELECT * FROM `biugerafi` WHERE code = $code";

$result=mysql_db_query("music",$query,$link);
$row=mysql_fetch_array($result);
?>
<body>
 <table border="0" cellspacing="6" cellpadding="4" width="100%" bgcolor="#FFFFFF">
  <tr>
   <td align="center" dir="rtl"><b><?php echo $row['title']?></b></td>
  </tr>
  <tr>
   <td align="right" dir="rtl">
    <font size="1"><?php echo $row['text']?></font></td>
  </tr>
 </table>
</body>
</html>