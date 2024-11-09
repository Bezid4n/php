<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>
<script language="javascript" type="text/javascript">
function check_form()
{
	if(document.getElementById('text').value=="")
	{
		alert("متن معرفی را وارد کن");
		document.getElementById('text').focus();
		return false;
	}
return true;
}
</script>
<body>
 <table border="0" cellspacing="1" width="90%" align="center" cellpadding="2">
  <tr>
   <td align="center" colspan="3">
	درباره ما
   </td>
  </tr>
  <tr>
   <td>
   <form action="save_about.php" method="post" enctype="multipart/form-data" onsubmit="javascript:return check_form();">
    <table border="0" cellspacing="0" width="100%">
	 <tr>
	  <td align="right">
	   <font face="Tahoma" size="3" dir="rtl"><b>معرفی طلافروشی به کاربران :</b></font></td>
	 </tr>
	 <tr>
	  <td align="center"><textarea name="text" cols="60%" rows="10%" dir="rtl"></textarea></td>
	 </tr>
	 <tr>
	  <td align="center"><input type="submit" value="ارسال" /></td>
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
	  
	  mysql_select_db("zargar");
	  
	 $query="SELECT * FROM `about_me`";
	 $result=mysql_query("$query");
	 $row=mysql_fetch_array($result);
	  ?>
		<font face="Tahoma, Arial" size="2">
		<table width="100%" border="0" bordercolor="#FF9933">
	  <tr align="center" bgcolor="#FF9933">
		<td width="15%">عملیات</td>
		<td width="20%">متن</td>
		<td width="5%">ردیف</td>
	  </tr>
	  <tr align="center" bgcolor="#dfffff">
		<td><a href="del_about.php">حذف</a>&nbsp;|&nbsp;
		 <a href="edit_about.php?id=<?php echo $row['id'];?> ">ویرایش</a></td>
		<td><b><?php echo $row['hulf_txt']."..."; ?></b></td>
		<td>1</td>
	  </tr>

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
