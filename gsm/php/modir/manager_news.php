<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>
<body>
 <table border="0" cellspacing="1" width="90%" align="center" cellpadding="2">
  <tr>
   <td align="center" colspan="3">
	<img src="../../pic/tbl/manager_news.jpg" width="800" height="70" >
   </td>
  </tr>
  <tr>
   <td>
    <?php
  $link=mysql_connect("localhost","root","");
  if(!$link)
  die("اشکال در ارتباط با پایگاه داده!");
  
 $query="SELECT * FROM `news`";
  $result=mysql_db_query("gsm",$query,$link);
  ?>
    <font face="Tahoma, Arial" size="2">
    <table width="100%" border="0" bordercolor="#FF0000">
  <tr align="center" bgcolor="#009966">
    <td width="20%">عملیات</td>
    <td width="35%">خبر عکس</td>
    <td width="30%">عنوان خبر </td>
    <td width="15%">تاریخ خبر</td>
  </tr>
  
  <?php $i=1; while($row=mysql_fetch_array($result))
{   ?> 
  <tr align="center" <?php if($i%2==0) echo 'bgcolor="#FF8888"'; else echo 'bgcolor="#FF99CC"';?>>
    <td><a href="del_news.php?id=<?php echo $row['code'];?> ">حذف</a>&nbsp;|&nbsp;
	 <a href="edit_news.php?id=<?php echo $row['code'];?> " target="_blank">ویرایش</a></td>
    <td><img src="../../<?php echo $row['pic'];?>" width="250" height="150"/></td>
    <td><b><?php echo $row['title']; ?></b></td>
    <td><?php echo $row['date']; ?></td>
  </tr>
<?php }?>
</table>
   </td>
  </tr>
  <tr>
   <td><br /></td>
  </tr>
 </table>
</body>
</html>
