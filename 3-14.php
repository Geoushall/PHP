<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>逻辑运算符</title>
</head>

<body>
<?php
   
   $a=true;
   $b=true;
   $c=false;
 if($a or $b and $c)          // and>>or
   echo"true";
  else
   echo"false";
 
 echo"<br>";
 
 if($a||$b and $c)           // ||>>and
   echo"true";
  else
   echo"false";

?>

</body>
</html>