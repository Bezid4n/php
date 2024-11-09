<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>
<script language="javascript" type="text/javascript">
function check_form()
{
	if(document.getElementById('user').value=="")
	{
		alert("نام کاربری را وارد کن");
		document.getElementById('user').focus();
		return false;
	}
	if(document.getElementById('password').value=="")
	{
		alert("رمز ورود را وارد کن");
		document.getElementById('password').focus();
		return false;
	}
return true;
}
</script>
<body>
<form  method="post" action="php/chec_user.php" onsubmit="javascript:return check_form()">
 <table border="0" cellpadding="1" cellspacing="2" width="100%">
  <tr>
	   <td align="center" colspan="2">
		<img src="pic/in.jpg" width="100%" height="50">
       </td>
	  </tr>
  <tr>
   <td align="right" width="60%"><input name="user" type="text" /></td>
   <td align="left" width="40%"><font face="Tahoma, Arial" size="2" dir="rtl">نام کاربری :&nbsp;
   </font></td>
  </tr>
  <tr>
   <td align="right" width="60%"><input name="password" type="password" /></td>
   <td align="left" width="40%"><font face="Tahoma, Arial" size="2" dir="rtl">رمز عبور :&nbsp;
   </font></td>
  </tr>
  <tr>
   <td colspan="2" align="center"><input name="" type="submit" value="ورود" /></td>
  </tr>
 </table>
</form>	
</body>
</html>
