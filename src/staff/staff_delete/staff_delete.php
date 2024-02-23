
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>staff_delete.php</title>
</head>
<body>
<?php
try {
    if(isset($_GET['staffcode'])) {
        $staff_code = $_GET['staffcode'];

        $dsn='mysql:dbname=php_practice;host=db;charset=utf8';
        $user='root';
        $password='root';
        $dbh=new PDO($dsn,$user,$password);
        $dbh->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

        $sql='SELECT name FROM mst_staff WHERE code=?';
        $stmt=$dbh->prepare($sql);
        $stmt->execute([$staff_code]); // パラメーターを直接渡す

        $rec=$stmt->fetch(PDO::FETCH_ASSOC);
        $staff_name=$rec['name'];

        $dbh=null;
    } else {
        $staff_code = ''; // フォームが初めて表示される場合、$staff_code を空に設定
        $staff_name = ''; // スタッフ名も空に初期化
    }
} catch(Exception $e) {
    print'ただいま障害により大変ご迷惑をお掛けしております。';
    exit();
}
?>

スタッフ削除<br />
<br />
スタッフ名<br />
<?php print $staff_name; ?>
<br />
このスタッフを削除してもよろしいでしょうか？<br />
<form method="post" action="staff_delete_done.php">
    <input type="hidden" name="code" value="<?php echo htmlspecialchars($staff_code, ENT_QUOTES, 'UTF-8'); ?>">
    <input type="button" onclick="history.back()" value="戻る">
    <input type="submit" value="ＯＫ">
</form>
<body>
</html>
