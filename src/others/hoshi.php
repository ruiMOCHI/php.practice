<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>hoshi.php</title>
</head>
<body>
    <?php

    $mbango=$_REQUEST['mbango']; //この場合、 formのmethodはpost,requestでもどちらでもいい

    $planet['M1'] = 'カニ星雲';
    $planet['M31'] = 'アンドロメダ大星雲';
    $planet['M42'] = 'オリオン大星雲';
    $planet['M45'] = 'すばる';
    $planet['M57'] = 'ドーナツ星雲';


    foreach($planet as $key => $val)  //配列名、キー取得、ヴァリュー取得
    {
        print $key.'は'.$val;
        print'<br />';
    }
    print 'あなたが選らんだ星は';
    print $planet[$mbango];

    ?>
</body>
</html>