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
		alert("نام بنر را وارد کن");
		document.getElementById('title').focus();
		return false;
	}
	
	if(document.getElementById('baner').value=="")
	{
		alert("عکس بنر را انتخاب کن");
		document.getElementById('baner').focus();
		return false;
	}
	
	if(document.getElementById('link').value=="")
	{
		alert("لینک بنر را وارد کن");
		document.getElementById('link').focus();
		return false;
	}
return true;
}
</script>
<body>
 <table border="0" cellspacing="1" width="90%" align="center" cellpadding="2">
  <tr>
   <td align="center" colspan="3">
	<img src="../../pic/tbl/baner.jpg" width="800" height="70" >
   </td>
  </tr>
  <tr>
   <td>
   <form action="save_baner.php" method="post" enctype="multipart/form-data" onsubmit="javascript:return check_form();">
    <table border="0" cellspacing="0" width="100%">
	 <tr>
	   <td align="right" width="65%" dir="rtl">
		<input name="title" size="30" dir="rtl" type="text"/></td>
	   <td align="left"><font face="Tahoma, Arial" size="2" dir="rtl">نام بنر :</font></td>
	 </tr>
	 <tr>
	   <td align="right" width="65%" dir="rtl">
		<input name="baner" size="30" dir="ltr" type="file"/></td>
	   <td align="left"><font face="Tahoma, Arial" size="2" dir="rtl">عکس بنر :</font></td>
	 </tr>
	 <tr>
	   <td align="right" width="65%" dir="rtl">
		<input name="link" size="30" dir="ltr" type="text"/></td>
	   <td align="left"><font face="Tahoma, Arial" size="2" dir="rtl">لینک بنر :</font></td>
	 </tr>
	 <tr>
	   <td colspan="2" align="center"><input type="submit" name="send_baner" value="ارسال" /></td>
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
	  
	 $query="SELECT * FROM `baner`";
	  $result=mysql_db_query("gsm",$query,$link);
	  ?>
		<font face="Tahoma, Arial" size="2">
		<table width="100%" border="0" bordercolor="#FF0000">
	  <tr align="center" bgcolor="#009966">
		<td width="15%">عملیات</td>
		<td width="25%">لینک بنر</td>
		<td width="35%">بنر</td>
		<td width="20%">نام بنر </td>
		<td width="5%">ردیف</td>
	  </tr>
	  
	  <?php $i=1; while($row=mysql_fetch_array($result))
	{   ?> 
	  <tr align="center" <?php if($i%2==0) echo 'bgcolor="#FF8888"'; else echo 'bgcolor="#FF99CC"';?>>
		<td><a href="del_baner.php?id=<?php echo $row['code'];?> ">حذف</a>&nbsp;|&nbsp;
		 <a href="edit_baner.php?id=<?php echo $row['code'];?> " target="_blank">ویرایش</a></td>
		<td><a href="<?php echo $row['link']; ?>" target="_blank"><?php echo $row['link']; ?></a></td>
		<td><img src="../../<?php echo $row['pic'];?>" width="250" height="70"/></td>
		<td><b><?php echo $row['title']; ?></b></td>
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