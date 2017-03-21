<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>array()创建二维数组</title>
</head>

<body>
<?php
    
	$str=array(
	 "PHP图书"=>array("PHP1","PHP2","PHP3"),
	 "JAVA图书"=>array("a"=>"JAVA1","b"=>"JAVA2"),
	 "ASP图书"=>array("ASP1",2=>"ASP2","ASP3"),
	 
	 );
    print_r($str);



?>
</body>
</html>