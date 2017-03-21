<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>无标题文档</title>
</head>

<body>
<?PHP
  $a=-100;
  $b=50;
  $c=30;
  echo"\$a=".$a.",";            //‘\’转义字符,相当于屏蔽$符号的作用        
  echo"\$b=".$b.",";
  echo"\$c=".$c."<p>";
  
  //四则和求模运算  
  echo"\$a + \$b = ".($a+$b)."<p>";         //(),a,b变量相加的值
  echo"\$a - \$b = ".($a-$b)."<p>";
  echo"\$a * \$b = ".($a*$b)."<p>";
  echo"\$a / \$b = ".($a/$b)."<p>";
  echo"\$a % \$c = ".($a%$c)."<p>";


?>


</body>
</html>