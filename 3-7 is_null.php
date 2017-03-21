<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>无标题文档</title>
</head>
<?PHP
var_dump(is_null($a));
echo"<br/>";

$b=null;
var_dump(is_null($b));
echo"<br/>";

$c=FALSE;
var_dump(is_null($c));
echo"<br/>";
unset($c);
var_dump(is_null($c));
echo"<br/>";

define("ABC",null);
$d=ABC;
var_dump(is_null("ABC"));


?>
<body>
</body>
</html>