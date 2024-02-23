<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>shun.html</title>
</head>
<body>
    <?php
    require_once('./common.php');

    $seireki=$_POST['seireki'];

    $wareki=gengo($seireki);
    print $wareki;

    ?>
</body>
</html>