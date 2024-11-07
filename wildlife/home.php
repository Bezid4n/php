<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title><?php 
             if($_GET['page_name']=="")
                echo "** حیات وحش ایران **";
			 elseif($_GET['page_name']=="home")
                echo "** حیات وحش ایران **";
			 elseif($_GET['page_name']=="galery")
                echo "** گالری **";
			 elseif($_GET['page_name']=="news")
                echo "** اخبار **";
			 elseif($_GET['page_name']=="show_news")
                echo "** خبر مربوطه **";
			 elseif($_GET['page_name']=="download")
                echo "** دانلود **";
			 elseif($_GET['page_name']=="sabt_nam")
                echo "** ثبت نام **";
			 elseif($_GET['page_name']=="search")
                echo "** جستجو **";
			 elseif($_GET['page_name']=="contact_me")
                echo "** ارتباط با ما **";
			 elseif($_GET['page_name']=="show_download")
			    echo "** توضیحات دانلود **";
			 elseif($_GET['page_name']=="yazd")
			    echo "** استان یزد **";
			 elseif($_GET['page_name']=="isfahan")
	            echo "** استان اصفهان **";
	         elseif($_GET['page_name']=="tehran")
	            echo "** استان تهران **";
	         elseif($_GET['page_name']=="mazandaran")
	            echo "** استان مازندران **";
	         elseif($_GET['page_name']=="gilan")
	            echo "** استان گیلان **";
	         elseif($_GET['page_name']=="golestan")
	            echo "** استان گلستان **";
	         elseif($_GET['page_name']=="kerman")
	            echo "** استان کرمان **";
	         elseif($_GET['page_name']=="kermanshah")
	            echo "** استان کرمانشاه **";
	         elseif($_GET['page_name']=="ilam")
	            echo "** استان ایلام **";
	         elseif($_GET['page_name']=="4mahal")
	            echo "** استان چهارمهال و بختیاری **";
	         elseif($_GET['page_name']=="kohgiloye")
	            echo "** استان کهگیلویه و بویر احمد **";
	         elseif($_GET['page_name']=="sistan")
	            echo "** استان سیستان و بلوچستان **";
	         elseif($_GET['page_name']=="kh_sh")
	            echo "** استان خراسان شمالی **";
	         elseif($_GET['page_name']=="kh_r")
	            echo "** استان خراسان رضوی **";
	         elseif($_GET['page_name']=="kh_j")
	            echo "** استان خراسان جنوبی **";
	         elseif($_GET['page_name']=="ardabil")
	            echo "** استان اردبیل **";
	         elseif($_GET['page_name']=="azr_sh")
	            echo "** استان آذربایجان شرقی **";
	         elseif($_GET['page_name']=="azr_gh")
	            echo "** استان آذربایجان غربی **";
	         elseif($_GET['page_name']=="lorestan")
	            echo "** استان لرستان **";
	         elseif($_GET['page_name']=="markazi")
	            echo "** استان مرکزی **";
	         elseif($_GET['page_name']=="qom")
	            echo "** استان قم **";
	         elseif($_GET['page_name']=="qazvin")
	            echo "** استان قزوین **";
	         elseif($_GET['page_name']=="semnan")
	            echo "** استان سمنان **";
	         elseif($_GET['page_name']=="hamedan")
	            echo "** استان همدان **";
	         elseif($_GET['page_name']=="fars")
	            echo "** استان فارس **";
	         elseif($_GET['page_name']=="boshehr")
	            echo "** استان بوشهر **";
	         elseif($_GET['page_name']=="hormozgan")
	            echo "** استان هرمزگان **";
	         elseif($_GET['page_name']=="kordestan")
	            echo "** استان کردستان **";
	         elseif($_GET['page_name']=="khozestan")
	            echo "** استان خوزستان **";
	         elseif($_GET['page_name']=="zanjan")
			    echo "** استان زنجان **";    
	  ?>
</title>
<?php include("html/css.html");?>
<?php include("html/datefa.html");
include("php/db.php");
?>
</head>
<script language="javascript" type="text/javascript">
function check_form1u()
{
	if(document.getElementById('user').value=="")
	{
		alert("نام کاربری را وارد کنید");
		document.getElementById('user').focus();
		return false;
	}
	if(document.getElementById('password').value=="")
	{
		alert("رمز عبور را وارد کنید");
		document.getElementById('password').focus();
		return false;
	}
return true;
}
</script>
<body bgcolor="#000000">
 <table border="0" cellspacing="0" cellpadding="0" width="100%">
  <!--top-->
  <tr>
   <td valign="top" >
    <table border="0" cellspacing="0" width="100%">
	 <!--logo-->
	 <tr>
	  <td valign="top" colspan="2"><?php include("html/pic.html");?></td>
	 </tr>
	 <!--menu-->
	 <tr valign="top">
	  <td bgcolor="#000066">
	   <font face="Tahoma" size="2" color="#FFFFFF" dir="rtl"><script>showdate()</script></font>
	  </td>
	  <td bgcolor="#000066" dir="rtl">
	   <a href="home.php?page_name=home">صفحه اصلی</a>&nbsp;<font color="#FF0000">|</font>&nbsp;<a href="home.php?page_name=galery">گالری</a>&nbsp;<font color="#FF0000">|</font>&nbsp;<a href="home.php?page_name=sabt_nam">ثبت نام</a>&nbsp;<font color="#FF0000">|</font>&nbsp;<a href="home.php?page_name=news">اخبار</a>&nbsp;<font color="#FF0000">|</font>&nbsp;<a href="home.php?page_name=contact_me">ارتباط با ما</a></td>
	 </tr>
	</table>
   </td>
  </tr>
  <!--center-->
  <tr>
   <td valign="top">
    <table border="0" cellspacing="0" width="100%">
	 <tr>
	   <!--map-->
	  <td width="70%" valign="top"><?php
	  if($_GET['page_name']=="home")
	    include("php/map.php");
		elseif($_GET['page_name']=="")
	    include("php/map.php");
	   elseif($_GET['page_name']=="contact_me")
	    include("php/contact_me.php");
	   elseif($_GET['page_name']=="galery")
	    include("php/galery.php");
	   elseif($_GET['page_name']=="news")
	    include("php/news.php");
	   elseif($_GET['page_name']=="show_news")
	    include("php/show_news.php");
	   elseif($_GET['page_name']=="download")
	    include("php/download.php");
	   elseif($_GET['page_name']=="sabt_nam")
	    include("php/sabt_nam.php");
	   elseif($_GET['page_name']=="search")
	    include("php/search.php");
	   elseif($_GET['page_name']=="show_download")
	    include("php/show_download.php");
	   elseif($_GET['page_name']=="yazd")
	    include("php/city/yazd.php");
	   elseif($_GET['page_name']=="isfahan")
	    include("php/city/isfahan.php");
	   elseif($_GET['page_name']=="tehran")
	    include("php/city/tehran.php");
	   elseif($_GET['page_name']=="mazandaran")
	    include("php/city/mazandaran.php");
	   elseif($_GET['page_name']=="gilan")
	    include("php/city/gilan.php");
	   elseif($_GET['page_name']=="golestan")
	    include("php/city/golestan.php");
	   elseif($_GET['page_name']=="kerman")
	    include("php/city/kerman.php");
	   elseif($_GET['page_name']=="kermanshah")
	    include("php/city/kermanshah.php");
	   elseif($_GET['page_name']=="ilam")
	    include("php/city/ilam.php");
	   elseif($_GET['page_name']=="4mahal")
	    include("php/city/4mahal.php");
	   elseif($_GET['page_name']=="kohgiloye")
	    include("php/city/kohgiloye.php");
	   elseif($_GET['page_name']=="sistan")
	    include("php/city/sistan.php");
	   elseif($_GET['page_name']=="kh_sh")
	    include("php/city/kh_sh.php");
	   elseif($_GET['page_name']=="kh_r")
	    include("php/city/kh_r.php");
	   elseif($_GET['page_name']=="kh_j")
	    include("php/city/kh_j.php");
	   elseif($_GET['page_name']=="ardabil")
	    include("php/city/ardabil.php");
	   elseif($_GET['page_name']=="azr_sh")
	    include("php/city/azr_sh.php");
	   elseif($_GET['page_name']=="azr_gh")
	    include("php/city/azr_gh.php");
	   elseif($_GET['page_name']=="lorestan")
	    include("php/city/lorestan.php");
	   elseif($_GET['page_name']=="markazi")
	    include("php/city/markazi.php");
	   elseif($_GET['page_name']=="qom")
	    include("php/city/qom.php");
	   elseif($_GET['page_name']=="qazvin")
	    include("php/city/qazvin.php");
	   elseif($_GET['page_name']=="semnan")
	    include("php/city/semnan.php");
	   elseif($_GET['page_name']=="hamedan")
	    include("php/city/hamedan.php");
	   elseif($_GET['page_name']=="fars")
	    include("php/city/fars.php");
	   elseif($_GET['page_name']=="boshehr")
	    include("php/city/boshehr.php");
	   elseif($_GET['page_name']=="hormozgan")
	    include("php/city/hormozgan.php");
	   elseif($_GET['page_name']=="kordestan")
	    include("php/city/kordestan.php");
	   elseif($_GET['page_name']=="khozestan")
	    include("php/city/khozestan.php");
	   elseif($_GET['page_name']=="zanjan")
	    include("php/city/zanjan.php");?>
	  </td>
	  <!--base menu-->
	  <td valign="top" width="20%" align="right">
	   <table border="0" cellspacing="0" cellpadding="0" width="100%">
	    <!--navigation-->
	    <tr>
		 <td valign="top">
		  <table border="0" cellspacing="0" cellpadding="1" width="100%" bgcolor="#666666">
		   <tr align="center">
		    <td bgcolor="#FF6600" colspan="2">فهرست</td>
		   </tr>
		   <tr  dir="rtl">
		    <td><a href="home.php?page_name=home">صفحه اصلی</a></td>
			<?php if($_GET['page_name']=="home"){?><td bgcolor="#00CC66"></td>
			<?php }else {?><td bgcolor="#006633"></td><?php }?>
		   </tr>
		   <tr  dir="rtl">
		    <td><a href="home.php?page_name=news">اخبار</a></td>
			<?php if($_GET['page_name']=="news"){?><td bgcolor="#00CC66"></td>
			<?php }else {?><td bgcolor="#006633"></td><?php }?>
		   </tr>
		   <tr  dir="rtl">
		    <td><a href="home.php?page_name=galery">گالری</a></td>
			<?php if($_GET['page_name']=="galery"){?><td bgcolor="#00CC66"></td>
			<?php }else {?><td bgcolor="#006633"></td><?php }?>
		   </tr>
		   <tr  dir="rtl">
		    <td><a href="home.php?page_name=download">دانلود</a></td>
			<?php if($_GET['page_name']=="download"){?><td bgcolor="#00CC66"></td>
			<?php }else {?><td bgcolor="#006633"></td><?php }?>
		   </tr>
		   <tr  dir="rtl">
		    <td><a href="home.php?page_name=search">جستجو</a></td>
			<?php if($_GET['page_name']=="search"){?><td bgcolor="#00CC66"></td>
			<?php }else {?><td bgcolor="#006633"></td><?php }?>
		   </tr>
		  </table>
		 </td>
		</tr>
		<!--tablighat-->
		<?php
		
			
			$query="SELECT * FROM `tablighat` ORDER BY `code` DESC LIMIT 0 , 5";
			$result=mysqli_query($link,$query);
		 ?>
		<tr>
		 <td>
		  <table border="0" cellspacing="0" cellpadding="1" width="100%" bgcolor="#666666">
		   <tr align="center">
		    <td bgcolor="#FF6600" colspan="2">تبلیغات</td>
		   </tr>
		   <tr>
		    <td>
			 <table border="0" cellspacing="1" width="100%">
			 <?php while($row=mysqli_fetch_array($result)){?>
			  <tr>
			   <td bordercolor="#FF0000" height="100" align="center"><object width="200" height="100">
                 <img src="<?php echo $row['pic'];?>" width="200" height="100"/></td>
			  </tr>
			  <?php }?>
			 </table>
			</td>
		   </tr>
		  </table>
		 </td>
		</tr>
		<!--login-->
		<tr>
		 <td>
		  <table border="0" cellspacing="0" cellpadding="0" width="100%" bgcolor="#666666">
		   <form action="php/chec_user.php" method="post" onsubmit="javascript:return check_form1u();">
		   <tr align="center">
		    <td bgcolor="#FF6600">ورود</td>
		   </tr>
		   <tr>
		    <td align="center"><font size="2" color="#CCCCCC">نام کاربری</font><br />
			<input name="user" type="text" size="15%"/></td>
		   </tr>
		   <tr>
		    <td align="center"><font size="2" color="#CCCCCC">رمز ورود</font><br />
			<input name="password" type="password" size="15%"/></td>
		   </tr>
		   <tr>
		    <td align="center"><input name="login" type="submit" value="ورود"/></td>
		   </tr>
		   </form>
		  </table>
		 </td>
		</tr>
		<!--nazar sanji-->
		<?php 
		
			$query="SELECT * FROM `nazarsanji`";
			$result=mysqli_query($link,$query);
			$row=mysqli_fetch_array($result);
		?>
		<tr>
		 <td>
		  <table border="0" cellspacing="0" cellpadding="1" width="100%" bgcolor="#666666">
		  <form action="php/save_nazarkhahi.php" method="post">
		   <tr align="center">
		    <td bgcolor="#FF6600" colspan="2">نظرسنجی</td>
		   </tr>
		   <tr>
		    <td align="right" width="100%">
			 <font face="Calibri" size="2" ><b><?php echo $row['question']?> </b></font>
			</td>
		   </tr>
		   <tr>
		    <td align="right" width="100%" dir="rtl">
			 <input type="radio" name="nazar" value="<?php echo $row['test1']?>"/>
			 <font face="Calibri"><?php echo $row['test1']?></font>
			</td>
		   </tr>
		    <tr>
		    <td align="right" width="100%" dir="rtl">
			 <input type="radio" name="nazar" value="<?php echo $row['test2']?>"/>
			 <font face="Calibri"><?php echo $row['test2']?></font>
			</td>
		   </tr>
		    <tr>
		    <td align="right" width="100%" dir="rtl">
			 <input type="radio" name="nazar" value="<?php echo $row['test3']?>"/>
			 <font face="Calibri"><?php echo $row['test3']?></font>
			</td>
		   </tr>
		    <tr>
		    <td align="right" width="100%" dir="rtl">
			 <input type="radio" name="nazar" value="<?php echo $row['test4']?>"/>
			 <font face="Calibri"><?php echo $row['test4']?></font>
			</td>
		   </tr>
		   <tr>
		     <td align="center">
			  <input name="send" type="submit" dir="rtl" style="font-family:Tahoma, Arial" value="ارسال"/><br /><a href="php/nazarsanji.php" target="_blank" dir="rtl">نتایج نظرسنجی</a>
			 </td>
		   </tr>
		  </form>
		  </table>
		 </td>
		</tr>
		<!--new articles-->
		<?php
						
		 $query="SELECT * FROM `news` ORDER BY `code` DESC LIMIT 0 , 20";
		 $result=mysqli_query($link,$query);
		?>
		<tr>
		 <td valign="top">
		  <table border="0" cellspacing="0" cellpadding="0" width="100%" bgcolor="#666666">
		   <tr align="center">
		    <td bgcolor="#FF6600">جدیدترین اخبار</td>
		   </tr>
		   <tr>
		    <td height="150">
			 <marquee behavior="scroll" dir="rtl" direction="up" onmouseover="stop()" onmouseout="start()" scrollamount="4">
			 <?php while($row=mysqli_fetch_array($result)){?>
             <a href="home.php?page_name=show_news&id_news=<?php echo $row['code'] ?>"><font size="2"><?php echo $row['title']."<br>";}?></font></a></marquee></td>
		   </tr>
		  </table>
		 </td>
		</tr>
	   </table>
	  </td>
	 </tr>
	</table>
   </td>
  </tr>
  <!--bottom-->
  <tr>
   <td bgcolor="#003300" align="center">
   <font color="#FF0000" size="2" face="Tahoma">Copyright &copy; 2021 Mahnour</font>
   </td>
  </tr>
 </table>
</body>
</html>
