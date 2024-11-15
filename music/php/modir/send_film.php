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
		alert("عنوان فیلم را وارد کن");
		document.getElementById('title').focus();
		return false;
	}
	if(document.getElementById('name').value=="")
	{
		alert("نام فیلم را وارد کن");
		document.getElementById('name').focus();
		return false;
	}
	if(document.getElementById('pic').value=="")
	{
		alert("عکس فیلم را انتخاب کن");
		document.getElementById('pic').focus();
		return false;
	}
	if(document.getElementById('file').value=="")
	{
		alert("فایل را انتخاب کن");
		document.getElementById('file').focus();
		return false;
	}
	if(document.getElementById('artist').value=="")
	{
		alert("بازیگران فیلم را وارد کن");
		document.getElementById('artist').focus();
		return false;
	}
	if(document.getElementById('director').value=="")
	{
		alert("کارگردان فیلم را وارد کن");
		document.getElementById('director').focus();
		return false;
	}
	if(document.getElementById('mahsoul').value=="")
	{
		alert("تاریخ محصول را وارد کن");
		document.getElementById('mahsoul').focus();
		return false;
	}
	if(document.getElementById('kholase').value=="")
	{
		alert("خلاصه فیلم را وارد کن");
		document.getElementById('kholase').focus();
		return false;
	}

return true;
}
</script>
<body>
 <table border="0" cellspacing="1" width="90%" align="center" cellpadding="2">
  <tr>
   <td colspan="3">
    <table border="0" width="100%" cellpadding="0" cellspacing="0">
     <tr>
      <td width="2%"><img src="../../pic/tbl/bala_chap.jpg" width="18" height="26"></td>
      <td width="96%" background="../../pic/tbl/bala_vasat.jpg" dir="rtl" height="26"></td>
      <td width="2%"><img src="../../pic/tbl/bala_rast.jpg" width="18" height="26"></td>
     </tr>
     <tr>
      <td width="2%"><img src="../../pic/tbl/vasat_chap.jpg" width="18" height="19"></td>
      <td width="96%" dir="rtl" height="15" align="center">
       <font face="Tahoma, Geneva, sans-serif" size="2">ارسال فیلم</font>
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
   <form action="save_film.php" method="post" enctype="multipart/form-data" onsubmit="javascript:return check_form();">
    <table border="0" cellspacing="0" width="100%">
	 <tr>
	   <td align="right" width="65%" dir="rtl">
		<input name="title" size="30" dir="rtl" type="text"/></td>
	   <td align="left"><font face="Tahoma, Arial" size="2" dir="rtl">عنوان فیلم :</font></td>
	 </tr>
     <tr>
	   <td align="right" width="65%" dir="rtl">
		<input name="name" size="30" dir="rtl" type="text"/></td>
	   <td align="left"><font face="Tahoma, Arial" size="2" dir="rtl">نام فیلم :</font></td>
	 </tr>
	 <tr>
	   <td align="right" width="65%" dir="rtl">
		<input name="pic" size="30" dir="ltr" type="file"/></td>
	   <td align="pic"><font face="Tahoma, Arial" size="2" dir="rtl">عکس فیلم :</font></td>
	 </tr>
	 <tr>
	   <td align="right" width="65%" dir="rtl">
		<input name="file" size="30" dir="ltr" type="file"/></td>
	   <td align="file"><font face="Tahoma, Arial" size="2" dir="rtl">فایل فیلم :</font></td>
	 </tr>
     <tr>
	   <td align="right" width="65%" dir="rtl">
		<textarea dir="rtl" cols="70%" rows="5%" name="artist"></textarea></td>
	   <td align="left"><font face="Tahoma, Arial" size="2" dir="rtl">بازیگران فیلم :</font></td>
	 </tr>
     <tr>
	   <td align="right" width="65%" dir="rtl">
		<input name="director" size="30" dir="rtl" type="text"/></td>
	   <td align="left"><font face="Tahoma, Arial" size="2" dir="rtl">کارگردان فیلم :</font></td>
	 </tr>
     <tr>
	   <td align="right" width="65%" dir="rtl">
		<input name="mahsoul" size="30" dir="rtl" type="text"/></td>
	   <td align="left"><font face="Tahoma, Arial" size="2" dir="rtl">محصول :</font></td>
	 </tr>
	 <tr>
	   <td align="right" width="65%" dir="rtl">
		<textarea dir="rtl" cols="70%" rows="5%" name="kholase"></textarea></td>
	   <td align="left"><font face="Tahoma, Arial" size="2" dir="rtl">خلاصه فیلم :</font></td>
	 </tr>
	 <tr>
	   <td colspan="2" align="center"><input type="submit" name="send_file" value="ارسال" /></td>
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
	  
	  $query="SELECT * FROM `film` ";
	  $result=mysql_db_query("music",$query,$link);

	  ?>
		<font face="Tahoma, Arial" size="2">
		<table width="100%" border="0" bordercolor="#FF0000">
	  <tr align="center" bgcolor="#009966">
		<td width="15%">عملیات</td>
		<td width="20%">خلاصه</td>
        <td width="10%">محصول</td>
        <td width="10%">کارگردان</td>
        <td width="15%">بازیگران</td>
		<td width="10%">عکس</td>
		<td width="10%">نام</td>
        <td width="5%">عنوان</td>
		<td width="5%">ردیف</td>
	  </tr>
	  
	  <?php $i=1; while($row=mysql_fetch_array($result))
	{   ?> 
	  <tr align="center" <?php if($i%2==0) echo 'bgcolor="#FF8888"'; else echo 'bgcolor="#FF99CC"';?>>
		<td><a href="del_film.php?id=<?php echo $row['code'];?> ">حذف</a>&nbsp;|&nbsp;
		 <a href="edit_film.php?id=<?php echo $row['code'];?>" target="_blank">ویرایش</a></td>
		<td><?php echo $row['kholase']; ?></td>
        <td><?php echo $row['mahsoul']; ?></td>
        <td><?php echo $row['director']; ?></td>
        <td><?php echo $row['artist']; ?></td>
		<td><img src="../../<?php echo $row['pic'];?>" width="200" height="100"/></td>
        <td><?php echo $row['name']; ?></td>
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
