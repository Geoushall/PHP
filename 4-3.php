<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>无标题文档</title>
</head>

<body>
<?php  
   
     setlocale(LC_TIME,"chs");
	 $weekday=date("D");
	 switch($weekday){
	   case"MON":
	     echo"今天是$weekday,新的一周开始了！";
		 break;
	   case"TUE":
	     echo"今天是$weekday,新的一周开始了！";
		 break;
	   case"WED":
	     echo"今天是$weekday,新的一周开始了！";
		 break;	 
	   case"THU":
	     echo"今天是$weekday,新的一周开始了！";
		 break;
	   case"FRI":
	     echo"今天是$weekday,新的一周开始了！";
		 break;		 
	   case"SAT":
	     echo"今天是$weekday,新的一周开始了！";
		 break;		
		 DEFAULT:
		 echo"!!!" ;
	   }	 
?>

</body>
</html>
