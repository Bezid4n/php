<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>ویرایش نظرسنجی</title>
</head>
<script language="javascript" type="text/javascript">
function check_form()
{
	if(document.getElementById('question').value=="")
	{
		alert("سوال را وارد کن");
		document.getElementById('question').focus();
		return false;
	}
	
	if(document.getElementById('test1').value=="")
	{
		alert("تست 1 را وارد کن");
		document.getElementById('test1').focus();
		return false;
	}
	if(document.getElementById('test2').value=="")
	{
		alert("تست 2 را انتخاب کن");
		document.getElementById('test2').focus();
		return false;
	}

	if(document.getElementById('test3').value=="")
	{
		alert("تست 3 را وارد کن");
		document.getElementById('test3').focus();
		return false;
	}
	
	if(document.getElementById('test4').value=="")
	{
		alert("تست 4 را وارد کن");
		document.getElementById('test4').focus();
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
$query="SELECT * FROM `nazarsanji` where code='$id'";

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
       <font face="Tahoma, Geneva, sans-serif" size="2">ویرایش نظرسنجی</font>
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
    <form action="update_nazarsanji.php?id=<?php echo $row['code'];?>" method="post" enctype="multipart/form-data" onsubmit="javascript:return check_form();">
    <table border="0" cellspacing="0" width="100%">
	 <tr>
      <td align="right">
	   <input type="text" name="question" size="40%" value="<?php echo $row['question'];?>"/></td>
      <td dir="rtl"><font face="Tahoma, Arial" size="2">سوال نظرخواهی :</font></td>
     </tr>
     <tr>
      <td align="right">
	   <input type="text" name="test1" size="20" value="<?php echo $row['test1'];?>"/></td>
      <td dir="rtl"><font face="Tahoma, Arial" size="2">تست اول :</font></td>
     </tr>
     <tr>
      <td align="right">
	   <input type="text" name="test2" size="20" value="<?php echo $row['test2'];?>"/></td>
      <td dir="rtl"><font face="Tahoma, Arial" size="2">تست دوم :</font></td>
     </tr>
     <tr>
      <td align="right">
	   <input type="text" name="test3" size="20" value="<?php echo $row['test3'];?>"/></td>
      <td dir="rtl"><font face="Tahoma, Arial" size="2">تست سوم :</font></td>
     </tr>
     <tr>
      <td align="right">
	   <input type="text" name="test4" size="20" value="<?php echo $row['test4'];?>"/></td>
      <td dir="rtl"><font face="Tahoma, Arial" size="2">تست چهارم :</font></td>
     </tr>
     <tr>
      <td colspan="2" align="center"><input type="submit" value="ارسال نظرخواهی" /></td>
     </tr>
    </table>
   </form>
   </td>
  </tr>
 </table>
</body>
</html>
