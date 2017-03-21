<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>foreach遍历</title>
</head>

<body>
<?php

    $name=array("1"=>"主板","2"=>"显卡","3"=>"硬盘");
    $price=array("1"=>"379￥","2"=>"799￥","3"=>"589￥");
    $place=array("1"=>"广东","2"=>"上海","3"=>"北京");
    $counts=array("1"=>"3","2"=>"2","3"=>"5");

echo'<table width="580" border="1" cellpadding="1" cellspacing="1">
    <tr>
	 <td width="145" align="center">商品名称</td>
	 <td width="145" align="center">单价</td>
	 <td width="145" align="center">产地</td>
	 <td width="145" align="center">数量</td>
	 <td width="145" align="center">金额</td>
</tr>';

foreach($name as $key=>$value){
	echo'<tr>
	 <td height="25" align="center" >'.$value.'</td>
	 <td align="center">'.$price[$key].'</td>
	 <td align="center">'.$place[$key].'</td>
	 <td align="center">'.$counts[$key].'</td>
	 <td align="center">'.$counts[$key]*$price[$key].'</td>
	 <tr>';}
 echo'</table>';

echo"小计：".

?>
</body>
</html>