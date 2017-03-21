<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>无标题文档</title>
</head>

<body>
<?php
    
	$arr=array(2,6,42,17,18);
	$max=array_search(max($arr),$arr);
	foreach($arr as $key=>$value)
	{
		if($value==$arr[$max])
	echo"最大数的键值是：".$key;
	}
?>
</body>
</html>