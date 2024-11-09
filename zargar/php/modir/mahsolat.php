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
<?php

$link=mysql_connect("localhost","root","");

if (!$link)
die ("اشكال در ارتباط با ديتابيس");

mysql_select_db("zargar");

 
$query="SELECT * FROM `type_m`";

$result=mysql_query("$query");
?>
<body>
 <table border="0" cellspacing="1" width="90%" align="center" cellpadding="2">
  <caption align="center" dir="rtl" valign="top">
   <font face="Courier New" size="2"><b>محصولات</b></font>
   <hr align="center" size="2" color="#FFE400" />
  </caption>
  <tr>
   <td>
	<form action="save_mahsolat.php" method="post" enctype="multipart/form-data" onsubmit="javascript:return check_form();">
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
		  <input name="name" type="text"  dir="rtl" /></td>
		 <td align="left"><font face="Tahoma, Arial" size="2" dir="rtl">نام  :</font></td>
		</tr>
        <tr>
		 <td align="right">
		  <input name="ayar"  type="text"  dir="rtl"  value="750"/></td>
		 <td align="left"><font face="Tahoma, Arial" size="2" dir="rtl">عیار :</font></td>
		</tr>
		<tr>
		 <td align="right" dir="rtl" >
		  <input name="pic" type="file" /><br /></td>
		 <td align="left" ><font face="Tahoma, Arial" size="2" dir="rtl">عکس :</font></td>
		</tr>
        <tr>
		 <td align="right">
		  <input name="fi"  type="text"  dir="rtl" /></td>
		 <td align="left"><font face="Tahoma, Arial" size="2" dir="rtl">قیمت :</font></td>
		</tr>
        <tr>
		 <td align="right">
		  <input name="vazn"  type="text"  dir="rtl" /></td>
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
  <tr><td> <br /><br /></td></tr>
  <tr>
   <td align="right" bgcolor="#FF9933">
    جستجو
   </td>
  </tr>
  <tr>
   <td>
	<?php
  $link=mysql_connect("localhost","root","");

if (!$link)
die ("اشكال در ارتباط با ديتابيس");

mysql_select_db("zargar");
 
$query="SELECT * FROM `type_m`";

$result=mysql_query("$query");
  ?>
    <font face="Tahoma, Arial" size="2">
     <form action="manager.php?page_name=result_mahsolat" method="post"  enctype="multipart/form-data" >
	<table border="0" width="100%" cellspacing="0" cellpadding="1" bgcolor="#FFFFdd">
	 <tr>
      <td align="right"><input name="name" type="text" size="15%"/></td>
      <td><font face="Tahoma, Arial" size="2" dir="rtl" >نام محصول :</font></td>
     </tr>
     <tr>
	  <td align="right">
	      <select name="type" dir="rtl"><option ></option><?php while($row=mysql_fetch_array($result)) {?>
           <option><?php echo $row['t_type']; ?></option> <?php }?>
          </select></td>
	  <td><font face="Tahoma, Arial" size="2" dir="rtl" >نوع محصول :</font></td>
	 </tr>
     <tr>
	  <td align="right">
	      <select name="fi" dir="rtl">
           <option value="< 500000">کمتر از 500000 ریال</option> 
           <option value="between 500000 and 1000000">از 500000 تا 1000000 ریال</option> 
           <option value="between 1000000 and 1500000">از 1000000 تا 1500000 ریال</option>
           <option value="between 1500000 and 2000000">از 1500000 تا 2000000 ریال</option>
           <option value="between 2000000 and 2500000">از 2000000 تا 2500000 ریال</option>
           <option value="between 2500000 and 3000000">از 2500000 تا 3000000 ریال</option>
           <option value="between 3000000 and 3500000">از 3000000 تا 3500000 ریال</option>
           <option value="between 3500000 and 4000000">از 3500000 تا 4000000 ریال</option>
           <option value="between 4000000 and 4500000">از 4000000 تا 4500000 ریال</option>
           <option value="between 4500000 and 5000000">از 4500000 تا 5000000 ریال</option>
           <option value="> 5000000">بیشتر از 5000000 ریال</option>
          </select></td>
	   <td><font face="Tahoma, Arial" size="2" dir="rtl" >قیمت :</font></td>
	 </tr>
     <tr>
      <td align="right"><input name="ayar" type="text" size="15%"/></td>
      <td><font face="Tahoma, Arial" size="2" dir="rtl" >عیار :</font></td>
     </tr>
	 <tr>
	  <td align="center" colspan="2"><input type="submit" name="search" value="جستجو" /></td>
	 </tr>
	</table>
    </form>
</font>
</td>
  </tr>	
  <tr>
   <td colspan="2"><br /></td>
  </tr>
 </table>
</body>
</html>
