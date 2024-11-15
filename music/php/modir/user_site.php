<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>
<?php
$link=mysql_connect("localhost","root","");

if (!$link)
die ("اشكال در ارتباط با پایگاه داده!");


$query="SELECT * FROM `sabt_nam` ORDER BY `code` DESC";

$result=mysql_db_query("music",$query,$link);
?>
<body>
 <table border="0" cellspacing="0" width="90%" align="center" cellpadding="2">
  <tr>
   <td colspan="2">
    <table border="0" width="100%" cellpadding="0" cellspacing="0">
     <tr>
      <td width="2%"><img src="../../pic/tbl/bala_chap.jpg" width="18" height="26"></td>
      <td width="96%" background="../../pic/tbl/bala_vasat.jpg" dir="rtl" height="26"></td>
      <td width="2%"><img src="../../pic/tbl/bala_rast.jpg" width="18" height="26"></td>
     </tr>
     <tr>
      <td width="2%"><img src="../../pic/tbl/vasat_chap.jpg" width="18" height="19"></td>
      <td width="96%" dir="rtl" height="15" align="center">
       <font face="Tahoma, Geneva, sans-serif" size="2">کاربران سایت</font>
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
  <?php
	$i=1; while($row=mysql_fetch_array($result))
	 {?>
  <tr <?php if($i%2==0) echo 'bgcolor="#009966"'; else echo 'bgcolor="#00CC99"';?>>
   <td><img src="<?php echo $row['pic']?>" width="60" height="70"/></td>
   <td align="right" dir="rtl">
    <table width="100%" border="0">
	 <tr valign="top">
      <td><font face="Tahoma" size="2">نام : <?php echo $row['name']?></font></td>
	  <td><font face="Tahoma" size="2">نام خانوادگی : <?php echo $row['family']?></font></td>
	  <td><font face="Tahoma" size="2">نام کاربری : <?php echo $row['name_karbari']?></font></td>
	 </tr>
	 <tr align="center">
	  <td colspan="3"><font face="Tahoma" size="2">جنسیت : <?php if($row['sex']==1){ 
	                    echo "مرد"; 
						} elseif($row['sex']==0) { 
						echo "زن";
						} else { 
						echo " ";
						}?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;تاریخ تولد : <?php echo $row['day']?>/<?php echo $row['moth']?>/<?php echo $row['year']?></font></td>
	 </tr>
	 <tr>
	  <td colspan="3">
	   <font face="Tahoma" size="2">پست الکترونیکی : <?php echo $row['email']?></font></td>
	 </tr>
	 <tr>
	  <td  colspan="3"><font face="Tahoma" size="2">آدرس : <?php echo $row['address']?></font></td>
	 </tr>
	</table>
   </td>
  </tr>
  <?php $i++; }?>
 </table>
</body>
</html>
