<?php session_start(); ?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<head>
 <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
 <title><?php if($_GET['page_name']=="")
                echo "** بهترین موزیکها در کوروش موزیک **";
			 elseif($_GET['page_name']=="index")
                echo "** بهترین موزیکها در کوروش موزیک  **";
			 elseif($_GET['page_name']=="album_kh")
                echo "** آلبوم های خارجی **";
			 elseif($_GET['page_name']=="album_ir")
                echo "** آلبوم های ایرانی **";
			 elseif($_GET['page_name']=="tak_ir")
                echo "** تک آهنگ های ایرانی **";
			 elseif($_GET['page_name']=="tak_kh")
                echo "** تک آهنگ های خارجی **";
			 elseif($_GET['page_name']=="music_vi")
                echo "** موزیک ویدئو **";
			 elseif($_GET['page_name']=="show_music")
                echo "** دانلود **";
			 elseif($_GET['page_name']=="show_film")
                echo "** دانلود **";
			 elseif($_GET['page_name']=="biugerafi")
                echo "** بیوگرافی **";
			 elseif($_GET['page_name']=="sabt_nam")
                echo "** ثبت نام **";
			 elseif($_GET['page_name']=="search")
                echo "** جستجو **";
			 elseif($_GET['page_name']=="contact_me")
                echo "** ارتباط با ما **";
			 elseif($_GET['page_name']=="arshiv")
                echo "** آرشیو **";
      ?>
</title>
<script type="text/javascript" src="swfobject.js"></script> 
<?php include("html/css.html");?>
<?php include("html/datefa.html");?>
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
<script language="javascript" type="text/javascript">
function check_form2u()
{
	if(document.getElementById('shenase').value=="")
	{
		alert("شناسه را وارد کنید");
		document.getElementById('shenase').focus();
		return false;
	}
	if(document.getElementById('name_asli').value=="")
	{
		alert("نام اصلی را وارد کنید");
		document.getElementById('name_asli').focus();
		return false;
	}
	if(document.getElementById('email').value=="")
	{
		alert("ایمیل را وارد کنید");
		document.getElementById('email').focus();
		return false;
	}
	if(document.getElementById('emaild').value=="")
	{
		alert("تکرار ایمیل را وارد کنید");
		document.getElementById('emaild').focus();
		return false;
	}
	if(document.getElementById('emaild').value!=document.getElementById('email').value)
	{
		alert("ایمیل با تکرار همخوانی ندارد! دوباره سعی کنید");
		document.getElementById('emaild').select();
		return false;
	}
	if(document.getElementById('pass').value=="")
	{
		alert("گذرواژه را وارد کنید");
		document.getElementById('pass').focus();
		return false;
	}
	if(document.getElementById('passd').value=="")
	{
		alert("تکرار گذرواژه را وارد کنید");
		document.getElementById('passd').focus();
		return false;
	}
	if(document.getElementById('passd').value!=document.getElementById('pass').value)
	{
		alert("گذرواژه با تکرار همخوانی ندارد! دوباره سعی کنید");
		document.getElementById('passd').select();
		return false;
	}
return true;
}
</script>
<body bgcolor="#CCCCCC">
<table border="0" cellspacing="0" width="100%" >
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
	  <td width="100%" height="20" dir="rtl" background="pic/2.jpg" colspan="2">
       <a href="index.php?page_name=index"><img onmouseover='this.src="pic/botton/home2.jpg"' onmouseout='this.src="pic/botton/home1.jpg"' src="pic/botton/home1.jpg" width="99" height="28" border="0"/></a><a href="index.php?page_name=search"><img onmouseover='this.src="pic/botton/search2.jpg"' onmouseout='this.src="pic/botton/search1.jpg"' src="pic/botton/search1.jpg" width="99" height="28" border="0"/></a><a href="index.php?page_name=sabt_nam"><img onmouseover='this.src="pic/botton/login2.jpg"' onmouseout='this.src="pic/botton/login1.jpg"' src="pic/botton/login1.jpg" width="99" height="28" border="0"/></a>
	  </td>
	 </tr>
     <!--date-->
     <tr>
      <td bgcolor="#009933">
       <font face="Tahoma" size="2" color="#FFFFFF" dir="rtl"><script>showdate()</script></font>
      </td>
      <?php if(!$_SESSION['user']) {?>
      <td align="right" dir="rtl" bgcolor="#009933">
       <font size="1" color="#CCCCCC">کاربر مهمان خوش آمدید!</font>
       <a href="index.php?page_name=sabt_nam">عضویت</a>
      </td>
      <?php } else {?>
      <td align="right" dir="rtl" bgcolor="#009933">
       <font size="1" color="#CCCCCC">کاربر <?php echo $_SESSION['user']?> خوش آمدید!</font>
       <a href="php/logout.php">خروج</a>
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
	  <td width="200" valign="top">
	  <!--left menu-->
	   <table border="0" cellspacing="0" width="100%" cellpadding="5">
        <tr>
         <td valign="top">
          <table border="0" cellpadding="0" cellspacing="0" width="100%" bgcolor="#ffffff">
           <!--login-->
           <tr>
            <td valign="top">
             <table width="100%"  border="0" cellpadding="0" cellspacing="0">
        		<tr>
        		  <td width="2%"><img src="pic/tbl/1.jpg" width="18" height="30"></td>
        		  <td width="96%" background="pic/tbl/3.jpg" dir="rtl" height="30" valign="bottom"><font size="2">ورود به سایت</font></td>
        		  <td width="2%"><img src="pic/tbl/2.jpg" width="18" height="30"></td>
      		    </tr>
      		 </table>
            </td>
           </tr>
           <tr>
            <td>
             <table border="0" cellspacing="0" cellpadding="0" width="100%" >
              <form action="php/chec_user.php" method="post" onsubmit="javascript:return check_form1u();">
		      <tr>
		       <td align="center"><font size="2">نام کاربری</font><br />
		         <input name="user" type="text" size="15%"/></td>
		      </tr>
		      <tr>
		       <td align="center"><font size="2">رمز ورود</font><br />
			    <input name="password" type="password" size="15%"/></td>
		      </tr>
		      <tr>
		       <td align="center"><input name="login" type="submit" value="ورود"/></td>
		      </tr>
		      </form>
		     </table>
            </td>
           </tr>
           <tr>
            <td align="center">
             <font size="1" dir="rtl">
             چنانچه تاکنون عضو این سایت نشده اید میتوانید با تکمیل فرم مخصوص <a href="index.php?page_name=sabt_nam">عضویت</a> به جمع کاربران این سایت بپیوندید و از امکانات مخصوص کاربران استفاده نمایید.
             </font>
            </td>
           </tr>
          </table>
         </td>
        </tr>
        <tr>
         <td>
          <table border="0" cellpadding="0" cellspacing="0" width="100%" bgcolor="#ffffff">
           <!--ozviat-->
           <tr>
            <td valign="top">
             <table width="100%"  border="0" cellpadding="0" cellspacing="0">
        		<tr>
        		  <td width="2%"><img src="pic/tbl/1.jpg" width="18" height="30"></td>
        		  <td width="96%" background="pic/tbl/3.jpg" dir="rtl" height="30" valign="bottom"><font size="2">عضویت سریع</font></td>
        		  <td width="2%"><img src="pic/tbl/2.jpg" width="18" height="30"></td>
      		    </tr>
      		 </table>
            </td>
           </tr>
           <tr>
            <td>
             <table border="0" cellspacing="0" cellpadding="0" width="100%" dir="rtl">
              <form action="php/save_sabt_fast.php" method="post" onSubmit="javascript:return check_form2u();">
		      <tr>
		       <td align="right"><font size="1">شناسه :</font></td>
		       <td align="right"><input name="shenase" type="text" size="15%"/></td>
		      </tr>
		      <tr>
		       <td align="right"><font size="1">نام اصلی :</font></td>
			   <td align="right"><input name="name_asli" type="text" size="15%"/></td>
		      </tr>
              <tr>
		       <td align="right"><font size="1">ایمیل :</font></td>
			   <td align="right"><input name="email" type="text" size="15%"/></td>
		      </tr>
              <tr>
		       <td align="right"><font size="1">تایپ مجدد :</font></td>
			   <td align="right"><input name="emaild" type="text" size="15%"/></td>
		      </tr>
              <tr>
		       <td align="right"><font size="1">گذرواژه :</font></td>
			   <td align="right"><input name="pass" type="password" size="15%"/></td>
		      </tr>
              <tr>
		       <td align="right"><font size="1">تایپ مجدد :</font></td>
			   <td align="right"><input name="passd" type="password" size="15%"/></td>
		      </tr>
		      <tr>
		       <td align="center"><input name="ozviat" type="submit" value="ثبت نام"/></td>
		      </tr>
		      </form>
		     </table>
            </td>
           </tr>
          </table>
         </td>
        </tr>
        <tr>
         <td>
          <table border="0" cellpadding="0" cellspacing="0" width="100%" bgcolor="#ffffff">
           <!--short massege-->
           <?php $link=mysql_connect("localhost","root","");
			
			if (!$link)
			die ("اشكال در ارتباط با پایگاه داده!");
			
			$query="SELECT * FROM `massege`";
			$result=mysql_db_query("music",$query,$link);
		   ?>
           <tr>
            <td valign="top">
             <table width="100%"  border="0" cellpadding="0" cellspacing="0">
        		<tr>
        		  <td width="2%"><img src="pic/tbl/1.jpg" width="18" height="30"></td>
        		  <td width="96%" background="pic/tbl/3.jpg" dir="rtl" height="30" valign="bottom"><font size="2">پیغام کوتاه</font></td>
        		  <td width="2%"><img src="pic/tbl/2.jpg" width="18" height="30"></td>
      		    </tr>
      		 </table>
            </td>
           </tr>
           <tr>
            <td>
             <marquee behavior="scroll" dir="rtl" direction="up" onmouseover="stop()" onmouseout="start()" scrollamount="3">
             <table border="0" cellpadding="0" cellspacing="0" width="100%">
             <?php $i=1; while($row=mysql_fetch_array($result)) { ?> 
              <tr <?php if($i%2==0) echo 'bgcolor="#999999"';?>>
               <td dir="rtl"><font face="Tahoma, Geneva, sans-serif" size="1"> 
                <b><?php echo $row['name']; ?> :</b>
                <?php echo $row['massege']; ?></font>
               </td>
              </tr>
              <?php $i++; }?>
             </table>
             </marquee>
            </td>
           </tr>
           <tr>
            <td>
             <table border="0" cellspacing="0" cellpadding="0" width="100%" >
              <form action="php/massege.php" method="post">
		      <tr>
		       <td align="center">
                <input name="name" dir="rtl" 
                            	   onblur="if (this.value == '') { this.value='نام' }"    										 								   onfocus="if ( this.value == 'نام' ) { this.value=''; }" 						 								   maxLength=25 value=نام />
               </td>
		      </tr>
		      <tr>
		       <td align="center" nowrap="nowrap">
                <input name="massege" dir="rtl"
                              onkeypress=FKeyPress(this); 
                              onkeydown=FKeyDown(this); 
                              onblur="if (this.value == '') { this.value='پيغام' }" 
                              onfocus="if ( this.value == 'پيغام' ) { this.value=''; }" 
                              maxLength=2500 value=پيغام />
               </td>
		      </tr>
		      <tr>
		       <td align="center" dir="rtl">
               <INPUT type=submit value=فرستادن name=send> 
               </td>
		      </tr>
		      </form>
		     </table>
            </td>
           </tr>
          </table>
         </td>
        </tr>
        <tr>
         <td>
          <table border="0" cellpadding="0" cellspacing="0" width="100%" bgcolor="#ffffff">
           <!--nazarsanji-->
           <?php $link=mysql_connect("localhost","root","");
			
			if (!$link)
			die ("اشكال در ارتباط با پایگاه داده!");
			
			$query="SELECT * FROM `nazarsanji`";
			$result=mysql_db_query("music",$query,$link);
			$row=mysql_fetch_array($result);
		   ?>
           <tr>
            <td valign="top">
             <table width="100%"  border="0" cellpadding="0" cellspacing="0">
        		<tr>
        		  <td width="2%"><img src="pic/tbl/1.jpg" width="18" height="30"></td>
        		  <td width="96%" background="pic/tbl/3.jpg" dir="rtl" height="30" valign="bottom"><font size="2">نظرسنجی</font></td>
        		  <td width="2%"><img src="pic/tbl/2.jpg" width="18" height="30"></td>
      		    </tr>
      		 </table>
            </td>
           </tr>
           <tr>
            <td>
             <table border="0" width="100%" cellpadding="0" cellspacing="0">
              <form action="php\save_nazarkhahi.php" method="post">
		      <tr>
		       <td align="right" width="100%">
			    <font face="Tahoma" size="1" ><b><?php echo $row['question']?> </b></font>
			   </td>
		      </tr>
		      <tr>
		       <td align="right" width="100%" dir="rtl">
			    <input type="radio" name="nazar" value="<?php echo $row['test1']?>"/>
			    <font face="Andalus"><?php echo $row['test1']?></font>
			   </td>
		      </tr>
		      <tr>
		       <td align="right" width="100%" dir="rtl">
			    <input type="radio" name="nazar" value="<?php echo $row['test2']?>"/>
			    <font face="Andalus"><?php echo $row['test2']?></font>
			   </td>
		      </tr>
		      <tr>
		       <td align="right" width="100%" dir="rtl">
			    <input type="radio" name="nazar" value="<?php echo $row['test3']?>"/>
			    <font face="Andalus"><?php echo $row['test3']?></font>
			   </td>
		      </tr>
		      <tr>
		       <td align="right" width="100%" dir="rtl">
			    <input type="radio" name="nazar" value="<?php echo $row['test4']?>"/>
			    <font face="Andalus"><?php echo $row['test4']?></font>
			   </td>
		      </tr>
		      <tr>
		       <td align="center">
			    <input name="send" type="submit" dir="rtl" style="font-family:Tahoma, Arial" value="ارسال"/><br /><a href="php\nazarsanji.php" target="_blank" dir="rtl">نتایج نظرسنجی</a>
			   </td>
		      </tr>
		     </form>
             </table>
            </td>
           </tr>
          </table>
         </td>
        </tr>
        <tr>
         <td>
          <table border="0" cellpadding="0" cellspacing="0" width="100%" bgcolor="#ffffff">
           <!--arshiv-->
           <tr>
            <td valign="top">
             <table width="100%"  border="0" cellpadding="0" cellspacing="0">
        		<tr>
        		  <td width="2%"><img src="pic/tbl/1.jpg" width="18" height="30"></td>
        		  <td width="96%" background="pic/tbl/3.jpg" dir="rtl" height="30" valign="bottom"><font size="2">آرشیو</font></td>
        		  <td width="2%"><img src="pic/tbl/2.jpg" width="18" height="30"></td>
      		    </tr>
      		 </table>
            </td>
           </tr>
           <tr align="center">
            <td>
             <a href="index.php?page_name=arshiv&id=فروردین">آرشیو فروردین</a><br /><br />
             <a href="index.php?page_name=arshiv&id=اردیبهشت">آرشیو اردیبهشت</a><br /><br />
             <a href="index.php?page_name=arshiv&id=خرداد">آرشیو خرداد</a><br /><br />
             <a href="index.php?page_name=arshiv&id=تیر">آرشیو تیر</a><br /><br />
             <a href="index.php?page_name=arshiv&id=مرداد">آرشیو مرداد</a><br /><br />
             <a href="index.php?page_name=arshiv&id=شهریور">آرشیو شهریور</a><br /><br />
             <a href="index.php?page_name=arshiv&id=مهر">آرشیو مهر</a><br /><br />
             <a href="index.php?page_name=arshiv&id=آبان">آرشیو آبان</a><br /><br />
             <a href="index.php?page_name=arshiv&id=آذر">آرشیو آذر</a><br /><br />
             <a href="index.php?page_name=arshiv&id=دی">آرشیو دی</a><br /><br />
             <a href="index.php?page_name=arshiv&id=بهمن">آرشیو بهمن</a><br /><br />
             <a href="index.php?page_name=arshiv&id=شهریور">آرشیو اسفند</a>
            </td>
           </tr>
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
	      elseif($_GET['page_name']=="album_kh")
	       include("php/album_kh.php");
	      elseif($_GET['page_name']=="album_ir")
	       include("php/album_ir.php");
		  elseif($_GET['page_name']=="tak_ir")
	       include("php/tak_ir.php");
		  elseif($_GET['page_name']=="tak_kh")
	       include("php/tak_kh.php");
		  elseif($_GET['page_name']=="music_vi")
	       include("php/music_vi.php");
		  elseif($_GET['page_name']=="show_music")
	       include("php/show_music.php");
		  elseif($_GET['page_name']=="show_film")
	       include("php/show_film.php");
		  elseif($_GET['page_name']=="biugerafi")
	       include("php/biugerafi.php");
		  elseif($_GET['page_name']=="arshiv")
	       include("php/arshiv.php");
		  elseif($_GET['page_name']=="search")
	       include("php/search.php");
	      elseif($_GET['page_name']=="sabt_nam")
	       include("php/sabt_nam.php");?>
         </td>
        </tr>
	   </table>	  
	  </td>
	  <td width="200" valign="top">
	  <!--right menu-->
	   <table border="0" cellpadding="5" align="right" width="100%" cellspacing="0">
        <tr>
         <td>
           <table border="0" cellpadding="0" cellspacing="0" width="100%" bgcolor="#ffffff">
           <!--base menu-->
           <tr>
            <td valign="top">
             <table width="100%"  border="0" cellpadding="0" cellspacing="0">
        		<tr>
        		  <td width="2%"><img src="pic/tbl/1.jpg" width="18" height="30"></td>
        		  <td width="96%" background="pic/tbl/3.jpg" dir="rtl" height="30" valign="bottom"><font size="2">منوی اصلی</font></td>
        		  <td width="2%"><img src="pic/tbl/2.jpg" width="18" height="30"></td>
      		    </tr>
      		 </table>
            </td>
           </tr>
           <tr>
            <td>
             <table border="0" cellpadding="0" cellspacing="0" width="100%">
              <tr>
              <?php if($_GET['page_name']=="index"){?>
               <td dir="rtl" bgcolor="#00CC00" width="90%">
                <a href="index.php?page_name=index">صفحه اول</a></td>
               <td align="right"><img src="pic/7872.png" width="30" height="30"/></td>
			  <?php }else {?>
			   <td dir="rtl" width="90%"><a href="index.php?page_name=index">صفحه اول</a></td>
               <td align="right"><img src="pic/7871.png" width="30" height="30"/></td>
			  <?php }?>
              </tr>
              <tr>
              <?php if($_GET['page_name']=="album_ir"){?>
               <td dir="rtl" bgcolor="#00CC00">
                <a href="index.php?page_name=album_ir">آلبوم های ایرانی</a></td>
               <td align="right"><img src="pic/7872.png" width="30" height="30"/></td>
			  <?php }else {?>
			   <td dir="rtl"><a href="index.php?page_name=album_ir">آلبوم های ایرانی</a></td>
               <td align="right"><img src="pic/7871.png" width="30" height="30"/></td>
			  <?php }?>
              </tr>
              <tr>
              <?php if($_GET['page_name']=="album_kh"){?>
               <td dir="rtl" bgcolor="#00CC00">
                <a href="index.php?page_name=album_kh">آلبوم های خارجی</a></td>
               <td align="right"><img src="pic/7872.png" width="30" height="30"/></td>
			  <?php }else {?>
			   <td dir="rtl"><a href="index.php?page_name=album_kh">آلبوم های خارجی</a></td>
               <td align="right"><img src="pic/7871.png" width="30" height="30"/></td>
			  <?php }?>
              </tr>
              <tr>
              <?php if($_GET['page_name']=="tak_ir"){?>
               <td dir="rtl" bgcolor="#00CC00">
                <a href="index.php?page_name=tak_ir">تک آهنگ های ایرانی</a></td>
               <td align="right"><img src="pic/7872.png" width="30" height="30"/></td>
			  <?php }else {?>
			   <td dir="rtl"><a href="index.php?page_name=tak_ir">تک آهنگ های ایرانی</a></td>
               <td align="right"><img src="pic/7871.png" width="30" height="30"/></td>
			  <?php }?>
              </tr>
              <tr>
              <?php if($_GET['page_name']=="tak_kh"){?>
               <td dir="rtl" bgcolor="#00CC00">
                <a href="index.php?page_name=tak_kh">تک آهنگ های خارجی</a></td>
               <td align="right"><img src="pic/7872.png" width="30" height="30"/></td>
			  <?php }else {?>
			   <td dir="rtl"><a href="index.php?page_name=tak_kh">تک آهنگ های خارجی</a></td>
               <td align="right"><img src="pic/7871.png" width="30" height="30"/></td>
			  <?php }?>
              </tr>
              <tr>
              <?php if($_GET['page_name']=="music_vi"){?>
               <td dir="rtl" bgcolor="#00CC00">
                <a href="index.php?page_name=music_vi">موزیک ویدیو</a></td>
               <td align="right"><img src="pic/7872.png" width="30" height="30"/></td>
			  <?php }else {?>
			   <td dir="rtl"><a href="index.php?page_name=music_vi">موزیک ویدیو</a></td>
               <td align="right"><img src="pic/7871.png" width="30" height="30"/></td>
			  <?php }?>
              </tr> 
              <tr>
              <?php if($_GET['page_name']=="search"){?>
               <td dir="rtl" bgcolor="#00CC00"><a href="index.php?page_name=search">جستجو</a></td>
               <td align="right"><img src="pic/7872.png" width="30" height="30"/></td>
			  <?php }else {?>
			   <td dir="rtl"><a href="index.php?page_name=search">جستجو</a></td>
               <td align="right"><img src="pic/7871.png" width="30" height="30"/></td>
			  <?php }?>
              </tr>
              <tr>
              <?php if($_GET['page_name']=="sabt_nam"){?>
               <td dir="rtl" bgcolor="#00CC00">
                <a href="index.php?page_name=sabt_nam">عضویت</a></td>
               <td align="right"><img src="pic/7872.png" width="30" height="30"/></td>
			  <?php }else {?>
			   <td dir="rtl"><a href="index.php?page_name=sabt_nam">عضویت</a></td>
               <td align="right"><img src="pic/7871.png" width="30" height="30"/></td>
			  <?php }?>
              </tr>
             </table>
            </td>
           </tr>
          </table>
         </td>
        </tr>
        <tr>
         <td>
          <table border="0" cellpadding="0" cellspacing="0" width="100%" bgcolor="#ffffff">
           <!--tablighat-->
           <?php
			
			$link=mysql_connect("localhost","root","");
			
			if (!$link)
			die ("اشكال در ارتباط با پایگاه داده!");
			
			$query="SELECT * FROM `tablighat` ORDER BY `code` DESC LIMIT 0 , 5";
			$result=mysql_db_query("music",$query,$link);
		   ?>
           <tr>
            <td valign="top">
             <table width="100%"  border="0" cellpadding="0" cellspacing="0">
        		<tr>
        		  <td width="2%"><img src="pic/tbl/1.jpg" width="18" height="30"></td>
        		  <td width="96%" background="pic/tbl/3.jpg" dir="rtl" height="30" valign="bottom"><font size="2">تبلیغات</font></td>
        		  <td width="2%"><img src="pic/tbl/2.jpg" width="18" height="30"></td>
      		    </tr>
      		 </table>
            </td>
           </tr>
           <tr>
		    <td>
			 <table border="0" cellspacing="1" width="100%">
			 <?php while($row=mysql_fetch_array($result)){?>
			  <tr>
			   <td bordercolor="#FF0000" height="100" align="center">
                <a href="http://<?php echo $row['link']?>" target="_blank"><img src="<?php echo $row['pic']?>" width="100" height="200" border="0" alt="<?php echo $row['name']?>"/></a></td>
			  </tr>
			  <?php }?>
			 </table>
			</td>
		   </tr>
          </table>
         </td>
        </tr>
        <tr>
         <td>
          <table border="0" cellpadding="0" cellspacing="0" width="100%" bgcolor="#ffffff">
           <!--biugerafi-->
            <?php
			
			$link=mysql_connect("localhost","root","");
			
			if (!$link)
			die ("اشكال در ارتباط با پایگاه داده!");
			
			$query="SELECT * FROM `biugerafi`";
			$result=mysql_db_query("music",$query,$link);
		   ?>
           <tr>
            <td valign="top">
             <table width="100%"  border="0" cellpadding="0" cellspacing="0">
        		<tr>
        		  <td width="2%"><img src="pic/tbl/1.jpg" width="18" height="30"></td>
        		  <td width="96%" background="pic/tbl/3.jpg" dir="rtl" height="30" valign="bottom"><font size="2">بیوگرافی</font></td>
        		  <td width="2%"><img src="pic/tbl/2.jpg" width="18" height="30"></td>
      		    </tr>
      		 </table>
            </td>
           </tr>
           <tr>
		    <td>
			 <table border="0" cellspacing="6" width="100%" cellpadding="0">
			 <?php while($row=mysql_fetch_array($result)){?>
			  <tr>
			   <td bordercolor="#FF0000" width="100%" align="center">
                <a href="index.php?page_name=biugerafi&id_news=<?php echo $row['code'] ?>"><?php echo $row['title']?></a>
               </td>
			  </tr>
			  <?php }?>
			 </table>
			</td>
		   </tr>
          </table>
         </td>
        </tr>
        <tr>
         <td>
          <table border="0" cellpadding="0" cellspacing="0" width="100%" bgcolor="#ffffff">
           <!--foul albom-->
           <?php
			
			$link=mysql_connect("localhost","root","");
			
			if (!$link)
			die ("اشكال در ارتباط با پایگاه داده!");
			
			$query="SELECT * FROM `sabt_music` WHERE mtype = 'f_a'";
			$result=mysql_db_query("music",$query,$link);
		   ?>
           <tr>
            <td valign="top">
             <table width="100%"  border="0" cellpadding="0" cellspacing="0">
        		<tr>
        		  <td width="2%"><img src="pic/tbl/1.jpg" width="18" height="30"></td>
        		  <td width="96%" background="pic/tbl/3.jpg" dir="rtl" height="30" valign="bottom"><font size="2">فول آلبوم</font></td>
        		  <td width="2%"><img src="pic/tbl/2.jpg" width="18" height="30"></td>
      		    </tr>
      		 </table>
            </td>
           </tr>
           <tr>
		    <td>
			 <table border="0" cellspacing="1" width="100%">
			 <?php while($row=mysql_fetch_array($result)){?>
			  <tr>
			   <td bordercolor="#FF0000" width="100%" align="center">
                <a href="index.php?page_name=show_music&id=<?php echo $row['code']?>"><?php echo $row['title']?></a>
               </td>
			  </tr>
			  <?php }?>
			 </table>
			</td>
		   </tr>
          </table>
         </td>
        </tr>
        <tr>
         <td>
          <table border="0" cellpadding="0" cellspacing="0" width="100%" bgcolor="#ffffff">
           <!--amar-->
           <tr>
            <td valign="top">
             <table width="100%"  border="0" cellpadding="0" cellspacing="0">
        		<tr>
        		  <td width="2%"><img src="pic/tbl/1.jpg" width="18" height="30"></td>
        		  <td width="96%" background="pic/tbl/3.jpg" dir="rtl" height="30" valign="bottom"><font size="2">آمار کاربران</font></td>
        		  <td width="2%"><img src="pic/tbl/2.jpg" width="18" height="30"></td>
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
	</table>
   </td>
  </tr>
  <!--bottom-->
  <tr>
   <td width="100%"  align="center" colspan="3">
    <table border="0" cellpadding="0" cellspacing="0" width="100%">
     <tr>
      <td align="center" background="pic/tbl/tbl.jpg" dir="rtl">
       <a href="index.php?page_name=index">صفحه اصلی</a>&nbsp;<font color="#000000">|</font>&nbsp;
       <a href="index.php?page_name=sabt_nam">عضویت</a>&nbsp;<font color="#000000">|</font>&nbsp;
       <a href="index.php?page_name=search">جستجو</a>&nbsp;<font color="#000000">|</font>&nbsp;
       <a href="index.php?page_name=contact_me">تماس با ما</a>&nbsp;<font color="#000000">
      </td>
     </tr>
     <tr>
      <td bgcolor="#2C8366" align="center">
       <font color="#333333" size="1" face="Tahoma">Designed by kourosh aria</font>
      </td>
     </tr>
    </table>
   </td>
  </tr>
</table>
</body>
</html>
