<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>创建数组2</title>
</head>

<body>
<?php
    
	$interests[2]="music";
	$interests[5]="movie";
	$interests[1]="computer";
	$interests[]="software";//最大的索引号+1
	print_r($interests);
//将数组元素的“键”指定为某个整数
//按照向数组添加元素的顺序进行输出
?>

</body>
</html>