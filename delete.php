<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<<<<<<< HEAD
    <title>削除します</title>
=======
    <title>削除</title>
>>>>>>> origin/master
    <link rel="stylesheet" href="css/style.css">

</head>
<body>
    <h1>TODOLIST</h1>
    <?php
    require('connect.php');
    $id = $_REQUEST['id'];
    if (isset($_REQUEST['id']) && is_numeric($_REQUEST['id'])) {
        $list = $db->prepare('SELECT * FROM list WHERE id=?');
        $list->execute(array($id));
        $memo = $list->fetch();    
    }
    ?>
    <article>
<<<<<<< HEAD
        <p>削除すると元には戻せません</p><br>
=======
        <p>削除すると元には戻せません。</p><br>
>>>>>>> origin/master
        <a href="delete_do.php?id=<?php print ($menu['id']) ?>">削除する</a>
    </article>
    <br>
        <a href="pickup.php?id=<?php print ($memo['id']) ?>">戻る</a>
</body>
<<<<<<< HEAD
</html>
=======
</html>
>>>>>>> origin/master
