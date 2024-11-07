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
		alert("فایل فلش را انتخاب کن");
		document.getElementById('tabligh').focus();
		return false;
	}
return true;
}
</script>
<body>
 <table border="0" cellspacing="1" width="90%" align="center" cellpadding="2">
  <caption align="center" dir="rtl" valign="top">
   <font face="Courier New" size="2"><b>تبلیغات</b></font>
   <hr align="center" size="2" color="#999999" />
  </caption>
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
	   <td align="right" width="65%" dir="rtl">
		<input name="tabligh" size="30" dir="ltr" type="file"/></td>
	   <td align="left"><font face="Tahoma, Arial" size="2" dir="rtl">عکس تبلیغ :</font></td>
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
 include("../db.php");
  
 $query="SELECT * FROM `tablighat`";
  $result=mysqli_query($link,$query);
  ?>
    <font face="Tahoma, Arial" size="2">
    <table width="100%" border="0" bordercolor="#FF0000">
  <tr align="center" bgcolor="#009966">
    <td width="225">عملیات</td>
    <td width="266">عکس</td>
    <td width="120">نام عکس </td>
    <td width="30">ردیف</td>
  </tr>
  
  <?php $i=1; while($row=mysqli_fetch_array($result))
{   ?> 
  <tr align="center" <?php if($i%2==0) echo 'bgcolor="#FF8888"'; else echo 'bgcolor="#FF99CC"';?>>
    <td><a href="del_tabligh.php?id=<?php echo $row['code'];?> ">حذف</a>&nbsp;|&nbsp;
	 <a href="edit_tablighat.php?id=<?php echo $row['code'];?> " target="_blank">ویرایش</a></td>
    <td>
	<img src="../../<?php echo $row['pic'];?>" width="200" height="100"/>
	</td>
    <td><?php echo $row['name']; ?></td>
    <td><?php echo $i++; ?></td>
  </tr>
<?php }?>
</table>
</td>
  </tr>	
  <tr>
   <td colspan="2"><br /></td>
  </tr>
 </table>
</body>
</html>
