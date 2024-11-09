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
  
 mysql_select_db("zargar");
 $query="SELECT * FROM `massege`";
  $result=mysql_query("$query");
  ?>
<body>
  <font face="Tahoma, Arial" size="2">
 <table border="0" cellspacing="1" width="90%" align="center" cellpadding="0">
  <tr >
   <td align="center" bgcolor="#FF9933" colspan="4">حذف پیغام های غیر مجاز</td>
  </tr>
  <tr align="center" bgcolor="#ffffdd">
    <td width="20%">عملیات</td>
    <td width="50%">پیغام</td>
	<td width="20%">نام</td>
    <td width="10%">ردیف</td>
  </tr>
  <?php $i=1; while($row=mysql_fetch_array($result))
{   ?> 
  <tr align="center" <?php if($i%2==0) echo 'bgcolor="#dfffff"'; else echo 'bgcolor="#FF99CC"';?>>
    <td><a href="del_massege.php?id=<?php echo $row['id'];?> ">حذف</a></td>
	<td><?php echo $row['massege']; ?></td>
	<td><b><?php echo $row['name']; ?></b></td>
    <td><?php echo $i++; ?></td>
  </tr>
<?php }?>
 </table>
</body>
</html>
