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
	if(document.getElementById('pic').value=="")
	{
		alert("عکس را انتخاب کن");
		document.getElementById('pic').focus();
		return false;
	}

	if(document.getElementById('text').value=="")
	{
		alert("متن خبر را وارد کن");
		document.getElementById('text').focus();
		return false;
	}
return true;
}
</script>
<body>
 <table border="0" cellspacing="1" width="90%" align="center" cellpadding="2">
  <tr>
   <td align="center" colspan="3">
	<img src="../../pic/tbl/send_barasi.jpg" width="800" height="70" >
   </td>
  </tr>
  <tr>
   <td>
	<form action="save_barasi.php" method="post" enctype="multipart/form-data" onsubmit="javascript:return check_form();">
	   <table border="0" cellspacing="4" align="center" width="100%">
		<tr>
		 <td align="right">
		  <input name="date" readonly="" type="text" size="20" value="<?php echo date("Y/m/d")?>"/></td>
		 <td align="left"><font face="Tahoma, Arial" size="2" dir="rtl">تاریخ :</font></td>
		</tr>
		<tr>
		 <td align="right" ><input name="title" type="text" size="70%" dir="rtl"/></td>
		 <td align="left" ><font face="Tahoma, Arial" size="2" dir="rtl">عنوان :</font></td>
		</tr>
		<tr>
		 <td align="right" dir="rtl" >
		  <input name="pic" type="file" size="30"/><br /></td>
		 <td align="left" ><font face="Tahoma, Arial" size="2" dir="rtl">عکس :</font></td>
		</tr>
		<tr>
		 <td align="right">
		  <textarea name="text" cols="70%" dir="rtl"></textarea></td>
		 <td align="left" ><font face="Tahoma, Arial" size="2" dir="rtl">متن :</font></td>
		</tr>
		<tr>
		 <td align="center" colspan="2">
		  <input name="save_barasi" type="submit" value="ثبت"/>
		 </td>
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
  
 $query="SELECT * FROM `barasi`";
  $result=mysql_db_query("gsm",$query,$link);
  ?>
    <font face="Tahoma, Arial" size="2">
    <table width="100%" border="0" bordercolor="#FF0000">
  <tr align="center" bgcolor="#009966">
    <td width="10%">عملیات</td>
    <td width="40%">متن</td>
    <td width="20%">عکس</td>
    <td width="10%">تاریخ </td>
    <td width="10%">عنوان </td>
    <td width="10%">ردیف</td>
  </tr>
  
  <?php $i=1; while($row=mysql_fetch_array($result))
{   ?> 
  <tr align="center" <?php if($i%2==0) echo 'bgcolor="#FF8888"'; else echo 'bgcolor="#FF99CC"';?>>
    <td><a href="del_barasi.php?id=<?php echo $row['code'];?> ">حذف</a>&nbsp;|&nbsp;
	 <a href="edit_barasi.php?id=<?php echo $row['code'];?> " target="_blank">ویرایش</a></td>
    <td><?php echo $row['hulf_text']; ?></td>
    <td>
	 <img src="../../<?php echo $row['pic']; ?>" width="100" height="50" />	
	</td>
    <td><?php echo $row['date']; ?></td>
    <td><?php echo $row['title']; ?></td>
    <td><?php echo $i++; ?></td>
  </tr>
<?php }?>
</table>
</font>
</td>
</tr>
  <tr>
   <td><br /></td>
  </tr>
 </table>
</body>
</html>
