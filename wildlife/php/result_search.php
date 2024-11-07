<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
 <?php
 include("db.php");
  
  $search=$_POST['search'];
   
  if($search=="aml")
   include("search_animal.php");
  elseif($search=="typ")
   include("search_type.php");
  elseif($search=="njd")
   include("search_nejad.php");
  elseif($search=="amt")
   include("search_type_animal.php");
  elseif($search=="amn")
   include("search_nejad_animal.php");
  elseif($search=="tyn")
   include("search_nejad_type.php");
  elseif($search=="atn")
   include("search_nejad_type_animal.php");
  else{?>
   <script language="javascript" type="text/javascript">
   alert("لطفا جستجوی مورد نظر را انتخاب کنید");
  </script>
 <?php }?>
</body>
</html>
