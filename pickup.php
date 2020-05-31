<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TODOLIST</title>
    <link rel="stylesheet" href="css/style.css">

</head>
<body>
    <h1>TODOLIST</h1>
    <?php
    require('connect.php');
    $id = $_REQUEST['id'];
    if (!is_numeric($id) || $id <= 0) {
        print ('1以上の数字で入力してください');
        print ('<br><br><br>');
        print ('<a href="index.php">戻る</a>');
        exit();
    }
    $list = $db->prepare('SELECT * FROM list WHERE id=?');
    $list->execute(array($id));
    $memo = $list->fetch();
    ?>
    <article>
        <h2><?php print ($memo['title']); ?></h2>
        <time><?php print ($memo['date']); ?></time><br>
        <p><?php print ($memo['content']); ?></p><br>
        <hr>
    </article>
    <a href="index.php">戻る</a>
    ／
    <a href="edit.php?id=<?php print ($memo["id"]) ?>">編集する</a>
    ／
    <a href="delete_do.php?id=<?php print ($memo['id']) ?>">削除する</a>
</body>
</html>
