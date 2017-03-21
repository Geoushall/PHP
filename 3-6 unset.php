<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>无标题文档</title>
</head>

<body>
<?php
$age1=18;
$age1=&$age1;
$age2=20;
echo $age1;
echo"<br/>";
unset($age1);                //该语句取消变量$1的定义
echo $age1;                  //因$1没有定义，该语句将转
echo"<br/>";
echo $age2;
?>

</body>
</html>