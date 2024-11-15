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

 $code=$_GET['id'];

$query="SELECT * FROM film WHERE code = '$code'";

$result=mysql_db_query("music",$query,$link);
$row=mysql_fetch_array($result);
?>
<body>
    <table border="0" cellspacing="6" width="100%" cellpadding="2" bgcolor="#FFFFFF"> 
	 <tr>
	  <td align="center" dir="rtl"><?php echo $row['title']?></td>
	 </tr>
	 <tr>
	  <td align="center" dir="rtl">
	   <img src="<?php echo $row['pic']?>" width="400" height="500"/></td>
	 </tr>
	 <tr>
	  <td align="right" dir="rtl" valign="top">
	   <font face="Tahoma, Arial" size="1" >نام فیلم : <?php echo $row['name']?></font></td>
	 </tr>
     <tr>
	  <td align="right" dir="rtl" valign="top">
	   <font face="Tahoma, Arial" size="1" >محصول سال : <?php echo $row['mahsoul']?></font></td>
	 </tr>
     <tr>
	  <td align="right" dir="rtl" valign="top">
	   <font face="Tahoma, Arial" size="1" >بازیگران : <?php echo $row['artist']?></font></td>
	 </tr>
     <tr>
	  <td align="right" dir="rtl" valign="top">
	   <font face="Tahoma, Arial" size="1" >کارگردان : <?php echo $row['director']?></font></td>
	 </tr>
     <tr>
	  <td align="right" dir="rtl" valign="top">
	   <font face="Tahoma, Arial" size="1" >حجم فیلم : <?php echo $row['size']?></font><font dir="ltr">&nbsp;B</font></td>
	 </tr>
     <tr>
	  <td align="right" dir="rtl" valign="top">
	   <font face="Tahoma, Arial" size="1" >خلاصه فیلم : <?php echo $row['kholase']?></font></td>
	 </tr>
	 <tr>
      <?php if(!$_SESSION['user']) {?>
      <td align="center" dir="rtl" valign="top">
       <font face="Courier New, Courier, monospace" size="2" color="#FF0000">برای دانلود باید عضو شوید!</font>
      </td>
      <?php } else {?>
	  <td align="center" dir="rtl" valign="top"><a href="<?php echo $row['file']?>"><img src="pic/d2.png" width="15" height="15" border="0"/></a>
	   <a href="<?php echo $row['file']?>">دانلود </a>
      </td>
      <?php }?>
	 </tr>
	</table>	
</body>
</html>
