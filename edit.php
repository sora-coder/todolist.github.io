<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>編集</title>
    <link rel="stylesheet" href="css/style.css">

</head>
<body>
    <h1>TODOLIST</h1>
    <?php
    require('connect.php');
<<<<<<< HEAD
    if (isset($_REQUEST['id']) && is_numeric($_REQUEST['id'])){
        $id = $_REQUEST['id'];
        $list = $db->prepare('SELECT * FROM list WHERE id=?');
        $list->execute(array($id));
        $memo = $list->fetch();
    }
    ?>
    <article>
        <form action="edit_do.php" method="post">
            <input type="hidden" name="id" value="<?php print($id); ?>">
            <input type="text" name="title" value="<?php print ($memo['title']); ?>"><br>
            <textarea name="content" cols="30" rows="10"><?php print ($memo['content']); ?></textarea><br>
            <button type="submit">編集する</button>
        </form>
    </article>
    <a href="pickup.php?id=<?php print ($memo['id']) ?>">戻る</a>
</body>
</html>
=======
    $new_edit_title = $db->prepare('UPDATE list SET title=? WHERE id=?');
    $new_edit_title->execute(array($_POST['title'], $_POST['id']));
    $new_edit_content = $db->prepare('UPDATE list SET content=? WHERE id=?');
    $new_edit_content->execute(array($_POST['content'], $_POST['id']));
    ?>
    <p>変更しました</p>
    <a href="index.php">戻る</a>
</body>
</html>
>>>>>>> origin/master
