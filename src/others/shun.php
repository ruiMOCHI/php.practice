<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>shun.php</title>
</head>
<body>
    <?php

    $month=$_REQUEST['month']; //この場合、 formのmethodはpost,requestでもどちらでもいい

    $yasai[]='';
    $yasai[]='ブロッコリー';
    $yasai[]='カリフラワー';
    $yasai[]='レタス';
    $yasai[]='みつば';
    $yasai[]='アスパラガス';
    $yasai[]='セロリ';
    $yasai[]='ナス';
    $yasai[]='ピーマン';
    $yasai[]='オクラ';
    $yasai[]='サツマイモ';
    $yasai[]='大根';
    $yasai[]='ホウレンソウ';


    print $month;
    print '月は';
    print $yasai[$month];
    print 'が旬です';

    ?>
</body>
</html>