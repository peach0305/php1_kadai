
<?php
$name = $_POST['name'];
$place = $_POST['place'];
$birthPlace = $_POST['birthPlace'];

// ファイルに書き込むデータ
$date = date('Y/m/d H:i:s');
$str = $date . $place . $birthPlace;

// ファイルの用意
$file = fopen('./data/data.txt', 'a');

// 書き込み
fwrite($file, $str . "\n");

// ファイルをクローズ
fclose($file);
?>


<html>

<head>
    <meta charset="utf-8">
    <title>File書き込み</title>
</head>

<body>

    <h1>書き込みしました。</h1>
    <h2>./data/data.txt を確認しましょう！</h2>

    <ul>
        <li><a href="read.php">確認する</a></li>
        <li><a href="input.php">戻る</a></li>
    </ul>
</body>

</html>
