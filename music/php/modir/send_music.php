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
		alert("عنوان فایل را وارد کن");
		document.getElementById('title').focus();
		return false;
	}
	
	if(document.getElementById('file').value=="")
	{
		alert("فایل را انتخاب کن");
		document.getElementById('file').focus();
		return false;
	}

return true;
}
</script>
<?php
  $link=mysql_connect("localhost","root","");
  if(!$link)
  die("اشکال در ارتباط با پایگاه داده!");
  
 $query="SELECT * FROM `type_music`";
 $result=mysql_db_query("music",$query,$link);
  ?>
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
       <font face="Tahoma, Geneva, sans-serif" size="2">ارسال آهنگ</font>
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
   <form action="save_music.php" method="post" enctype="multipart/form-data" onsubmit="javascript:return check_form();">
    <table border="0" cellspacing="0" width="100%">
     <tr>
	   <td align="right" width="65%" dir="rtl">
		<select name="day">
           <?php $i=1; while ($i<32) {?>
           <option><?php echo $i;?></option>
           <?php $i++; }?>
        </select>
        <select name="moth">
           <option>فروردین</option>
           <option>اردیبهشت</option>
           <option>خرداد</option>
           <option>تیر</option>
           <option>مرداد</option>
           <option>شهریور</option>
           <option>مهر</option>
           <option>آبان</option>
           <option>آذر</option>
           <option>دی</option>
           <option>بهمن</option>
           <option>اسفند</option>
        </select>
		<select name="year">
           <?php $i=1389; while ($i<1401) {?>
           <option><?php echo $i;?></option>
           <?php $i++; }?>
         </select>
       </td>
	   <td align="left"><font face="Tahoma, Arial" size="2" dir="rtl">تاریخ :</font></td>
	 </tr>
     <tr>
	   <td dir="rtl">
	     <select name="type">
		  <?php while($row=mysql_fetch_array($result)) {?>
           <option><?php echo $row['type']; ?></option>
		  <?php }?>
         </select></td>
	   <td align="left"><font face="Tahoma, Arial" size="2" dir="rtl">نوع فایل :</font></td>
	 </tr>
	 <tr>
	   <td align="right" width="65%" dir="rtl">
		<input name="title" size="30" dir="rtl" type="text"/></td>
	   <td align="left"><font face="Tahoma, Arial" size="2" dir="rtl">عنوان فایل :</font></td>
	 </tr>
	 <tr>
	   <td align="right" width="65%" dir="rtl">
		<input name="pic" size="30" dir="ltr" type="file"/></td>
	   <td align="pic"><font face="Tahoma, Arial" size="2" dir="rtl">عکس فایل :</font></td>
	 </tr>
	 <tr>
	   <td align="right" width="65%" dir="rtl">
		<input name="file" size="30" dir="ltr" type="file"/></td>
	   <td align="file"><font face="Tahoma, Arial" size="2" dir="rtl">فایل :</font></td>
	 </tr>
	 <tr>
	   <td align="right" width="65%" dir="rtl">
		<textarea dir="rtl" cols="70%" rows="5%" name="desc"></textarea></td>
	   <td align="left"><font face="Tahoma, Arial" size="2" dir="rtl">توضیحات :</font></td>
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
	  
	  $query="SELECT * FROM `sabt_music` ";
	  $result=mysql_db_query("music",$query,$link);

	  ?>
		<font face="Tahoma, Arial" size="2">
		<table width="100%" border="0" bordercolor="#FF0000">
	  <tr align="center" bgcolor="#009966">
		<td width="15%">عملیات</td>
		<td width="20%">توضیحات</td>
		<td width="20%">عکس فایل</td>
		<td width="10%">نام فایل </td>
        <td width="15%">نوع فایل</td>
        <td width="15%">تاریخ</td>
		<td width="5%">ردیف</td>
	  </tr>
	  
	  <?php $i=1; while($row=mysql_fetch_array($result))
	{   ?> 
	  <tr align="center" <?php if($i%2==0) echo 'bgcolor="#FF8888"'; else echo 'bgcolor="#FF99CC"';?>>
		<td><a href="del_music.php?id=<?php echo $row['code'];?> ">حذف</a>&nbsp;|&nbsp;
		 <a href="edit_music.php?id=<?php echo $row['code'];?>" target="_blank">ویرایش</a></td>
		<td><?php echo $row['desc']; ?></td>
		<td><img src="../../<?php echo $row['pic'];?>" width="200" height="100"/></td>
		<td><b><?php echo $row['title']; ?></b></td>
        <td><?php $mtype=$row['mtype'];
	          $query2="SELECT * FROM `type_music` where mtype='$mtype'";
              $result2=mysql_db_query("music",$query2,$link);
              $row2=mysql_fetch_array($result2);
              echo $row2['type']; ?></td>
        <td dir="rtl"><?php echo $row['day']; ?>&nbsp;<?php echo $row['moth']; ?>&nbsp;<?php echo $row['year']; ?></td>
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
