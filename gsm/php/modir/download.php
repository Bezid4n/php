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


$query7="SELECT * FROM majol";
$result7=mysql_db_query("gsm",$query7,$link);

$query8="SELECT * FROM mobile";
$result8=mysql_db_query("gsm",$query8,$link);
?>
<script language="javascript" type="text/javascript">
function check_form()
{
	if(document.getElementById('name').value=="")
	{
		alert("عنوان را وارد کن");
		document.getElementById('name').focus();
		return false;
	}

return true;
}
</script>
<body>
 <table border="0" cellspacing="1" width="90%" align="center" cellpadding="2">
  <tr>
   <td align="center" colspan="3">
	<img src="../../pic/tbl/download.jpg" width="800" height="70" >
   </td>
  </tr>
  <tr>
   <td>
   <form action="save_download.php" method="post" enctype="multipart/form-data" onsubmit="javascript:return check_form();">
    <table border="0" cellspacing="0" width="100%">
	 <tr>
	   <td align="right" width="65%" dir="rtl">
		<input name="name" size="30" dir="rtl" type="text"/></td>
	   <td align="left"><font face="Tahoma, Arial" size="2" dir="rtl">نام :</font></td>
	 </tr>
	 <tr>
	   <td align="right" width="65%" dir="rtl">
		<input name="pic" size="30" dir="ltr" type="file"/></td>
	   <td align="pic"><font face="Tahoma, Arial" size="2" dir="rtl">عکس :</font></td>
	 </tr>
	 <tr>
	   <td align="right" width="65%" dir="rtl">
		<input name="file" size="30" dir="ltr" type="file"/></td>
	   <td align="file"><font face="Tahoma, Arial" size="2" dir="rtl">فایل :</font></td>
	 </tr>
	 <tr>
	   <td align="right" width="65%" dir="rtl">
		<select name="majol">
            <?php while($row7=mysql_fetch_array($result7)) {   ?>
		   <option><?php echo $row7['name']; ?></option>
           <?php }?>
		 </select></td>
	   <td align="left"><font face="Tahoma, Arial" size="2" dir="rtl">ماژول :</font></td>
	 </tr>
     <tr>
	   <td align="right" width="65%" dir="rtl">
		<select name="mobile">
            <?php while($row8=mysql_fetch_array($result8)) {   ?>
		   <option><?php  echo $row8['name'];?></option>
           <?php }?>
		 </select></td>
	   <td align="left"><font face="Tahoma, Arial" size="2" dir="rtl">موبایل :</font></td>
	 </tr>
	 <tr>
	   <td colspan="2" align="center"><input type="submit" name="send_file" value="ارسال" /></td>
	 </tr>
	</table>
   </form>
   </td>
  </tr>
    <tr>
    <td>
     <?php
	  $link=mysql_connect("localhost","root","");
	  if(!$link)
	  die("اشکال در ارتباط با پایگاه داده!");
	  
	 $query="SELECT * FROM `download`";
	  $result=mysql_db_query("gsm",$query,$link);
	  ?>
		<font face="Tahoma, Arial" size="2">
		<table width="100%" border="0" bordercolor="#FF0000">
	  <tr align="center" bgcolor="#009966">
		<td width="15%">عملیات</td>
		<td width="25%">ماژول</td>
		<td width="25%">عکس فایل</td>
        <td width="10%">موبایل مربوطه</td>
		<td width="20%">نام فایل </td>
		<td width="5%">ردیف</td>
	  </tr>
	  
	  <?php $i=1; while($row=mysql_fetch_array($result))
	{   ?> 
	  <tr align="center" <?php if($i%2==0) echo 'bgcolor="#FF8888"'; else echo 'bgcolor="#FF99CC"';?>>
		<td><a href="del_download.php?id=<?php echo $row['code'];?> ">حذف</a>&nbsp;|&nbsp;
		 <a href="edit_download.php?id=<?php echo $row['code'];?>" target="_blank">ویرایش</a></td>
		<td><?php  $majol=$row['cod_majol'];
		           $query3="SELECT * FROM `majol` where code='$majol'";
	               $result3=mysql_db_query("gsm",$query3,$link);
				   $row3=mysql_fetch_array($result3);
		      echo $row3['name']; ?></td>
		<td><img src="../../<?php echo $row['pic'];?>" width="200" height="100"/></td>
		<td><?php  $mobile=$row['cod_mob'];
		           $query4="SELECT * FROM `mobile` where code='$mobile'";
	               $result4=mysql_db_query("gsm",$query4,$link);
				   $row4=mysql_fetch_array($result4);
		      echo $row4['name']; ?></td>
        <td><b><?php echo $row['title']; ?></b></td>
		<td><?php echo $i++; ?></td>
	  </tr>
	<?php }?>
	</table>
	</font>
   </td>
  </tr>
  <tr>
   <td colspan="2"><br /></td>
  </tr>
 </table>
</body>
</html>
