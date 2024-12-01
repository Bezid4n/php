<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>
<?php
  $link=mysql_connect("localhost","root","");
  if(!$link)
  die("اشکال در ارتباط با پایگاه داده!");
  
 $query="SELECT * FROM `sabt_nam`";
  $result=mysql_db_query("gsm",$query,$link);
  ?>
<body>
  <font face="Tahoma, Arial" size="2">
 <table border="0" cellspacing="1" width="90%" align="center" cellpadding="2">
  <tr>
   <td align="center" colspan="7">
	<img src="../../pic/tbl/del_user.jpg" width="800" height="70" >
   </td>
  </tr>
  <tr align="center" bgcolor="#009966">
    <td width="10%">عملیات</td>
    <td width="25%">پست الکترونیکی</td>
	<td width="20%">نام خانوادگی</td>
	<td width="15%">نام</td>
	<td width="20%">نام کاربری</td>
    <td width="5%">ردیف</td>
  </tr>
  <?php $i=1; while($row=mysql_fetch_array($result))
{   ?> 
  <tr align="center" <?php if($i%2==0) echo 'bgcolor="#FF8888"'; else echo 'bgcolor="#FF99CC"';?>>
    <td><a href="del_user.php?id=<?php echo $row['code'];?> ">حذف</a></td>
	<td><?php echo $row['email']; ?></td>
	<td><?php echo $row['family']; ?></td>
	<td><?php echo $row['name']; ?></td>
    <td><b><?php echo $row['name_karbari']; ?></b></td>
    <td><?php echo $i++; ?></td>
  </tr>
<?php }?>
 </table>
</body>
</html>
