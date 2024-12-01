<?php session_start(); ?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<head>
 <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
 <title><?php if($_GET['page_name']=="")
                echo "** پایگاه تخصصی اطلاع رسانی موبایل **";
			 elseif($_GET['page_name']=="index")
                echo "** پایگاه تخصصی اطلاع رسانی موبایل  **";
			 elseif($_GET['page_name']=="sabt_nam")
                echo "** ثبت نام **";
			 elseif($_GET['page_name']=="about_me")
                echo "** درباره ما **";
			 elseif($_GET['page_name']=="game")
                echo "** برنامه،بازی،تم **";
			 elseif($_GET['page_name']=="download")
                echo "** دانلود **";
			 elseif($_GET['page_name']=="barasi")
                echo "** بررسی تخصصی **";
			 elseif($_GET['page_name']=="contact_me")
                echo "** ارتباط با ما **";
			 elseif($_GET['page_name']=="login")
                echo "** ورود **";
			 elseif($_GET['page_name']=="news")
                echo "** اخبار **";
			 elseif($_GET['page_name']=="show_news")
                echo "** خبر مربوطه **";
			 elseif($_GET['page_name']=="barand")
                echo "** برندهای موبایل **";
			 elseif($_GET['page_name']=="mobile")
                echo "** مدلهای مربوطه **";
			 elseif($_GET['page_name']=="show_barasi")
                echo "** بررسی مربوطه **";
			 elseif($_GET['page_name']=="show_mobile")
                echo "** مدلهای موبایل **";
      ?>
</title>
<script type="text/javascript" src="swfobject.js"></script> 
<?php include("html/css.html");?>
</head>

<body>
<table border="0" cellspacing="0" cellpadding="0" width="100%" align="center">
  <!--top-->
  <tr>
   <td>
    <table  cellspacing="0" cellpadding="0" width="100%">
     <!--logo-->
	 <tr>
	  <td valign="top" colspan="3"><img src="pic/logo.jpg" width="100%" height="150" /></td>
	 </tr>
     <!--boton-->
	 <tr>
      <td>
       <table border="0" width="100%" cellpadding="0" cellspacing="0" background="pic/2.jpg">
        <tr>
         <td>
          <table border="0" cellspacing="0" cellpadding="0" width="100%">
              <form action="php/search.php" method="post" onsubmit="javascript:return check_form1u();" target="_blank">
		      <tr>
               <td align="center"><input name="search" type="submit" value="جستجو"/></td>
		       <td align="center"><input name="t" type="text" size="15%"/></td>
		       <td align="center"><select name="type" dir="rtl"><option>گوشی</option></select>
               </td> 
		      </tr>
		      </form>
		  </table>
         </td>
	     <td width="100%" height="20" dir="rtl" colspan="2">
            <a href="index.php?page_name=index"><img onmouseover='this.src="pic/botton/home2.jpg"' onmouseout='this.src="pic/botton/home1.jpg"' src="pic/botton/home1.jpg" width="80" height="28" border="0"/><a href="index.php?page_name=news"><img onmouseover='this.src="pic/botton/news2.jpg"' onmouseout='this.src="pic/botton/news1.jpg"' src="pic/botton/news1.jpg" width="80" height="28" border="0"/><a href="index.php?page_name=barasi"><img onmouseover='this.src="pic/botton/barasi2.jpg"' onmouseout='this.src="pic/botton/barasi1.jpg"' src="pic/botton/barasi1.jpg" width="80" height="28" border="0"/><a href="index.php?page_name=game"><img onmouseover='this.src="pic/botton/game2.jpg"' onmouseout='this.src="pic/botton/game1.jpg"' src="pic/botton/game1.jpg" width="80" height="28" border="0"/><?php if(!$_SESSION['user']) {?><a href="index.php?page_name=login"><img onmouseover='this.src="pic/botton/login2.jpg"' onmouseout='this.src="pic/botton/login1.jpg"' src="pic/botton/login1.jpg" width="80" height="28" border="0"/><?php } else {?><a href="php/logout.php"><img onmouseover='this.src="pic/botton/logout2.jpg"' onmouseout='this.src="pic/botton/logout1.jpg"' src="pic/botton/logout1.jpg" width="80" height="28" border="0"/><?php }?><a href="index.php?page_name=sabt_nam"><img onmouseover='this.src="pic/botton/sabt2.jpg"' onmouseout='this.src="pic/botton/sabt1.jpg"' src="pic/botton/sabt1.jpg" width="80" height="28" border="0"/>
	     </td>
        </tr>
       </table>
      </td>
     </tr>
     <tr>
     <?php if($_SESSION['user']) {?>
      <td align="center" dir="rtl">
       <font size="2" color="#666666">کاربر <?php echo $_SESSION['user']?> خوش آمدید!</font>
      </td>
      <?php }?>
     </tr>
	</table>   
   </td>
  </tr>
  <tr>
   <td valign="top">
   <!--center-->
    <table border="0" cellspacing="0" cellpadding="0" width="100%">
     <tr>
	  <td width="350" valign="top">
	  <!--left menu-->
       <table border="0" cellpadding="0" cellspacing="0" width="100%" bgcolor="#ffffff">
           <!--tablighat-->
           <?php
			
			$link=mysql_connect("localhost","root","");
			
			if (!$link)
			die ("اشكال در ارتباط با پایگاه داده!");
			
			$query="SELECT * FROM `tablighat` ORDER BY `code` DESC LIMIT 0 , 10";
			$result=mysql_db_query("gsm",$query,$link);
		   ?>
           <tr>
		    <td>
			 <table border="0" cellspacing="0" cellpadding="1" width="100%"><?php while($row=mysql_fetch_array($result)){?><tr><td bordercolor="#FF0000" height="85" align="center"><a href="http://<?php echo $row['link']?>" target="_blank"><img src="<?php echo $row['pic']?>" width="350" height="85" border="0" alt="<?php echo $row['name']?>"/></a></td></tr><?php }?>
			 </table>
			</td>
		   </tr>
          </table>
	  </td>
	  <td width="600" valign="top">
	  <!--center menu-->
	   <table border="0" cellpadding="5" cellspacing="0" align="center" width="100%">
        <tr>
         <td width="70%" valign="top"><?php 
		  if($_GET['page_name']=="index")
	       include("php/index.php");
		  elseif($_GET['page_name']=="")
	       include("php/index.php");
	      elseif($_GET['page_name']=="contact_me")
	       include("php/contact_me.php");
		  elseif($_GET['page_name']=="barasi")
	       include("php/barasi.php");
		  elseif($_GET['page_name']=="game")
	       include("php/game.php");
		  elseif($_GET['page_name']=="about_me")
	       include("php/about_me.php");
		  elseif($_GET['page_name']=="login")
	       include("php/login.php");
		  elseif($_GET['page_name']=="news")
	       include("php/news.php");
		  elseif($_GET['page_name']=="download")
	       include("php/download.php");
		  elseif($_GET['page_name']=="show_news")
	       include("php/show_news.php");
		  elseif($_GET['page_name']=="show_barasi")
	       include("php/show_barasi.php");
		  elseif($_GET['page_name']=="show_mobile")
	       include("php/show_mobile.php");
		  elseif($_GET['page_name']=="barand")
	       include("php/barand.php");
		  elseif($_GET['page_name']=="mobile")
	       include("php/mobile.php");
	      elseif($_GET['page_name']=="sabt_nam")
	       include("php/sabt_nam.php");?>
         </td>
        </tr>
	   </table>	  
	  </td>
	  <td width="50" valign="top">
	  <!--right menu-->
      <?php
			
			$link=mysql_connect("localhost","root","");
			
			if (!$link)
			die ("اشكال در ارتباط با پایگاه داده!");
			
			$query="SELECT * FROM `type_mob` ORDER BY `code` DESC LIMIT 0 , 10";
			$result=mysql_db_query("gsm",$query,$link);
		   ?>
	   <table border="1" cellpadding="5" align="right" width="100%" cellspacing="0" bordercolor="#009900">
        <?php while($row=mysql_fetch_array($result)){?>
        <tr>
         <td><a href="index.php?page_name=mobile&id=<?php echo $row['code'] ?>">
		      <?php echo $row['barand']?></a></td>
        </tr>
        <?php }?>
        <tr>
         <td dir="rtl"><a href="index.php?page_name=barand">سایر ...</a></td>
        </tr>
	   </table>	
	  </td>
	 </tr>
	</table>
   </td>
  </tr>
  <!--bottom-->
  <tr>
   <td width="100%"  align="center" colspan="3">
    <table border="0" cellpadding="0" cellspacing="0" width="100%">
     <!--baner-->
     <?php
			
			$link=mysql_connect("localhost","root","");
			
			if (!$link)
			die ("اشكال در ارتباط با پایگاه داده!");
			
			$query="SELECT * FROM `baner` ORDER BY `code` DESC LIMIT 0 , 1";
			$result=mysql_db_query("gsm",$query,$link);
			$row=mysql_fetch_array($result);
		   ?>
     <tr>
      <td>
       <a href="http://<?php echo $row['link']?>" target="_blank">
        <img src="<?php echo $row['pic']?>" width="800" height="70" alt="<?php echo $row['title']?>" border="0"/></a>
      </td>
     </tr>
     <tr>
      <td align="center" bgcolor="#339900" dir="rtl">
       <a href="index.php?page_name=index">صفحه اصلی</a>&nbsp;<font color="#000000">|</font>&nbsp;
       <a href="index.php?page_name=news">اخبار</a>&nbsp;<font color="#000000">|</font>&nbsp;
       <a href="index.php?page_name=barasi">بررسی تخصصی</a>&nbsp;<font color="#000000">|</font>&nbsp;
       <a href="index.php?page_name=game">برنامه،بازی،تم</a>&nbsp;<font color="#000000">|</font>&nbsp;
       <a href="index.php?page_name=about_me">درباره ما</a>&nbsp;<font color="#000000">|</font>&nbsp;
       <a href="index.php?page_name=contact_me">ارتباط با ما</a>&nbsp;<font color="#000000">
      </td>
     </tr>
     <tr>
      <td bgcolor="#2C8366" align="center">
       <font color="#333333" size="1" face="Tahoma">&copy;Copy Right 2011</font>
      </td>
     </tr>
    </table>
   </td>
  </tr>
</table>
</body>
</html>
