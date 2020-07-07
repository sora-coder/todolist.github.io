<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>新規作成</title>
    <link rel="stylesheet" href="css/style.css">

</head>
<body>
    <h1>TODOLIST</h1>
    <?php
    require('connect.php');
    // $count = $db->exec('INSERT INTO list SET title="' . $_POST['title'] . '", content="' . $_POST['content'] . '", date=NOW()');
        $new_input = $db->prepare('INSERT INTO list SET title=?, content=?, input_at=NOW()');
        $new_input->bindParam(1, $_POST['title']);
        $new_input->bindParam(2, $_POST['content']);
        $new_input->execute();
        echo '新規登録されました';
    ?>
    <nav>
        <a href="index.php">戻る</a>
    </nav>
</body>
</html>
