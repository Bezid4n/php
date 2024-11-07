<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title><?php
include("db.php");

 $code=$_GET['id'];

$query="SELECT * FROM galery WHERE code = $code";

$result=mysqli_query($link,$query);
$row=mysqli_fetch_array($result);
echo $row['title'];
?></title>
</head>

<body>
<img src="../<?php echo $row['pic'];?>"/>
</body>
</html>
