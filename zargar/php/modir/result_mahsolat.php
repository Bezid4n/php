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

include("../../html/css.html");?>
<body>
<table border="0" cellpadding="0" cellspacing="0" width="100%">
<tr>
<td align="center" bgcolor="#fff000">عملیات روی محصول</td>
</tr>
<tr>
<td bgcolor="#FFFF66">
 <font face="Tahoma, Arial" size="2">
     <form action="del_mahsolat.php" method="post"> 
    <table width="100%" border="0" bordercolor="#FF0000">
  <tr align="center" bgcolor="#FF9933">
    <td width="10%">عملیات</td>
    <td width="20%">وزن </td>
    <td width="20%">قیمت </td>
    <td width="20%">عکس </td>
    <td width="20%">عیار </td>
    <td width="20%">تاریخ </td>
    <td width="20%"> نوع </td>
    <td width="20%">نام </td>
    <td width="10%">ردیف</td>
  </tr>
  
  <?php $d=0;
  $i=1; while($row=mysql_fetch_array($result))
{ $d++;  ?> 
  <tr align="center" <?php if($i%2==0) echo 'bgcolor="#FFCC33"'; else echo 'bgcolor="#FFFF99"';?>>
    <td><input type="checkbox" name="chkbx[]" id="checkbox_<?php echo $d; ?>" value="<?php echo $row['m_id'];?>" />&nbsp;|&nbsp;
	 <a href="edit_mahsolat.php?id=<?php echo $row['m_id'];?> ">ویرایش</a></td>
    <td><?php echo $row['m_vazn']; ?></td>
    <td><?php echo $row['m_fi']; ?></td>
    <td><img src="../../<?php echo $row['m_pic']; ?>" width="200" height="100"/></td>
    <td><?php echo $row['m_ayar']; ?></td>
    <td><?php echo $row['m_date']; ?></td>
    <td><?php $id=$row['t_id'];
	       $query3="SELECT * FROM `type_m` where t_id='$id' ";
           $result3=mysql_query("$query3");
		   $row3=mysql_fetch_array($result3);
		   echo $row3['t_type'];?></td>
    <td><?php echo $row['m_name']; ?></td>
    <td><?php echo $i++; ?></td>
  </tr>
<?php  }?>
 <tr>
   <td align="center" colspan="8">
    <input type="submit" value="حذف" />
   </td>
  </tr>
</table>
</form>
</font>
</td>
</tr>
</table>
</body>
</html>
