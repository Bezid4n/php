<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>
<?php
  $tell=$_POST['tell'];
  $fax=$_POST['fax'];
  $mobile=$_POST['mobile'];
  $email=$_POST['email'];
  $address=$_POST['address'];
    
  include("../db.php");

 $query="INSERT INTO `contact_me` ( `code` , `tell` , `fax` , `mobile` , `email` , `address`) 
						VALUES ('','$tell','$fax','$mobile','$email','$address')";
						
  if(mysqli_query($link,$query)){
  ?>
   <script language="JavaScript" type="text/JavaScript">
    alert("ارسال با موفقیت انجام شد");
    window.location="manager.php?page_name=contact_me"
   </script>
  <?php 
  }   ?>
<body>
</body>
</html>