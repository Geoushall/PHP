<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>无标题文档</title>
</head>

<body>
<?php
    
	$arr_strings=array('one'=>'php','two'=>'java',);
	print_r($arr_strings);
	echo"<br>";
	echo $arr_strings['one']."<br/>";
	
	$arr_ints=array('php','java');
	print_r($arr_ints);
	echo"<br>";
	echo $arr_ints['0']."<br/>";
	
	$arr_keys=array(0=>'PHP入门与实践',1=>'Java入门与实践',1=>'VB入门与实践');//指定相同索引
	print_r($arr_keys);
?>

</body>
</html>