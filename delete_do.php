<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>削除</title>
    <link rel="stylesheet" href="css/style.css">

</head>
<body>
    <h1>TODOLIST</h1>
    <?php
    require('connect.php');
    if (isset($_REQUEST['id']) && is_numeric($_REQUEST['id'])) {
        $id = $_REQUEST['id'];
        $delete = $db->prepare('DELETE FROM list WHERE id=?');
        $delete->execute(array($id));
    }
    ?>
    <p>削除しました</p>
    <a href="index.php">戻る</a>
</body>
</html>