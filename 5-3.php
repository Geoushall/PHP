<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>无标题文档</title>
</head>

<body>
<?php
$colors=array("red"=>"red","green"=>"green","white"=>"white","blue"=>"blue");
$colors["black"]="black";
$colors["red"]="#FF0000";
print_r($colors);

echo"<br/>";

if(isset($colors["green"])){
	echo"I love green!";}
unset($colors["green"]);

if(!isset($colors["green"])){
	echo"I turned to dislike green!";}

echo"<br/>";
echo gettype($colors["blue"]);//使用gettype（）函数查看键为“blue”的数组元素的数据类型
?>


</body>
</html>