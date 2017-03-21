<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>创建数组</title>
</head>

<body>
<?php
$characters[]="humour";
$characters[]="optimism";
print_r($characters);
//当数组元素的“键”没有指定时，该元素的键是在已有元素最大整数“键”的基础上递增，没有整数“键”，则从0开始递增
?>
</body>
</html>