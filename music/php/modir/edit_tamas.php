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

$link=mysql_connect("localhost","root","");

if (!$link)
die ("اشكال در ارتباط با ديتابيس");

$id=$_GET['id'];
$query="SELECT * FROM `contact_me` where code='$id'";

$result=mysql_db_query("music",$query,$link);
$row=mysql_fetch_array($result);
?>
<body>
<table border="0" cellspacing="1" width="90%" align="center" cellpadding="2">
  <tr>
   <td>
    <table border="0" width="100%" cellpadding="0" cellspacing="0">
     <tr>
      <td width="2%"><img src="../../pic/tbl/bala_chap.jpg" width="18" height="26"></td>
      <td width="96%" background="../../pic/tbl/bala_vasat.jpg" dir="rtl" height="26"></td>
      <td width="2%"><img src="../../pic/tbl/bala_rast.jpg" width="18" height="26"></td>
     </tr>
     <tr>
      <td width="2%"><img src="../../pic/tbl/vasat_chap.jpg" width="18" height="19"></td>
      <td width="96%" dir="rtl" height="15" align="center">
       <font face="Tahoma, Geneva, sans-serif" size="2">ویرایش تماس با ما</font>
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
