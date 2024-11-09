<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title><?php  if($_GET['page_name']=="tablighat")
				echo "&hearts; تبلیغات &hearts;";
			 else if($_GET['page_name']=="change_user_pass")
				echo "&hearts; تغییر نام کاربری و رمز ورود &hearts;";
			 else if($_GET['page_name']=="about_me")
			    echo "&hearts; درباره ما &hearts;";
			 else if($_GET['page_name']=="type_m")
			    echo "&hearts; نوع محصول &hearts;";
			 else if($_GET['page_name']=="mahsolat")
			    echo "&hearts; اطلاعات محصول &hearts;";
			 else if($_GET['page_name']=="result_mahsolat")
			    echo "&hearts; عملیات روی محصول &hearts;";
			 else if($_GET['page_name']==" ")
				echo ":: مدیریت وبسایت ::";
			 else if($_GET['page_name']=="delete_massege")
				echo ":: حذف پیام های غیر مجاز ::";
	 ?></title>
<?php include("../../html/css2.html")?>
</head>
<body bgcolor="#FFFFff">
 <table border="0" cellspacing="0" width="100%" >
  <!--Up site-->
  <tr>
    <object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" 
codebase="http://download.macromedia.com 
/pub/shockwave/cabs/flash/swflash.cab#version=6,0,0,0#" 
width="1050" height="200"> 
<param name="movie" 
value="../../pic/movie1.swf" /> 
<param name="quality" value="high" /> 
<param name="wmode" value="opaque"> 
<embed src="../../pic/movie1.swf" 
quality="high" pluginspage="http://www.macromedia.com/go/getflashplayer" 
wmode="opaque" type="application/x-shockwave-flash" 
width="1050" height="200"> 
</embed> 
</object>
  </tr>
  <!--base form-->
  <tr>
   <td valign="top">
    <table border="0" cellspacing="0" width="100%">
	 <tr>
	  <!--open page-->
	  <td width="60%" valign="top">
       <?php 
			if($_GET['page_name']=="tablighat")
			include("tablighat.php");
			if($_GET['page_name']=="user_site")
			include("user_site.php");
			if($_GET['page_name']=="change_user_pass")
			include("change_user_pass.php");
			if($_GET['page_name']=="type_m")
			include("type_m.php");
			if($_GET['page_name']=="about_me")
			include("about_me.php");
			if($_GET['page_name']=="delete_massege")
			include("delete_massege.php");
			if($_GET['page_name']=="mahsolat")
			include("mahsolat.php");
			if($_GET['page_name']=="result_mahsolat")
			include("result_mahsolat.php");
		 ?>
	  </td>
      <td width="40%" valign="top">
       <table border="0" cellspacing="1" width="90%" align="center" cellpadding="2" >
        <tr>
         <td align="center" colspan="3">
          امکانات
         </td>
        </tr>
        <tr>
         <td align="right" width="500">
          <font face="Tahoma, Arial" size="1">ثبت انواع محصولات در سایت</font></td>
         <td align="right" width="400"><a href="manager.php?page_name=type_m">نوع محصول</a></td>
         <td height="30" width="100"><img src="../../pic/modir_desctop/d (3).png" width="20" height="20"/></td>
        </tr>
        <tr>
         <td align="right"><font face="Tahoma, Arial" size="1">ثبت اطلاعات محصول</font>   </td>
         <td align="right"><a href="manager.php?page_name=mahsolat">اطلاعات محصول</a></td>
         <td height="30" ><img src="../../pic/modir_desctop/d (4).png" width="20" height="20"/></td>
        </tr>
        <tr>
         <td align="right">
          <font face="Tahoma, Arial" size="1">تبلیغ کردن سایت های دیگر در سایت خود</font></td>
         <td align="right"><a href="manager.php?page_name=tablighat">تبلیغات</a></td>
         <td height="30" ><img src="../../pic/modir_desctop/d (1).png" width="20" height="20"/></td>
        </tr>
        <tr>
         <td align="right"><font face="Tahoma, Arial" size="1">حذف پیغام های غیر مجاز وارد شده توسط کاربران </font></td>
         <td align="right"><a href="manager.php?page_name=delete_massege" >حذف پیغام</a></td>
         <td height="30" ><img src="../../pic/modir_desctop/d (13).png" width="20" height="20"/></td>
        </tr>
        <tr>
         <td align="right"><font face="Tahoma, Arial" size="1">مشاهده صفحه اصلی سایت </font></td>
         <td align="right"><a href="../../index.php" target="_blank">مشاهده سایت</a></td>
         <td height="30" ><img src="../../pic/modir_desctop/d (8).png" width="20" height="20"/></td>
        </tr>
        <tr>
         <td align="right"><font face="Tahoma, Arial" size="1">توضیحات درباره شرکت</font>   </td>
         <td align="right"><a href="manager.php?page_name=about_me">درباره ما</a></td>
         <td height="30" ><img src="../../pic/modir_desctop/d (2).png" width="20" height="20"/></td>
        </tr>
        <tr>
         <td align="right"><font face="Tahoma, Arial" size="1">تغییر دادن نام کاربری یا رمز ورود خود</font>   </td>
         <td align="right"><a href="manager.php?page_name=change_user_pass">تغییر نام کاربری و رمز ورود</a></td>
         <td height="30" ><img src="../../pic/modir_desctop/d (7).png" width="20" height="20"/></td>
        </tr>
        <tr>
         <td align="right"><font face="Tahoma, Arial" size="1">خروج از بخش مدیریت</font></td>
         <td align="right"><a href="../logout.php">خروج</a></td>
         <td height="30" ><img src="../../pic/modir_desctop/d (5).png" width="20" height="20"/></td>
        </tr>
       </table>
      </td>
	 </tr>
	</table>
   </td>
  </tr>
 </table>
</body>
</html>
