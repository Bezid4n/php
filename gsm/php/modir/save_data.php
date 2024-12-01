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
  
  $port=$_POST['port'];
  $send_msg=$_POST['send_msg'];
  $infrared=$_POST['infrared'];
  $bluetooth=$_POST['bluetooth'];
  $gprs=$_POST['gprs'];
  $WAP=$_POST['WAP'];
  $HTML=$_POST['HTML'];
  $wlan=$_POST['wlan'];
  
  if(empty($infrared)) $infrared=2;
  if(empty($bluetooth)) $bluetooth=2;
  if(empty($gprs)) $gprs=2;
  if(empty($WAP)) $WAP=2;
  if(empty($HTML)) $HTML=2;
  if(empty($wlan)) $wlan=2;
  
  $cod_mob=$_GET['cod_mob'];
 
 $query2="select * from data_mob where cod_mob='$cod_mob'";
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
  
 $query="INSERT INTO `data_mob` (`cod_mob`, `port`, `send_msg`, `infrared`, `bluetooth`, `gprs`, `WAP`, `HTML`, `wlan`) VALUES ('$cod_mob','$port','$send_msg','$infrared','$bluetooth','$gprs','$WAP','$HTML','$wlan')";
						
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
