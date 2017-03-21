<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>无标题文档</title>
</head>

<body>
<?php
define("MESSAGE","能看到一次");
echo MESSAGE;
echo Message;
define("Count","能看到多次",true);
echo "<br>";
echo COUNT;
echo "<br>";
echo COUNT;
echo "<br>";
echo constant("Count");
echo "<br>";
echo (defined("MESSAGE"));
?>
</body>
</html>