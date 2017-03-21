<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>无标题文档</title>
</head>

<body>
<?php                              //变量的赋值方式
$name="mingri";
$number=30;
echo $name;
echo $number;   //直接赋值

echo "<br>";


$str1="PHP编程词典";
$str2=$str1;
$str1="我喜欢学PHP";
echo $str2;     //传值赋值

echo "<br>";

$str="学习PHP很轻松";
$str3=&$str;
$str="我要大声告诉你:$str";
echo $str3;
echo"<p>";
echo $str;

?>
</body>
</html>