<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>نتایج نظرسنجی</title>
</head>
<?php 
include("db.php");

$query = 'select * from result_nazar';
$result=mysqli_query($link,$query);
$num_candidates=mysqli_num_rows($result);

$query2="SELECT * FROM `nazarsanji`";
$result2=mysqli_query($link,$query2);
$row2=mysqli_fetch_array($result2);

$total_nazar=0;
while ($row = mysqli_fetch_object ($result)) 
{
    $total_nazar +=  $row->num;
}
mysqli_data_seek($result, 0);

?>
<body>
 <font face="Tahoma" size="2">
 <table border="0" width="50%" align="center" cellpadding="2" cellspacing="2">
  <caption align="center" dir="rtl"><b><?php echo $row2['question'];?></b></caption>
  <?php $i=1;
   while($row1=mysqli_fetch_array($result)){
   if($i==1) $pic='red';
   elseif($i==2) $pic='blue';
   elseif($i==3)  $pic='green'; 
   elseif($i==4)  $pic='orange';
  ?>
  <tr bgcolor="#339999">
   <td width="33%"><?php echo $row1['title'];?></td>
   <td width="33%"><img src="../pic/poll/<?php echo $pic;?>.gif" width="<?php echo (100*$row1['num'])/$total_nazar?>" height="15"/>&nbsp;&nbsp;&nbsp;<?php echo $row1['num'];?>/<?php echo $total_nazar;?></td>
   <td width="33%"><?php echo (100*$row1['num'])/$total_nazar?>%</td>
  </tr>
  <?php $i++; }?>
 </table>
 </font>
</body>
</html>