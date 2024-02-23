<?php

try
{

require_once('../../others/common.php');

$post=sanitize($_POST);
$pro_name=$post['name'];
$pro_price=$post['price'];

$dsn='mysql:dbname=php_practice;host=db;charset=utf8'; /* dbname,hostに注意*/
$user='root';
$password='root';
$dbh=new PDO($dsn,$user,$password);
$dbh->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

$sql='INSERT INTO mst_product (name, price) VALUES (?, ?)';
$stmt=$dbh->prepare($sql);
$data[]=$pro_name;
$data[]=$pro_price;
$stmt->execute($data);

$dbh=null;

print $pro_name;
print 'を追加しました。<br />';

}
catch (Exception $e)
{
	print 'ただいま障害により大変ご迷惑をお掛けしております。';
	exit();
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>pro_add_done.php</title>
</head>
<body>
<a href="../pro_list.php"> 戻る</a>
</body>
</html>
