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
  
  $camera=$_POST['camera'];
  $resulesion=$_POST['resulesion'];
  $flash=$_POST['flash'];
  $focus=$_POST['focus'];
  $bozorgnema=$_POST['bozorgnema'];
  $tashkhis_labkhand=$_POST['tashkhis_labkhand'];
  $filmbardari=$_POST['filmbardari'];
  $larzeshgir=$_POST['larzeshgir'];
  $camera2=$_POST['camera2'];
  $kahesh_redeye=$_POST['kahesh_redeye'];
  $tashkhis_chehre=$_POST['tashkhis_chehre'];
  
  if(empty($focus)) $focus=2;
  if(empty($bozorgnema)) $bozorgnema=2;
  if(empty($tashkhis_labkhand)) $tashkhis_labkhand=2;
  if(empty($filmbardari)) $filmbardari=2;
  if(empty($larzeshgir)) $larzeshgir=2;
  if(empty($camera2)) $camera2=2;
  if(empty($kahesh_redeye)) $kahesh_redeye=2;
  if(empty($tashkhis_chehre)) $tashkhis_chehre=2;
  
  $cod_mob=$_GET['cod_mob'];
 
 $query2="select * from camera_mob where cod_mob='$cod_mob'";
 $result2=mysql_db_query("gsm",$query2,$link);
 $row2=mysql_fetch_array($result2);
 $num=mysql_num_rows($result2);
	
	
if ($num>0) 
{ 
	
?>
	<script language="javascript" type="text/javascript">
	alert("این مشخصات قبلا برای این گوشی ثبت شده است!");
	window.location="manager.php?page_name=mobile2&cod_mobile=&cod_mobile=<?php echo $cod_mob;?>"
	</script>
	<?php } else {
  
 $query="INSERT INTO `camera_mob` (`cod_mob`, `camera`, `resulesion`, `flash`, `focus_auto`, `bozorgnema`, `tashkhis_labkhand`, `filmbardari`, `larzeshgir`, `camera2`, `kahesh_redeye`, `tashkhis_chehre` ) VALUES ('$cod_mob','$camera','$resulesion','$flash','$focus','$bozorgnema','$tashkhis_labkhand','$filmbardari','$larzeshgir','$camera2','$kahesh_redeye','$tashkhis_chehre')";
						
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
