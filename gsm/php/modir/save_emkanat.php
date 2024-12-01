<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>
<?php
  $link=mysql_connect("localhost","root","");
  
  if(!$link)
  die("اشکال در ارتباط با پایگاه داده!");
  
  $os=$_POST['os'];
  $output_hedfon=$_POST['output_hedfon'];
  $radio=$_POST['radio'];
  $gps=$_POST['gps'];
  $sound_recorder=$_POST['sound_recorder'];
  $shomaregir_sound=$_POST['shomaregir_sound'];
  $monshi_tell=$_POST['monshi_tell'];
  $ifon=$_POST['ifon'];
  $edit_office=$_POST['edit_office'];
  $display_office=$_POST['display_office'];
  $display_pdf=$_POST['display_pdf'];
  $java=$_POST['java'];
  $output_tv=$_POST['output_tv'];
  
  if(empty($radio)) $radio=2;
  if(empty($gps)) $gps=2;
  if(empty($sound_recorder)) $sound_recorder=2;
  if(empty($shomaregir_sound)) $shomaregir_sound=2;
  if(empty($monshi_tell)) $monshi_tell=2;
  if(empty($ifon)) $ifon=2;
  if(empty($edit_office)) $edit_office=2;
  if(empty($display_office)) $display_office=2;
  if(empty($display_pdf)) $display_pdf=2;
  if(empty($java)) $java=2;
  if(empty($output_tv)) $output_tv=2;
  
  $cod_mob=$_GET['cod_mob'];
 
 $query2="select * from emkanat_mob where cod_mob='$cod_mob'";
 $result2=mysql_db_query("gsm",$query2,$link);
 $row2=mysql_fetch_array($result2);
 $num=mysql_num_rows($result2);
	
	
if ($num>0) 
{ 
	
?>
	<script language="javascript" type="text/javascript">
	alert("این مشخصات قبلا برای این گوشی ثبت شده است!");
	window.location="manager.php?page_name=mobile2&cod_mobile=<?php echo $cod_mob;?>";
	</script>
	<?php } else {
  
 $query="INSERT INTO `emkanat_mob` (`cod_mob`, `os`, `output_hedfon`, `radio`, `gps`, `output_tv`, `sound_recorder`, `shomaregir_sound`, `monshi_tell`, `ifon`, `edit_office`, `display_office`, `display_pdf`, `java`) VALUES ('$cod_mob','$os','$output_hedfon','$radio','$gps','$output_tv','$sound_recorder','$shomaregir_sound','$monshi_tell','$ifon','$edit_office','$display_office','$display_pdf','$java')";
						
  if(mysql_db_query("gsm",$query,$link)){
  ?>
   <script language="JavaScript" type="text/JavaScript">
    alert("مشخصات به خوبی ارسال شد");
    window.location="manager.php?page_name=mobile2&cod_mobile=<?php echo $cod_mob;?>"
   </script>
  <?php 
  } }  ?>
<body>
</body>
</html>
