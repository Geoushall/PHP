<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>传值赋值</title>
</head>

<body>
<?php
$color1=array("red"=>"red","green"=>"green","white"=>"white");
$color2=$color1;
$color2["blue"]="blue";//为colors2添加元素
$color2["red"]="#FF0000";
print_r($color1);
echo"<br/>";
print_r($color2);

?>

</body>
</html>