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

$query="SELECT * FROM download WHERE code = $code";

$result=mysql_db_query("gsm",$query,$link);
$row=mysql_fetch_array($result);
?>
<body>
 <table border="0" cellspacing="0" cellpadding="0" width="100%">
  <tr>
   <td align="center" colspan="2">
	<img src="pic/tbl/download2.jpg" width="100%" height="50">
   </td>
  </tr>
  <tr>
   <td width="100%">
    <table border="0" cellspacing="0" width="100%">
	 <tr>
	  <td align="center" width="20%" dir="rtl" bgcolor="#F8BAC4"><b><?php echo $row['title']?></b></td>
	 </tr>
	 <tr>
	  <td align="center" dir="rtl">
	   <img src="<?php echo $row['pic']?>" width="200" height="200"/></td>
	 </tr>
	 <tr>
	  <td align="right" dir="rtl" valign="top">
	   <font face="Tahoma, Arial" size="2" color="#CCCCCC">
	   <?php $majol=$row['cod_majol'];
	         $query2="SELECT * FROM majol WHERE code = $majol";
			 $result2=mysql_db_query("gsm",$query2,$link);
			 $row2=mysql_fetch_array($result2);
	    echo $row2['name']?></font></td>
	 </tr>
     <tr>
	  <td align="right" dir="rtl" valign="top">
	   <font face="Tahoma, Arial" size="2" color="#CCCCCC">
	   <?php $mobile=$row['cod_mob'];
	         $query3="SELECT * FROM mobile WHERE code = $mobile";
			 $result3=mysql_db_query("gsm",$query3,$link);
			 $row3=mysql_fetch_array($result3);
	    echo $row3['name']?></font></td>
	 </tr>
	 <tr>
	  <td align="right" dir="rtl" valign="top">
	   <font face="Tahoma, Arial" size="2" color="#CCCCCC">حجم فایل :<?php echo $row['size']?><font dir="ltr">&nbsp;B</font></font></td>
	 </tr>
	 <tr>
	  <td align="center" dir="rtl" valign="top" bgcolor="#F8BAC4"><a href="<?php echo $row['file']?>">       <img src="pic/d2.png" width="15" height="15" border="0"/></a>
	   <a href="<?php echo $row['file']?>">دانلود برنامه</a></td>
	 </tr>
	 <tr><td><br /></td></tr>
	</table>	
   </td>
  </tr>
 </table>
</body>
</html>
