<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>无标题文档</title>
</head>

<body>

<?php
    
	 $str="123.456abc";
	 $int=100;//声明变量
	 $boo=true;//声明变量
	 settype($str,"integer");
	 var_dump($str);
	 echo"<br>";
	 settype($int,"boolean");
	 var_dump($int);
	 echo"<br>";
	 settype($boo,"string");
	 var_dump($boo);
?>
</body>
</html>