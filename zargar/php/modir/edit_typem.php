<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>ویرایش</title>
</head>
<script language="javascript" type="text/javascript">
function check_form()
{
	if(document.getElementById('type').value=="")
	{
		alert("نوع را وارد کنید");
		document.getElementById('type').focus();
		return false;
	}
return true;
}
</script>
<?php

$link=mysql_connect("localhost","root","");

if (!$link)
die ("اشكال در ارتباط با ديتابيس");

$id=$_GET['id'];

mysql_select_db("zargar");

$query="SELECT * FROM `type_m` where t_id='$id'";

$result=mysql_query("$query");
$row=mysql_fetch_array($result);
?>
<body>
 <table border="0" cellspacing="1" width="90%" align="center" cellpadding="2">
 <caption align="center" dir="rtl" valign="top">
   <font face="Courier New" size="2"><b>ویرایش </b></font>
   <hr align="center" size="2" color="#999999" />
  </caption>
  <tr>
   <td>
    <form action="update_typem.php?id=<?php echo $row['t_id'];?>" method="post" enctype="multipart/form-data" onsubmit="javascript:return check_form();">
    <table border="0" cellspacing="0" width="100%">
	 <tr>
	   <td align="right" width="65%" dir="rtl">
		<input name="type" size="30" dir="ltr" type="text" value="<?php echo $row['t_type']?>"/></td>
	   <td align="left"><font face="Tahoma, Arial" size="2" dir="rtl">نام نوع :</font></td>
	 </tr>
	 <tr>
	   <td colspan="2" align="center"><input type="submit" name="send_type" value="ارسال" /></td>
	 </tr>
	</table>
   </form>
   </td>
  </tr>
 </table>
</body>
</html>
