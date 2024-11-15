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


$query="SELECT * FROM `contact_me`";

$result=mysql_db_query("music",$query,$link);
$row=mysql_fetch_array($result);
?>
<body>
 <table border="0" cellspacing="0" cellpadding="0" width="100%">
  <tr>
   <td valign="top">
    <table width="100%"  border="0" cellpadding="0" cellspacing="0">
     <tr>
      <td width="2%"><img src="pic/tbl/1.jpg" width="18" height="30"></td>
      <td width="96%" background="pic/tbl/3.jpg" dir="rtl" height="30" valign="bottom" align="center"><font size="2">ارتباط با ما</font></td>
      <td width="2%"><img src="pic/tbl/2.jpg" width="18" height="30"></td>
     </tr>
    </table>
   </td>
  </tr>
  <tr >
   <td width="100%" dir="rtl" bgcolor="#666666">
    <font size="2" face="Tahoma" color="#FFFFFF">آدرس :</font>
   </td>
  </tr>
  <tr>
   <td width="100%" dir="rtl" bgcolor="#CCCCCC"><?php echo $row['address']?></td>
  </tr>
  <tr>
   <td width="100%" dir="rtl" bgcolor="#666666">
    <font size="2" face="Tahoma" color="#FFFFFF">تلفن :</font>
   </td>
  </tr>
  <tr>
   <td width="100%" align="right" bgcolor="#CCCCCC"><?php echo $row['tell']?></td>
  </tr>
  <tr>
   <td width="100%" dir="rtl" bgcolor="#666666">
    <font size="2" face="Tahoma" color="#FFFFFF">فاکس :</font>
   </td>
  </tr>
  <tr>
   <td width="100%" align="right" bgcolor="#CCCCCC"><?php echo $row['fax']?></td>
  </tr>
  <tr>
   <td width="100%" dir="rtl" bgcolor="#666666">
    <font size="2" face="Tahoma" color="#FFFFFF">موبایل :</font>
   </td>
  </tr>
  <tr>
   <td width="100%" dir="rtl" bgcolor="#CCCCCC"><?php echo $row['mobile']?></td>
  </tr>
  <tr>
   <td width="100%" dir="ltr" bgcolor="#666666">
    <font size="2" face="Tahoma" color="#FFFFFF">E_mail :</font>
   </td>
  </tr>
  <tr>
   <td width="100%" dir="ltr" bgcolor="#CCCCCC"><?php echo $row['email']?></td>
  </tr>
 </table>
</body>
</html>