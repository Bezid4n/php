<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>
<script language="javascript" type="text/javascript">
function check_form()
{
	if(document.getElementById('date').value=="")
	{
		alert("تاریخ را وارد کن");
		document.getElementById('date').focus();
		return false;
	}
	
	if(document.getElementById('title').value=="")
	{
		alert("عنوان را وارد کن");
		document.getElementById('title').focus();
		return false;
	}
	if(document.getElementById('pic').value=="")
	{
		alert("عکس را انتخاب کن");
		document.getElementById('pic').focus();
		return false;
	}

	if(document.getElementById('text').value=="")
	{
		alert("متن خبر را وارد کن");
		document.getElementById('text').focus();
		return false;
	}
return true;
}
</script>
<body>
 <table border="0" cellspacing="1" width="90%" align="center" cellpadding="2">
  <caption align="center" dir="rtl" valign="top">
   <font face="Courier New" size="2"><b>پست خبر جدید</b></font>
   <hr align="center" size="2" color="#999999" />
  </caption>
  <tr>
   <td>
	<form action="save_new_news.php" method="post" enctype="multipart/form-data" onsubmit="javascript:return check_form();">
	   <table border="0" cellspacing="4" align="center" width="100%">
		<tr>
		 <td align="right">
		  <input name="date" readonly="" type="text" size="20" dir="rtl" value="<?php echo date("Y/m/d")?>"/></td>
		 <td align="left"><font face="Tahoma, Arial" size="2" dir="rtl">تاریخ خبر :</font></td>
		</tr>
		<tr>
		 <td align="right" ><input name="title" type="text" size="70%" dir="rtl"/></td>
		 <td align="left" ><font face="Tahoma, Arial" size="2" dir="rtl">عنوان خبر :</font></td>
		</tr>
		<tr>
		 <td align="right" dir="rtl" >
		  <input name="pic" type="file" size="30"/><br /></td>
		 <td align="left" ><font face="Tahoma, Arial" size="2" dir="rtl">عکس خبر :</font></td>
		</tr>
		<tr>
		 <td align="right">
		  <textarea name="text" cols="70%" dir="rtl"></textarea></td>
		 <td align="left" ><font face="Tahoma, Arial" size="2" dir="rtl">متن خبر :</font></td>
		</tr>
		<tr>
		 <td align="center" colspan="2">
		  <input name="save_news" type="submit" value="ثبت خبر"/>
		 </td>
		</tr>
	   </table>
	  </form>
   </td>
  </tr>
  <tr>
   <td><br /></td>
  </tr>
 </table>
</body>
</html>
