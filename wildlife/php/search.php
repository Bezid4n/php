<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>
<?php
  include("db.php");
  
 $query="SELECT * FROM `type_animal`";
 $result=mysqli_query($link,$query);
 
 $query1="SELECT * FROM `nejad_animal`";
 $result1=mysqli_query($link,$query1);
 
 $query2="SELECT * FROM `animal`";
 $result2=mysqli_query($link,$query2);
?>
<body>
 <table border="0" cellspacing="0" cellpadding="0" width="100%">
  <tr>
   <td bgcolor="#FF6600" colspan="2" align="right" valign="top">
    <font size="5" face="Courier New, Courier, monospace"><b>جستجو</b></font>
   </td>
  </tr>
  <tr>
   <td>
	<form action="php/result_search.php" method="post" enctype="multipart/form-data" target="_blank">
	<table border="0" width="100%" cellspacing="0" bgcolor="#003300">
	 <tr>
	  <td>
	   <table border="0" width="100%" cellspacing="0">
	    <tr>
	     <td align="right"><font face="Tahoma, Arial" size="2" dir="rtl" color="#CCCCCC">جستجو حیوان</font></td>
		 <td width="50%"><input type="radio" name="search" value="aml"/></td>
		</tr>
		<tr>
	     <td align="right"><font face="Tahoma, Arial" size="2" dir="rtl" color="#CCCCCC">جستجو نوع حیوان</font></td>
		 <td><input type="radio" name="search" value="typ"/></td>
		</tr>
		<tr>
	     <td align="right"><font face="Tahoma, Arial" size="2" dir="rtl" color="#CCCCCC">جستجو نژاد حیوان</font></td>
		 <td><input type="radio" name="search" value="njd"/></td>
		</tr>
		<tr>
	     <td align="right"><font face="Tahoma, Arial" size="2" dir="rtl" color="#CCCCCC">جستجو حیوان و نوع حیوان</font></td>
		 <td><input type="radio" name="search" value="amt"/></td>
		</tr>
		<tr>
	     <td align="right"><font face="Tahoma, Arial" size="2" dir="rtl" color="#CCCCCC">جستجو حیوان و نژاد حیوان</font></td>
		 <td><input type="radio" name="search" value="amn"/></td>
		</tr>
		<tr>
	     <td align="right"><font face="Tahoma, Arial" size="2" dir="rtl" color="#CCCCCC">جستجو نوع حیوان و نژاد حیوان</font></td>
		 <td><input type="radio" name="search" value="tyn"/></td>
		</tr>
		<tr>
	     <td align="right"><font face="Tahoma, Arial" size="2" dir="rtl" color="#CCCCCC">جستجو حیوان و نوع حیوان و نژاد حیوان</font></td>
		 <td><input type="radio" name="search" value="atn"/></td>
		</tr>
	   </table>
	  </td>
	  <td>
	   <table border="0" cellspacing="0" width="100%">
	    <tr>
	     <td align="right">
	      <select name="animal" dir="rtl"><?php while($row2=mysqli_fetch_array($result2)) {?>
           <option><?php echo $row2['animal']; ?></option> <?php }?>
          </select>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	      <font face="Tahoma, Arial" size="2" dir="rtl" color="#CCCCCC">حیوان :</font></td>
	    </tr>
	    <tr>
	     <td align="right">
	      <select name="type" dir="rtl"><?php while($row=mysqli_fetch_array($result)) {?>
           <option><?php echo $row['type']; ?></option> <?php }?>
          </select>&nbsp;&nbsp;&nbsp;
	      <font face="Tahoma, Arial" size="2" dir="rtl" color="#CCCCCC">نوع حیوان :</font></td>
	    </tr>
	    <tr>
	     <td align="right">
	      <select name="nejad" dir="rtl"><?php while($row1=mysqli_fetch_array($result1)) {?>
           <option><?php echo $row1['nejad']; ?></option> <?php }?>
          </select>&nbsp;&nbsp;&nbsp;
          <font face="Tahoma, Arial" size="2" dir="rtl" color="#CCCCCC">نژاد حیوان :</font></td>
	    </tr>
       </table>
	  </td>
	 </tr>
	 <tr>
	  <td align="center" colspan="2"><input type="submit" name="search1" value="جستجو" /></td>
	 </tr>
	</table>
    </form>
   </td>
  </tr>
 </table>
</body>
</html>
