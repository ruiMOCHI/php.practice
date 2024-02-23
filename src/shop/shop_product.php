<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>shop_product.php</title>
</head>
<body>
<?php
try {
    if(isset($_GET['procode'])) {
        $pro_code = $_GET['procode'];

        $dsn='mysql:dbname=php_practice;host=db;charset=utf8';
        $user='root';
        $password='root';
        $dbh=new PDO($dsn,$user,$password);
        $dbh->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

        $sql='SELECT name,price FROM mst_product WHERE code=?';
        $stmt=$dbh->prepare($sql);
        //$data[]=$pro_code;
        $stmt->execute([$pro_code]); // パラメーターを直接渡す

        $rec=$stmt->fetch(PDO::FETCH_ASSOC);
        $pro_name=$rec['name'];
        $pro_price=$rec['price'];

        $dbh=null;
    } else {
        $pro_code = ''; // フォームが初めて表示される場合、$staff_code を空に設定
        $pro_name = ''; // スタッフ名も空に初期化
    }
} catch(Exception $e) {
    print'ただいま障害により大変ご迷惑をお掛けしております。';
    exit();
}
?>

商品情報参照<br />
<br />
商品名<br />
<?php print $pro_name; ?>
<br />
価格<br />
<?php print $pro_price; ?>円
<br />
<form>
    <input type="button" onclick="history.back()" value="戻る">
</form>
<?php
print '<a href="shop_cartin.php?procode='.$pro_code.'">カートに入れる</a><br />';
?>
<body>
</html>
