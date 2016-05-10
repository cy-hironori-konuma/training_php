<?php
// 入力値を取得する

// DBに接続する
// IP:localhost, USER:root, PASSWORD:root, DATABASE:training
$connection = mysqli_connect('localhost', 'root', 'root', 'training');

// MYSQLクライアントの文字コードをUTF8にセットする
mysqli_set_charset($connection, 'utf8');

// 名前とコメントの両方が入力されているか判定

    // 入力があった場合はDBに登録する
    // 登録するためのSQLクエリを準備する
    // 掲示板テーブル（bbs）に名前（name）とコメント（comment）を追加する

    // SQLを実行してDBに登録する

// DBの掲示板テーブルを参照して投稿一覧を取得する
// 投稿一覧を取得するSQLを作成する
// 掲示板テーブル（bbs）から名前（name）とコメント（comment）をID（id）の降順で取得する
$query = 'SELECT name, comment FROM bbs ORDER BY id desc';

// SQLを実行して結果を配列形式で取得する
$result = mysqli_query($connection, $query);
$posts  = mysqli_fetch_all($result, MYSQLI_ASSOC);

// DB接続を閉じる
mysqli_close($connection);

?>

<!DOCTYPE HTML>
<html lang="ja-JP">
    <head>
        <meta charset="UTF-8">
        <title>演習3</title>
    </head>
    <body>
        <h1>演習3</h1>

        <form name="lesson" action="hint1.php" method="post">
            <p>
                <label for="input-name">名前</label>
                <input id="input-name" type="text" name="name" maxlength="50">
            </p>
            <p>
                <label for="input-comment">コメント</label>
                <input id="input-comment" type="text" name="comment" maxlength="50">
            </p>
            <input type="submit" name="submit" value="送信">
        </form>

        <?php if (!is_null($posts)) { ?>
        <ul>
            <?php foreach ($posts as $post) { ?>
            <li><?= $post['name'].' : '.$post['comment'] ?></li>
            <?php } ?>
        </ul>
        <?php } ?>
    </body>
</html>