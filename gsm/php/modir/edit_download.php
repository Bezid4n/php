<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>ویرایش دانلود</title>
</head>
<script language="javascript" type="text/javascript">
function check_form()
{
	if(document.getElementById('name').value=="")
	{
		alert("نام فایل را وارد کن");
		document.getElementById('name').focus();
		return false;
	}
	
return true;
}
</script>
<?php

$link=mysql_connect("localhost","root","");

if (!$link)
die ("اشكال در ارتباط با ديتابيس");

$query7="SELECT * FROM majol";
$result7=mysql_db_query("gsm",$query7,$link);

$query8="SELECT * FROM mobile";
$result8=mysql_db_query("gsm",$query8,$link);

$id=$_GET['id'];
$query="SELECT * FROM `download` where code='$id'";

$result=mysql_db_query("gsm",$query,$link);
$row=mysql_fetch_array($result);
?>
<body>
 <table border="0" cellspacing="1" width="90%" align="center" cellpadding="2">
  <caption align="center" dir="rtl" valign="top">
   <font face="Courier New" size="2"><b>ویرایش دانلود</b></font>
   <hr align="center" size="2" color="#999999" />
  </caption>
  <tr>
   <td>
   <form action="update_download.php?id=<?php echo $row['code'];?>" method="post" enctype="multipart/form-data" onsubmit="javascript:return check_form();">
    <table border="0" cellspacing="0" width="100%">
	 <tr>
	   <td align="right" width="65%" dir="rtl">
		<input name="name" size="30" dir="rtl" type="text" value="<?php echo $row['title']?>"/></td>
	   <td align="left"><font face="Tahoma, Arial" size="2" dir="rtl">نام فایل :</font></td>
	 </tr>
	 <tr>
	   <td align="right" width="65%" dir="rtl">
		<input name="pic" size="30" dir="ltr" type="file" value="<?php echo $row['pic']?>"/></td>
	   <td align="pic"><font face="Tahoma, Arial" size="2" dir="rtl">عکس فایل :</font></td>
	 </tr>
	 <tr>
	   <td align="right" width="65%" dir="rtl">
		<input name="file" size="30" dir="ltr" type="file" value="<?php echo $row['file']?>"/></td>
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
 </table>
</body>
</html>
