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
  
  $type1=$_POST['type1'];
  $format_sound=$_POST['format_sound'];
  $format_video=$_POST['format_video'];
  $play_music=$_POST['play_music'];
  $mp3_zang=$_POST['mp3_zang'];
  
  if(empty($play_music)) $play_music=2;
  if(empty($mp3_zang)) $mp3_zang=2;
  
  $cod_mob=$_GET['cod_mob'];
 
 $query2="select * from sound_mob where cod_mob='$cod_mob'";
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
  
 $query="INSERT INTO `sound_mob` (`cod_mob`, `type`, `format_sound`, `format_video`, `play_music`, `mp3_zang`) VALUES ('$cod_mob','$type1','$format_sound','$format_video','$play_music','$mp3_zang')";
						
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
