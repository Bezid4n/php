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
  $result=mysql_db_query("music",$query,$link);
  ?>
<body>
  <font face="Tahoma, Arial" size="2">
 <table border="0" cellspacing="1" width="90%" align="center" cellpadding="2">
  <tr>
   <td colspan="7">
    <table border="0" width="100%" cellpadding="0" cellspacing="0">
     <tr>
      <td width="2%"><img src="../../pic/tbl/bala_chap.jpg" width="18" height="26"></td>
      <td width="96%" background="../../pic/tbl/bala_vasat.jpg" dir="rtl" height="26"></td>
      <td width="2%"><img src="../../pic/tbl/bala_rast.jpg" width="18" height="26"></td>
     </tr>
     <tr>
      <td width="2%"><img src="../../pic/tbl/vasat_chap.jpg" width="18" height="19"></td>
      <td width="96%" dir="rtl" height="15" align="center">
       <font face="Tahoma, Geneva, sans-serif" size="2">حذف کاربر قانون شکن</font>
      </td>
      <td width="2%"><img src="../../pic/tbl/vasat_rast.jpg" width="18" height="19"></td>
     </tr>
     <tr>
      <td width="2%"><img src="../../pic/tbl/paein_chap.jpg" width="18" height="32"></td>
      <td width="96%" dir="rtl" background="../../pic/tbl/paein_vasat.jpg" height="32"></td>
      <td width="2%"><img src="../../pic/tbl/paein_rast.jpg" width="18" height="32"></td>
     </tr>
    </table>
   </td>
  </tr>
  <tr align="center" bgcolor="#009966">
    <td width="10%">عملیات</td>
    <td width="5%">عکس</td>
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
