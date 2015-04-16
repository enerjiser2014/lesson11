<!DOCTYPE html>
<html>
<head lang="ru">
    <meta charset="UTF-8">
    <title>Новости</title>
</head>
<body>
<h1>Новости сайта</h1>
<?php
    foreach ($model->getAllRecords() as $article):?>
    <div class="article">
        <h3><a href="./index.php?id=<?php echo $article['id'];?>"><?php echo $article['title'] . ' ' . $article['date']; ?></a></h3>
        <?php echo $article['text']; ?>
    </div>
<?php
endforeach; ?>
<a href="./controllers/form_c.php">Добавить новость</a>
</body>
</html>