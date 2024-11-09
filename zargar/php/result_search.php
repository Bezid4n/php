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

$name=$_POST['name'];
$type=$_POST['type'];
$fi=$_POST['fi'];
$ayar=$_POST['ayar'];

mysql_select_db("zargar");

$query2="select * from `type_m` where `t_type`='$type'";
 $result2=mysql_query("$query2");
 $row2=mysql_fetch_array($result2);
 $t_id=$row2['t_id'];

$query="select * from `mahsolat` where `m_name` like '%$name%' and `m_ayar` like '%$ayar%' and `m_fi` $fi and t_id like '%$t_id%'";
$result=mysql_query("$query");

include("html/css.html");?>
<body>
<table border="0" cellpadding="0" cellspacing="0" width="100%">
<tr>
<td align="center" bgcolor="#FFE400">نتیجه جستجو</td>
</tr>
<tr>
<td bgcolor="#fffffe">
 <table width="100%" border="0" bordercolor="#FF0000">
  <tr align="center" bgcolor="#FFffdd">
    <td width="40%">عکس</td>
    <td width="30%">نام </td>
    <td width="20%">ردیف</td>
  </tr>
   <?php $i=1; while($row=mysql_fetch_array($result)){   ?> 
  <tr align="center" <?php if($i%2==0) echo 'bgcolor="#FFffff"'; else echo 'bgcolor="#FFFFff"';?>>
    <td><img src="<?php echo $row['m_pic']; ?>" width="200" height="100" /></td>
    <td><a href="php/show_search.php?id=<?php echo $row['m_id'];?> " target="_blank"><?php echo $row['m_name']; ?></a></td>
    <td><?php echo $i++; ?></td>
  </tr>
<?php }?>
</table>
</td>
</tr>
</table>
</body>
</html>
