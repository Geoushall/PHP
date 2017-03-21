<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>无标题文档</title>
</head>

<body>
<?php

    $a=array(1,2,3,4,5,6,7,8,9,0);
    foreach($a as $key=>$value)
	{
		if($value=="0")
		{
			echo"0的键名是：".$key;
		}
		else if($value==count($a))
		{
		    echo"Not Found";
		}}
?>
</body>
</html>