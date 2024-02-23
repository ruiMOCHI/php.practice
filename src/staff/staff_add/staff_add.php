<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>staff_add.php</title>
</head>
<body>
    スタッフ追加<br />
    <br />
    <form action="staff_add_check.php" method="POST">
        スタッフ名を記入しください<br />
        <input type="text" name="name" style="width: 200px;"><br />
        パスワードを入力してください<br />
        <input type="password" name="pass" style="width: 100px"><br />
        パスワードをもう一度入力してください<br />
        <input type="password" name="pass2" style="width: 100px;"><br />
        <input type="button" onclick="history.back()" value="戻る">
        <input type="submit" value="OK">
    </form>
</body>
</html>