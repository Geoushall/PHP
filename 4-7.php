<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>乘法口诀表</title>
</head>

<body>
<?php
   $i=1;$j=1;
    for($i=1;$i<=9;$i++){
		echo"<table border="1" cellpadding="0" cellspacing="0" bgcolor="#00FF00"
		echo"<tr>";
     for($j=1;$j<=$i;$j++){
        echo"$i*$j=".$i*$j;
     }
  echo"<br>";
 }
 echo"</tr>";
echo"</table>";
?>

</body>
</html>