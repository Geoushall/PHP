<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>二维数组遍历</title>
</head>

<body>
<?php

     $str=array(
	  "网络编程"=>array("PHP","C#","ASP"),
	  "历史"=>array("1"=>"春秋","2"=>"战国","3"=>"魏晋"),
	  "文学"=>array("散文","3"=>"小说","诗歌"),

);

    foreach($str as $key1=>$value1){                //循环读取二维数组
		 foreach($value1 as $key2=>$value2){
			 echo"\n";
			 echo $str[$key1][$key2];
			 echo"\n";
			 echo"$value2";     //输出数据
			 echo"<br>";}
			 
	}



?>



</body>
</html>