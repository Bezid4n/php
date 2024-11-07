<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
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
	
	if(document.getElementById('file').value=="")
	{
		alert("فایل را انتخاب کن");
		document.getElementById('file').focus();
		return false;
	}
return true;
}
</script>
<body>
 <table border="0" cellspacing="1" width="90%" align="center" cellpadding="2">
  <caption align="center" dir="rtl" valign="top">
   <font face="Courier New" size="2"><b>دانلود</b></font>
   <hr align="center" size="2" color="#999999" />
  </caption>
  <tr>
   <td>
   <form action="save_download.php" method="post" enctype="multipart/form-data" onsubmit="javascript:return check_form();">
    <table border="0" cellspacing="0" width="100%">
	 <tr>
	   <td align="right" width="65%" dir="rtl">
		<input name="name" size="30" dir="rtl" type="text"/></td>
	   <td align="left"><font face="Tahoma, Arial" size="2" dir="rtl">نام فایل :</font></td>
	 </tr>
	 <tr>
	   <td align="right" width="65%" dir="rtl">
		<input name="pic" size="30" dir="ltr" type="file"/></td>
	   <td align="pic"><font face="Tahoma, Arial" size="2" dir="rtl">عکس فایل :</font></td>
	 </tr>
	 <tr>
	   <td align="right" width="65%" dir="rtl">
		<input name="file" size="30" dir="ltr" type="file"/></td>
	   <td align="file"><font face="Tahoma, Arial" size="2" dir="rtl">فایل :</font></td>
	 </tr>
	 <tr>
	   <td align="right" width="65%" dir="rtl">
		<textarea dir="rtl" cols="70%" rows="5%" name="desc"></textarea></td>
	   <td align="left"><font face="Tahoma, Arial" size="2" dir="rtl">توضیحات :</font></td>
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
	  include("../db.php");
	  
	 $query="SELECT * FROM `download`";
	  $result=mysqli_query($link,$query);
	  ?>
		<font face="Tahoma, Arial" size="2">
		<table width="100%" border="0" bordercolor="#FF0000">
	  <tr align="center" bgcolor="#009966">
		<td width="15%">عملیات</td>
		<td width="25%">توضیحات</td>
		<td width="35%">عکس فایل</td>
		<td width="20%">نام فایل </td>
		<td width="5%">ردیف</td>
	  </tr>
	  
	  <?php $i=1; while($row=mysqli_fetch_array($result))
	{   ?> 
	  <tr align="center" <?php if($i%2==0) echo 'bgcolor="#FF8888"'; else echo 'bgcolor="#FF99CC"';?>>
		<td><a href="del_download.php?id=<?php echo $row['code'];?> ">حذف</a>&nbsp;|&nbsp;
		 <a href="edit_download.php?id=<?php echo $row['code'];?>" target="_blank">ویرایش</a></td>
		<td><?php echo $row['desc']; ?></td>
		<td><img src="../../<?php echo $row['pic'];?>" width="200" height="100"/></td>
		<td><b><?php echo $row['name']; ?></b></td>
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
