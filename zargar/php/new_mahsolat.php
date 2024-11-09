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

mysql_select_db("zargar");

$query="SELECT * FROM `mahsolat` ORDER BY `m_id` DESC LIMIT 0 ,20 ";
$result=mysql_query("$query");

include("html/css.html");?>
<body>
<table border="0" cellpadding="0" cellspacing="0" width="100%">
<tr>
<td align="center" bgcolor="#ffffff"><font face="tahoma" color="#F51D3B" size="4">جدیدترین محصولات</font></td>
</tr>
<tr>
<td bgcolor="#FFFFF5">
 <table width="100%" border="0" bordercolor="#000000">
  <tr align="center" bgcolor="#ffffdd">
 
    <td width="40%"><font face="tahoma" color="#000000" size="2">عکس</td></font>
    <td width="30%"><font face="tahoma" color="#000000" size="2">نام </font></td>
    <td width="20%"><font face="tahoma" color="#000000" size="2">ردیف</font></td>
	
  </tr>
   <?php $i=1; while($row=mysql_fetch_array($result)){   ?> 
  <tr align="center" <?php if($i%2==0) echo 'bgcolor="#ffffff"'; else echo 'bgcolor="#FFFFff"';?>>
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
