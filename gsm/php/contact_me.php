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
		alert("نام را وارد کن");
		document.getElementById('name').focus();
		return false;
	}
	
	if(document.getElementById('family').value=="")
	{
		alert("نام خانوادگی را وارد کن");
		document.getElementById('family').focus();
		return false;
	}
	
	if(document.getElementById('email').value=="")
	{
		alert("پست الکترونیکی را وارد کن");
		document.getElementById('email').focus();
		return false;
	}
	
	if(document.getElementById('title').value=="")
	{
		alert("موضوع را وارد کن");
		document.getElementById('title').focus();
		return false;
	}
	
	if(document.getElementById('text').value=="")
	{
		alert("محتوا را وارد کن");
		document.getElementById('text').focus();
		return false;
	}
return true;
}
</script>
<body>
 <table border="0" cellspacing="0" cellpadding="0" width="100%">
  <tr>
   <td align="center">
	<img src="pic/tbl/contact_me.jpg" width="100%" height="50">
   </td>
  </tr>
  <tr>
   <td align="center">
     <font face="Courier New" size="2">لطفا نظر و پیشنهاد خود را وارد کنید</font><p></p>
   </td>
  </tr>
  <tr>
   <td>
    <form action="php/save_tamas.php" method="post" enctype="multipart/form-data" onsubmit="javascript:return check_form();">
	   <table border="0" cellspacing="0" cellpadding="0" align="center" width="100%">
		<tr>
		 <td align="right"><input name="name" type="text" size="20"/></td>
		 <td align="right" ><font face="Tahoma, Arial" size="2" dir="rtl">نام :</font></td>
		</tr>
		<tr>
		 <td align="right" ><input name="family" type="text" size="20"/></td>
		 <td align="right" >
          <font face="Tahoma, Arial" size="2" dir="rtl">نام خانوادگی :</font></td>
		</tr>
		<tr>
		 <td align="right">
		  <input name="email" type="text" size="30"/><br /></td>
		 <td align="right" >
          <font face="Tahoma, Arial" size="2" dir="rtl">پست الکترونیکی :</font></td>
		</tr>
        <tr>
		 <td align="right">
		  <input name="title" type="text" size="30"/><br /></td>
		 <td align="right" >
          <font face="Tahoma, Arial" size="2" dir="rtl">موضوع :</font></td>
		</tr>
		<tr>
		 <td align="right">
		  <textarea name="text" cols="50%" dir="rtl" rows="5"></textarea></td>
		 <td align="right" ><font face="Tahoma, Arial" size="2" dir="rtl">محتوا :</font></td>
		</tr>
		<tr>
		 <td align="center" colspan="2"><input name="save_tamas" type="submit" value="ارسال"/></td>
		</tr>
	   </table>
	  </form>
   </td>
  </tr>
 </table>
</body>
</html>