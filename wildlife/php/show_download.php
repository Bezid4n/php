<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>
 <?php
include("db.php");

 $code=$_GET['id'];

$query="SELECT * FROM download WHERE code = $code";

$result=mysqli_query($link,$query);
$row=mysqli_fetch_array($result);
?>
<body>
 <table border="0" cellspacing="0" cellpadding="0" width="100%">
  <tr>
   <td bgcolor="#FF6600" colspan="2" align="right">
    <font size="5" face="Courier New, Courier, monospace"><b>دانلود</b></font>
   </td>
  </tr>
  <tr>
   <td width="100%">
    <table border="0" cellspacing="0" width="100%">
	 <tr>
	  <td align="center" width="20%" dir="rtl" bgcolor="#F8BAC4"><b><?php echo $row['name']?></b></td>
	 </tr>
	 <tr>
	  <td align="center" dir="rtl">
	   <img src="<?php echo $row['pic']?>" width="200" height="200"/></td>
	 </tr>
	 <tr>
	  <td align="right" dir="rtl" valign="top">
	   <font face="Tahoma, Arial" size="2" color="#CCCCCC"><?php echo $row['desc']?></font></td>
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
