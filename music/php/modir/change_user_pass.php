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
		alert("نام کاربری قبلی را وارد کن");
		document.getElementById('user').focus();
		return false;
	}
	
	if(document.getElementById('user_new').value=="")
	{
		alert("نام کاربری جدید را وارد کن");
		document.getElementById('user_new').focus();
		return false;
	}
	if(document.getElementById('pass').value=="")
	{
		alert("رمز ورود را وارد کن");
		document.getElementById('pass').focus();
		return false;
	}

	if(document.getElementById('r_pass').value=="")
	{
		alert("تکرار رمز ورود را وارد کن");
		document.getElementById('r_pass').focus();
		return false;
	}
	
    if(document.getElementById('r_pass').value!=document.getElementById('pass').value)
	{
		alert("رمز ورود با تکرار همخوانی ندارد! دوباره سعی کنید");
		document.getElementById('r_pass').select();
		return false;
	}
return true;
}
</script>
<body>
<form action="save_change_user.php" method="post" enctype="multipart/form-data" onsubmit="javascript:return check_form();">
 <table border="0" cellspacing="1" width="90%" align="center" cellpadding="2">
  <tr>
   <td colspan="2">
    <table border="0" width="100%" cellpadding="0" cellspacing="0">
     <tr>
      <td width="2%"><img src="../../pic/tbl/bala_chap.jpg" width="18" height="26"></td>
      <td width="96%" background="../../pic/tbl/bala_vasat.jpg" dir="rtl" height="26"></td>
      <td width="2%"><img src="../../pic/tbl/bala_rast.jpg" width="18" height="26"></td>
     </tr>
     <tr>
      <td width="2%"><img src="../../pic/tbl/vasat_chap.jpg" width="18" height="19"></td>
      <td width="96%" dir="rtl" height="15" align="center">
       <font face="Tahoma, Geneva, sans-serif" size="2">تغییر نام کاربری و رمز ورود</font>
      </td>
      <td width="2%"><img src="../../pic/tbl/vasat_rast.jpg" width="18" height="19"></td>
     </tr>
     <tr>
      <td width="2%"><img src="../../pic/tbl/paein_chap.jpg" width="18" height="32"></td>
      <td width="96%" dir="rtl" background="../../pic/tbl/paein_vasat.jpg" height="32"></td>
      <td width="2%"><img src="../../pic/tbl/paein_rast.jpg" width="18" height="32"></td>
     </tr>
    </table>
   </td>
  </tr>
  <tr>
   <td align="right"><input type="text" name="user" size="30" /></td>
   <td dir="rtl"><font face="Tahoma, Arial" size="2">نام کاربری قبلی :</font></td>
  </tr>
  <tr>
   <td align="right"><input type="text" name="user_new" size="30" /></td>
   <td dir="rtl"><font face="Tahoma, Arial" size="2">نام کاربری :</font></td>
  </tr>
  <tr>
   <td align="right"><input type="password" name="pass" size="30" /></td>
   <td dir="rtl"><font face="Tahoma, Arial" size="2">رمز ورود :</font></td>
  </tr>
  <tr>
   <td align="right"><input type="password" name="r_pass" size="30" /></td>
   <td dir="rtl"><font face="Tahoma, Arial" size="2">تکرار رمز ورود :</font></td>
  </tr>
  <tr>
   <td colspan="2" align="center"><input type="submit" value="ثبت" /></td>
  </tr>
  <tr>
   <td colspan="2"><br /></td>
  </tr>
 </table>
 </form>
</body>
</html>