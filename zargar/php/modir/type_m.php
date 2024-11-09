<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>
<script language="javascript" type="text/javascript">
function check_form()
{
	if(document.getElementById('type').value=="")
	{
		alert("نام نوع را وارد کن");
		document.getElementById('name').focus();
		return false;
	}
return true;
}
</script>
<body>
 <table border="0" cellspacing="1" width="90%" align="center" cellpadding="2">
  <tr>
   <td align="center" colspan="3">
	نوع محصول
   </td>
  </tr>
  <tr>
   <td>
   <form action="save_typem.php" method="post" enctype="multipart/form-data" onsubmit="javascript:return check_form();">
    <table border="0" cellspacing="0" width="100%">
	 <tr>
	   <td align="right" width="65%" dir="rtl">
		<input name="typem" size="30" dir="ltr" type="text"/></td>
	   <td align="left"><font face="Tahoma, Arial" size="2" dir="rtl">نام نوع :</font></td>
	 </tr>
	 <tr>
	   <td colspan="2" align="center"><input type="submit" name="send_tm" value="ارسال" /></td>
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
  
  mysql_select_db("zargar");
 $query="SELECT * FROM `type_m`";
 $result=mysql_query("$query");
  ?>
    <font face="Tahoma, Arial" size="2">
     <form action="del_typem.php" method="post"> 
    <table width="100%" border="0" bordercolor="#FF0000">
  <tr align="center" bgcolor="#FF9933">
    <td width="10%">عملیات</td>
    <td width="20%">نام نوع </td>
    <td width="10%">ردیف</td>
  </tr>
  
  <?php $d=0;
  $i=1; while($row=mysql_fetch_array($result))
{ $d++;  ?> 
  <tr align="center" <?php if($i%2==0) echo 'bgcolor="#FFCC33"'; else echo 'bgcolor="#FFFF99"';?>>
    <td><input type="checkbox" name="chkbx[]" id="checkbox_<?php echo $d; ?>" value="<?php echo $row['t_id'];?>" />&nbsp;|&nbsp;
	 <a href="edit_typem.php?id=<?php echo $row['t_id'];?> ">ویرایش</a></td>
    <td><?php echo $row['t_type']; ?></td>
    <td><?php echo $i++; ?></td>
  </tr>
<?php  }?>
 <tr>
   <td align="center" colspan="3">
    <input type="submit" value="حذف" />
   </td>
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
