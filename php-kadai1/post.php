
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>ご入力フォーム</title>
</head>

<body>
        <form action="write.php" method="post">
            <p>お名前: <input type="text" name="name"></p>
            <p>現住所: <input type="text" name="place"></p>
            <p>出身地: <input type="text" name="birthplace"></p>
            <input type="submit" value="送信">
        </form>
        <a href='read.php'>書き込み内容はこちら</a>
</body>

</html>
