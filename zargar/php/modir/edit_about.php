<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>ویرایش درباره ما</title>
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
<?php

$link=mysql_connect("localhost","root","");

if (!$link)
die ("اشكال در ارتباط با ديتابيس");

$id=$_GET['id'];

 mysql_select_db("zargar");
 
$query="SELECT * FROM `about_me` where id='$id'";

$result=mysql_query("$query");
$row=mysql_fetch_array($result);
?>
<body>
<table border="0" cellspacing="1" width="90%" align="center" cellpadding="2">
  <caption align="center" dir="rtl" valign="top">
   <font face="Courier New" size="2"><b>ویرایش درباره ما</b></font>
   <hr align="center" size="2" color="#999999" />
  </caption>
  <tr>
   <td>
	<form action="update_about.php?id=<?php echo $row['id'];?>" method="post" enctype="multipart/form-data" onsubmit="javascript:return check_form();">
	 <table border="0" cellspacing="4" align="center" width="100%">
	  <tr>
	   <td align="right">
	    <font face="Tahoma" size="3" dir="rtl"><b>معرفی گروه جی اس ام به کاربران :</b></font>
       </td>
	  </tr>
	  <tr>
	   <td align="center">
        <textarea name="text" cols="80%" rows="10%" dir="rtl"><?php echo $row['text'];?></textarea>
       </td>
	  </tr>
	  <tr>
	   <td align="center">
        <input type="submit" value="ارسال" />
       </td>
	  </tr>
	 </table>
	</form>
   </td>
  </tr>
 </table>
</body>
</html>
