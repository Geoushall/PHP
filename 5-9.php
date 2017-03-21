<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>foreach遍历</title>
</head>

<body>
<?php

    $name=array("1"=>"电脑","2"=>"Shirt","3"=>"Book","4"=>"Bag");
    $price=array("1"=>"5000￥","2"=>"500￥","3"=>"50￥","4"=>"4000￥");
    $counts=array("1"=>"1","2"=>"1","3"=>"2","4"=>"1");

echo'<table width="580" border="1" cellpadding="1" cellspacing="1">
    <tr>
	 <td width="145" align="center" bgcolor="#996655">商品名称</td>
	 <td width="145" align="center" bgcolor="#996655">价格</td>
	 <td width="145" align="center" bgcolor="#996655">数量</td>
	 <td width="145" align="center" bgcolor="#996655">金额</td>
</tr>';

foreach($name as $key=>$value){
	echo'<tr>
	 <td height="25" align="center" bgcolor="#FFFF11">'.$value.'</td>
	 <td align="center" bgcolor="#FFFF11">'.$price[$key].'</td>
	 <td align="center" bgcolor="#FFFF11">'.$counts[$key].'</td>
	 <td align="center" bgcolor="#FFFF11">'.$counts[$key]*$price[$key].'</td>
	 <tr>';}
 echo'</table>';
?>
</body>
</html>