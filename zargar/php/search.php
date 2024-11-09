<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<?php

$link=mysql_connect("localhost","root","");

if (!$link)
die ("اشكال در ارتباط با ديتابيس");

mysql_select_db("zargar");

 
$query="SELECT * FROM `type_m`";

$result=mysql_query("$query");
?>
<body>
 <table border="0" cellpadding="0" cellspacing="0" width="100%">
  <tr>
   <td align="right">
  <object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" 
codebase="http://download.macromedia.com 
/pub/shockwave/cabs/flash/swflash.cab#version=6,0,0,0#" 
width="400" height="100"> 
<param name="movie" 
value="pic/Movies.swf" /> 
<param name="quality" value="high" /> 
<param name="wmode" value="opaque"> 
<embed src="pic/Movies.swf" 
quality="high" pluginspage="http://www.macromedia.com/go/getflashplayer" 
wmode="opaque" type="application/x-shockwave-flash" 
width="400" height="100"> 
</embed> 
</object>
   </td>
  </tr>
  <tr>
 
   <td>
    <form action="index.php?page_name=result_search" method="post"  enctype="multipart/form-data" >
	<table border="0" width="100%" cellspacing="0" cellpadding="1" bgcolor="#ffffff">
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
   </td>
  </tr>
 </table>
</body>
</html>
