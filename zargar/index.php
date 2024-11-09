<?php session_start(); ?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<head>
 <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
 <title><?php if($_GET['page_name']=="")
                echo "** پایگاه تخصصی طلا فروشی **";
			 elseif($_GET['page_name']=="index")
                echo "** پایگاه تخصصی طلا فروشی  **";
			 elseif($_GET['page_name']=="about_me")
                echo "** درباره ما **";
			 elseif($_GET['page_name']=="login")
                echo "** ورود **";
			 elseif($_GET['page_name']=="search")
                echo "** جستجو **";
			 elseif($_GET['page_name']=="result_search")
                echo "** نتیجه جستجو **";
			 elseif($_GET['page_name']=="new_mahsolat")
                echo "** جدیدترین محصولات **";
			 elseif($_GET['page_name']=="show_newm")
                echo "** محصول مربوطه **";
      ?>
</title>

<?php include("html/css.html");?>
</head>
<body bgcolor="#ffffff">
<table border="0" cellspacing="0" cellpadding="0" width="100%" align="center">
  <!--top-->
  <tr>
   <td colspan="2">
    <table  cellspacing="0" cellpadding="0" width="100%">
     <!--logo-->
	 <tr>


 
<object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" 
codebase="http://download.macromedia.com 
/pub/shockwave/cabs/flash/swflash.cab#version=6,0,0,0#" 
width="1000" height="200"> 
<param name="movie" 
value="pic/movie1.swf" /> 
<param name="quality" value="high" /> 
<param name="wmode" value="opaque"> 
<embed src="pic/movie1.swf" 
quality="high" pluginspage="http://www.macromedia.com/go/getflashplayer" 
wmode="opaque" type="application/x-shockwave-flash" 
width="1000" height="200"> 
</embed> 
</object>


	 </tr>
	 
     <!--boton-->
	 <tr>
	  <td width="100%" height="20" dir="rtl">
           <object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" 
codebase="http://download.macromedia.com 
/pub/shockwave/cabs/flash/swflash.cab#version=6,0,0,0#" 
width="500" height="20"> 
<param name="movie" 
value="pic/flash.swf" /> 
<param name="quality" value="high" /> 
<param name="wmode" value="opaque"> 
<embed src="pic/flash.swf" 
quality="high" pluginspage="http://www.macromedia.com/go/getflashplayer" 
wmode="opaque" type="application/x-shockwave-flash" 
width="500" height="20"> 
</embed> 
</object>
      </td>
     </tr>
	
	</table>   
   </td>
  </tr>
  <tr>
   <td valign="top">
 
   <!--center-->
    <table border="0" cellspacing="0" cellpadding="0" width="100%">
     <!--short massege-->
           <?php $link=mysql_connect("localhost","root","");
			
			if (!$link)
			die ("اشكال در ارتباط با پایگاه داده!");
			
			mysql_select_db("zargar");
			
			$query="SELECT * FROM `massege`";
			$result=mysql_query("$query");
		   ?>
      <tr>
       <td width="200" valign="top">
        <table border="1" cellpadding="0" cellpadding="0" width="100%" >
		<tr>
		<td>
		<center>
<form target=_new method=get action=http://www.google.com/search>
<table style='width:128px;font-size:9pt;font-family:Tahoma'>
<tbody><tr><td><center>
<img border=0 src="pic/search.gif" alt=Google>
<input name=q size=15 maxlength="255"><br>
<input type="submit" name="btnG" value="Search"><br>
<input value=http://MMMMMAMMMMM type=radio name=sitesearch checked=''>در اين وبلاگ
<br><input type=radio name=sitesearch value="">در كل اينترنت
<input type=hidden name=ie value=UTF-8><input type=hidden name=oe value=UTF-8><br>
</center></td></tr></tbody></table></form></center>
</td>
</tr>
           <tr>
        	<td dir="rtl"  valign="top" align="center" bgcolor="#FFE400"><font size="2">پیغام کوتاه</font></td>
           </tr>
           <tr>
            <td bgcolor="#ffffff">
             <marquee behavior="scroll" dir="rtl" direction="up" onmouseover="stop()" onmouseout="start()" scrollamount="3">
             <table border="0" cellpadding="0" cellspacing="0" width="100%" bgcolor="">
             <?php $i=1; while($row=mysql_fetch_array($result)) { ?> 
              
               <td dir="rtl"><font face="Tahoma, Geneva, sans-serif" color="#000f00" size="1"> 
			   <font <?php if($i%2==0) echo 'color="#F51D3B"';?>>
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
	    <td width="600" valign="top">
	  <!--center menu-->
	   <table border="0" cellpadding="5" cellspacing="0" align="center" width="100%">
        <tr>
         <td valign="top" width="100"><?php 
		  if($_GET['page_name']=="index")
	       include("php/index.php");
		  elseif($_GET['page_name']=="")
	       include("php/index.php");
		  elseif($_GET['page_name']=="about_me")
	       include("php/about_me.php");
		  elseif($_GET['page_name']=="login")
	       include("php/login.php");
		  elseif($_GET['page_name']=="search")
	       include("php/search.php");
		  elseif($_GET['page_name']=="result_search")
	       include("php/result_search.php");
		  elseif($_GET['page_name']=="new_mahsolat")
	       include("php/new_mahsolat.php");
		  elseif($_GET['page_name']=="show_newm")
	       include("php/show_newm.php");
		 ?>
         </td>
        </tr>
	   </table>	  
	  </td>
      <!--tablighat-->
           <?php
			
			$link=mysql_connect("localhost","root","");
			
			if (!$link)
			die ("اشكال در ارتباط با پایگاه داده!");
			
			 mysql_select_db("zargar");
			 
			$query="SELECT * FROM `tablighat` ORDER BY `id` DESC LIMIT 0 , 10";
			$result=mysql_query("$query");
		   ?>
		<td width="110" valign="top">
			 <table border="1"  cellspacing="0" cellpadding="0" width="100%">
			 <tr><td bgcolor="#FFAE00" height="85" align="center">
			 <object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" 
codebase="http://download.macromedia.com 
/pub/shockwave/cabs/flash/swflash.cab#version=6,0,0,0#" 
width="90" height="100"> 
<param name="movie" 
value="pic/tiny.swf" /> 
<param name="quality" value="high" /> 
<param name="wmode" value="transparent"> 
<embed src="pic/tiny.swf" 
quality="high" pluginspage="http://www.macromedia.com/go/getflashplayer" 
wmode="opaque" type="application/x-shockwave-flash" 
width="100" height="100"> 
</embed> 
</object>
</td></tr>
<br />
<tr><td bgcolor="#ffe400" align="center">تبلیغات</td></tr>
			 <?php while($row=mysql_fetch_array($result)) {?><tr><td bordercolor="#000000" height="85" align="center" bgcolor="#ffffff"><a href="http://<?php echo $row['link']?>" target="_blank"><img src="<?php echo $row['pic']?>" width="120" height="150" border="0" alt="<?php echo $row['name']?>"/></a></td></tr><?php }?></table>
	   </td>
	</table>
   </td>
  </tr>
  <!--bottom-->
  <tr><td><br /><br /></td></tr>
  <tr>
   <td align="center" bgcolor="#FFE400" dir="rtl" colspan="3">
       <a href="index.php?page_name=index">صفحه اصلی</a>&nbsp;<font color="#000000">|</font>&nbsp;
       <a href="index.php?page_name=new_mahsolat">جدیدترین محصولات</a>&nbsp;<font color="#000000">|</font>&nbsp;
       <a href="index.php?page_name=search">جستجو</a>&nbsp;<font color="#000000">|</font>&nbsp;
       <a href="index.php?page_name=login">ورود</a>&nbsp;<font color="#000000">|</font>&nbsp;
       <a href="index.php?page_name=about_me">درباره ما</a>&nbsp;
    </td>
   </tr>
    <tr>
      <td bgcolor="#2C8366" align="center" colspan="3">
       <font color="#333333" size="1" face="Tahoma">&copy;ALI-Karimzadeh</font>
    </td>
   </tr>
</table>
</body>
</html>
