<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>
<?php
 include("../db.php");
  
 $query="SELECT * FROM `ostan`";
 $result=mysqli_query($link,$query);
 
 $query2="SELECT * FROM `animal`";
 $result2=mysqli_query($link,$query2);
 
 $query3="SELECT * FROM `type_animal`";
 $result3=mysqli_query($link,$query3);
 
 $query4="SELECT * FROM `nejad_animal`";
 $result4=mysqli_query($link,$query4);
  ?>
<body>
 <table border="0" cellspacing="1" width="90%" align="center" cellpadding="2">
  <caption align="center" dir="rtl" valign="top">
   <font face="Courier New" size="2"><b>ثبت حیات وحش</b></font>
   <hr align="center" size="2" color="#999999" />
  </caption>
  <tr>
   <td colspan="2"> 
    <form action="save_animal.php" method="post" enctype="multipart/form-data">
    <table border="0" cellspacing="0" width="100%">
	 <tr>
	   <td align="right" width="30%"><input type="submit" name="send_animal" value="ثبت" /></td>
	   <td align="right" width="35%" dir="rtl">
		<input name="animal" size="30" dir="rtl" type="text"/></td>
	   <td align="left"width="35%"><font face="Tahoma, Arial" size="2" dir="rtl"> حیوان :</font></td>
	 </tr>
	</table>
    </form>
   </td>
  </tr>
  <tr>
   <td> 
    <form action="save_type.php" method="post" enctype="multipart/form-data">
    <table border="0" cellspacing="0" width="100%">
	 <tr >
	   <td align="right" width="30%"><input type="submit" name="send_type" value="ثبت" /></td>
	   <td align="right" width="35%" dir="rtl">
		<input name="type1" size="30" dir="rtl" type="text"/></td>
	   <td align="left"width="35%"><font face="Tahoma, Arial" size="2" dir="rtl">نوع حیوان :</font></td>
	 </tr>
	</table>
    </form>
   </td>
   <td> 
    <form action="save_nejad.php" method="post" enctype="multipart/form-data">
    <table border="0" cellspacing="0" width="100%">
	 <tr >
	   <td align="right" width="30%"><input type="submit" name="send_nejad" value="ثبت" /></td>
	   <td align="right" width="35%" dir="rtl">
		<input name="nejad1" size="30" dir="rtl" type="text"/></td>
	   <td align="left"width="35%"><font face="Tahoma, Arial" size="2" dir="rtl">نژاد حیوان :</font></td>
	 </tr>
	</table>
    </form>
   </td>
  </tr>
  <tr bgcolor="#33CC33">
   <td colspan="2">
    <form action="save_wildlife.php" method="post" enctype="multipart/form-data">
    <table border="0" cellspacing="0" width="100%">
	 <tr>
	   <td dir="rtl">
	     <select name="animal">
		  <?php while($row2=mysqli_fetch_array($result2)) {?>
           <option><?php echo $row2['animal']; ?></option>
		  <?php }?>
         </select></td>
	   <td align="left"width="10%"><font face="Tahoma, Arial" size="2" dir="rtl">حیوان :</font></td>
	   <td dir="rtl">
	     <select name="ostan">
		  <?php while($row=mysqli_fetch_array($result)) {?>
           <option><?php echo $row['ostan']; ?></option>
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
		<input name="sen" dir="rtl" type="text"/></td>
	   <td align="left" width="30%"><font face="Tahoma, Arial" size="2" dir="rtl">سن حیوان :</font></td>
	   <td align="right"  dir="rtl" width="30%">
		<input name="pic" dir="rtl" type="file"/></td>
	   <td align="left" width="15%"><font face="Tahoma, Arial" size="2" dir="rtl">عکس حیوان :</font></td>
	 </tr>
	 <tr>
	  <td align="center" width="30%" colspan="4"><input type="submit" name="send_wildlife" value="ثبت"/></td> 
	 </tr>
	</table>
    </form>
   </td>
  </tr>
  <tr>
    <td colspan="2"><br /><br />
	<?php
 
  
  $query="SELECT * FROM `wildlife`";
  $result=mysqli_query($link,$query);
  ?>
    <font face="Tahoma, Arial" size="2">
    <table width="100%" border="0">
  <tr align="center" bgcolor="#009966">
    <td >عملیات</td>
    <td >عکس حیوان</td>
	<td >سن حیوان</td>
	<td >نژاد حیوان</td>
	<td >نوع حیوان</td>
	<td >حیوان</td>
    <td >استان</td>
    <td >ردیف</td>
  </tr>
  
  <?php $i=1; while($row=mysqli_fetch_array($result))
{   ?> 
  <tr align="center" <?php if($i%2==0) echo 'bgcolor="#FF8888"'; else echo 'bgcolor="#CC6666"';?>>
    <td><a href="del_wildlife.php?id=<?php echo $row['code'];?> ">حذف</a>&nbsp;|&nbsp;
	 <a href="edit_wildlife.php?id=<?php echo $row['code'];?> " >ویرایش</a></td>
    <td width="100"><img src="../../<?php echo $row['pic'];?>" width="100" height="70"/></td>
    <td><?php echo $row['sen']; ?></td>
	<td><?php $code_nejad=$row['code_nejad'];
	          $query4="SELECT * FROM `nejad_animal` where code='$code_nejad'";
              $result4=mysqli_query($link,$query4);
              $row4=mysqli_fetch_array($result4);
              echo $row4['nejad']; ?>
	</td>
	<td><?php $code_type=$row['code_type'];
	          $query3="SELECT * FROM `type_animal` where code='$code_type'";
              $result3=mysqli_query($link,$query3);
              $row3=mysqli_fetch_array($result3);
              echo $row3['type']; ?>
    </td>
	<td><?php $code_animal=$row['code_animal'];
	          $query2="SELECT * FROM `animal` where code='$code_animal'";
              $result2=mysqli_query($link,$query2);
              $row2=mysqli_fetch_array($result2);
              echo $row2['animal']; ?>
	</td>
	<td><?php $code_ostan=$row['code_ostan'];
	          $query1="SELECT * FROM `ostan` where code='$code_ostan'";
              $result1=mysqli_query($link,$query1);
              $row1=mysqli_fetch_array($result1);
              echo $row1['ostan']; ?>
	</td>
    <td><?php echo $i++; ?></td>
  </tr>
<?php }?>
</table>
</td>
  </tr>	
 </table>
</body>
</html>
