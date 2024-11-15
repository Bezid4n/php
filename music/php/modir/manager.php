<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title><?php if($_GET['page_name']=="desctop")
				echo "&hearts; میز کار &hearts;";
			 else if($_GET['page_name']=="tablighat")
				echo "&hearts; تبلیغات &hearts;";
			 else if($_GET['page_name']=="send_film")
				echo "&hearts; ارسال فیلم &hearts;";
			 else if($_GET['page_name']=="modiriat")
				echo "&hearts; مدیریت &hearts;";
			 else if($_GET['page_name']=="nazarkhahi")
				echo "&hearts; نظرخواهی &hearts;";
			 else if($_GET['page_name']=="biugerafi")
				echo "&hearts; بیوگرافی &hearts;";
			 else if($_GET['page_name']=="user_site")
				echo "&hearts; کاربران عضو سایت &hearts;";
			 else if($_GET['page_name']=="delete_user")
				echo "&hearts; حذف کاربر قانون شکن &hearts;";
			 else if($_GET['page_name']=="delete_massege")
				echo "&hearts; حذف پیغام های غیر مجاز &hearts;";
			 else if($_GET['page_name']=="change_user_pass")
				echo "&hearts; تغییر نام کاربری و رمز ورود &hearts;";
			 else if($_GET['page_name']=="galery")
			    echo "&hearts; گالری &hearts;";
			 else if($_GET['page_name']=="send_music")
			    echo "&hearts; ارسال آهنگ &hearts;";
			 else if($_GET['page_name']=="send_post")
			    echo "&hearts; ارسال پست ویژه &hearts;";
			 else if($_GET['page_name']=="contact_me")
			    echo "&hearts; ارتباط با ما &hearts;";	
			 else if($_GET['page_name']=="")
				echo ":: مدیریت وبسایت ::";
	 ?></title>
<?php include("../../html/css2.html")?>
</head>
<body>
 <table border="0" cellspacing="0" width="100%">
  <!--Up site-->
  <tr>
   <td>
    <table border="0" cellspacing="0" width="100%" cellpadding="0">
	 <tr>
	  <!--logo-->
	  <td width="100%"><?php include("../../html/pic.html")?></td>
	 </tr>
	  <?php 
		$link=mysql_connect("localhost","root","");
		if (!$link)
		die ("اشكال در ارتباط با پایگاه داده!");
		$query="SELECT * FROM `sabt_nam`";
		$result=mysql_db_query("music",$query,$link);
	  ?>
	 <tr>
	  <!--marquee-->
	  <td width="100%" valign="top">
	   <marquee behavior="scroll" dir="rtl" direction="right" scrollamount="5" width="100%" bgcolor="#000000" onmouseover="stop()" onmouseout="start()">
	   <font face="Tahoma, Arial" size="2" color="#FFFFFF"> کاربران عضو سایت :
	    <?php while($row=mysql_fetch_array($result)){ 
		 echo $row['name_karbari']."&nbsp;".","."&nbsp;"; }?>
	   </font></marquee>
 	  </td>
	 </tr> 
     <tr>
      <!--emkanat-->
	  <td width="20%" valign="top">
	   <table border="0" cellspacing="0" width="100%" bgcolor="#333333" align="center">
	    <tr>
         <td background="../../pic/tbl/tbl.jpg" width="100%" dir="rtl" align="center" colspan="8">
          <font face="Arial, Helvetica, sans-serif" size="3"><b>امکانات</b></font>
         </td>
        </tr>
	    <tr align="center">
		 <td dir="rtl"><a href="../logout.php">خروج از بخش مدیریت</a></td>
         <td dir="rtl"><a href="manager.php?page_name=change_user_pass">تغییر نام کاربری و رمز ورود</a></td>
         <td dir="rtl"><a href="../../index.php" target="_blank">مشاهده سایت</a></td>
         <td dir="rtl"><a href="manager.php?page_name=delete_user">حذف کاربر قانون شکن</a></td>
         <td dir="rtl"><a href="manager.php?page_name=user_site">کاربران عضو سایت</a></td>
         <td dir="rtl"><a href="manager.php?page_name=nazarkhahi">نظرخواهی</a></td>
         <td dir="rtl"><a href="manager.php?page_name=tablighat">تبلیغات</a></td>
         <td dir="rtl"><a href="manager.php?page_name=desctop">میز کار</a></td>
		</tr>
		<tr>
		 <td><br /></td>
		</tr>
	   </table>
	  </td>
     </tr>
	</table>
   </td>	  
  </tr>
  <!--base form-->
   <tr>
   <td valign="top">
    <table border="0" cellspacing="0" width="100%">
	 <tr>
	  <!--open page-->
	  <td width="80%" valign="top">
	     <?php 
			if($_GET['page_name']=="desctop")
			include("desctop.php");
			if($_GET['page_name']=="biugerafi")
			include("biugerafi.php");
			if($_GET['page_name']=="modiriat")
			include("modiriat.php");
			if($_GET['page_name']=="tablighat")
			include("tablighat.php");
			if($_GET['page_name']=="nazarkhahi")
			include("nazarkhahi.php");
			if($_GET['page_name']=="user_site")
			include("user_site.php");
			if($_GET['page_name']=="delete_user")
			include("delete_user.php");
			if($_GET['page_name']=="delete_massege")
			include("delete_massege.php");
			if($_GET['page_name']=="change_user_pass")
			include("change_user_pass.php");
			if($_GET['page_name']=="galery")
			include("galery.php");
			if($_GET['page_name']=="send_music")
			include("send_music.php");
			if($_GET['page_name']=="send_film")
			include("send_film.php");
			if($_GET['page_name']=="send_post")
			include("send_post.php");
			if($_GET['page_name']=="contact_me")
			include("contact_me.php");
		 ?>
	  </td>
	 </tr>
	</table>
   </td>
  </tr>
 </table>
</body>
</html>
