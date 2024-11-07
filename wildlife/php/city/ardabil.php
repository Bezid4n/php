<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>
<?php
  include("php/db.php");
  
  $query="SELECT * FROM `wildlife` where code_ostan='3'";
  $result=mysqli_query($link,$query);
  ?>
<body>
 <table border="0" cellspacing="0" cellpadding="0" width="100%">
  <tr>
   <td width="20%"><img src="pic/city/ardabil.jpg" width="200" height="200" /></td>
   <td align="right" valign="top" width="80%">
    <font size="5" face="Courier New, Courier, monospace" color="#FF6600"><b>استان اردبیل</b></font>
   </td>
  </tr>
  <tr>
   <td colspan="2">
    <table border="0"  width="100%">
	 <tr align="center" bgcolor="#FF6600">
	  <td width="90%"><b>مشخصات حیوان</b></td>
	  <td width="10%"><b>ردیف</b></td>
	 </tr>
	 <?php $i=1; while($row=mysqli_fetch_array($result)) { ?> 
	 <tr align="center" <?php if($i%2==0) echo 'bgcolor="#999933"'; else echo 'bgcolor="#999999"';?>>
	  <td>
	   <table border="0" cellspacing="0" cellpadding="0" width="100%">
	    <tr>
		 <td width="150"><img src="<?php echo $row['pic'];?>" width="150" height="100" /></td>
		 <td>
		  <table border="0" cellpadding="0" cellspacing="0" width="100%">
		   <tr>
		    <td><font face="Calibri" size="2">نوع حیوان : <?php
			  $code_type=$row['code_type'];
	          $query3="SELECT * FROM `type_animal` where code='$code_type'";
              $result3=mysqli_query($link,$query3);
              $row3=mysqli_fetch_array($result3); 
			  echo $row3['type']; ?></font>
			</td>
			<td><font face="Calibri" size="2">حیوان : <?php
			  $code_animal=$row['code_animal'];
	          $query2="SELECT * FROM `animal` where code='$code_animal'";
              $result2=mysqli_query($link,$query2);
              $row2=mysqli_fetch_array($result2); 
			  echo $row2['animal']; ?></font></td>
		   </tr>
		   <tr>
		    <td><font face="Calibri" size="2">سن حیوان : <?php echo $row['sen'];?></font></td>
			<td><font face="Calibri" size="2">نژاد حیوان : <?php
			  $code_nejad=$row['code_nejad'];
	          $query4="SELECT * FROM `nejad_animal` where code='$code_nejad'";
              $result4=mysqli_query($link,$query4);
              $row4=mysqli_fetch_array($result4); 
			  echo $row4['nejad']; ?></font>
		    </td>
		   </tr>
		  </table>
		 </td>
		</tr>
	   </table>
	  </td>
	  <td><b><?php echo $i++; ?></b></td>
	 </tr>
	 <?php }?>
	</table>
   </td>
  </tr>
 </table>
</body>
</html>
