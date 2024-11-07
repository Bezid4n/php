<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>ویرایش حیات وحش</title>
</head>
<script language="javascript" type="text/javascript">
function check_form()
{
    if(document.getElementById('animal').value=="")
	{
		alert("حیوان را انتخاب کن");
		document.getElementById('animal').focus();
		return false;
	}
	
	if(document.getElementById('type').value=="")
	{
		alert("نوع حیوان را انتخاب کن");
		document.getElementById('type').focus();
		return false;
	}
	
	if(document.getElementById('nejad').value=="")
	{
		alert("نژاد حیوان را انتخاب کن");
		document.getElementById('nejad').focus();
		return false;
	}
return true;
}
</script>
<?php

include("../db.php");

$id=$_GET['id'];
$query="SELECT * FROM `wildlife` where code='$id'";
$result=mysqli_query($link,$query);
$row=mysqli_fetch_array($result);

$query1="SELECT * FROM `animal`";
$result1=mysqli_query($link,$query1);

$query2="SELECT * FROM `ostan`";
$result2=mysqli_query($link,$query2);

$query3="SELECT * FROM `type_animal`";
$result3=mysqli_query($link,$query3);
 
$query4="SELECT * FROM `nejad_animal`";
$result4=mysqli_query($link,$query4);
?>
<body>
 <table border="0" cellspacing="1" width="90%" align="center" cellpadding="2">
  <caption align="center" dir="rtl" valign="top">
   <font face="Courier New" size="2"><b>ویرایش حیات وحش</b></font>
   <hr align="center" size="2" color="#999999" />
  </caption>
  <tr>
   <td>
    <form action="update_wildlife.php?id=<?php echo $row['code'];?>" method="post" enctype="multipart/form-data" onsubmit="javascript:return check_form();">
    <table border="0" cellspacing="0" width="100%">
	 <tr>
	   <td dir="rtl">
	     <select name="animal">
		  <?php while($row1=mysqli_fetch_array($result1)) {?>
           <option><?php echo $row1['animal']; ?></option>
		  <?php }?>
         </select></td>
	   <td align="left"width="10%"><font face="Tahoma, Arial" size="2" dir="rtl">حیوان :</font></td>
	   <td dir="rtl">
	     <select name="ostan">
		  <?php while($row2=mysqli_fetch_array($result2)) {?>
           <option><?php echo $row2['ostan']; ?></option>
		  <?php }?>
         </select></td>
	   <td align="left"width="10%"><font face="Tahoma, Arial" size="2" dir="rtl">استان :</font></td>
	 </tr>
	 <tr>
	   <td dir="rtl">
	     <select name="nejad">
		  <?php while($row4=mysqli_fetch_array($result4)) {?>
           <option><?php echo $row4['nejad']; ?></option>
		  <?php }?>
         </select></td>
	   <td align="left"><font face="Tahoma, Arial" size="2" dir="rtl">نژاد حیوان :</font></td>
	   <td dir="rtl">
	     <select name="type">
		  <?php while($row3=mysqli_fetch_array($result3)) {?>
           <option><?php echo $row3['type']; ?></option>
		  <?php }?>
         </select></td>
	   <td align="left"><font face="Tahoma, Arial" size="2" dir="rtl">نوع حیوان :</font></td>
	 </tr>
	 <tr>
	   <td align="right"  dir="rtl">
		<input name="sen" dir="rtl" type="text" value="<?php echo $row['sen']; ?>"/></td>
	   <td align="left" width="30%"><font face="Tahoma, Arial" size="2" dir="rtl">سن حیوان :</font></td>
	   <td align="right"  dir="rtl" width="30%">
		<input name="pic" dir="rtl" type="file" value="<?php echo $row['pic']; ?>"/></td>
	   <td align="left" width="15%"><font face="Tahoma, Arial" size="2" dir="rtl">عکس حیوان :</font></td>
	 </tr>
	 <tr>
	  <td align="center" width="30%" colspan="4"><br /><input type="submit" name="send_wildlife" value="ثبت"/></td> 
	 </tr>
	</table>
    </form>
   </td>
  </tr>
 </table>
</body>
</html>
