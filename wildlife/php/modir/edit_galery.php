<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>ویرایش گالری</title>
</head>
<script language="javascript" type="text/javascript">
function check_form()
{
    if(document.getElementById('title').value=="")
	{
		alert("عنوان عکس را انتخاب کن");
		document.getElementById('title').focus();
		return false;
	}
	
	if(document.getElementById('pic').value=="")
	{
		alert("عکس را انتخاب کن");
		document.getElementById('pic').focus();
		return false;
	}
return true;
}
</script>
<?php
include("../db.php");

$id=$_GET['id'];
$query="SELECT * FROM `galery` where code='$id'";

$result=mysqli_query($link,$query);
$row=mysqli_fetch_array($result);
?>
<body>
 <table border="0" cellspacing="1" width="90%" align="center" cellpadding="2">
  <caption align="center" dir="rtl" valign="top">
   <font face="Courier New" size="2"><b>ویرایش گالری</b></font>
   <hr align="center" size="2" color="#999999" />
  </caption>
  <tr>
   <td>
    <form action="update_galery.php?id=<?php echo $row['code'];?>" method="post" enctype="multipart/form-data" onsubmit="javascript:return check_form();">
    <table border="0" cellspacing="0" width="100%">
	 <tr>
	   <td align="right" width="65%" dir="rtl">
		<input name="title" size="30" dir="ltr" type="text" value="<?php echo $row['title']?>"/></td>
	   <td align="left"><font face="Tahoma, Arial" size="2" dir="rtl">عنوان عکس گالری :</font></td>
	 </tr>
	 <tr>
	   <td align="right" width="65%" dir="rtl">
		<input name="pic" size="30" dir="ltr" type="file" value="<?php echo $row['pic']?>"/></td>
	   <td align="left"><font face="Tahoma, Arial" size="2" dir="rtl">عکس گالری :</font></td>
	 </tr>
	 <tr>
	   <td colspan="2" align="center"><input type="submit" name="send_galery" value="ارسال" /></td>
	 </tr>
	</table>
   </form>
   </td>
  </tr>
 </table>
</body>
</html>
