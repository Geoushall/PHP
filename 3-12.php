<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>赋值运算符的应用</title>
</head>

<body>
<?php  
    
	$a=10;
	$b=8;
	echo"\$a = ".$a."<br>";
	echo"\$b = ".$b."<br>";
	echo"\$a += \$b = ".($a += $b)."<br>";
	echo"\$a -= \$b = ".($a -= $b)."<br>";
	echo"\$a *= \$b = ".($a *= $b)."<br>";
	echo"\$a /= \$b = ".($a /= $b)."<br>";
	echo"\$a %= \$b = ".($a %= $b);

?>

</body>
</html>