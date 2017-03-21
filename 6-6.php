<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>数组排序</title>
</head>

<body>
<?php
    
	function BubbleSort($str){
        for ($i=0;$i<count($str);$i++)
       {
          for ($j=count($str)-2;$j>=$i;$j–)
         {
            if($str[$j+1]<$str[$j])
             {
                $tmp = $str[$j+1]; 

                $str[$j+1]=$str[$j];
                
				$str[$j]=$tmp;} 
              } 
         }
    
	return $str;
       }
    $str = array("2","5","101","12187","1");
    print_r(BubbleSort($str));
?>
</body>
</html>