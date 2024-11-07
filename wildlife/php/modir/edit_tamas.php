<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>ویرایش ارتباط با مدیر</title>
</head>
<script language="javascript" type="text/javascript">
function check_form()
{	
	if(document.getElementById('tell').value=="")
	{
		alert("تلفن را وارد کن");
		document.getElementById('tell').focus();
		return false;
	}
	
	if(document.getElementById('fax').value=="")
	{
		alert("فاکس را وارد کن");
		document.getElementById('fax').focus();
		return false;
	}

	if(document.getElementById('mobile').value=="")
	{
		alert("موبایل را وارد کن");
		document.getElementById('mobile').focus();
		return false;
	}
	
	if(document.getElementById('email').value=="")
	{
		alert("پست الکترونیکی را وارد کن");
		document.getElementById('email').focus();
		return false;
	}
	
	if(document.getElementById('address').value=="")
	{
		alert("آدرس را وارد کن");
		document.getElementById('address').focus();
		return false;
	}
return true;
}
</script>
<?php

include("../db.php");

$id=$_GET['id'];
$query="SELECT * FROM `contact_me` where code='$id'";

$result=mysqli_query($link,$query);
$row=mysqli_fetch_array($result);
?>
<body>
<table border="0" cellspacing="1" width="90%" align="center" cellpadding="2">
  <caption align="center" dir="rtl" valign="top">
   <font face="Courier New" size="2"><b>ارتباط با ما</b></font>
   <hr align="center" size="2" color="#999999" />
  </caption>
  <tr>
   <td>
	<form action="update_tamas.php?id=<?php echo $row['code'];?>" method="post" enctype="multipart/form-data" onsubmit="javascript:return check_form();">
	   <table border="0" cellspacing="4" align="center" width="100%">
		<tr>
		 <td align="right">
		  <input name="tell" type="text" size="20" value="<?php echo $row['tell'];?>"/></td>
		 <td align="left" ><font face="Tahoma, Arial" size="2" dir="rtl">تلفن :</font></td>
		</tr>
		<tr>
		 <td align="right" >
		  <input name="fax" type="text" size="20" value="<?php echo $row['fax'];?>"/></td>
		 <td align="left" ><font face="Tahoma, Arial" size="2" dir="rtl">فاکس :</font></td>
		</tr>
		<tr>
		 <td align="right">
		  <input name="mobile" type="text" size="20" value="<?php echo $row['mobile'];?>"/><br /></td>
		 <td align="left" ><font face="Tahoma, Arial" size="2" dir="rtl">موبایل :</font></td>
		</tr>
		<tr>
		 <td align="right">
		  <input name="email" type="text" size="30" value="<?php echo $row['email'];?>"/><br /></td>
		 <td align="left" ><font face="Tahoma, Arial" size="2" dir="rtl">پست الکترونیکی :</font></td>
		</tr>
		<tr>
		 <td align="right">
		  <textarea name="address" cols="70%" dir="rtl"><?php echo $row['address'];?></textarea></td>
		 <td align="left" ><font face="Tahoma, Arial" size="2" dir="rtl">آدرس :</font></td>
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
