<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    // for ($a = 5; $a <> 10; $a++) {
    //     echo $a . "<br>";
    // }
    $arry = ['HTML', 'CSS', 'BOOTSTRAP'];
    // print_r($arry);
    foreach ($arry as $key => $value) {
        echo $key;
        echo $value;
    }
    echo $arry[2];
    // $a = 0;
    // do {
    //     echo $a;
    //     $a++;
    // } while ($a >= 5)

    ?>
</body>

</html>