<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>
<?php
 include("../db.php");
  
 $query="SELECT * FROM `sabt_nam`";
  $result=mysqli_query($link,$query);
  ?>
<body>
  <font face="Tahoma, Arial" size="2">
 <table border="0" cellspacing="1" width="90%" align="center" cellpadding="2">
  <caption align="center" dir="rtl" valign="top">
   <font face="Courier New" size="2"><b>حذف کاربر قانون شکن</b></font>
   <hr align="center" size="2" color="#999999" />
  </caption>
  <tr align="center" bgcolor="#009966">
    <td width="10%">عملیات</td>
    <td width="5%">عکس</td>
    <td width="25%">پست الکترونیکی</td>
	<td width="20%">نام خانوادگی</td>
	<td width="15%">نام</td>
	<td width="20%">نام کاربری</td>
    <td width="5%">ردیف</td>
  </tr>
  <?php $i=1; while($row=mysqli_fetch_array($result))
{   ?> 
  <tr align="center" <?php if($i%2==0) echo 'bgcolor="#FF8888"'; else echo 'bgcolor="#FF99CC"';?>>
    <td><a href="del_user.php?id=<?php echo $row['code'];?> ">حذف</a></td>
    <td><img src="<?php echo $row['pic'];?>" width="50" height="70"/></td>
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
