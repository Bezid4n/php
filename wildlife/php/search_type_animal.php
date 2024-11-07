<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title></title>
</head>
<?php
include("db.php");

$type=$_POST['type'];
$animal=$_POST['animal'];

$query1="SELECT * FROM animal WHERE animal = '$animal'";
$result1=mysqli_query($link,$query1);
$row1=mysqli_fetch_array($result1);
$code_animal=$row1['code'];

$query2="SELECT * FROM type_animal WHERE type = '$type'";
$result2=mysqli_query($link,$query2);
$row2=mysqli_fetch_array($result2);
$code_type=$row2['code'];

$query="SELECT * FROM wildlife WHERE code_animal='$code_animal'";
$result=mysqli_query($link,$query);
?>
<body>
 <font face="Tahoma, Arial" size="2">
 <table border="0" cellspacing="1" width="90%" align="center" cellpadding="2">
  <caption align="center" dir="rtl" valign="top">
   <font size="3" face="Courier New, Courier, monospace" color="#FF6600">
    <b>جستجو بر اساس نوع حیوان : <?php echo $type;?> و حیوان : <?php echo $animal;?></b></font>
   <hr align="center" size="2" color="#999999" />
  </caption>
  <tr align="center" bgcolor="#009966">
    <td >عکس حیوان</td>
	<td >سن حیوان</td>
	<td >نژاد حیوان</td>
	<td >نوع حیوان</td>
	<td >حیوان</td>
    <td >استان</td>
    <td >ردیف</td>
  </tr>
  <?php $i=1; while($row=mysqli_fetch_array($result)) { 
              if($row['code_type']==$code_type){ ?> 
  <tr align="center" <?php if($i%2==0) echo 'bgcolor="#669933"'; else echo 'bgcolor="#669966"';?>>
    <td width="100"><img src="../<?php echo $row['pic'];?>" width="100" height="70"/></td>
    <td><?php echo $row['sen']; ?></td>
	<td><?php $code_nejad=$row['code_nejad'];
	          $query7="SELECT * FROM `nejad_animal` where code='$code_nejad'";
              $result7=mysqli_query($link,$query7);
              $row7=mysqli_fetch_array($result7);
              echo $row7['nejad']; ?>
	</td>
	<td><?php $code_type=$row['code_type'];
	          $query6="SELECT * FROM `type_animal` where code='$code_type'";
              $result6=mysqli_query($link,$query6);
              $row6=mysqli_fetch_array($result6);
              echo $row6['type']; ?>
	</td>
	<td><?php $code_animal=$row['code_animal'];
	          $query5="SELECT * FROM `animal` where code='$code_animal'";
              $result5=mysqli_query($link,$query5);
              $row5=mysqli_fetch_array($result5);
              echo $row5['animal']; ?>
	</td>
	<td><?php $code_ostan=$row['code_ostan'];
	          $query4="SELECT * FROM `ostan` where code='$code_ostan'";
              $result4=mysqli_query($link,$query4);
              $row4=mysqli_fetch_array($result4);
              echo $row4['ostan']; ?>
	</td>
    <td><?php echo $i++; ?></td>
  </tr>
<?php } }?>
 </table>
</body>
</html>
