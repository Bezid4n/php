<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>
<script language="javascript" type="text/javascript">
function check_form()
{	
	if(document.getElementById('title').value=="")
	{
		alert("عنوان را وارد کن");
		document.getElementById('title').focus();
		return false;
	}
	
	if(document.getElementById('text').value=="")
	{
		alert("متن را وارد کن");
		document.getElementById('text').focus();
		return false;
	}
return true;
}
</script>
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
       <font face="Tahoma, Geneva, sans-serif" size="2">بیوگرافی</font>
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
	<form action="save_biugerafi.php" method="post" enctype="multipart/form-data" onsubmit="javascript:return check_form();">
	   <table border="0" cellspacing="4" align="center" width="100%">
		<tr>
		 <td align="right"><input name="title" type="text" size="20" dir="rtl"/></td>
		 <td align="left" ><font face="Tahoma, Arial" size="2" dir="rtl">عنوان :</font></td>
		</tr>
		<tr>
		 <td align="right">
		  <textarea name="text" cols="70%" dir="rtl"></textarea></td>
		 <td align="left" ><font face="Tahoma, Arial" size="2" dir="rtl">متن :</font></td>
		</tr>
		<tr>
		 <td align="center" colspan="2"><input name="save_biugerafi" type="submit" value="ارسال"/></td>
		</tr>
	   </table>
	  </form>
   </td>
  </tr>
   <tr>
    <td>
	<?php
  $link=mysql_connect("localhost","root","");
  if(!$link)
  die("اشکال در ارتباط با پایگاه داده!");
  
 $query="SELECT * FROM `biugerafi`";
 $result=mysql_db_query("music",$query,$link);
  ?>
    <font face="Tahoma, Arial" size="2">
    <table width="100%" border="0" bordercolor="#FF0000">
  <tr align="center" bgcolor="#009966">
    <td width="300">عملیات</td>
	<td width="200">عنوان</td>
	<td width="100">ردیف</td>
  </tr>
  <?php $i=1; while($row=mysql_fetch_array($result))
{   ?> 
  <tr align="center" <?php if($i%2==0) echo 'bgcolor="#FF8888"'; else echo 'bgcolor="#FF99CC"';?>>
    <td><a href="del_biugerafi.php?id=<?php echo $row['code'];?> ">حذف</a>&nbsp;|&nbsp;
	 <a href="edit_biugerafi.php?id=<?php echo $row['code'];?> " target="_blank">ویرایش</a></td>
	<td><?php echo $row['title'];?></td>
	<td><?php echo $i++; ?></td>
  </tr>
  <?php }?>
</table>
  <tr>
   <td><br /></td>
  </tr>
 </table>
</body>
</html>
