<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>
<script language="javascript" type="text/javascript">
function check_form()
{
	if(document.getElementById('name_karbari').value=="")
	{
		alert("نام کاربری را وارد کنید");
		document.getElementById('name_karbari').focus();
		return false;
	}

	if(document.getElementById('passw').value=="")
	{
		alert("رمز عبور را وارد کنید");
		document.getElementById('passw').focus();
		return false;
	}
	if(document.getElementById('rpassw').value=="")
	{
		alert("تکرار رمز را وارد کنید");
		document.getElementById('rpassw').focus();
		return false;
	}
	
	if(document.getElementById('rpassw').value!=document.getElementById('passw').value)
	{
		alert("رمز ورود با تکرار همخوانی ندارد! دوباره سعی کنید");
		document.getElementById('rpassw').select();
		return false;
	}
	
	if(document.getElementById('emailp').value=="")
	{
		alert("پست الکترونیکی را وارد کنید");
		document.getElementById('emailp').focus();
		return false;
	}
return true;
}
</script>
<body>
 </script>
 <form action="php/save_sabt_nam.php" method="post" onSubmit="javascript:return check_form();">
    <table border="0" width="100%" cellspacing="0" cellpadding="0">
	  <tr>
	   <td align="center" colspan="2">
		<img src="pic/tbl/sabt.jpg" width="100%" height="50">
       </td>
	  </tr>
      <tr>
	   <td align="center" colspan="2">
		<font face="Tahoma, Geneva, sans-serif" color="#FF0000" size="2">پر کردن فیلدهای ستاره دار الزامی است</font>
        <p></p>
       </td>
	  </tr>
	  <tr>
	   <td width="60%" align="right" dir="rtl"><input name="name" type="text" /></td>
	   <td width="40%" align="right" dir="rtl">
	    <font face="Tahoma" size="2" >نام :</font></td>
	  </tr>
	  <tr>
	   <td  width="60%" align="right" dir="rtl"><input name="family" type="text" />	   </td>
	   <td  width="40%" align="right" dir="rtl">
	    <font face="Tahoma" size="2" >نام خانوادگی :</font></td>
	  </tr>
	  <tr>
	   <td  width="60%" align="right" >
		 <font face="Tahoma" size="2"  dir="rtl">
		  <input type="radio" name="sex" value="1"/>مرد</font>
		 <font face="Tahoma" size="2"  dir="rtl">
		  <input type="radio" name="sex" value="0" />زن</font>	   </td>
	   <td  width="40%" align="right" dir="rtl">
	    <font face="Tahoma" size="2" >جنسیت :</font></td>
	  </tr>
	  <tr>
	   <td  width="60%" align="right">
		 <select name="year">
		   <option>1360</option>
		   <option>1361</option>
		   <option>1362</option>
		   <option>1363</option>
		   <option>1364</option>
		   <option>1365</option>
		   <option>1366</option>
		   <option>1367</option>
		   <option>1368</option>
		   <option>1369</option>
		   <option>1370</option>
		 </select>
		 <select name="moth">
		   <option>1</option>
		   <option>2</option>
		   <option>3</option>
		   <option>4</option>
		   <option>5</option>
		   <option>6</option>
		   <option>7</option>
		   <option>8</option>
		   <option>9</option>
		   <option>10</option>
		   <option>11</option>
		   <option>12</option>
		 </select>
		 <select name="day">
           <option>1</option>
           <option>2</option>
           <option>3</option>
           <option>4</option>
           <option>5</option>
           <option>6</option>
           <option>7</option>
           <option>8</option>
           <option>9</option>
           <option>10</option>
           <option>11</option>
           <option>12</option>
           <option>13</option>
           <option>14</option>
           <option>15</option>
           <option>16</option>
           <option>17</option>
           <option>18</option>
           <option>19</option>
           <option>20</option>
           <option>21</option>
           <option>22</option>
           <option>23</option>
           <option>24</option>
           <option>25</option>
           <option>26</option>
           <option>27</option>
           <option>28</option>
           <option>29</option>
           <option>30</option>
           <option>31</option>
                  </select></td>
	   <td  width="40%" align="right" dir="rtl">
	    <font face="Tahoma" size="2" >تاریخ تولد :</font></td>
	  </tr>
      <tr>
	   <td  width="60%" align="right">
	   <input name="name_karbari" type="text" /></td>
	   <td  width="40%" align="right" dir="rtl">
	    <font face="Tahoma" size="2" >نام کاربری :</font><font color="#FF0000">*</font></td>
	  </tr>
	  <tr>
	   <td  width="60%" align="right"><input name="passw" type="password"/>       </td>
	   <td  width="40%" align="right" dir="rtl">
	    <font face="Tahoma" size="2" >رمز ورود :</font><font color="#FF0000">*</font></td>
	  </tr>
	  <tr>
	   <td  width="60%" align="right"><input name="rpassw"type="password"/>       </td>
	   <td  width="40%" align="right" dir="rtl">
	    <font face="Tahoma" size="2" >تکرار رمز ورود :</font><font color="#FF0000">*</font></td>
	  </tr>
	  <tr>
	   <td  width="60%" align="right">
	    <input type="text" name="emailp" size="40%"/>	
	   </td>
	   <td  width="40%" align="right" dir="rtl">
	    <font face="Tahoma" size="2" >پست الکترونیکی :</font><font color="#FF0000">*</font></td>
	  </tr>
	  <tr>
	   <td  width="60%" align="right">
	    <textarea name="address" cols="40%" rows="3%" dir="rtl" lang="fa"></textarea></td>
	   <td  width="40%" align="right" dir="rtl">
	    <font face="Tahoma" size="2" >آدرس :</font></td>
	  </tr>
      <tr>
       <td align="center">
	    <input type="submit" value="ارسال" />
	   </td>
      </tr>
    </table>
</form>
</body>
</html>