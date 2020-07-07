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
    $new_edit_title = $db->prepare('UPDATE list SET title=? WHERE id=?');
    $new_edit_title->execute(array($_POST['title'], $_POST['id']));
    $new_edit_content = $db->prepare('UPDATE list SET content=? WHERE id=?');
    $new_edit_content->execute(array($_POST['content'], $_POST['id']));
    ?>
    <p>変更しました</p>
    <a href="index.php">戻る</a>
</body>
<<<<<<< HEAD
</html>
=======
</html>
>>>>>>> origin/master
