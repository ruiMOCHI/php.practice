<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>pro_add.php</title>
</head>
<body>
    商品追加<br />
    <br />
    <form action="pro_add_check.php" method="POST">
        商品名を記入しください<br />
        <input type="text" name="name" style="width: 200px;"><br />
        価格を入力してください<br />
        <input type="text" name="price" style="width: 50px"><br />
        <input type="button" onclick="history.back()" value="戻る">
        <input type="submit" value="OK">
    </form>
</body>
</html>