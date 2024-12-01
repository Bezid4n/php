<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<style type="text/css">
<!--
body,td,th {
	font-family: Tahoma, Geneva, sans-serif;
	font-size: 12px;
	direction:rtl;
}
-->
</style></head>
<script language="javascript" type="text/javascript">
function check_form()
{
	if(document.getElementById('barand').value=="")
	{
		alert("نام برند را وارد کن");
		document.getElementById('barand').focus();
		return false;
	}
	
	if(document.getElementById('pic').value=="")
	{
		alert("عکس برند را انتخاب کن");
		document.getElementById('pic').focus();
		return false;
	}

return true;
}
</script>
<script language="javascript" type="text/javascript">
function check_form2()
{
	if(document.getElementById('mobile').value=="")
	{
		alert("نام گوشی را وارد کن");
		document.getElementById('mobile').focus();
		return false;
	}
	
	if(document.getElementById('pic1').value=="")
	{
		alert("عکس گوشی را انتخاب کن");
		document.getElementById('pic1').focus();
		return false;
	}

return true;
}
</script>
<?php
  $link=mysql_connect("localhost","root","");
  if(!$link)
  die("اشکال در ارتباط با پایگاه داده!");
  
 $query="SELECT * FROM `type_mob`";
 $result=mysql_db_query("gsm",$query,$link);
 
 $query2="SELECT * FROM `mobile`";
 $result2=mysql_db_query("gsm",$query2,$link);

  ?>
<body>
 <table border="0" cellspacing="1" width="90%" align="center" cellpadding="2">
  <tr>
   <td align="center" colspan="3">
	<img src="../../pic/tbl/mobile.jpg" width="800" height="70" >
   </td>
  </tr>
  <tr>
   <td bgcolor="#0066FF"> 
    <form action="save_barand.php" method="post" enctype="multipart/form-data" onSubmit="javascript:return check_form();">
    <table border="0" cellspacing="0" width="100%">
	 <tr> 
       <td width="20%" valign="middle">مشخصات برند موبایل ها</td>
	   <td>
        <table border="0" width="100%" cellpadding="0" cellspacing="0">
         <tr>
          <td align="left" width="20%">برند :</td>
          <td align="right" width="50%" dir="rtl">
		   <input name="barand" size="30" dir="rtl" type="text"/></td>	      
         </tr>
         <tr>
         <td align="left" width="20%">عکس برند :</td>
          <td align="right" width="50%" dir="rtl">
		   <input name="pic" size="30" dir="rtl" type="file"/></td>
         </tr>
        </table>
       </td>
       <td align="right" width="5%"><input type="submit" name="send_barand" value="ثبت" /></td>
	 </tr>
	</table>
    </form>
   </td>
  </tr>
  <tr>
   <td bgcolor="#99CC00"> 
    <form action="save_mobile.php" method="post" enctype="multipart/form-data" onSubmit="javascript:return check_form2();">
    <table border="0" cellspacing="0" width="100%">
	 <tr>  
       <td width="20%" valign="middle">مشخصات موبایل ها</td> 
	   <td>
        <table border="0" width="100%" cellpadding="0" cellspacing="0">
         <tr>
          <td align="left" width="20%">نام برند :</td>
          <td dir="rtl">
	     <select name="barand1">
		  <?php while($row=mysql_fetch_array($result)) {?>
           <option><?php echo $row['barand']; ?></option>
		  <?php }?>
         </select></td>
         </tr>
         <tr>
          <td align="left" width="20%">نام گوشی :</td>
          <td align="right" width="50%" dir="rtl">
		   <input name="mobile" size="30" dir="rtl" type="text"/></td>
         </tr>
         <tr>
          <td align="left" width="20%">قیمت گوشی :</td>
          <td align="right" width="50%" dir="rtl">
		   <input name="ghimat" size="30" dir="rtl" type="text"/></td>
         </tr>
         <tr>
          <td align="left" width="20%">عکس گوشی :</td>
          <td align="right" width="50%" dir="rtl">
		   <input name="pic1" size="30" dir="rtl" type="file"/></td> 
         </tr>
        </table>
       </td>
       <td align="right" width="5%"><input type="submit" name="send_mobile" value="ثبت" /></td>
	 </tr>
     </table>
     </form>
     </td>
    </tr>
    <tr>
     <td>
	  <table width="100%" border="0" bordercolor="#FF0000">
	   <tr align="center" bgcolor="#009966">
		<td width="5%">ردیف</td>
        <td width="20%">برند</td>
        <td width="35%">گوشی</td>
        <td width="15%">عکس</td>
        <td width="25%">عملیات</td>
	   </tr>  
	  <?php $i=1; while($row2=mysql_fetch_array($result2))
	{   ?> 
	  <tr align="center" <?php if($i%2==0) echo 'bgcolor="#FF8888"'; else echo 'bgcolor="#FF99CC"';?>>
		<td><?php echo $i++; ?></td>
        <td><?php $barand=$row2['cod_barand']; 
		   $query3="SELECT * FROM `type_mob` where code='$barand' ";
           $result3=mysql_db_query("gsm",$query3,$link);
		   $row3=mysql_fetch_array($result3);
		   echo $row3['barand'];?></td>
        <td><b><?php echo $row2['name']; ?></b></td>
        <td><img src="../../<?php echo $row2['pic'];?>" width="70" height="100"/></a></td>
        <td><a href="del_mobile.php?cod_mobile=<?php echo $row2['code'];?> ">حذف</a>&nbsp;|&nbsp;
		 <a href="manager.php?page_name=mobile2&cod_mobile=<?php echo $row2['code'];?> ">ثبت مشخصات گوشی</a></td>
	  </tr>
	<?php }?>
	</table>
	</font>
   </td>
  </tr>
 </table>
</body>
</html>
