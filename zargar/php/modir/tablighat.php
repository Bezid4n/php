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
		alert("نام عکس را وارد کن");
		document.getElementById('name').focus();
		return false;
	}
	
	if(document.getElementById('tabligh').value=="")
	{
		alert("عکس تبلیغ را انتخاب کن");
		document.getElementById('tabligh').focus();
		return false;
	}
return true;
}
</script>
<body>
 <table border="0" cellspacing="1" width="90%" align="center" cellpadding="2">
  <tr>
   <td align="center" colspan="3">
	tabligh
   </td>
  </tr>
  <tr>
   <td>
   <form action="save_tabligh.php" method="post" enctype="multipart/form-data" onsubmit="javascript:return check_form();">
    <table border="0" cellspacing="0" width="100%">
	 <tr>
	   <td align="right" width="65%" dir="rtl">
		<input name="name" size="30" dir="ltr" type="text"/></td>
	   <td align="left"><font face="Tahoma, Arial" size="2" dir="rtl">نام عکس :</font></td>
	 </tr>
	 <tr>
	   <td align="right" width="65%" >
		<input name="tabligh" size="30" dir="rtl" type="file"/></td>
	   <td align="left"><font face="Tahoma, Arial" size="2" dir="rtl">عکس تبلیغ :</font></td>
	 </tr>
     <tr>
	   <td align="right" width="65%" dir="rtl">
		<input name="link" size="30" dir="ltr" type="text"/></td>
	   <td align="left"><font face="Tahoma, Arial" size="2" dir="rtl">لینک تبلیغ :</font></td>
	 </tr>
	 <tr>
	   <td colspan="2" align="center"><input type="submit" name="send_tabligh" value="ارسال" /></td>
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

 $query="SELECT * FROM `tablighat`";
 $result=mysql_query("$query");
  ?>
    <font face="Tahoma, Arial" size="2">
    <table width="100%" border="0" bordercolor="#FF0000">
  <tr align="center" bgcolor="#FF9933">
    <td width="10%">عملیات</td>
    <td width="20%">لینک</td>
    <td width="40%">عکس</td>
    <td width="20%">نام عکس </td>
    <td width="10%">ردیف</td>
  </tr>
  
  <?php $i=1; 
  while($row=mysql_fetch_array($result)) {  
  ?> 
  <tr align="center" <?php if($i%2==0) echo 'bgcolor="#FFCC33"'; else echo 'bgcolor="#FFFF99"';?>>
    <td><a href="del_tabligh.php?id=<?php echo $row['id'];?> ">حذف</a>&nbsp;|&nbsp;
	 <a href="edit_tablighat.php?id=<?php echo $row['id'];?> ">ویرایش</a></td>
    <td><?php echo $row['link']; ?></td>
    <td>
	 <img src="../../<?php echo $row['pic']; ?>" width="200" height="100" />	
	</td>
    <td><?php echo $row['name']; ?></td>
    <td><?php echo $i++; ?></td>
  </tr>
<?php }?>
</table>
</font>
</td>
  </tr>	
  <tr>
   <td colspan="2"><br /></td>
  </tr>
 </table>
</body>
</html>
