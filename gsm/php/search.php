<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<style type="text/css">
<!--
body,td,th {
	font-size: 10px;
}
-->
</style></head>
 <?php
$link=mysql_connect("localhost","root","");

if (!$link)
die ("اشكال در ارتباط با پایگاه داده!");

 $id=$_POST['t'];

$query="SELECT * FROM mobile WHERE name = $id";
$result=mysql_db_query("gsm",$query,$link);
$row=mysql_fetch_array($result);
$cod_barand=$row['cod_barand'];
$cod_mob=$row['code'];

$query2="SELECT * FROM `type_mob` where code='$cod_barand' ";
$result2=mysql_db_query("gsm",$query2,$link);
$row2=mysql_fetch_array($result2);

$query3="SELECT * FROM `omomi_mob` where cod_mob='$cod_mob' ";
$result3=mysql_db_query("gsm",$query3,$link);
$row3=mysql_fetch_array($result3);

$query4="SELECT * FROM `monitor_mob` where cod_mob='$cod_mob' ";
$result4=mysql_db_query("gsm",$query4,$link);
$row4=mysql_fetch_array($result4);

$query5="SELECT * FROM `sound_mob` where cod_mob='$cod_mob' ";
$result5=mysql_db_query("gsm",$query5,$link);
$row5=mysql_fetch_array($result5);

$query6="SELECT * FROM `memory_mob` where cod_mob='$cod_mob' ";
$result6=mysql_db_query("gsm",$query6,$link);
$row6=mysql_fetch_array($result6);

$query7="SELECT * FROM `data_mob` where cod_mob='$cod_mob' ";
$result7=mysql_db_query("gsm",$query7,$link);
$row7=mysql_fetch_array($result7);

$query8="SELECT * FROM `camera_mob` where cod_mob='$cod_mob' ";
$result8=mysql_db_query("gsm",$query8,$link);
$row8=mysql_fetch_array($result8);

$query9="SELECT * FROM `emkanat_mob` where cod_mob='$cod_mob' ";
$result9=mysql_db_query("gsm",$query9,$link);
$row9=mysql_fetch_array($result9);

$query10="SELECT * FROM `battry_mob` where cod_mob='$cod_mob' ";
$result10=mysql_db_query("gsm",$query10,$link);
$row10=mysql_fetch_array($result10);
?>
<body>
 <table border="0" cellspacing="0" cellpadding="0" width="100%">
  <tr>
   <td align="center" colspan="2">
	<img src="pic/tbl/mob.jpg" width="100%" height="50">
   </td>
  </tr>
  <tr>
   <td width="100%" valign="top">
    <table border="0" cellspacing="0" width="100%">
	 <tr>
      <td align="center" dir="rtl" valign="top">
	   <font face="Tahoma, Arial" size="2"><b><?php echo $row2['barand']?>&nbsp;
	      <?php echo $row['name']?></b></font>
      </td>
	 </tr>
     <tr>
      <td colspan="2" align="right" dir="rtl" bgcolor="#00CCCC">مشخصات عمومی</td>
     </tr>
     <tr>
      <td dir="rtl">
       <table border="0" cellpadding="0" cellspacing="0" width="100%">
        <tr dir="rtl">
         <td bgcolor="#99CC00" width="40%">وضعیت :</td>
         <td bgcolor="#FF9900"><?php echo $row3['vazeiat']?></td>
        </tr>
        <tr dir="rtl">
         <td bgcolor="#99CC00" width="40%">باند :</td>
         <td bgcolor="#FF9900"><?php echo $row3['band']?></td>
        </tr>
        <tr dir="rtl">
         <td bgcolor="#99CC00" width="40%">ابعاد :</td>
         <td bgcolor="#FF9900"><?php echo $row3['abaad']?></td>
        </tr>
        <tr dir="rtl">
         <td bgcolor="#99CC00" width="40%">وزن :</td>
         <td bgcolor="#FF9900"><?php echo $row3['vazn']?></td>
        </tr>
        <tr dir="rtl">
         <td bgcolor="#99CC00" width="40%">رنگ بندی :</td>
         <td bgcolor="#FF9900"><?php echo $row3['color']?></td>
        </tr>
        <tr dir="rtl">
         <td bgcolor="#99CC00" width="40%">فرم :</td>
         <td bgcolor="#FF9900"><?php echo $row3['form']?></td>
        </tr>
       </table>
      </td>
     </tr>
     <tr>
      <td colspan="2" align="right" dir="rtl" bgcolor="#00CCCC">مشخصات صفحه نمایش</td>
     </tr>
     <tr>
      <td dir="rtl">
       <table border="0" cellpadding="0" cellspacing="0" width="100%">
        <tr dir="rtl">
         <td bgcolor="#99CC00" width="40%">نوع صفحه نمایش :</td>
         <td bgcolor="#FF9900"><?php echo $row4['type']?></td>
        </tr>
        <tr dir="rtl">
         <td bgcolor="#99CC00" width="40%">تعداد رنگ قابل نمایش :</td>
         <td bgcolor="#FF9900"><?php echo $row4['teadad_color']?></td>
        </tr>
        <tr dir="rtl">
         <td bgcolor="#99CC00" width="40%">رزولوشن :</td>
         <td bgcolor="#FF9900"><?php echo $row4['resulesion']?></td>
        </tr>
        <tr dir="rtl">
         <td bgcolor="#99CC00" width="40%">سایز :</td>
         <td bgcolor="#FF9900"><?php echo $row4['size']?></td>
        </tr>
        <tr dir="rtl">
         <td bgcolor="#99CC00" width="40%">صفحه لمسی :</td>
         <td bgcolor="#FF9900"><?php if($row4['lamsi']==1){?><font color="#00FF00">دارد</font>
          <?php }elseif($row4['lamsi']==0){?><font color="#FF0000">ندارد</font>
		  <?php }else { echo " "; }?></td>
        </tr>
       </table>
      </td>
     </tr>
     <tr>
      <td colspan="2" align="right" dir="rtl" bgcolor="#00CCCC">مشخصات صدای گوشی</td>
     </tr>
     <tr>
      <td dir="rtl">
       <table border="0" cellpadding="0" cellspacing="0" width="100%">
        <tr dir="rtl">
         <td bgcolor="#99CC00" width="40%">نوع زنگ :</td>
         <td bgcolor="#FF9900"><?php echo $row5['type']?></td>
        </tr>
        <tr dir="rtl">
         <td bgcolor="#99CC00" width="40%">قابلیت پخش موزیک :</td>
         <td bgcolor="#FF9900"><?php if($row5['play_music']==1){?><font color="#00FF00">دارد</font>
          <?php }elseif($row5['play_music']==0){?><font color="#FF0000">ندارد</font>
		  <?php }else { echo " "; }?></td>
        </tr>
        <tr dir="rtl">
         <td bgcolor="#99CC00" width="40%">قرار دادن mp3 بجای زنگ :</td>
         <td bgcolor="#FF9900"><?php if($row5['mp3_zang']==1){?><font color="#00FF00">دارد</font>
          <?php }elseif($row5['mp3_zang']==0){?><font color="#FF0000">ندارد</font>
		  <?php }else { echo " "; }?></td>
        </tr>
        <tr dir="rtl">
         <td bgcolor="#99CC00" width="40%">فرمت های قابل پخش صوتی :</td>
         <td bgcolor="#FF9900"><?php echo $row5['format_sound']?></td>
        </tr>
        <tr dir="rtl">
         <td bgcolor="#99CC00" width="40%">فرمت های قابل پخش تصویری :</td>
         <td bgcolor="#FF9900"><?php echo $row5['format_video']?></td>
        </tr>
       </table>
      </td>
     </tr>
     <tr>
      <td colspan="2" align="right" dir="rtl" bgcolor="#00CCCC">مشخصات حافظه</td>
     </tr>
     <tr>
      <td dir="rtl">
       <table border="0" cellpadding="0" cellspacing="0" width="100%">
        <tr dir="rtl">
         <td bgcolor="#99CC00" width="40%">دفتر تلفن :</td>
         <td bgcolor="#FF9900"><?php echo $row6['daftar_tell']?></td>
        </tr>
        <tr dir="rtl">
         <td bgcolor="#99CC00" width="40%">حافظه داخلی :</td>
         <td bgcolor="#FF9900"><?php echo $row6['memory_dakheli']?></td>
        </tr>
        <tr dir="rtl">
         <td bgcolor="#99CC00" width="40%">درگاه کارت حافظه :</td>
         <td bgcolor="#FF9900"><?php echo $row6['port_memory']?></td>
        </tr>
       </table>
      </td>
     </tr>
     <tr>
      <td colspan="2" align="right" dir="rtl" bgcolor="#00CCCC">دیتا و اینترنت</td>
     </tr>
     <tr>
      <td dir="rtl">
       <table border="0" cellpadding="0" cellspacing="0" width="100%">
        <tr dir="rtl">
         <td bgcolor="#99CC00" width="40%">پورت :</td>
         <td bgcolor="#FF9900"><?php echo $row7['port']?></td>
        </tr>
        <tr dir="rtl">
         <td bgcolor="#99CC00" width="40%">اینفرارد :</td>
         <td bgcolor="#FF9900"><?php if($row7['infrared']==1){?><font color="#00FF00">دارد</font>
          <?php }elseif($row7['infrared']==0){?><font color="#FF0000">ندارد</font>
		  <?php }else { echo " "; }?></td>
        </tr>
        <tr dir="rtl">
         <td bgcolor="#99CC00" width="40%">بلوتوث :</td>
         <td bgcolor="#FF9900"><?php if($row7['bluetooth']==1){?><font color="#00FF00">دارد</font>
          <?php }elseif($row7['bluetooth']==0){?><font color="#FF0000">ندارد</font>
		  <?php }else { echo " "; }?></td>
        </tr>
        <tr dir="rtl">
         <td bgcolor="#99CC00" width="40%">GPRS :</td>
         <td bgcolor="#FF9900"><?php if($row7['gprs']==1){?><font color="#00FF00">دارد</font>
          <?php }elseif($row7['gprs']==0){?><font color="#FF0000">ندارد</font>
		  <?php }else { echo " "; }?></td>
        </tr>
        <tr dir="rtl">
         <td bgcolor="#99CC00" width="40%">شبکه بی سیم:</td>
         <td bgcolor="#FF9900"><?php if($row7['wlan']==1){?><font color="#00FF00">دارد</font>
          <?php }elseif($row7['wlan']==0){?><font color="#FF0000">ندارد</font>
		  <?php }else { echo " "; }?></td>
        </tr>
        <tr dir="rtl">
         <td bgcolor="#99CC00" width="40%">WAP :</td>
         <td bgcolor="#FF9900"><?php if($row7['wap']==1){?><font color="#00FF00">دارد</font>
          <?php }elseif($row7['wap']==0){?><font color="#FF0000">ندارد</font>
		  <?php }else { echo " "; }?></td>
        </tr>
        <tr dir="rtl">
         <td bgcolor="#99CC00" width="40%">HTML :</td>
         <td bgcolor="#FF9900"><?php if($row7['html']==1){?><font color="#00FF00">دارد</font>
          <?php }elseif($row7['html']==0){?><font color="#FF0000">ندارد</font>
		  <?php }else { echo " "; }?></td>
        </tr>
        <tr dir="rtl">
         <td bgcolor="#99CC00" width="40%">ارسال پیام :</td>
         <td bgcolor="#FF9900"><?php echo $row7['send_msg']?></td>
        </tr>
       </table>
      </td>
     </tr>
     <tr>
      <td colspan="2" align="right" dir="rtl" bgcolor="#00CCCC">مشخصات دوربین</td>
     </tr>
     <tr>
      <td dir="rtl">
       <table border="0" cellpadding="0" cellspacing="0" width="100%">
        <tr dir="rtl">
         <td bgcolor="#99CC00" width="40%">دوربین :</td>
         <td bgcolor="#FF9900"><?php echo $row8['camera']?></td>
        </tr>
        <tr dir="rtl">
         <td bgcolor="#99CC00" width="40%">رزولوشن عکس :</td>
         <td bgcolor="#FF9900"><?php echo $row8['resulesion']?></td>
        </tr>
        <tr dir="rtl">
         <td bgcolor="#99CC00" width="40%">فوکوس اتوماتیک :</td>
         <td bgcolor="#FF9900"><?php if($row8['focus_auto']==1){?><font color="#00FF00">دارد</font>
          <?php }elseif($row8['focus_auto']==0){?><font color="#FF0000">ندارد</font>
		  <?php }else { echo " "; }?></td>
        </tr>
        <tr dir="rtl">
         <td bgcolor="#99CC00" width="40%">بزرگنمایی :</td>
         <td bgcolor="#FF9900"><?php if($row8['bozorgnema']==1){?><font color="#00FF00">دارد</font>
          <?php }elseif($row8['bozorgnema']==0){?><font color="#FF0000">ندارد</font>
		  <?php }else { echo " "; }?></td>
        </tr>
        <tr dir="rtl">
         <td bgcolor="#99CC00" width="40%">تشخیص چهره :</td>
         <td bgcolor="#FF9900"><?php if($row8['tashkhis_chehre']==1){?><font color="#00FF00">دارد</font>
          <?php }elseif($row8['tashkhis_chehre']==0){?><font color="#FF0000">ندارد</font>
		  <?php }else { echo " "; }?></td>
        </tr>
        <tr dir="rtl">
         <td bgcolor="#99CC00" width="40%">تشخیص لبخند :</td>
         <td bgcolor="#FF9900"><?php if($row8['tashkhis_labkhand']==1){?><font color="#00FF00">دارد</font>
          <?php }elseif($row8['tashkhis_labkhand']==0){?><font color="#FF0000">ندارد</font>
		  <?php }else { echo " "; }?></td>
        </tr>
        <tr dir="rtl">
         <td bgcolor="#99CC00" width="40%">فلاش :</td>
         <td bgcolor="#FF9900"><?php echo $row8['flash']?></td>
        </tr>
        <tr dir="rtl">
         <td bgcolor="#99CC00" width="40%">فیلمبرداری :</td>
         <td bgcolor="#FF9900"><?php if($row8['filmbardari']==1){?><font color="#00FF00">دارد</font>
          <?php }elseif($row8['filmbardari']==0){?><font color="#FF0000">ندارد</font>
		  <?php }else { echo " "; }?></td>
        </tr>
        <tr dir="rtl">
         <td bgcolor="#99CC00" width="40%">دوربین دوم :</td>
         <td bgcolor="#FF9900"><?php if($row8['camera2']==1){?><font color="#00FF00">دارد</font>
          <?php }elseif($row8['camera2']==0){?><font color="#FF0000">ندارد</font>
		  <?php }else { echo " "; }?></td>
        </tr>
        <tr dir="rtl">
         <td bgcolor="#99CC00" width="40%">کاهش قرمزی چشم :</td>
         <td bgcolor="#FF9900"><?php if($row8['kahesh_redeye']==1){?><font color="#00FF00">دارد</font>
          <?php }elseif($row8['kahesh_redeye']==0){?><font color="#FF0000">ندارد</font>
		  <?php }else { echo " "; }?></td>
        </tr>
        <tr dir="rtl">
         <td bgcolor="#99CC00" width="40%">لرزشگیر دست :</td>
         <td bgcolor="#FF9900"><?php if($row8['larzeshgir']==1){?><font color="#00FF00">دارد</font>
          <?php }elseif($row8['larzeshgir']==0){?><font color="#FF0000">ندارد</font>
		  <?php }else { echo " "; }?></td>
        </tr>
       </table>
      </td>
     </tr>
     <tr>
      <td colspan="2" align="right" dir="rtl" bgcolor="#00CCCC">امکانات</td>
     </tr>
     <tr>
      <td dir="rtl">
       <table border="0" cellpadding="0" cellspacing="0" width="100%">
        <tr dir="rtl">
         <td bgcolor="#99CC00" width="40%">سیستم عامل :</td>
         <td bgcolor="#FF9900"><?php echo $row9['os']?></td>
        </tr>
        <tr dir="rtl">
         <td bgcolor="#99CC00" width="40%">GPS :</td>
         <td bgcolor="#FF9900"><?php if($row9['gps']==1){?><font color="#00FF00">دارد</font>
          <?php }elseif($row9['gps']==0){?><font color="#FF0000">ندارد</font>
		  <?php }else { echo " "; }?></td>
        </tr>
        <tr dir="rtl">
         <td bgcolor="#99CC00" width="40%">رادیو :</td>
         <td bgcolor="#FF9900"><?php if($row9['radio']==1){?><font color="#00FF00">دارد</font>
          <?php }elseif($row9['radio']==0){?><font color="#FF0000">ندارد</font>
		  <?php }else { echo " "; }?></td>
        </tr>
        <tr dir="rtl">
         <td bgcolor="#99CC00" width="40%">ضبط صدا :</td>
         <td bgcolor="#FF9900"><?php if($row9['voise_recorder']==1){?><font color="#00FF00">دارد</font>
          <?php }elseif($row9['voise_recorder']==0){?><font color="#FF0000">ندارد</font>
		  <?php }else { echo " "; }?></td>
        </tr>
        <tr dir="rtl">
         <td bgcolor="#99CC00" width="40%">شماره گیر صوتی :</td>
         <td bgcolor="#FF9900"><?php if($row9['shomaregir_sound']==1){?><font color="#00FF00">دارد</font>
          <?php }elseif($row9['shomaregir_sound']==0){?><font color="#FF0000">ندارد</font>
		  <?php }else { echo " "; }?></td>
        </tr>
        <tr dir="rtl">
         <td bgcolor="#99CC00" width="40%">منشی تلفن :</td>
         <td bgcolor="#FF9900"><?php if($row9['monshi_tell']==1){?><font color="#00FF00">دارد</font>
          <?php }elseif($row9['monshi_tell']==0){?><font color="#FF0000">ندارد</font>
		  <?php }else { echo " "; }?></td>
        </tr>
        <tr dir="rtl">
         <td bgcolor="#99CC00" width="40%">خروجی ندفون :</td>
         <td bgcolor="#FF9900"><?php echo $row9['output_hedfon']?></td>
        </tr>
        <tr dir="rtl">
         <td bgcolor="#99CC00" width="40%">آی فون :</td>
         <td bgcolor="#FF9900"><?php if($row9['ifon']==1){?><font color="#00FF00">دارد</font>
          <?php }elseif($row9['ifon']==0){?><font color="#FF0000">ندارد</font>
		  <?php }else { echo " "; }?></td>
        </tr>
        <tr dir="rtl">
         <td bgcolor="#99CC00" width="40%">ویرایشگر آفیس :</td>
         <td bgcolor="#FF9900"><?php if($row9['edit_office']==1){?><font color="#00FF00">دارد</font>
          <?php }elseif($row9['edit_office']==0){?><font color="#FF0000">ندارد</font>
		  <?php }else { echo " "; }?></td>
        </tr>
        <tr dir="rtl">
         <td bgcolor="#99CC00" width="40%">نمایش فایل های آفیس :</td>
         <td bgcolor="#FF9900"><?php if($row9['display_office']==1){?><font color="#00FF00">دارد</font>
          <?php }elseif($row9['display_office']==0){?><font color="#FF0000">ندارد</font>
		  <?php }else { echo " "; }?></td>
        </tr>
        <tr dir="rtl">
         <td bgcolor="#99CC00" width="40%">نمایش پی دی اف :</td>
         <td bgcolor="#FF9900"><?php if($row9['display_pdf']==1){?><font color="#00FF00">دارد</font>
          <?php }elseif($row9['display_pdf']==0){?><font color="#FF0000">ندارد</font>
		  <?php }else { echo " "; }?></td>
        </tr>
        <tr dir="rtl">
         <td bgcolor="#99CC00" width="40%">JAVA :</td>
         <td bgcolor="#FF9900"><?php if($row9['java']==1){?><font color="#00FF00">دارد</font>
          <?php }elseif($row9['java']==0){?><font color="#FF0000">ندارد</font>
		  <?php }else { echo " "; }?></td>
        </tr>
        <tr dir="rtl">
         <td bgcolor="#99CC00" width="40%">خروجی TV :</td>
         <td bgcolor="#FF9900"><?php if($row9['output_tv']==1){?><font color="#00FF00">دارد</font>
          <?php }elseif($row9['output_tv']==0){?><font color="#FF0000">ندارد</font>
		  <?php }else { echo " "; }?></td>
        </tr>
       </table>
      </td>
     </tr>
     <tr>
      <td colspan="2" align="right" dir="rtl" bgcolor="#00CCCC">مشخصات باتری</td>
     </tr>
     <tr>
      <td dir="rtl">
       <table border="0" cellpadding="0" cellspacing="0" width="100%">
        <tr dir="rtl">
         <td bgcolor="#99CC00" width="40%">باتری :</td>
         <td bgcolor="#FF9900"><?php echo $row10['battry']?></td>
        </tr>
        <tr dir="rtl">
         <td bgcolor="#99CC00" width="40%">زمان مکالمه :</td>
         <td bgcolor="#FF9900"><?php echo $row10['time_mokaleme']?></td>
        </tr>
        <tr dir="rtl">
         <td bgcolor="#99CC00" width="40%">زمان جانشین :</td>
         <td bgcolor="#FF9900"><?php echo $row10['time_janeshin']?></td>
        </tr>
       </table>
      </td>
     </tr>
	</table>	
   </td>
   <td align="right" valign="top">
    <img src="<?php echo $row['pic']?>" width="100" height="150"/>
   </td>
  </tr>
 </table>
</body>
</html>
