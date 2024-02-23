<?php
session_start();

$max = 0; // $max を初期化
try {
    if(isset($_SESSION['cart'])) {
        $cart = $_SESSION['cart'];
        
        $max = count($cart);

        $dsn='mysql:dbname=php_practice;host=db;charset=utf8';
        $user='root';
        $password='root';
        $dbh=new PDO($dsn,$user,$password);
        $dbh->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
        
        // カートの中身を表示
        foreach($cart as $key => $val) {
            $sql='SELECT code,name,price FROM mst_product WHERE code=?';
            $stmt=$dbh->prepare($sql);
            $stmt->execute([$val]);

            $rec=$stmt->fetch(PDO::FETCH_ASSOC);

            if ($rec && is_array($rec)) {
                $pro_name = $rec['name'];
                $pro_price = $rec['price'];
                echo $pro_name . "：" . $pro_price . "円<br />";
            } //else {
            //     // データが取得できなかった場合の処理
            // }
            
        }
        $dbh=null;
    } else {
        echo "カートに商品がありません。";
    }
} catch(Exception $e) {
    print 'ただいま障害により大変ご迷惑をお掛けしております。';
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>shop_cartlook.php</title>
</head>


<body>
<a href="shop_list.php">商品一覧に戻る</a>
</body>

</html>