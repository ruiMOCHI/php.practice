<!-- <?php
//session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>shop_cartin.php</title>
</head>
<body>
<?php
// try {
//     if(isset($_GET['procode'])) {
//         $pro_code = $_GET['procode'];

        // $dsn='mysql:dbname=php_practice;host=db;charset=utf8'; //コメントアウト？
        // $user='root';
        // $password='root';
        // $dbh=new PDO($dsn,$user,$password);
        // $dbh->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

        // $sql='SELECT name,price FROM mst_product WHERE code=?';
        // $stmt=$dbh->prepare($sql);
        // //$data[]=$pro_code;
        // $stmt->execute([$pro_code]); // パラメーターを直接渡す

        // $rec=$stmt->fetch(PDO::FETCH_ASSOC);

        // if ($rec !== false) {
        //     $pro_name=$rec['name'];
        //     $pro_price=$rec['price'];
        // } else {
        //     // エラーメッセージなど、適切な処理を行う
        //     echo "商品情報が取得できませんでした。";
        // }
        
        // $dbh=null;

//         if(isset($_SESSION['cart'])==true)
//         {
//             $cart=$_SESSION['cart'];  //現在のカート内容を$cartにコピーする。これが無いと商品追加ごとに今までの商品が消えてしまう。
//         }
//         $cart[]=$pro_code;  //カートに商品を追加
//         $_SESSION['cart']=$cart;  //$_SESSIONにカートを保管する

//     } else {
//         $pro_code = ''; // フォームが初めて表示される場合、$staff_code を空に設定
//         $pro_name = ''; // スタッフ名も空に初期化
//     }
// } catch(Exception $e) {
//     print'ただいま障害により大変ご迷惑をお掛けしております。';
//     exit();
// }
?>

カートに追加しました。<br />
<a href="shop_list.php">商品一覧に戻る</a>
<body>
</html> -->






<?php
session_start();

if(isset($_GET['procode'])) {
    $pro_code = $_GET['procode'];

    // 商品情報の取得
    $dsn='mysql:dbname=php_practice;host=db;charset=utf8';
    $user='root';
    $password='root';
    $dbh=new PDO($dsn,$user,$password);
    $dbh->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

    $sql='SELECT name,price FROM mst_product WHERE code=?';
    $stmt=$dbh->prepare($sql);
    $stmt->execute([$pro_code]);

    $rec=$stmt->fetch(PDO::FETCH_ASSOC);

    if ($rec !== false) {
        $pro_name = $rec['name'];
        $pro_price = $rec['price'];

        // カートに商品を追加
        if(isset($_SESSION['cart']) == true) {
            $cart = $_SESSION['cart'];
        }
        $cart[] = $pro_code;
        $_SESSION['cart'] = $cart;

        echo "カートに追加しました。<br />";
    } else {
        echo "商品情報が取得できませんでした。";
    }

    $dbh=null;
} else {
    $pro_code = ''; // フォームが初めて表示される場合、$pro_code を空に設定
    $pro_name = ''; // 商品名も空に初期化
}
?>

<a href="shop_list.php">商品一覧に戻る</a>
