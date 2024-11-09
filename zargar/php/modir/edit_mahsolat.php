<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>ویرایش</title>
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
	if(document.getElementById('fi').value=="")
	{
		alert("قیمت را انتخاب کن");
		document.getElementById('fi').focus();
		return false;
	}

	if(document.getElementById('vazn').value=="")
	{
		alert("وزن را وارد کن");
		document.getElementById('vazn').focus();
		return false;
	}
return true;
}
</script>
</script>
<?php

$link=mysql_connect("localhost","root","");

if (!$link)
die ("اشكال در ارتباط با ديتابيس");

mysql_select_db("zargar");

$id=$_GET['id'];

 
$query="SELECT * FROM `type_m`";
$result=mysql_query("$query");

$query2="select * from `mahsolat` where `m_id`='$id'";
 $result2=mysql_query("$query2");
 $row2=mysql_fetch_array($result2);
?>
<body>
 <table border="0" cellspacing="1" width="90%" align="center" cellpadding="2">
  <caption align="center" dir="rtl" valign="top">
   <font face="Courier New" size="2"><b>ویرایش</b></font>
   <hr align="center" size="2" color="#999999" />
  </caption>
  <tr>
   <td>
	<form action="update_mahsolat.php?id=<?php echo $row2['m_id'];?>" method="post" enctype="multipart/form-data" onsubmit="javascript:return check_form();">
	   <table border="0" cellspacing="2" align="center" width="100%">
		<tr>
		 <td align="right">
		  <input name="date" readonly="" type="text"  dir="rtl" value="<?php echo date("Y/m/d")?>"/></td>
		 <td align="left"><font face="Tahoma, Arial" size="2" dir="rtl">تاریخ :</font></td>
		</tr>
		<tr>
		 <td align="right" >
          <select name="typem" dir="rtl">
		   <?php while($row=mysql_fetch_array($result)) {?>
            <option><?php echo $row['t_type']; ?></option> 
		   <?php }?>
          </select></td>
		 <td align="left" ><font face="Tahoma, Arial" size="2" dir="rtl">نوع محصول :</font></td>
		</tr>
        <tr>
		 <td align="right">
		  <input name="name" type="text"  dir="rtl" value="<?php echo $row2['m_name']; ?>" /></td>
		 <td align="left"><font face="Tahoma, Arial" size="2" dir="rtl">نام  :</font></td>
		</tr>
        <tr>
		 <td align="right">
		  <input name="ayar"  type="text"  dir="rtl" value="<?php echo $row2['m_ayar']; ?>"  /></td>
		 <td align="left"><font face="Tahoma, Arial" size="2" dir="rtl">عیار :</font></td>
		</tr>
		<tr>
		 <td align="right" dir="rtl" >
		  <input name="pic" type="file" value="<?php echo $row2['m_pic']; ?>"  /><br /></td>
		 <td align="left" ><font face="Tahoma, Arial" size="2" dir="rtl">عکس :</font></td>
		</tr>
        <tr>
		 <td align="right">
		  <input name="fi"  type="text"  dir="rtl" value="<?php echo $row2['m_fi']; ?>"  /></td>
		 <td align="left"><font face="Tahoma, Arial" size="2" dir="rtl">قیمت :</font></td>
		</tr>
        <tr>
		 <td align="right">
		  <input name="vazn"  type="text"  dir="rtl" value="<?php echo $row2['m_vazn']; ?>" /></td>
		 <td align="left"><font face="Tahoma, Arial" size="2" dir="rtl">وزن :</font></td>
		</tr>
		<tr>
		 <td align="center" colspan="2">
		  <input name="save_mahsolat" type="submit" value="ثبت "/>
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
