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
    // $list = $db->query('SELECT * FROM list ORDER BY id DESC');
    if (isset($_REQUEST['page']) && is_numeric($_REQUEST['page'])) {
        $page = $_REQUEST['page'];
    } else {
        $page = 1;
    }
    $start = 5 * ($page - 1);
    $memos = $db->prepare('SELECT * FROM list ORDER BY id DESC LIMIT ?, 5');
    $memos->bindParam(1, $start, PDO::PARAM_INT);
    $memos->execute();
    ?>
    <article>
        <?php while ($memo = $memos->fetch()): ?>
        <h2><a href="pickup.php?id=<?php print ($memo['id']) ?>"><?php print ($memo['title']); ?></a></h2>
        <time><?php print ($memo['input_at']); ?></time><br>
        <p><?php print (mb_substr($memo['content'], 0, 20)); ?></p><br>
        <hr>
        <?php endwhile ?>
    </article>
    <nav>
        <a href="input.html">新規作成</a>
        ｜
        <?php if ($page >= 2): ?>
        <a href="index.php?page=<?php print ($page - 1); ?>"><?php print ($page - 1); ?>ページ目へ</a>
        ｜
        <?php endif ?>
        <?php 
            $counts = $db->query('SELECT COUNT(*) as cnt FROM list');
            $count = $counts->fetch();
            $max_page = ceil($count['cnt'] / 5);
            if ($page < $max_page):
        ?>
        <a href="index.php?page=<?php print ($page + 1) ?>"><?php print ($page + 1) ?>ページ目</a>
        <?php endif ?>
    </nav>
</body>
<<<<<<< HEAD
</html>
=======
</html>
>>>>>>> origin/master
