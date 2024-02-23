<?php

try
{

require_once('../../others/common.php');

$post=sanitize($_POST);
$staff_name=$post['name'];
$staff_pass=$post['pass'];


$dsn='mysql:dbname=php_practice;host=db;charset=utf8'; /* dbname,hostに注意*/
$user='root';
$password='root';
$dbh=new PDO($dsn,$user,$password);
$dbh->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

$sql='INSERT INTO mst_staff (name, password) VALUES (?, ?)';
$stmt=$dbh->prepare($sql);
$data[]=$staff_name;
$data[]=$staff_pass;
$stmt->execute($data);

$dbh=null;

print $staff_name;
print 'さんを追加しました。<br />';

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
    <title>staff_add_done.php</title>
</head>
<body>
<a href="../staff_list.php"> 戻る</a>
</body>
</html>
