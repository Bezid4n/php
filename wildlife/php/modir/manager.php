<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title><?php if($_GET['page_name']=="desctop")
				echo "&hearts; میز کار &hearts;";
			 else if($_GET['page_name']=="wildlife")
				echo "&hearts; ثبت حیات وحش &hearts;";
			 else if($_GET['page_name']=="send_new_news")
				echo "&hearts; پست خبر جدید &hearts;";
			 else if($_GET['page_name']=="manager_news")
				echo "&hearts; مدیریت اخبار قبلی &hearts;";
			 else if($_GET['page_name']=="tablighat")
				echo "&hearts; تبلیغات &hearts;";
			 else if($_GET['page_name']=="nazarkhahi")
				echo "&hearts; نظرخواهی &hearts;";
			 else if($_GET['page_name']=="user_site")
				echo "&hearts; کاربران عضو سایت &hearts;";
			 else if($_GET['page_name']=="delete_user")
				echo "&hearts; حذف کاربر قانون شکن &hearts;";
			 else if($_GET['page_name']=="change_user_pass")
				echo "&hearts; تغییر نام کاربری و رمز ورود &hearts;";
			 else if($_GET['page_name']=="galery")
			    echo "&hearts; گالری &hearts;";
			 else if($_GET['page_name']=="download")
			    echo "&hearts; دانلود &hearts;";
			 else if($_GET['page_name']=="contact_me")
			    echo "&hearts; ارتباط با ما &hearts;";	
			 else if($_GET['page_name']=="")
				echo ":: مدیریت وبسایت حیات وحش ایران ::";
	 ?></title>
<?php include("../../html/css2.html")?>
</head>
<body>
 <table border="0" cellspacing="0" width="100%">
  <!--Up site-->
  <tr>
   <td>
   <?php 
		include("../db.php");
		
		$query="SELECT * FROM `sabt_nam`";
		
		$result=mysqli_query($link,$query);
	 ?>
    <table border="0" cellspacing="0" width="100%" cellpadding="0">
	 <tr>
	  <!--logo-->
	  <td width="100%"><img src="../../pic/wildlife_manager.jpg" width="100%" height="250"/></td>
	 </tr>
	  
	 <tr>
	  <!--marquee-->
	  <td>
	   <marquee behavior="scroll" dir="rtl" direction="right" scrollamount="10" width="100%" height="25" bgcolor="#006633" onmouseover="stop()" onmouseout="start()">
	   <font face="Tahoma, Arial" size="2" color="#FFFFFF"> کاربران عضو سایت :
	    <?php while($row=mysqli_fetch_array($result)){ 
		 echo $row['name_karbari']."&nbsp;".","."&nbsp;"; }?>
	   </font></marquee>
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
	  <!--left menu-->
	  <td width="80%" valign="top">
	     <?php 
			if($_GET['page_name']=="desctop") 
			include("desctop.php");
			if($_GET['page_name']=="") 
			include("desctop.php");
			elseif($_GET['page_name']=="wildlife")
			include("wildlife.php");
			elseif($_GET['page_name']=="send_new_news")
			include("send_new_news.php");
			elseif($_GET['page_name']=="manager_news")
			include("manager_news.php");
			elseif($_GET['page_name']=="tablighat")
			include("tablighat.php");
			elseif($_GET['page_name']=="nazarkhahi")
			include("nazarkhahi.php");
			elseif($_GET['page_name']=="user_site")
			include("user_site.php");
			elseif($_GET['page_name']=="delete_user")
			include("delete_user.php");
			elseif($_GET['page_name']=="change_user_pass")
			include("change_user_pass.php");
			elseif($_GET['page_name']=="galery")
			include("galery.php");
			elseif($_GET['page_name']=="download")
			include("download.php");
			elseif($_GET['page_name']=="contact_me")
			include("contact_me.php");
		 ?>
	  </td>
	  <!--right menu-->
	  <td width="20%" valign="top">
	   <table border="0" cellspacing="0" width="100%">
	    <caption align="center" dir="rtl"><b>امکانات</b>
		 <hr color="#999999" align="center" width="95%" size="2"></caption>
	    <tr>
		 <td dir="rtl"><a href="manager.php?page_name=desctop">میز کار</a></td>
		</tr>
		<tr>
		 <td dir="rtl"><a href="manager.php?page_name=send_new_news">پست خبر جدید</a></td>
		</tr>
		<tr>
		 <td dir="rtl"><a href="manager.php?page_name=manager_news">مدیریت اخبار قبلی</a></td>
		</tr>
		<tr>
		 <td dir="rtl"><a href="manager.php?page_name=tablighat">تبلیغات</a></td>
		</tr>
		<tr>
		 <td dir="rtl"><a href="manager.php?page_name=nazarkhahi">نظرخواهی</a></td>
		</tr>
		<tr>
		 <td dir="rtl"><a href="manager.php?page_name=user_site">کاربران عضو سایت</a></td>
		</tr>
		<tr>
		 <td dir="rtl"><a href="manager.php?page_name=delete_user">حذف کاربر قانون شکن</a></td>
		</tr>
		<tr>
		 <td dir="rtl"><a href="../../home.php?page_name=home" target="_blank">مشاهده سایت</a></td>
		</tr>
		<tr>
		 <td dir="rtl"><a href="manager.php?page_name=change_user_pass">تغییر نام کاربری و رمز ورود</a></td>
		</tr>
		<tr>
		 <td dir="rtl"><a href="../logout.php">خروج از بخش مدیریت</a></td>
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
 </table>
</body>
</html>
