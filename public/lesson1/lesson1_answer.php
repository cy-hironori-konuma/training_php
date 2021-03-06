<!--
演習1
問題 : form要素を完成させて、名前とコメントをPOSTメソッドで送信すること
　　   名前とコメントが両方入力された場合、p要素に指定された形式で受け取った名前とコメントを表示させること
時間 : 10~15分
ファイル : lesson1.html
-->
<?php
$name    = isset($_POST['name']) ? $_POST['name'] : '';
$comment = isset($_POST['comment']) ? $_POST['comment'] : '';
?>

<!DOCTYPE HTML>
<html lang="ja-JP">
    <head>
        <meta charset="UTF-8">
        <title>演習1</title>
    </head>
    <body>
        <h1>演習1</h1>

        <!-- <form name="lesson" action="lesson1.php" method="post"> -->
        <form action="lesson1_answer.php" method="post">
            名前 : <input type="text" name="name">
            コメント : <input type="text" name="comment">
            <input type="submit" name="submit" value="送信">
        </form>

        <?php if ($name !== '' && $comment !== '') { ?>
        <p><?php echo $name; ?> : <?php echo $comment; ?></p>
        <?php } ?>
    </body>
</html>