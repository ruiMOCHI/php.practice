<?php

require_once('../../others/common.php');

$post=sanitize($_POST);
$pro_name=$post['name'];
$pro_price=$post['price'];

if($pro_name=='')
{
	print '商品名が入力されていません。<br />';
}
else
{
	print '商品名：';
	print $pro_name;
	print '<br />';
}

if(preg_match('/^[a-zA-Z0-9]+$/', $pro_price)==0)
{
	print '価格をきちんと入力してください。<br />';
} else {
    print '価格';
	print $pro_price;
	print '円<br />';
}

if($pro_name=='' || preg_match('/^[a-zA-Z0-9]+$/', $pro_price)==0)
{
	print '<form>';
	print '<input type="button" onclick="history.back()" value="戻る">';
	print '</form>';
}
else
{
    print '上記の商品を追加します。<br />';
	print '<form method="post" action="pro_add_done.php">';
	print '<input type="hidden" name="name" value="'.$pro_name.'">';
	print '<input type="hidden" name="price" value="'.$pro_price.'">';
	print '<br />';
	print '<input type="button" onclick="history.back()" value="戻る">';
	print '<input type="submit" value="ＯＫ">';
	print '</form>';
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>pro_add_check.php</title>
</head>
<body>
    
</body>
</html>