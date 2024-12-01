<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title><?php if($_GET['page_name']=="desctop")
				echo "&hearts; میز کار &hearts;";
			 else if($_GET['page_name']=="tablighat")
				echo "&hearts; تبلیغات &hearts;";
			 else if($_GET['page_name']=="user_site")
				echo "&hearts; کاربران عضو سایت &hearts;";
			 else if($_GET['page_name']=="delete_user")
				echo "&hearts; حذف کاربر قانون شکن &hearts;";
			 else if($_GET['page_name']=="change_user_pass")
				echo "&hearts; تغییر نام کاربری و رمز ورود &hearts;";
			 else if($_GET['page_name']=="contact_me")
			    echo "&hearts; نظرات و پیشنهادات &hearts;";
			 else if($_GET['page_name']=="about_me")
			    echo "&hearts; درباره ما &hearts;";
			 else if($_GET['page_name']=="manager_news")
			    echo "&hearts; مدیریت اخبار قبلی &hearts;";
			 else if($_GET['page_name']=="baner")
			    echo "&hearts; بنر تبلیغاتی &hearts;";
			 else if($_GET['page_name']=="send_new_news")
			    echo "&hearts; ارسال خبر &hearts;";
			 else if($_GET['page_name']=="mobile")
			    echo "&hearts; ثبت موبایل &hearts;";
			 else if($_GET['page_name']=="mobile2")
			    echo "&hearts; ثبت مشخصات موبایل &hearts;";
			 else if($_GET['page_name']=="send_barasi")
			    echo "&hearts; ارسال بررسی تخصصی &hearts;";
			 else if($_GET['page_name']=="download")
			    echo "&hearts; ثبت دانلودی ها &hearts;";
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
	  <td width="100%"><object width="1000" height="300" archive="1"><param name="movie" value="../../pic/logo/logo.swf"/><param name="quality" value="high" /><embed src="../../pic/logo/logo.swf" width="1000" height="300"></embed></object></td>
	 </tr>
	  <?php 
		$link=mysql_connect("localhost","root","");
		if (!$link)
		die ("اشكال در ارتباط با پایگاه داده!");
		$query="SELECT * FROM `sabt_nam`";
		$result=mysql_db_query("gsm",$query,$link);
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
       <table border="0" cellpadding="0" width="100%" cellspacing="0">
        <tr>
         <td bgcolor="#000000" width="20"></td>
         <td>
	   <table border="0" cellspacing="0" width="100%" align="center" bgcolor="#000CFF" cellpadding="0">
	    <tr>
         <td width="100%" dir="rtl" align="center">
          <img src="../../pic/tbl/emkanat.jpg" height="20" width="100" align="middle"/>
         </td>
        </tr>
	    <tr align="center">
		 <td dir="rtl" width="100%">
          <a href="manager.php?page_name=desctop"><img onmouseover='this.src="../../pic/botton/desctop2.jpg"' onmouseout='this.src="../../pic/botton/desctop1.jpg"' src="../../pic/botton/desctop1.jpg" width="120" height="30" border="0"/></a><a href="manager.php?page_name=tablighat"><img onmouseover='this.src="../../pic/botton/tablighat2.jpg"' onmouseout='this.src="../../pic/botton/tablighat1.jpg"' src="../../pic/botton/tablighat1.jpg" width="120" height="30" border="0"/></a><a href="manager.php?page_name=send_barasi"><img onmouseover='this.src="../../pic/botton/barasi12.jpg"' onmouseout='this.src="../../pic/botton/barasi11.jpg"' src="../../pic/botton/barasi11.jpg" width="120" height="30" border="0"/></a><a href="manager.php?page_name=user_site"><img onmouseover='this.src="../../pic/botton/user2.jpg"' onmouseout='this.src="../../pic/botton/user1.jpg"' src="../../pic/botton/user1.jpg" width="120" height="30" border="0"/></a><a href="manager.php?page_name=delete_user"><img onmouseover='this.src="../../pic/botton/del_user2.jpg"' onmouseout='this.src="../../pic/botton/del_user1.jpg"' src="../../pic/botton/del_user1.jpg" width="120" height="30" border="0"/></a><a href="../../index.php" target="_blank"><img onmouseover='this.src="../../pic/botton/show_site2.jpg"' onmouseout='this.src="../../pic/botton/show_site1.jpg"' src="../../pic/botton/show_site1.jpg" width="120" height="30" border="0"/></a><a href="manager.php?page_name=change_user_pass"><img onmouseover='this.src="../../pic/botton/change_user2.jpg"' onmouseout='this.src="../../pic/botton/change_user1.jpg"' src="../../pic/botton/change_user1.jpg" width="120" height="30" border="0"/></a><a href="../logout.php"><img onmouseover='this.src="../../pic/botton/logout_site2.jpg"' onmouseout='this.src="../../pic/botton/logout_site1.jpg"' src="../../pic/botton/logout_site1.jpg" width="120" height="30" border="0"/></a></td>
		</tr>
	   </table>
       </td>
       <td bgcolor="#000000" width="20"></td>
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
			if($_GET['page_name']=="tablighat")
			include("tablighat.php");
			if($_GET['page_name']=="user_site")
			include("user_site.php");
			if($_GET['page_name']=="delete_user")
			include("delete_user.php");
			if($_GET['page_name']=="change_user_pass")
			include("change_user_pass.php");
			if($_GET['page_name']=="send_new_news")
			include("send_new_news.php");
			if($_GET['page_name']=="send_barasi")
			include("send_barasi.php");
			if($_GET['page_name']=="manager_news")
			include("manager_news.php");
			if($_GET['page_name']=="baner")
			include("baner.php");
			if($_GET['page_name']=="about_me")
			include("about_me.php");
			if($_GET['page_name']=="mobile")
			include("mobile.php");
			if($_GET['page_name']=="download")
			include("download.php");
			if($_GET['page_name']=="mobile2")
			include("mobile2.php");
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
