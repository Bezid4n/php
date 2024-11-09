<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>جستجوی مربوطه</title>
</head>
 <?php
$link=mysql_connect("localhost","root","");

if (!$link)
die ("اشكال در ارتباط با پایگاه داده!");

 $id=$_GET['id'];
 
mysql_select_db("zargar");
$query="SELECT * FROM mahsolat WHERE m_id = $id";
$result=mysql_query("$query");
$row=mysql_fetch_array($result);

$t_id=$row['t_id'];
 
$query2="select * from `type_m` where `t_id`='$t_id'";
 $result2=mysql_query("$query2");
 $row2=mysql_fetch_array($result2);
?>
<body>
 <table border="0" cellspacing="0" cellpadding="0" width="100%">
  <tr>
   <td align="center" colspan="2" bgcolor="#FF9933">
	جستجوی مربوطه
   </td>
  </tr>
  <tr>
   <td width="100%" bgcolor="#FFFFff">
    <font face="Tahoma, Arial" size="2">
    <table border="0" cellspacing="0" width="100%" cellpadding="2">
	 <tr>
      <td align="left" dir="rtl" width="20%">
	   <font color="#666666"><?php echo $row['m_date']?></font>
      </td>
	  <td align="right" dir="rtl">
	   <b><font dir="rtl" color="#F51D3B" size="4"><?php echo $row['m_name']?></font></b>
      </td>
	 </tr>
	 <tr>
	  <td align="center" dir="rtl" valign="middle" width="73%">
	   <font  dir="rtl">
        نوع: <?php echo $row2['t_type']?><br /><br />
        عیار: <?php echo $row['m_ayar']?><br /><br />
        قیمت: <?php echo $row['m_fi']?> ریال<br /><br />
        وزن: <?php echo $row['m_vazn']?> گرم<br />
       </font>
      </td>
	  <td align="right" valign="top"><img src="../<?php echo $row['m_pic']?>" width="400" height="400"/></td>
	 </tr>
	 <tr><td><br /></td></tr>
	</table>	
	</font>
   </td>
  </tr>
 </table>
</body>
</html>
